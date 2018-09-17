<?php
  include('top.php');
  ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
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
                    <div class="btn-group" style="margin-top: 2%; margin-left: 40%">
                      <form method="post" class="">
                        <table class="tabel table-borderless">
                          <tr>
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
                            <td>
                              <div>
                                  <button type="submit" name="set_dept" class="btn btn-primary" value="Show" style="margin-left: 10%">Show</button>
                              </div>
                            </td>
                          </tr>
                        </table>    
                      </form>
                    </div>
                    <div class="newone">
                    <table  class="table table-borderless" style="width: 500px; margin-top: 2%" align="center" border="1" cellspacing="5" cellpadding="10" id="fac_tbody">
                      <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Subject Name</th>
                        <th>Subject Code</th>                      
                        </tr>
                      </thead>
                      <?php
                        if (isset($_REQUEST['set_dept'])) {
                          $uid=$_SESSION['id'];
                          $ssem=$_REQUEST['sem'];
                          $q="SELECT * from sub_admin sa, dept_mst d where sa.sadmin_id = $uid  && sa.dept_id=d.dept_id";
                          $e1 = $conn->query($q);
                          $data = $e1->fetch_object();
                          $dept_id = $data->dept_id;
                          $q1="select * from subject_mst where dept_id = '$dept_id' and sem = '$ssem'";
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
                          <td style="vertical-align: baseline;"><?php echo $i; ?></td>
                          <td style="vertical-align: baseline;"><?php echo $data->sub_name; ?></td>
                          <td style="vertical-align: baseline;"><?php echo $data->sub_code; ?></td>
                          <!-- <td><a class="btn btn-primary" href="delstud.php?sid=<?php //echo $data->s_id; ?>" style="color: white">Delete</a></td>
                          <td><a class="btn btn-primary" href="updatestud.php?sid=<?php //echo $data->s_id; ?>" style="color: white">Update</a></td> -->
                        </tr>
                          <!-- <td style="vertical-align: baseline;"><button class="btn btn-primary"><a href="updatefac.php?fid=<?php// echo $data->f_id; ?>" style="color: white"> Update </a></button> </td> -->
                      
                          <?php
                        }
                      }
                      ?>
                    </table>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
<?php 
  include('foot.php');
?>