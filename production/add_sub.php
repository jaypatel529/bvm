<?php
  include('top.php');
  ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);  
  
  if(isset($_POST["sub"]))
  {
    $name = $_POST["sname"];
    $code = $_POST["scode"];
    $sem = $_POST["ssem"];
    $uid = $_SESSION['id'];
    //$fac = $_POST["fac"];
    $q="SELECT * from sub_admin sa, dept_mst d where sa.sadmin_id = $uid  && sa.dept_id=d.dept_id";
    $e1 = $conn->query($q);
    $data = $e1->fetch_object();
    $dept_id = $data->dept_id;

    $sql = "INSERT INTO subject_mst (sub_name,sub_code,sem,dept_id) VALUES ('$name','$code','$sem','$dept_id')";

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
        <h3>Add Subjects</h3>
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
                    <td style="vertical-align: baseline;"><label style="margin-left: 30%">Semester:</label>
                    </td>
                    <td style="vertical-align: baseline;">
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
                    <td style=""><label style="margin-left: 30%">Subject Name:</label>
                    </td>
                    <td style="">
                      <div>
                        <input type="text" class="form-control" placeholder="Subject Name" name="sname" required>
                      </div>
                    </td>
                  </tr>
                  <tr> 
                    <td style=""><label style="margin-left: 30%">Subject Code:</label>
                    </td>
                    <td style="">
                      <div>
                        <input type="text" class="form-control" placeholder="Subject Code" name="scode" required>
                      </div>
                    </td>
                  </tr>
                  <div class="btn-inline" >
                    <td >
                      <button class="btn btn-success btn-center" type="submit" value="submit" name="sub" style="margin-left: 100%"> Submit </button>
                    </td>
                    <td>
                      <button onclick="location.href = 'add_sub.php';" type="button" name="cancle" class="btn btn-primary btn-center" style="margin-left: 30%"> Cancel 
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