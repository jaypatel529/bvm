<?php
	include("conn.php");
	session_start();
	// print_r($_SESSION);
	if(isset($_REQUEST['tb'])){
		if($_REQUEST['tb']=="sub"){
			$sem=$_REQUEST['sem'];
			$uid = $_SESSION['id'];
			$q1="select * from subject_mst where f_id = '$uid' and sem='$sem'";
			$e1=$conn->query($q1);
			while($data=$e1->fetch_object()){
				echo "<option value='$data->sub_id'>$data->sub_name</option>";
			}
		}
		elseif ($_REQUEST['tb']=="fac") {
			$dept=$_REQUEST['sdept'];
			$q1="select * from faculty_mst where dept_id='$dept'";
			$e1=$conn->query($q1);
			while($data=$e1->fetch_object()){
				echo "<option value='$data->f_id'>$data->fname</option>";
			}
		}

		else if($_REQUEST['tb']=="res"){
			$sem=$_REQUEST['sem'];
			$q1="select * from student_mst s, faculty_mst f where f.sem='$sem' = s.sem = '$sem' order by stud_id";
			$e1=$conn->query($q1);
			echo $e1->num_rows;
			// echo "<tr><th>Student Id</th><th>Marks</th></tr>";
			?>
			<table  class="table table-borderless" style="width: 500px; margin-left: 33%; margin-top: 2%" align="center" border="1" cellspacing="5" cellpadding="10">
			<thead class="thead-light">
			<tr>
				<th>Student Id</th>
				<th>Marks</th>
			</tr>
			</thead>
			<?php
			while($data=$e1->fetch_object()){
				echo "<tr><td class='jay'><input type='hidden' name='stu_id[]' value='$data->stud_id'>$data->stud_id</td><td><input type='text' name='marks[]' ></td></tr>";
			}
			?>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" class="btn btn-primary" value="Save" name="save">
				</td>
			</tr>
		</table>
			<?php
		}
		else if($_REQUEST['tb']=="stu"){
			$subj=$_REQUEST['subj'];
			$sem=$_REQUEST['sem'];
			$exam=$_REQUEST['exam'];
			$uid=$_SESSION['id'];
	          $q="SELECT * from faculty_mst f, dept_mst d where f.f_id = $uid  && f.dept_id=d.dept_id";
	          $e = $conn->query($q);
	          $data = $e->fetch_object();
	          $dept_id = $data->dept_id;
			// print_r($_SESSION);
			$q1="select * from student_mst where sem='$sem' && dept_id='$dept_id'";
			$e1=$conn->query($q1);
			$i=0;
			// print_r($e1);
			while($d=$e1->fetch_object()){
				// print_r($d);
				$i++;
				echo "<tr><td>$i<input type='hidden' name='ids[]' value='$d->s_id'></td><td><input type='hidden' name='stu_id[]' value='$d->s_id'>$d->stud_id</td><td><input type='text' name='marks[]'></td></tr>";
			}
			echo "<tr><td colspan='3' align='center'><input type='submit' class='btn btn-primary' value='Save' name='save'></td></tr>";
		}
	}

?>