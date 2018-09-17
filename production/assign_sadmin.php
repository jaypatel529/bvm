<?php
	include('top.php');
	if(isset($_REQUEST['sub'])){
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$pass=$_REQUEST['pass'];
		$dept_id=$_REQUEST['dept_id'];
		$q1="insert into sub_admin (name,email,password,dept_id) values ('$name','$email','$pass','$dept_id')";
		$e1=$conn->query($q1);
		if ($e1) {
	      echo "<script>alert('Saved Successfully!');</script>";
	    }
	    else{
	      echo "Error: " . $sql . "<br>" . $conn->error;
    	}
	}
?>
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Sub-Admin Registration</h3>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">
					<br />
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" name="addfac" method="post">
				<table class="table table-borderless" style="margin-top: 3%; width: 600px;" align="center">
						<tr>
							<td>
								<label style="margin-left: 30%">Name:</label>
							</td>
							<td style="vertical-align: baseline;">
								<div>
									<input type="text" class="form-control" placeholder="Admin Name" name="name" required>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<label style="margin-left: 30%">Email:</label>
							</td>
							<td style="vertical-align: baseline;">
								<div>
									<input type="email" placeholder="Admin E-mail" name="email" class="form-control" required>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<label style="margin-left: 30%">Password:</label>
							</td>
							<td style="vertical-align: baseline;">
								<div>
									<input type="Password" class="form-control" placeholder="Temporary Password" name="pass" required>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<label style="margin-left: 30%">Department:</label>
							</td>
							<td style="vertical-align: baseline;">
								<div>
									<select class="category2 form-control" required name="dept_id">
										<option value="" selected hidden>Select Depatrment</option>
										<?php
											$q1="select * from dept_mst";
											$e1=$conn->query($q1);
											while($data=$e1->fetch_object()){
										?>
										<option value='<?php echo $data->dept_id; ?>'><?php echo $data->dept_name; ?></option>";
										<?php
											}
										?>
									</select>
								</div>
							</td>
						</tr>
						<tr>
						<div class="btn-inline">
							<td >
								<button class="btn btn-primary btn-lg btn-center" type="submit" value="submit" name="sub" style="margin-left: 70%"> Submit </button>
							</td>
						
							<td>
								<button onclick="location.href = 'afac.php';" type="button" name="cancle" class="btn btn-primary btn-lg btn-center" style="margin-left: 10%"> Cancel 
								</button>
							</td>
							</div>
						</tr>
					</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
					
<?php 
	include('foot.php');
?>