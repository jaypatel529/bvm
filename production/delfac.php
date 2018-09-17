<?php 
	include("conn.php");
	$fid=$_REQUEST['fid'];
	$q1 = "delete from faculty_mst where f_id='$fid'";
	$e1 = $conn->query($q1);
	if($e1)
	{
		header('location:fac_details.php');
	}
?>