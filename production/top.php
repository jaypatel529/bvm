<?php
	session_start();
	 if(!isset($_SESSION['utype'])){
	 	$_SESSION['utype']="";
	 }
	include("conn.php");
?>
<!DOCTYPE html>
	<head>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="icon" href="images/lcglogo.png" type="image/png" /> -->

		<title>BVM</title>

		<!-- Bootstrap -->
		<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- NProgress -->
		<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
		<!-- iCheck -->
		<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
		<!-- bootstrap-progressbar -->
		<link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
		<!-- JQVMap -->
		<link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
		<!-- bootstrap-daterangepicker -->
		<link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

		<!-- Custom Theme Style -->
		<link href="../build/css/custom.min.css" rel="stylesheet">
		<style type="text/css">
			.jay input:disabled{
				border: 0px solid black;
				background: transparent;
			}
			.jay select:disabled{
				border: 0px solid black;
				background: transparent;
			}
		</style>
	</head>

	<body class="nav-md footer_fixed menu_fixed">
		<div class="container body">
			<div class="main_container">
				<div class="col-md-3 left_col">
					<div class="left_col scroll-view">
						<div class="navbar nav_title" style="border: 0;">
							<a href="adminhome.php" class="site_title"><img src="images/clglogo.png" class="rounded-circle" width="50" height="50"> <span>BVM</span></a>
						</div>

						<div class="clearfix"></div>

						<!-- menu profile quick info -->
						<div class="profile clearfix">
							<?php 
								if ($_SESSION['utype']=='a') {
							?>
							<div class="profile_info">
								Welcome, <b style="font-size: 20px">Admin</b>     
							</div>
							<?php 
								}
							?>
							<?php 
								if ($_SESSION['utype']=="s") {
							?>
							<div class="profile_info">
								Welcome, <b style="font-size: 20px">Department Admin</b>     
							</div>
							<?php 
								}
							?>
							<?php 
								if ($_SESSION['utype']=='f') {
							?>
							<div class="profile_info">
								Welcome, <b style="font-size: 20px">Faculty</b>     
							</div>
							<?php 
								}
							?>
							<?php 
								if ($_SESSION['utype']=="") {
							?>
							<div class="profile_info">
								Welcome, <b style="font-size: 20px">THERE</b>     
							</div>
							<?php 
								}
							?>
						</div>
						<!-- /menu profile quick info -->

						<br />

						<!-- sidebar menu -->
						<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
							<div class="menu_section">
								<ul class="nav side-menu">
									<?php
										if($_SESSION['utype']=='a'){
									?>
									<li><a><i class="fa fa-home"></i> Subadmin <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="assign_sadmin.php">Assign Sub-Admin</a></li>
											<li><a href="subadmin_data.php">Sub-Admin Data</a></li>
										</ul>
									</li>
									<li><a><i class="fa fa-home"></i> Department <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="add_dept.php">Add Department</a></li>
											<li><a href="dept_data.php">Department Data</a></li>
										</ul>
									</li>
									<?php
										}
										if($_SESSION['utype']=='s' || $_SESSION['utype']=='a'){
									?>
									<li><a><i class="fa fa-home"></i> Faculty <span class="fa fa-chevron-down"></span></a>
									<?php 
										}
									?>
										<ul class="nav child_menu">
											<?php
												if($_SESSION['utype']=='s'){
											?>
											<li><a href="fac_reg.php">Register Faculty</a></li>
											<?php
												}
												if($_SESSION['utype']=='s') {
											?>
											<li><a href="fac_details.php">Faculty Data</a></li>
											<?php
												}
												if($_SESSION['utype']=='a'){
											?>
											<li><a href="afac_details.php">Faculty Data</a></li>
											<?php		
												}
											?>
										</ul>
									</li>
									<?php
										if($_SESSION['utype']=='s' || $_SESSION['utype']=='a'){
									?>
									<li><a><i class="fa fa-home"></i> Student <span class="fa fa-chevron-down"></span></a>
									<?php 
										}
									?>
										<ul class="nav child_menu">
											<?php
												if($_SESSION['utype']=='s'){
											?>
											<li><a href="stud_reg.php">Register Student</a></li>
											<?php
												}
												if($_SESSION['utype']=='s'){
											?>
											<li><a href="stud_details.php">Student Data</a></li>
											<?php
												}
												if($_SESSION['utype']=='a'){
											?>
											<li><a href="astud_details.php">Student Data</a></li>
											<?php
												}
											?>
										</ul>
									</li>
									<?php
										if($_SESSION['utype']=='s'){
									?>
									<li><a><i class="fa fa-home"></i> Subject <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="add_sub.php">Add Subject</a></li>
											<li><a href="assign_sub.php">Assign Subject</a></li>
											<li><a href="subject_data.php">Subject Data</a></li>

										</ul>
									</li>
									<?php
										}
									?>
									<?php
										if($_SESSION['utype']=='f'){
									?>
									<li><a><i class="fa fa-home"></i> Result <span class="fa fa-chevron-down"></span></a>
					                    <ul class="nav child_menu">
					                      <li><a href="add_result.php">Add Result</a></li>
					                      <li><a href="show_result.php">Show Result</a></li>
					                    </ul>
					                </li>
					                <?php 
					                	}
					                ?>
								</ul>
							</div>
						</div>
						<!-- /sidebar menu -->

						<!-- /menu footer buttons -->
						<!-- <div class="sidebar-footer hidden-small">
							<a data-toggle="tooltip" data-placement="top" title="Settings">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="FullScreen">
								<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="Lock">
								<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
							</a> -->
							<!-- <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
								<a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
								<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
							</a>
						</div> -->
						<!-- /menu footer buttons -->
					</div>
				</div>

				<!-- top navigation -->
				<div class="top_nav">
					<div class="nav_menu">
						<nav>
							<div class="nav toggle">
								<a id="menu_toggle"><i class="fa fa-bars"></i></a>
							</div>

							<ul class="nav navbar-nav navbar-right">
								<li class="">
									<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<!-- <img src="images/img.jpg" alt=""> -->

										<?php 
											if ($_SESSION['utype']=='a') {
											 	$uid = $_SESSION['id'];
											 	$q1 = "SELECT * FROM admin_mst WHERE admin_id = '$uid'";
											 	$e1 = $conn->query($q1);
												while ($data=$e1->fetch_object()) {
														echo $data->uname;
													}	
											}
										?>
										<?php 
											if ($_SESSION['utype']=='s') {
												$uid = $_SESSION['id'];
											 	$q1 = "SELECT * FROM sub_admin WHERE sadmin_id = '$uid'";
											 	$e1 = $conn->query($q1);
												while ($data=$e1->fetch_object()) {
														echo $data->name;
													}	
											}
										?>
										<?php 
											if ($_SESSION['utype']=='f') {
												$uid = $_SESSION['id'];
											 	$q1 = "SELECT * FROM faculty_mst WHERE f_id = '$uid'";
											 	$e1 = $conn->query($q1);
												while ($data=$e1->fetch_object()) {
														echo $data->fname;
													}	
											}										
										?>
										<span class=" fa fa-angle-down"></span>
									</a>
									<ul class="dropdown-menu dropdown-usermenu pull-right">
										<?php  
											if ($_SESSION['utype']=='f') {
										?>
										<li><a href="fac_info.php"><i class="fa fa-cog pull-right"></i> Profile</a></li>
										<?php
											}
										?>
										<li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- /top navigation -->
				<!-- page content -->
				<div class="right_col" role="main" style="height: 100%;>