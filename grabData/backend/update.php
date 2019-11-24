

<?php
$con=mysqli_connect("localhost","mussafit_admin","Login@123456789","mussafit_feeds");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 


mysqli_query($con, "UPDATE feed_list set cron_date = now() ");
mysqli_query($con, "SELECT * FROM feed_list WHERE cron_file = 1 AND cron_date <= NOW() - INTERVAL 10 MINUTE");


mysqli_close($con);
?>