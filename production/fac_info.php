<?php
	include 'top.php';
	if(isset($_REQUEST["sub"]))
	{
		$uid = $_SESSION['id'];
		$add=$_POST["fadd"];
		$mobile = $_POST["fcon"];
		$birthdate = $_POST["bdate"];
		$gender = $_POST["gen"];

		$sql = "UPDATE faculty_mst SET fadd = '$add',dob = '$birthdate',gen = '$gender',fcontact = '$mobile' WHERE f_id = '$uid' ";

		$e1=$conn->query($sql);
		if ($e1) 
		{
			echo "<script>alert('Update Saved!');</script>";
		} 
		else 
		{
			   echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$uid = $_SESSION['id'];
	$qt="select * from faculty_mst where f_id='$uid'";
	$et=$conn->query($qt);
	$dt=$et->fetch_object();
?>
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Personal Info</h3>
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
						<td style="vertical-align: baseline;"><label style="margin-left: 30%">Address:</label>
						</td>
						<td>
							<div>
								<textarea rows="3" cols="10" class="form-control" placeholder="Faculty Address" name="fadd" required><?php echo $dt->fadd; ?></textarea>
							</div>
						</td>
					</tr>
					<tr>
						<td style="vertical-align: baseline;"><label style="margin-left: 30%;" >Date of Birth:</label>
						</td>
						<td>
							<div>
								<input type="date" class="form-control" placeholder="Birth Date" name="bdate" type="text" value="<?php echo $dt->dob; ?>"
								    required>
							</div>
						</td>
					</tr>
				
					<tr>
						<td style="vertical-align: baseline;"><label style="margin-left: 30%">Gender</label>
						</td>
						<td>
							<div>
								<select class="category2 form-control" required name="gen"> 
									<option selected hidden>Gender</option>
									<option value="Female" <?php if($dt->gen=="Female"){echo "selected";} ?>>Female</option>
									<option value="Male" <?php if($dt->gen=="Male"){echo "selected";} ?>>Male</option>
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td style="vertical-align: baseline;"><label style="margin-left: 30%">Contact No:</label>
						</td>
						<td>
							<div>
								<input type="tel" value="<?php echo $dt->fcontact; ?>" placeholder="Faculty Contact Number" name="fcon" class="form-control" required pattern="[0-9]{10}">
							</div>
						</td>
					</tr>	
					<tr>
                    <div class="btn-inline">
                      <td >
                        <button class="btn btn-primary btn-lg btn-center" type="submit" value="Submit"z name="sub" style="margin-left: 70%"> Update</button>
                      </td>
                    
                      <td>
                        <button onclick="location.href = 'fac_info.php';" type="button" name="cancle" class="btn btn-primary btn-lg btn-center" style="margin-left: 10%"> Cancel 
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
	include 'foot.php';
?>