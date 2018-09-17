<?php
  include('top.php');
  ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
?>
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Sub-Admin Data</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    <table  class="table table-borderless" style="width: 700px;" align="center" border="1" cellspacing="5" cellpadding="10" id="fac_tbody">
                      <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Sub-Admin Name</th>
                        <!-- <th>Address</th>
                        <th>DOB</th>
                        <th>Gender</th> -->
                        <th>Email ID</th>
                        <!-- <th>Contact NO</th> -->
                        <th>Department</th>
                        <!-- <th>Delete</th> -->
                        <!-- <th colspan="2">Manupulation</th> -->
                      </tr>
                      </thead>
                      <?php
                          // $uid=$_SESSION['id'];
                          // $q="SELECT * from sub_admin sa, dept_mst d where sa.sadmin_id = $uid  && sa.dept_id=d.dept_id";
                          // $e1 = $conn->query($q);
                          // $data = $e1->fetch_object();
                          // $dept_id = $data->dept_id;
                          $q1="select * from sub_admin";
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
                          <td style="vertical-align: baseline;"><?php echo $data->name; ?></td>
                          <td style="vertical-align: baseline;"><?php echo $data->email; ?></td>
                          <td style="vertical-align: baseline;"><?php echo $data->dept_id; ?></td>
                          <!-- <td><div>
                <button type="button" class="btn btn-danger" href="delsadmin.php?sid=<?php //echo $data->sadmin_id; ?>" style="display: block;">
                <i class="fa fa-remove"></i>
                </button>
                </div>
              </td> -->
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
          
<?php 
  include('foot.php');
?>