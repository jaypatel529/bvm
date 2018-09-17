<?php
	include("conn.php");
	if($_REQUEST['tn']=="student"){

		$v1=$_REQUEST['v1'];
		$v2=$_REQUEST['v2'];
		$v3=$_REQUEST['v3'];
		$v4=$_REQUEST['v4'];
		$v5=$_REQUEST['v5'];
		$v6=$_REQUEST['v6'];
		$v7=$_REQUEST['v7'];
		$v8=$_REQUEST['v8'];
		$v9=$_REQUEST['v9'];
		$s_id=$_REQUEST['s_id'];
		$q1="update student_mst set s_name='$v1',s_add='$v2',s_no='$v3',perent_no='$v4',gender='$v5',email='$v6',stud_id='$v7',bg='$v8',dob='$v9' where s_id='$s_id'";
		$e1=$conn->query($q1);
	}
	if($_REQUEST['tn']=="faculty"){

		$v1=$_REQUEST['v1'];
		$v2=$_REQUEST['v2'];
		$v3=$_REQUEST['v3'];
		$f_id=$_REQUEST['f_id'];
		$q1="update faculty_mst set fname='$v1',email='$v2',fac_id='$v3' where f_id='$f_id'";
		$e1=$conn->query($q1);
	}
?>