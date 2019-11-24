
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
	    <!-- end of navbar -->		    
		</div>
		<div class="row">
		    <div class="col-md-12 text-center" style="margin-top:50px">
		        <h4>News feeds from different sources</h4>
		        <hr>
		    </div>
				<div class="col-md-4 ">
				   <h4>Show/Hide Content</h4>
				   </br>
					<?php
					   include 'DB/connect.php';
					   $query = $conn->query("SELECT * FROM feed_list");
					   if($query->num_rows > 0){
					       while($row1 = $query->fetch_assoc()){
					       	$feed = $row1['feed_id'];
					           ?>
					           <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="<?php echo $feed?>">
                                  <label class="form-check-label" for="">
                                    <?php echo $row1['feed_name'] ?>
                                  </label>
                                  <p>
                                  	<a href="<?php echo $row1['feed_url'] ?>"><?php echo $row1['feed_url'] ?></a>
                                  </p>
                                      
                                   <label class="form-check-label" for=""> <span style="color:darkred">News Title:</span>
                                    <?php echo $row1['feed_title'] ?>
                                  </label>
                                  </br>
                                  <label class="form-check-label" for=""> <span style="color:darkred">Last Updated Date:</span>
                                    <?php echo $row1['cron_date'] ?> 
                                  </label>
                                 <hr>
                                </div>
                                
                                </br>
					           <?php
					       }
					   }
					?>
				
				</div>
				<div class="col-md-8">
			<?php 
				include 'DB/connect.php';

				$sql = $conn->query("SELECT * FROM feeds order by pubDate ASC");
				if($sql->num_rows > 0){
					
					while($rows = $sql->fetch_assoc()){
						$divid = $rows['feed_id'];
						// $id = $rows['id'];
						// for($i = 0; $i < $id; $i++){
						// 	$sql = $conn->query("SELECT * FROM feed_list where feed_id = $id");
						// 	while($des =  $sql->fetch_assoc()){

						// 	}
								
						// }
						
						?>

							<div class="col-md-10 offset-md-1  mt-4 <?php echo $divid; ?>" value="<?php echo $divid; ?>">
								<h2><a href="<?php echo $rows['link']  ?>" style="color:#50a3b8"><?php echo $rows['title'] ?></a></h2>
								<div><?php echo "".$rows['description']."" ?></div>
								<div class="row mt-3">
									<div class="col-md-6">
										<span style="color:#006400"> <b>Published Date </b></span><br>
										<span><?php echo $rows['pubDate']?></span>
									</div>
									<div class="col-md-6">
										<span style="color:#006400"> <b>Post date</b></span><br>
										<span><?php echo $rows['log_date']?></span>
									</div>
								</div>
								<h6 style="">[source]:&nbsp<span style="color:red; text-transform: uppercase;"><?php echo $rows['source'] ?></span></h6>
								<h6><i><?php echo $rows['author'] ?></i></h6>
								<hr>
							</div>

							
						<?php
					}
				}
			?>
			</div>
		</div>
	</div>


	<!-- scripts -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<!-- <script type="text/javascript">
	    $(function () {
	        $(".<?php echo $feed?>").click(function () {
	            if ($(this).is(":checked")) {
	                $(".<?php echo $divid?>").hide();
	            } else {
	                $("." +"<?php echo $divid?>").show();
	            }
	        });
	    });
	</script> -->

	<script type="text/javascript">
$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        var inputValue = $(this).attr("value");
        $("." + inputValue).toggle();
    });
});
	</script>						
</body>
</html>