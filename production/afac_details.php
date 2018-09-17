<?php
  include('top.php');
  ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
  if(isset($_REQUEST['set_dept'])){
    $dept=$_REQUEST['dept'];
    $_SESSION['dept']=$dept;
  }
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
                    <center>
                      <div class="btn-group" style="margin-top: 2%;">
                        <form method="post" class="">
                          <table class="table table-borderless">
                            <tr>
                              <td>
                                    <div>
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
                                <div>
                                    <input type="submit" name="set_dept" class="btn btn-primary" value="Show">
                                </div>
                              </td>
                            </tr>
                          </table>      
                        </form>
                      </div>
                    </center>
                    <div style="newone">
                      <table  class="table table-borderless" style="width: 1000px;" align="center" border="1" cellspacing="5" cellpadding="10" id="fac_tbody">
                        <thead class="thead-light">
                        <tr>
                          <th>Id</th>
                          <th>Faculty Name</th>
                          <th>Address</th>
                          <th>DOB</th>
                          <th>Gender</th>
                          <th>Email ID</th>
                          <th>Contact NO</th>
                          <th>Faculty ID</th>\
                          <!-- <th colspan="2">Manupulation</th> -->
                        </tr>
                        </thead>
                        <?php
                          $fdept=$_SESSION['dept'];
                          $q1="select * from faculty_mst f, dept_mst d where d.dept_id=f.dept_id && f.dept_id='$fdept'";
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
                            <td style="vertical-align: baseline;"><?php echo $data->fname; ?></td>
                            <td style="vertical-align: baseline;"><?php echo $data->fadd; ?></td>
                            <td style="vertical-align: baseline;"><?php echo $data->dob; ?></td>
                            <td style="vertical-align: baseline;"><?php echo $data->gen; ?></td>
                            <td style="vertical-align: baseline;"><?php echo $data->email; ?></td>
                            <td style="vertical-align: baseline;"><?php echo $data->fcontact; ?></td>
                            <td style="vertical-align: baseline;"><?php echo $data->fac_id; ?></td>
                            <!-- <td style="vertical-align: baseline;"><a class="btn btn-primary" href="delfac.php?fid=<?php //echo $data->f_id; ?>" style="color: white"> Delete </a></td> -->
                            <!-- <td style="vertical-align: baseline;"><button class="btn btn-primary"><a href="updatefac.php?fid=<?php// echo $data->f_id; ?>" style="color: white"> Update </a></button> </td> -->
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