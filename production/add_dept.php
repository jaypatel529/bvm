<?php
  include('top.php');
  if(isset($_REQUEST['sub'])){
    $dept=$_REQUEST['dept'];
    $q1="insert into dept_mst (dept_name) values ('$dept')";
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
                <h3>Add Department</h3>
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
                              <td><label style="margin-left: 30%">Department:</label>
                              </td>
                              <td>
                                <div>
                                  <input type="text" class="form-control" placeholder="Department Name" name="dept" required>
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