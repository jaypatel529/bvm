<?php 
    include('top.php');
    if(isset($_POST["sub"]))
    {
      $name = $_POST["sname"];
      $add=$_POST["sadd"];
      $mobile = $_POST["scon"];
      $pmobile = $_POST["pcon"];
      $email= $_POST["email"];
      $password= $_POST["pwd"];
      $year = $_POST["syear"];
      $sem = $_POST["ssem"];
      $bg = $_POST["bg"];
      $birthdate = $_POST["bdate"];
      $id = $_POST["sid"];
      $gender = $_POST["gen"];
      $uid = $_SESSION['id'];

      $q="SELECT * from sub_admin sa, dept_mst d where sa.sadmin_id = $uid  && sa.dept_id=d.dept_id";
      $e1 = $conn->query($q);
      $data = $e1->fetch_object();
      $dept_id = $data->dept_id;

      $sql = "INSERT INTO student_mst (s_name,s_add,s_no,perent_no,dept_id,sem,gender,email,stud_id,pass,bg,dob) VALUES ('$name','$add','$mobile','$pmobile','$dept_id','$sem','$gender','$email','$id','$password','$bg','$birthdate') ";

      if ($conn->query($sql) == TRUE) 
      {
        echo "<script>alert('Saved Successfully!');</script>";
      } 
      else 
      {
           echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
?>

<div class="">
<div class="page-title">
  <div class="title_left">
    <h3>Student Registration</h3>
  </div>
</div>
<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_content">

        <form name="addstudent" method="post">
          <table class="table table-borderless" style="margin-top: 3%; width: 600px;" align="center">
              <tr>
                <td><label style="margin-left: 30%">Name:</label>
                </td>
                <td>
                  <div>
                    <input type="text" class="form-control" placeholder="Student Name" name="sname" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td><label style="margin-left: 30%">Address:</label>
                </td>
                <td>
                  <div>
                    <textarea rows="3" cols="10" class="form-control" placeholder="Student Address" name="sadd" required></textarea>
                  </div>
                </td>
              </tr>
              <tr>
                <td><label style="margin-left: 30%">Date of Birth:</label>
                </td>
                <td>
                  <div>
                    <input type="date" class="form-control" placeholder="Birth Date" name="bdate"  value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
                        required>
                  </div>
                </td>
              </tr>
              <tr>
                <td><label style="margin-left: 30%">Gender</label>
                </td>
                <td>
                  <div>
                    <select class="category2 form-control" required="" name="gen">
                      <option selected hidden>Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td><label style="margin-left: 30%">Email:</label>
                </td>
                <td>
                  <div>
                    <input type="email" placeholder="Student E-mail" name="email" class="form-control" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td><label style="margin-left: 30%">Contact No:</label>
                </td>
                <td>
                  <div>
                    <input type="tel" placeholder="Student Contact Number" name="scon" class="form-control" required pattern="[0-9]{10}">
                  </div>
                </td>
              </tr>
              <tr>
                <td><label style="margin-left: 30%;">Parent Contact No:</label>
                </td>
                <td>
                  <div>
                    <input type="tel" placeholder="parent Contact Number" name="pcon" class="form-control" required pattern="[0-9]{10}">
                  </div>
                </td>
              </tr>       
              <tr>
                <td><label style="margin-left: 30%">Semester:</label>
                </td>
                <td>
                  <div>
                    <select class="category2 form-control" required name="ssem">
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
              </tr>
              <tr>
                <td><label style="margin-left: 30%">Id No:</label>
                </td>
                <td>
                  <div>
                    <input type="text" class="form-control" placeholder="Student ID" name="sid" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td><label style="margin-left: 30%">Password:</label>
                </td>
                <td>
                  <div>
                    <input type="password" class="form-control" placeholder="Temporary Password" name="pwd" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td><label style="margin-left: 30%">Blood Group:</label>
                </td>
                <td>
                  <div>
                    <select class="category2 form-control" required name="bg">
                      <option selected hidden>Select Blood group</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
              <div class="btn-inline">
                <td>
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
</div>

<?php 
  include('foot.php');
?>