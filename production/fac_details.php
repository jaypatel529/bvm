<?php
  include('top.php');
  //ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
  <script type="text/javascript">
  function upd_pc(x){
    var x=x.substring(0,x.length-1);

    var e=x;
    var t1=e+"t1";
    var t2=e+"t2";
    var t3=e+"t3";
    // var t4=e+"t4";
    // var t5=e+"t5";
    // var t6=e+"t6";
    // var t7=e+"t7";
    // var t8=e+"t8";
    // var t9=e+"t9";

    var d1=document.getElementById(t1).value;
    var d2=document.getElementById(t2).value;
    var d3=document.getElementById(t3).value;
    // var d4=document.getElementById(t4).value;
    // var d5=document.getElementById(t5).value;
    // var d6=document.getElementById(t6).value;
    // var d7=document.getElementById(t7).value;
    // var d8=document.getElementById(t8).value;
    // var d9=document.getElementById(t9).value;

    $.ajax({
      type: "GET",
      url: 'update.php?tn=faculty&v1='+d1+'&v2='+d2+'&v3='+d3+'&f_id='+x,
      success: function(data){
        //alert(data);
      }
    });
    var ans=x+"m";
    var data1="<button type='button' class='btn btn-warning' id='"+x+"' style='display: block;' onclick='edit1(this.id);'><i class='fa fa-edit'></i></button>";
    document.getElementById(ans).innerHTML=data1;
    var tb=x+"t";
    var d=x+"d";
    
    document.getElementById(t1).disabled=true;
    document.getElementById(t2).disabled=true;
    document.getElementById(t3).disabled=true;
    // document.getElementById(t4).disabled=true;
    // document.getElementById(t5).disabled=true;
    // document.getElementById(t6).disabled=true;
    // document.getElementById(t7).disabled=true;
    // document.getElementById(t8).disabled=true;
    // document.getElementById(t9).disabled=true;

  }
  function rev(x){
    x=x.substring(0,x.length-1);
    var ans=x+"m";
    var data1="<button type='button' class='btn btn-warning' id='"+x+"' style='display: block;' onclick='edit1(this.id);'><i class='fa fa-edit'></i></button>";
    document.getElementById(ans).innerHTML=data1;
    // var tb=x+"t";
    // var d=x+"d";
    var e=x;
    var t1=e+"t1";
    var t2=e+"t2";
    var t3=e+"t3";
    // var t4=e+"t4";
    // var t5=e+"t5";
    // var t6=e+"t6";
    // var t7=e+"t7";
    // var t8=e+"t8";
    // var t9=e+"t9"; 
    
    document.getElementById(t1).disabled=true;
    document.getElementById(t2).disabled=true;
    document.getElementById(t3).disabled=true;
    // document.getElementById(t4).disabled=true;
    // document.getElementById(t5).disabled=true;
    // document.getElementById(t6).disabled=true;
    // document.getElementById(t7).disabled=true;
    // document.getElementById(t8).disabled=true;
    // document.getElementById(t9).disabled=true;
  }
  function edit1(e){
    // alert(e);
    var t1=e+"t1";
    var t2=e+"t2";
    var t3=e+"t3";
    // var t4=e+"t4";
    // var t5=e+"t5";
    // var t6=e+"t6";
    // var t7=e+"t7";
    // var t8=e+"t8";
    // var t9=e+"t9";
    // var d = e+"d";
    
    document.getElementById(t1).disabled=false;
    document.getElementById(t2).disabled=false;
    document.getElementById(t3).disabled=false;
    // document.getElementById(t4).disabled=false;
    // document.getElementById(t5).disabled=false;
    // document.getElementById(t6).disabled=false;
    // document.getElementById(t7).disabled=false;
    // document.getElementById(t8).disabled=false;
    // document.getElementById(t9).disabled=false;
    
    // document.getElementById(d).disabled=false;
    var u=e+"u";
    var c=e+"c";
    var md=e+"m";
    var data="<button type='button' class='btn btn-green' onclick='upd_pc(this.id);' id='"+u+"'><i class='fa fa-arrow-up'></i></button>&nbsp;<button type='button' onclick='rev(this.id);' class='btn btn-red' id='"+c+"' ><i class='fa fa-remove'></i></button>";
    document.getElementById(md).innerHTML=data;
  }
  </script>
</head>
</html>
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
                    <table  class="table table-borderless" style="" align="center" id="fac_tbody"
                    style=" font-size: 15px; margin-top: 2%; overflow-x: scroll; word-wrap: break-word; white-space: nowrap;display: block;">
                      <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Faculty Name</th>
                        <!-- <th>Address</th>
                        <th>DOB</th>
                        <th>Gender</th> -->
                        <th>Email ID</th>
                        <!-- <th>Contact NO</th> -->
                        <th>Faculty ID</th>
                        <th>Edit</th>
                        <!-- <th colspan="2">Manupulation</th> -->
                      </tr>
                      </thead>
                      <tbody class="jay">
                      <?php
                          $uid=$_SESSION['id'];
                          $q="SELECT * from sub_admin sa, dept_mst d where sa.sadmin_id = $uid  && sa.dept_id=d.dept_id";
                          $e1 = $conn->query($q);
                          $data = $e1->fetch_object();
                          $dept_id = $data->dept_id;
                          $q1="select * from faculty_mst f, dept_mst d where d.dept_id=f.dept_id && f.dept_id='$dept_id'";
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
                          <td><?php echo $i;
                                  $temp2=$data->f_id;
                                  $id1=$data->f_id;
                                  $id1.="t1";
                                  $id2=$temp2."t2";
                                  $id3=$temp2."t3";
                                  // $id4=$temp2."t4";
                                  // $id5=$temp2."t5";
                                  // $id6=$temp2."t6";
                                  // $id7=$temp2."t7";
                                  // $id8=$temp2."t8";
                                  // $id9=$temp2."t9";
                                  $md=$temp2."m";
                              ?>
                          </td>
                          <td><input type="text" id="<?php echo $id1; ?>" value="<?php echo $data->fname; ?>" disabled></td>
                          <td><input type="text" id="<?php echo $id2; ?>"value="<?php echo $data->email; ?>" disabled></td>
                          <td><input type="text" id="<?php echo $id3; ?>"value="<?php echo $data->fac_id; ?>" disabled></td>
                          <!-- <td style="vertical-align: baseline;"></td>
                          <td style="vertical-align: baseline;"></td>
                          <td style="vertical-align: baseline;"></td>
                           --><td><div id="<?php echo $md; ?>" style="">
                                  <button type="button" class="btn btn-warning" id="<?php echo $data->f_id; ?>" style="display: block;" onclick="edit1(this.id);">
                                  <i class="fa fa-edit"></i>
                                  </button>
                              </div>
                          </td>
                          <!-- <td><div style="margin-left: -50%;">
                            <button type="button" class="btn btn-danger" href="delfac.php?fid=<?php //echo $data->f_id; ?>" style="display: block;">
                            <i class="fa fa-remove"></i>
                            </button>
                            </div>
                          </td> -->
                          <!-- <td style="vertical-align: baseline;"><a class="btn btn-primary" href="delfac.php?fid=<?php //echo $data->f_id; ?>" style="color: white"> Delete </a></td> -->
                          <!-- <td style="vertical-align: baseline;"><button class="btn btn-primary"><a href="updatefac.php?fid=<?php// echo $data->f_id; ?>" style="color: white"> Update </a></button> </td> -->
                        </tr>
                        <?php
                          }
                        ?>
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
<?php 
  include('foot.php');
?>