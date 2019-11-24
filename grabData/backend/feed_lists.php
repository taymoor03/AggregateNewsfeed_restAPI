<?php include '../cron.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>rss feeds</title>
		<meta http-equiv="refresh" content="500">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<!-- navbar -->
		<div class="row">
    	    <nav class="navbar navbar-expand-lg navbar-light bg-info container" style="position:fixed;z-index:1">
	  <a class="navbar-brand" href="#"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	     <a class="nav-item nav-link active" href="https://dynamictechsolution.com/grabData/">Home <span class="sr-only">(current)</span></a> 
	       <a class="nav-item nav-link" href="https://dynamictechsolution.com/grabData/backend/feed_lists.php" >Providers</a>
	      <a class="nav-item nav-link" href="https://dynamictechsolution.com/grabData/backend/new_feeds.php" >Add Feeds</a>
	    </div>
	</div>
</nav>
</div>
<div class="row">
		    <div class="col-md-12 text-center" style="margin-top:50px">
	<h4 align="center">All Feeds List</h4>
		<hr>
	
</div>
<input type="button" class="update" value="Update Feeds" onclick=" relocate_home()">

<script>
function relocate_home()
{
     location.href = "https://dynamictechsolution.com/grabData/backend/update.php";
} 
</script>

	
	<div class="col-md-12 mt-3">
		
		<table class="table table-bordered table-striped">
		  <thead class="table-secondary">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Feed Name</th>
		      <th scope="col">Feed Title</th>
		      <th scope="col">Feed url</th>
		       <th scope="col">Location</th>
		       <th scope="col">Cron file</th>
		         <th scope="col">Date</th>
		         <th>Action</th>
		    </tr>
		  </thead>
		  <tbody>
		 <?php 
		 include '../DB/connect.php';
		 $sql = $conn->query("SELECT * FROM feed_list");
		 if($sql->num_rows > 0){
		 while($rows = $sql->fetch_assoc()){
		 ?>
		 	<tr>
		 		<td><?php echo $rows['feed_id'] ?></td>
		 		<td><?php echo $rows['feed_name'] ?></td>
		 		<td><?php echo $rows['feed_title'] ?></td>
		 		<td><?php echo $rows['feed_url'] ?></td>
		 		<td><?php echo $rows['location'] ?></td>
		 		<td><?php echo $rows['cron_file'] ?></td>
		 		<td><?php echo $rows['cron_date'] ?></td>
		 		<td><a href="../controller/delete.php?id=<?php echo  $rows['feed_id']  ?>" class="btn btn-danger">Delete</a></td>
		 	</tr>
		 <?php
		 }
		}

		 ?>
		  
		</table>
	</div>
</div>

</body>
</html>
