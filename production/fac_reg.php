<?php
  include("top.php");
    ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    if(isset($_POST["sub"]))
    {
      $name = $_POST["fname"];
      $email= $_POST["email"];
      $password= $_POST["fpwd"];
      $id = $_POST["fid"];
      $uid = $_SESSION['id'];
      $q="SELECT * from sub_admin sa, dept_mst d where sa.sadmin_id = $uid  && sa.dept_id=d.dept_id";
      $e1 = $conn->query($q);
      $data = $e1->fetch_object();
      $dept_id = $data->dept_id;
      $sql = "INSERT INTO faculty_mst (fname,email,dept_id,fac_id,password) VALUES ('$name','$email','$dept_id','$id','$password') ";

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
                <h3>Faculty Registration</h3>
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
                              <td style="vertical-align: baseline;"><label style="margin-left: 30%">Name:</label>
                              </td>
                              <td>
                                <div>
                                  <input type="text" class="form-control" placeholder="Faculty Name" name="fname" required>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="vertical-align: baseline;"><label style="margin-left: 30%">Email:</label>
                              </td>
                              <td>
                                <div>
                                  <input type="email" placeholder="Faculty E-mail" name="email" class="form-control" required>
                                </div>
                              </td>
                            </tr>
                            <!-- <tr>
                              <td style="vertical-align: baseline;"><label style="margin-left: 30%">Department:</label>
                              </td>
                              <td>
                                <div>
                                  <select class="category2 form-control" required name="fdept">
                                    <option value="" selected hidden>Select Depatrment</option>
                                  </select>
                                </div>
                              </td>
                            </tr> -->
                            <tr>
                              <td style="vertical-align: baseline;"><label style="margin-left: 30%">Faculty ID:</label>
                              </td>
                              <td>
                                <div>
                                  <input type="text" class="form-control" placeholder="Faculty ID" name="fid" required>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td style="vertical-align: baseline;"><label style="margin-left: 30%">Password:</label>
                              </td>
                              <td>
                                <div>
                                  <input type="Password" class="form-control" placeholder="Temporary Password" name="fpwd" required>
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