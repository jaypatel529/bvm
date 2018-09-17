<?php 
	include("conn.php");
	$sid=$_REQUEST['sid'];
	//echo $fid;
	$q1 = "delete from student_mst where s_id='$sid'";
	$e1 = $conn->query($q1);
	if($e1)
	{
		header('location:stud_details.php');
	}
?>