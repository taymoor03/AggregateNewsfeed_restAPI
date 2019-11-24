<?php
include '../DB/connect.php';
$id = $_GET['id'];
$sql = $conn-> query("DELETE FROM feed_list WHERE feed_id = '$id'");
$sql1 = $conn-> query("DELETE FROM feeds WHERE feed_id = '$id'");
if($sql1){
	header('location:../backend/feed_lists.php');

}