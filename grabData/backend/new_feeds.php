

<!DOCTYPE html>
<html>
<head>
	<title>rss feeds</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
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
	   <!-- <ul style="float:right; list-style: none; margin-right: 50px">
	    	<li><a href="logout" style="color:white">Logout</a></li>
	    </ul> -->
	</nav>
	</div>
	<div class="row">
		    <div class="col-md-12 text-center" style="margin-top:55px">
		
		<h4 align="center" class="h4 mt-5">New News Feed</h4>
		<hr>
		<div class="row">
			<div class="col-md-6 col-md-2 mt-5 text-center">
				
				<form method="post" action="new.php" class="mt-5" autocomplete = 'off'>
					<div class="form-group row">
						<label class="col-md-3">Feed Name</label>
						<div class="col-md-8"><input type="text" name="name" class="form-control" required></div>
					</div>
					<div class="form-group row">
						<label class="col-md-3">Feed Title</label>
						<div class="col-md-8"><input type="text" name="title" class="form-control" required></div>
					</div>
					<div class="form-group row">
						<label class="col-md-3">Feed Url</label>
						<div class="col-md-8"><input type="text" name="url" class="form-control" required></div>
					</div>
					<div class="form-group row">
						<label class="col-md-3">Location</label>
						<div class="col-md-8"><input type="text" name="location" class="form-control" required></div>
					</div>
					<div class="form-group row">
						<label class="col-md-3">Cron</label>
						<select class="form-control col-md-3" name="cron_file">
							<option value="1"> 1</option> 
						</select>
					</div>
					<div class="form-group row">
						<label class="col-md-3"></label>
						<div class="col-md-4"><input type="submit" name="submit" class="btn btn-info btn-block"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>