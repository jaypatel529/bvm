<?php
	session_start();
	unset($_SESSION['utype']);
	unset($_SESSION['id']);
	unset($_SESSION['uname']);
	header("location:index.php");
?>