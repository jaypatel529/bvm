<?php
  include('top.php');

?>
  <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
  <script type="text/javascript">
    function get_subj(){
        var sem=document.getElementById("sem").value;
        var temp="get_data.php?tb=sub&sem="+sem;
        //alert(temp);
        $.ajax({
        method: "GET",
        url: temp,
        success: function(data){
          $("#subject").append(data);
        }
      });
    }
  </script> 
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Show Result</h3>
              </div>

              <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <center>
                  <div class="x_content" style="margin-top: 2%;">
                      
                      <form method="post" class="">
                      <table class="tabel table-borderless">
                        <tr>
                          <td>
                            <div>
                              <select class="form-control" required id="sem" name="sem" onchange="get_subj();" autofocus="">
                                  <option hidden>Select Semester</option>
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
                                  <select id="subject" name="subject" style="margin-left: 5%" class="form-control">
                                  <option selected hidden>Select Subject</option>
                                  </select>
                                  </div>
                            </td>
                            <td>
                            <td>
                              <div>
                                <select class="form-control" required id="exam" style="margin-left: 5%" name="exam">
                                  <option selected hidden>Select Exam</option>
                                  <?php
                                    $q1="select * from exam_mst";
                                    $e1=$conn->query($q1);
                                    while($data=$e1->fetch_object()){
                                  ?>
                                  <option value='<?php echo $data->exam_id; ?>'><?php echo $data->exam_type; ?></option>";
                                  <?php
                                    }
                                  ?>
                                </select>
                              </div>
                            </td>
                            <td>
                              <div>
                                  <!-- <input type="submit" name="set_result" class="btn btn-primary" value="Show"> -->
                                  <button id="dis_res" name="show" class="btn btn-primary" style="margin-top: 10%; margin-left: 25%;">Show</button>
                              </div>
                          </td>
                        </tr>
                      </table>    
                    </form>  
                  </div>
                  
                  <div style="newone">
                    <table  class="table table-borderless" align="center" border="1" cellspacing="5" cellpadding="10" id="stud_tbody" style="width: 500px;margin-top: 3%">
                      <thead class="thead-light">
                      <tr>
                        <th>Student Id</th>
                        <th>Marks</th>
                      </tr>
                      </thead>
                      <?php
                        if (isset($_REQUEST['show'])) {
                        $uid = $_SESSION['id'];
                        $sem=$_REQUEST['sem'];
                        $subject=$_REQUEST['subject'];
                        $exam=$_REQUEST['exam'];
                        $uid=$_SESSION['id'];
                        // $q="SELECT * from subject_mst s, faculty_mst f where s.f_id = $uid  && s.dept_id=f.dept_id";
                        // $e = $conn->query($q);
                        // $data = $e->fetch_object();
                        // $sub_id = $data->sub_id;
                        // $q1="select * from result_mst where sub_id='$sub_id' and sem='$sem' and exam_id='$exam'";
                        $q1="select * from student_mst s,result_mst r where r.s_id=s.s_id && r.sem='$sem' && r.sub_id='$subject' && r.exam_id='$exam' && s.sem='$sem'";
                        $e1=$conn->query($q1);
                        if($e1->num_rows == 0){
                          ?>
                          <tr><td colspan="20" align="center"><i>No Records Found</i></td></tr>
                          <?php
                        }
                        while($data=$e1->fetch_object()){
                          ?>
                        <tr>
                          <td><?php echo $data->stud_id; ?></td>
                          <td><?php echo $data->marks; ?></td>
                        </tr>
                        <?php
                        if($e1->num_rows >= 1){
                          ?>
                          <tr>
                            <td colspan='3' align='center'><input type='submit' class='btn btn-primary' value='Update' name='update'>
                            </td>
                          </tr>
                      <?php
                        }
                      }
                      } 
                    ?>  
                      
                      
                    </table>
                  </div>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php
  include('foot.php');
?>   
