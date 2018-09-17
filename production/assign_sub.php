<?php
  include('top.php');
  ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);  
  
  if(isset($_POST["sub"]))
  {
    $name = $_POST["subject"];
    $fac = $_POST['fac'];
    $uid = $_SESSION['id'];
    
    $q="SELECT * from sub_admin sa, dept_mst d where sa.sadmin_id = $uid  && sa.dept_id=d.dept_id";
    $e1 = $conn->query($q);
    $data = $e1->fetch_object();
    $dept_id = $data->dept_id;

    $sql = "UPDATE subject_mst SET f_id='$fac'  WHERE sub_id = '$name'";

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
        <h3>Assign Subjects</h3>
      </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
              
              <form name="addstudent" method="post">
                <table class="table table-borderless" style="margin-top: 3%; width: 600px;" align="center">
                    <tr>
                      <td style="vertical-align: baseline;"><label style="margin-left: 30%">Semester:</label></td>
                      <td>
                          <div>
                            <select class="form-control" required id="sem" name="sem">
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
                      <td style="vertical-align: baseline;"><label style="margin-left: 30%">Faculty:</label>
                      </td>
                      <td style="vertical-align: baseline;">
                        <div>
                          <select class="form-control" required name="fac" id="fac">
                            <option selected hidden>Select Faculty</option>
                            <?php
                              $uid = $_SESSION['id'];
    
                              $q="SELECT * from sub_admin sa, dept_mst d where sa.sadmin_id = $uid  && sa.dept_id=d.dept_id";
                              $e1 = $conn->query($q);
                              $data = $e1->fetch_object();
                              $dept_id = $data->dept_id;
                              $q1="select * from faculty_mst where dept_id = '$dept_id'";
                              $e1=$conn->query($q1);
                              while($data=$e1->fetch_object()){
                                ?>
                                <option value='<?php echo $data->f_id; ?>'><?php echo $data->fname; ?></option>";
                                <?php
                              }
                            ?>
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="vertical-align: baseline;"><label style="margin-left: 30%">Subject:</label>
                      </td>
                      <td style="vertical-align: baseline;">
                        <div>
                          <select class="form-control" required name="subject" id="sub">  
                            <option selected hidden>Select Subject</option>
                            <?php
                              $uid = $_SESSION['id'];
    
                              $q="SELECT * from sub_admin sa, dept_mst d where sa.sadmin_id = $uid  && sa.dept_id=d.dept_id";
                              $e1 = $conn->query($q);
                              $data = $e1->fetch_object();
                              $dept_id = $data->dept_id;

                              $q1="select * from subject_mst where dept_id = '$dept_id'";
                              $e1=$conn->query($q1);
                              while($data=$e1->fetch_object()){
                                ?>
                                <option value='<?php echo $data->sub_id; ?>'><?php echo $data->sub_name; ?></option>";
                                <?php
                              }
                            ?>
                          </select>
                        </div>
                      </td>
                    </tr>
                    <div class="btn-inline">
                      <td >
                        <input class="btn btn-primary btn-lg btn-center" type="submit" value="Submit" name="sub" style="margin-left: 100%">
                      </td>
                    
                      <td>
                        <button onclick="location.href = 'assign_sub.php';" type="button" name="cancle" class="btn btn-primary btn-lg btn-center" style="margin-left: 30%"> Cancel 
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