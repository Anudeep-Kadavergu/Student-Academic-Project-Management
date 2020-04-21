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
    <style type="text/css">
      img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);}
    @media(max-width: 1024px) {
    .row{margin-left: 0px;}
}


    

    </style>
    


<?php
include '../db/dbconnect.php';

$rollno = $_POST['rollno'];
$pass = $_POST['pass'];

$sql="select * from student_details where student_id ='$rollno' and student_pass='$pass'";
$result = mysqli_query($connection, $sql);
$count = mysqli_num_rows($result);
$sql1="select * from project_details where project_team_lead ='$rollno' or  project_member1='$rollno' or  project_member2='$rollno' or  project_member3='$rollno'";
$result1 = mysqli_query($connection, $sql1);
$count1 = mysqli_num_rows($result1);
$row = $result->fetch_assoc();
if($count==1 && $count1 == 1){
    
    ?>
    


<div class="row" style="display: block;margin-top: -50px;margin-left: 0px;">

  
  <div class="col-lg-7">
  
  <div class="panel panel-default" style="min-width: 750px;">
                        <div class="panel-heading">
                           Student Details
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                            <div class="pull-left">
                              <div class="panel panel-default" style="margin-left: 80px;border:none;box-shadow: none;">
                                <div class="panel-body">
                            <div class="pull-left" >
                              <img src="http://resources.vardhaman.org/images/<?php echo strtolower($row['student_branch']); ?>/<?php echo $rollno ?>.jpg" style="width:122px;height:140px;border:solid 5px #AAAAAA">
                            </div>
                            

                            <div style="float: right;margin-left: 50px;margin-right: 50px;padding-top: 20px;">
                              <font color="#0000FF" size="4" <b="">
 <?php echo strtoupper($row['student_name']); ?><br><?php echo strtoupper($row['student_id']); ?><br><?php echo strtoupper($row['student_semester']); ?> Semester - <?php echo strtoupper($row['student_section']); ?> Section <br><?php $bb = array("CSE"=>"Computer Science and Engineering", "ECE"=>"Electronics and Communication Engineering", "CIVIL"=>"Civil Engineering","MECH"=>"Mechanical Engineering","EEE"=>"Electrical and Electronic Engineering"); echo $bb[$row['student_branch']] ?>       
        </font>
                            </div>
                          </div><!--image body-->
                            </div><!-- image panel-->
                            <?php 
                            $sql="select * from project_details where project_team_lead='$rollno' or project_member1='$rollno' or project_member2='$rollno' or project_member3='$rollno'";
                            $resultpro = mysqli_query($connection, $sql);
    $rowpro = mysqli_fetch_assoc($resultpro);

                            ?>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                          Project Details
                        </div>
                                <div class="panel-body" >
                            <div class="pull-left" >
                              <div class="panel panel-default"  style="float: left">
                              <div class="panel-heading" style="padding-right: 150px;">
                          Project ID
                        </div>
                                <div class="panel-body">
                            <div class="pull-left" >
                              <h5><?php echo $rowpro['project_id'] ?></h5>

                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default" style="float: right;margin-left: 50px;">
                              <div class="panel-heading" style="padding-right: 100px;">
                          Project Password
                        </div>
                                <div class="panel-body">
                            
                              <h5><?php echo $rowpro['password'] ?></h5>

                            
                          </div>
                        </div>

                            </div>
                          </div>
                        </div>
                        <?php
                        $aa=$rowpro['faculty_id'];
                        $sql="SELECT * from faculty_details where faculty_id='$aa'";
                        $resultfac=mysqli_query($connection,$sql);
                        $rowfac=mysqli_fetch_assoc($resultfac); 
                        ?>
                        <div class="panel panel-default" >
                              <div class="panel-heading">
                          Project Faculty
                        </div>
                                <div class="panel-body">
                            <div class="pull-left" >
                              <a href="https://vardhaman.org/faculty-profile-cs/" target="_blank"><h5>Faculty Id : <?php echo $rowfac['faculty_id'] ?></h5></a>
                              <h5>Name   : <?php echo $rowfac['faculty_name'] ?></h5>
                              <h5>Branch : <?php echo $rowfac['faculty_branch'] ?></h5>
                              <h5>Email  : <?php echo $rowfac['faculty_email'] ?></h5>

                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default" >
                              <div class="panel-heading">
                          Project Members
                        </div>
                                <div class="panel-body">
                            <div class="pull-left" >
                              <h5><a href="http://resources.vardhaman.org/images/<?php echo strtolower($row['student_branch']); ?>/<?php echo $rowpro['project_team_lead'] ?>.jpg" target="_blank"><img src="http://resources.vardhaman.org/images/<?php echo strtolower($row['student_branch']); ?>/<?php echo $rowpro['project_team_lead'] ?>.jpg" style="width:30px;height:30px;border:solid 1px #AAAAAA;border-radius: 50%"></a> <?php echo $rowpro['project_team_lead'] ?> (Team Leader)</h5>
                              <h5><a href="http://resources.vardhaman.org/images/<?php echo strtolower($row['student_branch']); ?>/<?php echo $rowpro['project_member1'] ?>.jpg"  target="_blank"><img src="http://resources.vardhaman.org/images/<?php echo strtolower($row['student_branch']); ?>/<?php echo $rowpro['project_member1'] ?>.jpg" style="width:30px;height:30px;border:solid 1px #AAAAAA;border-radius: 50%"></a>  <?php echo $rowpro['project_member1'] ?> (Team Member)</h5>
                              <h5><a href="http://resources.vardhaman.org/images/<?php echo strtolower($row['student_branch']); ?>/<?php echo $rowpro['project_member2'] ?>.jpg"  target="_blank"><img src="http://resources.vardhaman.org/images/<?php echo strtolower($row['student_branch']); ?>/<?php echo $rowpro['project_member2'] ?>.jpg" style="width:30px;height:30px;border:solid 1px #AAAAAA;border-radius: 50%"></a>  <?php echo $rowpro['project_member2'] ?> (Team Member)</h5>
                              <h5><?php if($rowpro['project_member3']!='NONE'){ ?><a href="http://resources.vardhaman.org/images/<?php echo strtolower($row['student_branch']); ?>/<?php echo $rowpro['project_member3'] ?>.jpg"  target="_blank"><img src="http://resources.vardhaman.org/images/<?php echo strtolower($row['student_branch']); ?>/<?php echo $rowpro['project_member3'] ?>.jpg" style="width:30px;height:30px;border:solid 1px #AAAAAA;border-radius: 50%"></a><?php echo ''.$rowpro['project_member3'],' (Team Member)'; }?> </h5>

                            </div>
                          </div>
                        </div>
                        



                                 
                                   </div><!--main left-->
                        
                        </div>   <!-- /.panel-heading --> 
                    </div><!-- /.panel -->
                </div><!-- col-lg-7 -->
</div><!--row-->

  </div>
 
  <?php 

}
else
{
 ?>
   
 
  <center>
   

    <img src="http://resources.vardhaman.org/images/<?php echo strtolower($row['student_branch']); ?>/<?php echo $rollno ?>.jpg" style="width:122px;height:140px;border:solid 5px #AAAAAA">
  
  <?php

 echo "<h1 style='color:red'>Sorry! No Project Details Found</h1></center>";
}
?>
