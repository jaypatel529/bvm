<?php
  include('top.php');
  ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
  if(isset($_REQUEST['set_dept'])){
    $sem=$_REQUEST['sem'];
    $dept=$_REQUEST['dept'];
     // echo $dept;
     // echo $sem;
    $_SESSION['sem']=$sem;
    $_SESSION['dept']=$dept;
    // echo "<input type='hidden' name='dept' value='$dept'>";
  }
?>
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Student Data</h3>
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
                          <table class="tabel table-borderless">
                            <tr>
                              <td>
                                    <div style="margin-left: 0%">
                                    <select id="dept" name="dept" class="form-control">
                                    <option selected hidden>Select Department</option>
                                    <?php
                                      $q1="select * from dept_mst";
                                      $e1=$conn->query($q1);
                                      while($data=$e1->fetch_object()){
                                        ?>
                                        <option value='<?php echo $data->dept_id; ?>'><?php echo $data->dept_name; ?></option>";
                                        <?php
                                      }
                                    ?>
                                    </select>
                                </div>
                              </td>
                              <td>
                                <div style="margin-left: 0%">
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
                                <div style="margin-left: 10%">
                                    <input type="submit" name="set_dept" class="btn btn-primary" value="Show">
                                </div>
                              </td>
                            </tr>
                          </table>    
                        </form>
                      </div>
                    </center>
                    <div style="newone">
                      <table  class="table table-striped" align="center"id="stud_tbody" style="width: 800px; font-size: 15px;>
                        <thead class="thead-light">
                        <tr>
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
                          </tr>
                        </thead>
                        <?php
                          $sdept=$_SESSION['dept'];
                          $ssem=$_SESSION['sem'];
                          $q1="select * from student_mst where dept_id='$sdept' and sem='$ssem'";
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
                            <td><?php echo $i; ?></td>
                            <td><?php echo $data->s_name; ?></td>
                            <td><?php echo $data->s_add; ?></td>
                            <td><?php echo $data->s_no; ?></td>
                            <td><?php echo $data->perent_no; ?></td>
                            <td><?php echo $data->gender; ?></td>
                            <td><?php echo $data->email; ?></td>
                            <td><?php echo $data->stud_id; ?></td>
                            <td><?php echo $data->bg; ?></td>
                            <td><?php echo $data->dob; ?></td>
                            <!-- <td style="vertical-align: baseline;"><a class="btn btn-primary" href="delstud.php?sid=<?php //echo $data->s_id; ?>" style="color: white"> Delete </a></td>
                            <td style="vertical-align: baseline;"><a class="btn btn-primary" href="updatestud.php?sid=<?php //echo $data->s_id; ?>" style="color: white"> Update </a></td> -->
                          </tr>
                            <?php
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