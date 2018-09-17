<?php
	include('top.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
	<script type="text/javascript">
	function upd_pc(x){
		var x=x.substring(0,x.length-1);

		var e=x;
		var t1=e+"t1";
		var t2=e+"t2";
		var t3=e+"t3";
		var t4=e+"t4";
		var t5=e+"t5";
		var t6=e+"t6";
		var t7=e+"t7";
		var t8=e+"t8";
		var t9=e+"t9";

		var d1=document.getElementById(t1).value;
		var d2=document.getElementById(t2).value;
		var d3=document.getElementById(t3).value;
		var d4=document.getElementById(t4).value;
		var d5=document.getElementById(t5).value;
		var d6=document.getElementById(t6).value;
		var d7=document.getElementById(t7).value;
		var d8=document.getElementById(t8).value;
		var d9=document.getElementById(t9).value;

		$.ajax({
			type: "GET",
			url: 'update.php?tn=student&v1='+d1+'&v2='+d2+'&v3='+d3+'&v4='+d4+'&v5='+d5+'&v6='+d6+'&v7='+d7+'&v8='+d8+'&v9='+d9+'&s_id='+x,
			success: function(data){
				//alert(data);
			}
		});
		var ans=x+"m";
		var data1="<button type='button' class='btn btn-warning' id='"+x+"' style='display: block;' onclick='edit1(this.id);'><i class='fa fa-edit'></i></button>";
		document.getElementById(ans).innerHTML=data1;
		var tb=x+"t";
		var d=x+"d";
		
		document.getElementById(t1).disabled=true;
		document.getElementById(t2).disabled=true;
		document.getElementById(t3).disabled=true;
		document.getElementById(t4).disabled=true;
		document.getElementById(t5).disabled=true;
		document.getElementById(t6).disabled=true;
		document.getElementById(t7).disabled=true;
		document.getElementById(t8).disabled=true;
		document.getElementById(t9).disabled=true;

	}
	function rev(x){
		x=x.substring(0,x.length-1);
		var ans=x+"m";
		var data1="<button type='button' class='btn btn-warning' id='"+x+"' style='display: block;' onclick='edit1(this.id);'><i class='fa fa-edit'></i></button>";
		document.getElementById(ans).innerHTML=data1;
		// var tb=x+"t";
		// var d=x+"d";
		var e=x;
		var t1=e+"t1";
		var t2=e+"t2";
		var t3=e+"t3";
		var t4=e+"t4";
		var t5=e+"t5";
		var t6=e+"t6";
		var t7=e+"t7";
		var t8=e+"t8";
		var t9=e+"t9"; 
		
		document.getElementById(t1).disabled=true;
		document.getElementById(t2).disabled=true;
		document.getElementById(t3).disabled=true;
		document.getElementById(t4).disabled=true;
		document.getElementById(t5).disabled=true;
		document.getElementById(t6).disabled=true;
		document.getElementById(t7).disabled=true;
		document.getElementById(t8).disabled=true;
		document.getElementById(t9).disabled=true;
	}
	function edit1(e){
		// alert(e);
		var t1=e+"t1";
		var t2=e+"t2";
		var t3=e+"t3";
		var t4=e+"t4";
		var t5=e+"t5";
		var t6=e+"t6";
		var t7=e+"t7";
		var t8=e+"t8";
		var t9=e+"t9";
		// var d = e+"d";
		
		document.getElementById(t1).disabled=false;
		document.getElementById(t2).disabled=false;
		document.getElementById(t3).disabled=false;
		document.getElementById(t4).disabled=false;
		document.getElementById(t5).disabled=false;
		document.getElementById(t6).disabled=false;
		document.getElementById(t7).disabled=false;
		document.getElementById(t8).disabled=false;
		document.getElementById(t9).disabled=false;
		
		// document.getElementById(d).disabled=false;
		var u=e+"u";
		var c=e+"c";
		var md=e+"m";
		var data="<button type='button' class='btn btn-green' onclick='upd_pc(this.id);' id='"+u+"'><i class='fa fa-arrow-up'></i></button>&nbsp;<button type='button' onclick='rev(this.id);' class='btn btn-red' id='"+c+"' ><i class='fa fa-remove'></i></button>";
		document.getElementById(md).innerHTML=data;
	}
	</script>
</head>
</html>
<?php
  // ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
?>
		  <div class="">
			<div class="page-title">
			  <div class="title_left">
				<h3>Faculty Data</h3>
			  </div>
			</div>
			<div class="clearfix"></div>
			<div class="row">
			  <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
				  <div class="x_content">
					<br />
					<center>
					<div class="" style="margin-top: 2%;">
					  <form method="post" class="">
						<table class="tabel table-borderless" style="">
							<!-- <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> -->
						  <tr>
							<td>
							  <div>
								<select autofocus="" class="form-control" required id="sem" name="sem">
								  <option selected hidden>Select Semester</option>
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="5">5</option>
								  <option value="6">6</option>
								  <option value="7">7</option>
								  <option value="8">8</option>
								</select>
							  </div>
							</td>
							<td>
							  <div>
								  <button type="submit" name="set_dept" class="btn btn-primary" value="Show" style="margin-left: 10%; margin-top: 2%">Show</button>
							  </div>
							</td>
						  </tr>
						</table>    
					  </form>
					</div>
					<div class="newone">
					  <table  class="table table-borderless" align="center" id="stud_tbody" style=" font-size: 15px; margin-top: 2%; overflow-x: scroll; word-wrap: break-word; white-space: nowrap;display: block;">
					  	<!-- <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> -->
						<thead class="thead-light">
						<tr">
						  <th>Id</th>
						  <th>Student Name</th>
						  <th>Address</th>
						  <th>Conatct NO</th>
						  <th>Parent NO</th>
						  <th>Gender</th>
						  <th>Email ID</th>
						  <th>Student ID</th>
						  <th>Blood Group</th>
						  <th>DOB</th>
						  <th>Manupulation</th>
						</tr>
						</thead>
						<tbody class="jay">
						<?php
						  if(isset($_REQUEST['set_dept'])){
								$ssem=$_REQUEST['sem'];
								$uid=$_SESSION['id'];
								$q="SELECT * from sub_admin sa, dept_mst d where sa.sadmin_id = $uid  && sa.dept_id=d.dept_id";
								$e1 = $conn->query($q);
								$data = $e1->fetch_object();
								$dept_id = $data->dept_id;
								$q1="select * from student_mst where dept_id='$dept_id' and sem='$ssem'";
								$e1=$conn->query($q1);
						  if($e1->num_rows == 0){
							?>
							<tr><td colspan="20" align="center"><i>No Records Found</i></td></tr>
							<?php
						  }
						  $i=0;
						  while($data=$e1->fetch_object()){
							$i++;
							?>
						  <tr>
							<td><?php echo $i;
								$temp2=$data->s_id;
								$id1=$data->s_id;
								$id1.="t1";
								$id2=$temp2."t2";
								$id3=$temp2."t3";
								$id4=$temp2."t4";
								$id5=$temp2."t5";
								$id6=$temp2."t6";
								$id7=$temp2."t7";
								$id8=$temp2."t8";
								$id9=$temp2."t9";
								$md=$temp2."m";
							?></td>
							<td><input type="text" id="<?php echo $id1; ?>" value="<?php echo $data->s_name; ?>" disabled></td>
							<td><input type="text" id="<?php echo $id2; ?>" value="<?php echo $data->s_add; ?>" disabled></td>
							<td><input type="text" id="<?php echo $id3; ?>" value="<?php echo $data->s_no; ?>" disabled></td>
							<td><input type="text" id="<?php echo $id4; ?>" value="<?php echo $data->perent_no; ?>" disabled></td>
							<td><input type="text" id="<?php echo $id5; ?>" value="<?php echo $data->gender; ?>" disabled></td>
							<td><input type="text" id="<?php echo $id6; ?>" value="<?php echo $data->email; ?>" disabled></td>
							<td><input type="text" id="<?php echo $id7; ?>" value="<?php echo $data->stud_id; ?>" disabled></td>
							<td><select id="<?php echo $id8; ?>" value="<?php echo $data->bg; ?>" disabled>
								<option value="A+" <?php if($data->bg=="A+"){echo "selected";} ?>>A+</option>
								<option value="A-" <?php if($data->bg=="A-"){echo "selected";} ?>>A-</option>
								<option value="B+" <?php if($data->bg=="B+"){echo "selected";} ?>>B+</option>
								<option value="B-" <?php if($data->bg=="B-"){echo "selected";} ?>>B-</option>
								<option value="O+" <?php if($data->bg=="O+"){echo "selected";} ?>>O+</option>
								<option value="O-" <?php if($data->bg=="O-"){echo "selected";} ?>>O-</option>
								<option value="AB+" <?php if($data->bg=="AB+"){echo "selected";} ?>>AB+</option>
								<option value="AB-" <?php if($data->bg=="AB-"){echo "selected";} ?>>AB-</option>
							</select>
				            </td>
							<td><input type="text" id="<?php echo $id9; ?>" value="<?php echo $data->dob; ?>" disabled></td>
							<td><div id="<?php echo $md; ?>" style="">
									<button type="button" class="btn btn-warning" id="<?php echo $data->s_id; ?>" style="display: block;" onclick="edit1(this.id);">
										<i class="fa fa-edit"></i>
									</button>
								</div>
							</td>
							<td><div style="margin-left: -50%;">
								<button type="button" class="btn btn-danger" href="delstud.php?sid=<?php echo $data->s_id; ?>" style="display: block;">
								<i class="fa fa-remove"></i>
								</button>
								</div>
							</td>
						  </tr>
							<?php
								  }
								}
							?>
						</tbody>
					  </table>
					</div>
				  </div>
				  </center>
				</div>
			  </div>
			</div>
		  </div>
		  
<?php 
  include('foot.php');
?>