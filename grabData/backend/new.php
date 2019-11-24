<?php
	if(isset($_POST['submit'])){
		include '../DB/connect.php';
		$name = $_POST['name'];
		$title = $_POST['title'];
		$url = $_POST['url'];
		$location = $_POST['location'];
		$cron = $_POST['cron_file'];
		
// 		if(empty($name) || empty($title) || empty($url) || empty($cron)){
		    
// 		}

		$sql = $conn->query("INSERT INTO feed_list(feed_name,feed_title,feed_url, location, cron_file,cron_date) VALUES('$name','$title','$url','$location','$cron',now())");

	}
	
	include "process.php";
	
?>


<center>
	<div style="width: 50%; margin:auto">
		<h4><b>new feed list added</b></h4>
		<h5><a href="feed_lists.php">Click here </a> to go back</h5>
		<br>
		<p>
			Click the button below to populate 10 feeds
		</p>
		<form action="" method="post">
			<input type="text" name="url" value="<?php echo $url ?>">
			<button type="submit" class="btn btn-primary" name="post">populate</button>
		</form> 
	</div>
	
</center>