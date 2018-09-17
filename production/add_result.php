<?php
	include('top.php');
	if(isset($_REQUEST["save"])){
		$stu_id=$_REQUEST['stu_id'];
		$marks=$_REQUEST['marks'];
		$subj=$_REQUEST['sub'];
		$sem=$_REQUEST['sem'];
		$exam=$_REQUEST['exam'];
		$count1=sizeof($stu_id);
		$c=0;
		for($i=0;$i<$count1;$i++){
			$q1="insert into result_mst (s_id,sub_id,sem,marks,exam_id) values ('$stu_id[$i]','$subj','$sem','$marks[$i]','$exam')";
			$e1=$conn->query($q1);
			if($e1){
				$c++;
			}
		}
	}
?>

	<!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
	<script type="text/javascript">
	function get_subj(){
		var sem=document.getElementById("sem").value;
		var temp="get_data.php?tb=sub&sem="+sem;
		// alert(temp);
		$.ajax({
			method: "GET",
			url: temp,
			success: function(data){
				$('#subject').append(data);
			}
		});
	}
	function load_stu(){
		var sub=document.getElementById("subject").value;
		var sem=document.getElementById("sem").value;
		var exam=document.getElementById("exam").value

		$('#res_tbody').append("<input type='hidden' name='sub' value="+sub+"><input type='hidden' name='sem' value="+sem+"><input type='hidden' name='exam' value="+exam+">");
		var temp="get_data.php?tb=stu&subj="+sub+"&sem="+sem+"&exam="+exam;
		//alert(temp);
		// x
		$.ajax({
			method: "GET",
			url: temp,
			//alert(temp);
			success: function(data){
				$('#res_tbody').append(data);
			}
		});
	}
	</script>

		  <div class="">
			<div class="page-title">
			  <div class="title_left">
				<h3>Add Result</h3>
			  </div>

			  <div class="row">
			  <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
				  <div class="x_content" style="margin-top: 2%; margin-left: 25%">
					  
					  <!-- <form name="addstudent" method="post"> -->
						<table class="tabel table-borderless">
						  <tr>
							<td>
							  <div>
								<select class="form-control" required id="sem" name="sem" onchange="get_subj();" autofocus="">
								  <option hidden>Select Semester</option>
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
								<select id="subject" name="subject" style="margin-left: 5%" class="form-control">
								<option selected hidden>Select Subject</option>
								</select>
							  </div>
							</td>
							<td>
							  <div>
								<select class="form-control" required id="exam" style="margin-left: 12%" name="exam">
								  <option selected hidden>Select Exam</option>
								  <?php
									  $q1="select * from exam_mst";
									  $e1=$conn->query($q1);
									  while($data=$e1->fetch_object()){
										?>
										<option value='<?php echo $data->exam_id; ?>'><?php echo $data->exam_type; ?></option>";
										<?php
									  }
									?>
								  </select>
							  </div>
							</td>
							<td>
							  <div>
								  <!-- <input type="submit" name="set_result" class="btn btn-primary" value="Show"> -->
								  <button id="dis_res" onclick="load_stu();" name="show" class="btn btn-primary" style="margin-top: 10%; margin-left: 35%;">Show</button>
							  </div>
							</td>
						  </tr>
						</table>
					  <!-- </form>    -->
				  </div>
				  <div style="newone">
				  	<!-- <div id="res_tbody"></div> -->
						<form method="post">
						<table  class="table table-striped" style="width: 50%;" align="center">
							<thead class="thead-light">
							<tr>
								<th>#</th>
								<th>Student Id</th>
								<th>Marks</th>
							</tr>
							</thead>
							<tbody id="res_tbody"></tbody>
						</table>
						</form>
					</div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<div id="abc"></div>
<?php
  include('foot.php');
?>