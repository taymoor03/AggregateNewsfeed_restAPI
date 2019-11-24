<?php
include 'DB/connect.php';

		
	$query = $conn->query ("DELETE FROM feeds WHERE pubDate < NOW() - INTERVAL 30 DAY;");
		
$query = $conn->query("SELECT * FROM feed_list WHERE cron_file = 1 AND cron_date <= NOW() - INTERVAL 10 MINUTE");
		
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
				$log_date = date('Y-m-d',strtotime(trim($log_date)));
				$guide = $entry -> guid[0];
				$author = $entry -> author[0];

				// $str_time = abs(strtotime($log_date) - strtotime($pubDate));
				// $days = $str_time/60/60/24;
				// echo $days;

				//escaping 
				$title = $conn -> real_escape_string($title);
				$link =$conn -> real_escape_string($link);
				$desc = $conn -> real_escape_string($desc);
				$guide = $conn -> real_escape_string($link);

				
				$sql = $conn->query("INSERT IGNORE into feeds(feed_id,source,title,description,pubDate,author,link,guid,log_date) values('$feed_id','$feed_name','$title','$desc','$pubDate','$author','$link','$guide',now())");
				 $sql = $conn->query("UPDATE feed_list set cron_date = now() ");
				
				
			 	$x++;
			}
			
		}
?>


