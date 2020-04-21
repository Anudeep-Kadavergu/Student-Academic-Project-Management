<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">

    <!-- Bootstrap Core CSS -->
    <link href="../dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../dist/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-1.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../dist/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../dist/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
<?php
include '../db/dbconnect.php';

$branch = $_POST['branch-reg'];
$semester = $_POST['semester-reg'];
$section = $_POST['section-reg'];

$sql = "SELECT student_id from student_details where student_branch = '$branch' and student_semester = '$semester'
 and student_section ='$section' order by student_id ";
 $result = mysqli_query($connection,$sql);
?>
<div class="w3-container" style="display: block;margin-top:10px;">
  <div class="row" style="display: inline-block;margin-top: -50px;margin-left: 0px;">

  <div class="col-lg-8">
  
  <div class="panel panel-default" style="min-width: 1000px;">
                        <div class="panel-heading">
                           Register Your Project Team Details
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                            <div class="pull-left">

                        <form method="post" action="home/self_generate.php" enctype = "multipart/form-data">
                              <div class="panel panel-default" style="float: left;">
                        <div class="panel-heading">
                           Project Team Leader
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="pull-left">
                              
                                    <div class="form-group">
                                        <label >Team Leader : </label>
                                        <select class="form-control col-xs-2" name="teamleader">
                                        <option value="" disabled selected>Roll NO</option>
                                        <option value="NONE">NONE</option>
                                        <?php while($row=mysqli_fetch_row($result)) { 
                                               $sql="select * from project_details where project_team_lead = '$row[0]' or project_member1 = '$row[0]' or project_member2 = '$row[0]' or project_member3 ='$row[0]' ";
                                               $ress=mysqli_query($connection,$sql);
                                               $r1=mysqli_num_rows($ress);
                                          ?>  
                                        <option value="<?php echo $row[0]; ?>"  <?php if($r1>0) {echo "disabled"; ?> style='color:#DAF7A6  ' <?php } ?> style="color:red" ><?php echo $row[0]; ?></option>
                                        <?php } ?>
                                        </select>
                                        <br>
                                        <label >Web Acces Key of  Team Leader :</label>
                                        <input class="form-control col-xs-2" type="password" name="teamleader1">
                                        
                                        <br>
                                        <br>

                                        
                                  
                          </div>
                        </div>
                      </div>
                      <!-- Panel Body -->

                    </div>
                       <!-- Panel  -->
                      <div class="panel panel-default" style="margin-left: 500px;height: 192px;">
                        <div class="panel-heading">
                           Project Team Member (1)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="padding-bottom: -20px;">
                            <div class="pull-left">
                              
                                    <div class="form-group">
                                        <label >Team Member (1) : </label>
                                        <select class="form-control col-xs-2"  name="teammember1">
                                       <option value="" disabled selected>Roll NO</option>
                                        <option value="NONE">NONE</option>
                                        <?php $sql = "SELECT student_id from student_details where student_branch = '$branch' and student_semester = '$semester'
 and student_section ='$section'  order by student_id ";
 $result = mysqli_query($connection,$sql); 
 while($row=mysqli_fetch_row($result)) {
                                               $sql="select * from project_details where project_team_lead = '$row[0]' or project_member1 = '$row[0]' or project_member2 = '$row[0]' or project_member3 ='$row[0]'";
                                                 $ress=mysqli_query($connection,$sql);
                                               $r1=mysqli_num_rows($ress);
  ?>

                                        <option value="<?php echo $row[0]; ?>" <?php if($r1>0){ echo "disabled"; ?> style='color:#DAF7A6  ' <?php } ?> style="color:red"><?php echo $row[0]; ?></option>
                                        <?php } ?>
                                        </select>
                                        <br>
                                        <label >Web Acces Key of Team Member (1) :</label>
                                        <input class="form-control col-xs-2" type="password"  name="teammember11">
                                        
                                        <br>

                                        
                                  
                          </div>
                        </div>
                      </div>
                      <!-- Panel Body -->

                    </div>
                       <!-- Panel  -->
                       <div class="panel panel-default" style="float: left;width: 450px;">
                        <div class="panel-heading">
                           Project Team Member (2)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="pull-left">
                              
                                    <div class="form-group">
                                        <label >Team Member (2) : </label>
                                        <select class="form-control col-xs-2"  name="teammember2">
                                      <option value="" disabled selected>Roll NO</option>
                                        <option value="NONE">NONE</option>
                                        <?php $sql = "SELECT student_id from student_details where student_branch = '$branch' and student_semester = '$semester'
 and student_section ='$section'  order by student_id ";
 $result = mysqli_query($connection,$sql); 
 while($row=mysqli_fetch_row($result)) { 
                                               $sql="select * from project_details where project_team_lead = '$row[0]' or project_member1 = '$row[0]' or project_member2 = '$row[0]' or project_member3 ='$row[0]'";
                                                 $ress=mysqli_query($connection,$sql);
                                               $r1=mysqli_num_rows($ress);

  ?>

                                        <option value="<?php echo $row[0]; ?>" <?php if($r1>0) { echo "disabled"; ?> style='color:#DAF7A6  ' <?php } ?> style="color:red" > <?php echo $row[0]; ?></option>
                                        <?php } ?>
                                        </select>
                                        <br>
                                        <label >Web Acces Key of Team Member (2) :</label>
                                        <input class="form-control col-xs-2" type="password"  name="teammember22">
                                        
                                        <br>

                                        
                                  
                          </div>
                        </div>
                      </div>
                      <!-- Panel Body -->

                    </div>
                       <!-- Panel  -->


                       <br>
                                    <br>
                                    <button type="submit" value="generatelist" class="btn btn-default"  name="generate-team" style="margin-left: 100px;margin-top: 0px;">Submit</button>
                                    <h5 style="margin-left: 550px;margin-top: 40px;"><p style="font-weight: 800;">Note : <br>
                                    * Web acces Keys are those generated during Student register<br>
                                  * If NONE is selected then Web Access Key is 'NONE'</p></h5>



                       </form>  
                          
                        </div>
                      </div>
                      <!-- Panel body -->
                    </div>
                    <!-- Panel -->
                  </div>
                  <!-- col-lg-7 -->
                </div>
                 <!-- row -->
                 
                 
              </div>
              <!-- Container -->
  