<?php
  include('top.php');
  ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
?>
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Department Data</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    <table  class="table table-borderless" style="width: 500px;" align="center" border="1" cellspacing="5" cellpadding="10" id="fac_tbody">
                      <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Department</th>
                       <!--  <th>Delete</th> -->
                      </tr>
                      </thead>
                      <?php
                          $q1="select * from dept_mst";
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
                          <td style="vertical-align: baseline;"><?php echo $data->dept_name; ?></td>
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
          
<?php 
  include('foot.php');
?>