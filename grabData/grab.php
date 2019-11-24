
<?php
include 'DB/connect.php';
$success="";
$error = array();
if(isset($_POST['submit'])){
	

		$query = $conn->query("SELECT * FROM feed_list WHERE cron_file = 1 ORDER BY cron_date ASC limit 1 ");
		
		while($row = $query->fetch_assoc()){
			$feed_id = $row['feed_id'];
			$feed_name = $row['feed_name'];
			$feed_title = $row['feed_title'];
			$feed_url = $row['feed_url'];
			$location = $row['location'];
			$cron_file = $row['cron_file'];
			$cron_date = $row['cron_date'];
		}

		mysqli_free_result($query);
		$url = "$feed_url";

		$data = simplexml_load_file($url);

		$limit = 5;
		$x = 1;

		foreach($data->channel->item as $entry)
		{	
			if($x <= $limit){
				$title = $entry -> title[0];
				$link = htmlspecialchars_decode($entry -> link[0]);
				$desc = $entry -> description[0];
				$pub_date= explode("-",$entry -> pubDate);
				$pubDate = date('Y-m-d',strtotime(trim($pub_date[0])));
				$log_date = date('Y-m-d');
				$guide = $entry -> guid[0];
				$author = $entry -> author[0];
				$str_time = abs(strtotime($createDate) - strtotime($pubDate));
				$days = $str_time/60/60/24;

				//escaping 
				$title = $conn -> real_escape_string($title);
				$link =$conn -> real_escape_string($link);
				$desc = $conn -> real_escape_string($desc);
				$guide = $conn -> real_escape_string($link);

				
				$sql = $conn->query("INSERT IGNORE into feeds(title,description,pubDate,author,link,guid,log_date) values('$title','$desc','$pubDate','$author','$link','$guide','$log_date')");
				 $sql = $conn->query("UPDATE feed_list set cron_date = '$log_date' WHERE feed_id = '$feed_id' ");
				
				
			 	$x++;
			}
	
	}

	
	

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>rss feeds</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php 
		foreach ($error as $key) {
			echo $key;
		}
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3 mt-5 text-center">
				<a class="mt-5 new mb-5" href="<?php echo $_SERVER["PHP_SELF"]?>">Input new Feed</a>
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" class="mt-5">
					<div class="row">
						<div class="col-md-8"><input type="text" name="url" class="form-control"></div>
						<div class="col-md-4"><input type="submit" name="submit" class="form-control btn btn-info btn-block"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>
