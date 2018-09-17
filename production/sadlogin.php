<?php
	session_start();
	include("conn.php");
	if(isset($_REQUEST['login'])){
		$uname=$_REQUEST['uname'];
		$pass=$_REQUEST['pass'];
		$q1="select * from sub_admin where name='$uname' && password='$pass'";
		$e1=$conn->query($q1);
		$_SESSION['utype']="s";
		

		if ($e1-> num_rows > 0) {
			$data=$e1->fetch_object();
			$_SESSION['id']=$data->sadmin_id;
			$_SESSION['uname']=$data->name;
			header("location:fac_reg.php");
		}
			// else{
			// 	echo "<script>alert('ID/Password is Wrong!')</script>"
			// }
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Login</title>

		<!-- Bootstrap -->
		<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- NProgress -->
		<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
		<!-- Animate.css -->
		<link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

		<!-- Custom Theme Style -->
		<link href="../build/css/custom.min.css" rel="stylesheet">
	</head>

	<body class="login">
		<div>
			<a class="hiddenanchor" id="signup"></a>
			<a class="hiddenanchor" id="signin"></a>

			<div class="login_wrapper">
				<div class="animate form login_form">
					<div>
						<center><img src="images/clglogo.png" class="rounded-circle" width="80" height="80"></center>
						<h4> <center>   BIRLA VISHVAKARMA MAHAVIDYALAYA</center></h4>
						<h6><center>[An Autonomous Institution]</center></h6>
					</div>
					<section class="login_content">
						<form method="post">
							<h1>Login Form</h1>
							<div>
								<input type="text" class="form-control" name="uname" placeholder="Username" required />
							</div>
							<div>
								<input type="password" class="form-control" name="pass" placeholder="Password" required/>
							</div>
							<div>
								<!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
								<button type="submit" class="btn btn-default submit" name="login">Login</button>
								<!-- <a class="reset_pass" href="#">Lost your password?</a> -->
							</div>

							<div class="clearfix"></div>

							<div class="separator">
								<p class="change_link">SUB-ADMIN LOGIN
									<!-- <a href="#signup" class="to_register"> Create Account </a> -->
								</p>

								<div class="clearfix"></div>
								<div>
								<!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
								<button type="submit" class="btn btn-default submit" name="login" onclick="location.href= 'index.php'">Admin Login</button>
								<button type="submit" onclick="location.href= 'faclogin.php'" class="btn btn-default submit" name="login">Faculty Login</button>
								<!-- <a class="reset_pass" href="#">Lost your password?</a> -->
								</div>
							</div>
						</form>
					</section>
				</div>
			</div>
		</div>
	</body>
</html>
