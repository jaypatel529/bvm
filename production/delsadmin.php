<?php 
	include("conn.php");
	$sid=$_REQUEST['sid'];
	$q1 = "delete from sub_admin where sadmin_id='$sid'";
	$e1 = $conn->query($q1);
	if($e1)
	{
		header('location:sadmin_data.php');
	}
?>