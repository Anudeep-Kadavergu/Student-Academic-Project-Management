<?php
include '../db/dbconnect.php';
$branch = $_POST['branch'];
$semester = $_POST['semester'];
$section = $_POST['section'];
$type=$_POST['pro-type-gen'];
if($type=='others'){

$student = mysqli_query($connection, "select * from student_details where student_branch='$branch' and student_semester='$semester' and student_section='$section' and project_type='$type' order by student_cgpa desc");
$faculty = mysqli_query($connection, "select * from faculty_details where faculty_branch='$branch' and faculty_section='$section' and faculty_semester='$semester' and project_type='others'");
while($row = mysqli_fetch_assoc($student)){
  $snoofstudent[] = $row['student_id'];
  
  }
  
  for($i=0,$j=0,$k=0;$i<(sizeof($snoofstudent));$i++){
    if($i<(sizeof($snoofstudent)/3)-1){
    $array1[$i] = $snoofstudent[$i];
    }
    elseif ($i<2*( sizeof($snoofstudent)/3)-1) {
      $array2[$j]=$snoofstudent[$i];
      $j++;
    }elseif ($i<(sizeof($snoofstudent))) {
      $array3[$k]=$snoofstudent[$i];
      $k++;
    }
  }
  while($row = mysqli_fetch_assoc($faculty)){
    $snooffaculty[] = $row['faculty_id'];
  }


  shuffle($snooffaculty);
  shuffle($array1);
  shuffle($array2);
  shuffle($array3);

  $remaining = sizeof($snoofstudent)%3;
  $extra = array();
  $flag = 0;
  if($remaining == 1){ 
    $extra[0] = $array3[sizeof($array3)-1];
    $flag = 1;
  }
  elseif ($remaining == 2) {
    $extra[0] = $array3[sizeof($array3)-1];
    $extra[1] = $array3[sizeof($array3)-2];
    $flag = 2;  
  }

  $var = 0;
  $var1=0;
  while($var<sizeof($array1)){
    if($var1==(sizeof($snooffaculty)-1))
      $var1=0;

    if($flag==0){
      if($var1==(sizeof($snooffaculty)-1))
      $var1=0;
            $id='VCE'.substr(str_shuffle(str_repeat("0123456789", 4)), 0, 4);
            $s = substr(str_shuffle(str_repeat("0123456789QWERTYUIOPLKJHGFDSAZXCVBNM", 4)), 0, 4);$s='#'.$s;
      $query1 = "INSERT into generate (branch,section,semester,student1,student2,student3,student4,project_id,password,faculty_id,project_type) VALUES ('$branch','$section','$semester','$array1[$var]','$array2[$var]','$array3[$var]','NONE','$id','$s','$snooffaculty[$var1]','$type')";
      mysqli_query($connection, $query1);
       $query1 = "INSERT into project_details (project_id,password,project_name,project_team_lead,project_status,project_member1,project_member2,project_member3,faculty_id,review1,review2,review3,final,specification,project_type) VALUES ('$id','$s','--------','$array1[$var]','Waiting for Guide Approval','$array2[$var]','$array3[$var]','NONE','$snooffaculty[$var1]',0,0,0,0,'NULL','$type')";
      mysqli_query($connection, $query1);
      $var++;
      $var1++;

    }
    elseif($flag==1){
      if($var1==(sizeof($snooffaculty)-1))
      $var1=0;
       $id='VCE'.substr(str_shuffle(str_repeat("0123456789", 4)), 0, 4);
       $s = substr(str_shuffle(str_repeat("0123456789QWERTYUIOPLKJHGFDSAZXCVBNM", 4)), 0, 4);$s='#'.$s;
      $query1 = "INSERT into generate (branch,section,semester,student1,student2,student3,student4,project_id,password,faculty_id,project_type) VALUES ('$branch','$section','$semester','$array1[$var]','$array2[$var]','$array3[$var]','$extra[0]','$id','$s','$snooffaculty[$var]','$type')";
      mysqli_query($connection, $query1);
      $flag = 0;
     
      $query1 = "INSERT into project_details (project_id,password,project_name,project_team_lead,project_status,project_member1,project_member2,project_member3,faculty_id,review1,review2,review3,final,specification,project_type) VALUES ('$id','$s','--------','$array1[$var]','Waiting for Guide Approval','$array2[$var]','$array3[$var]','$extra[0]','$snooffaculty[$var1]',0,0,0,0,'NULL','$type')";
      mysqli_query($connection, $query1);
      $var++;
      $var1++;
      
    }
    elseif($flag==2){
      if($var1==(sizeof($snooffaculty)-1))
      $var1=0;
      $id='VCE'.substr(str_shuffle(str_repeat("0123456789", 4)), 0, 4);
      $s = substr(str_shuffle(str_repeat("0123456789QWERTYUIOPLKJHGFDSAZXCVBNM", 4)), 0, 4);$s='#'.$s;
      $query1 = "INSERT into generate (branch,section,semester,student1,student2,student3,student4,project_id,password,faculty_id,project_type) VALUES ('$branch','$section','$semester','$array1[$var]','$array2[$var]','$array3[$var]','$extra[0]','$id','$s','$snooffaculty[$var]','$type')";
  
      mysqli_query($connection, $query1);
      
       $query1 = "INSERT into project_details (project_id,password,project_name,project_team_lead,project_status,project_member1,project_member2,project_member3,faculty_id,review1,review2,review3,final,specification,project_type) VALUES ('$id','$s','--------','$array1[$var]','Waiting for Guide Approval','$array2[$var]','$array3[$var]','$extra[0]','$snooffaculty[$var1]',0,0,0,0,'NULL','$type')";
      mysqli_query($connection, $query1);
      $var++;
      $var1++;

      
      $id='VCE'.substr(str_shuffle(str_repeat("0123456789", 4)), 0, 4);
      $s = substr(str_shuffle(str_repeat("0123456789QWERTYUIOPLKJHGFDSAZXCVBNM", 4)), 0, 4);$s='#'.$s;
      $query1 = "INSERT into generate (branch,section,semester,student1,student2,student3,student4,project_id,password,faculty_id,project_type) VALUES ('$branch','$section','$semester','$array1[$var]','$array2[$var]','$array3[$var]','$extra[1]','$id','$s','$snooffaculty[$var]','$type')";
  
      mysqli_query($connection, $query1);
      
       $query1 = "INSERT into project_details (project_id,password,project_name,project_team_lead,project_status,project_member1,project_member2,project_member3,faculty_id,review1,review2,review3,final,specification,project_type) VALUES ('$id','$s','--------','$array1[$var]','Waiting for Guide Approval','$array2[$var]','$array3[$var]','$extra[1]','$snooffaculty[$var1]',0,0,0,0,'NULL','$type')";
      mysqli_query($connection, $query1);
        $var++;
        $var1++;
      $flag = 0;

    }
  
}
echo "<script> alert('SUCCESSFULLY GENERATED '); window.location='admin.php'; </script>";
}
elseif($type=='mini-project'){
  $student = mysqli_query($connection, "select * from student_details where student_branch='$branch' and student_semester='$semester' and student_section='$section'  order by student_cgpa desc");
while($row = mysqli_fetch_assoc($student)){
  $snoofstudent[] = $row['student_id'];
  
  }
  
  for($i=0,$j=0,$k=0;$i<(sizeof($snoofstudent));$i++){
    if($i<(sizeof($snoofstudent)/3)-1){
    $array1[$i] = $snoofstudent[$i];
    }
    elseif ($i<2*( sizeof($snoofstudent)/3)-1) {
      $array2[$j]=$snoofstudent[$i];
      $j++;
    }elseif ($i<(sizeof($snoofstudent))) {
      $array3[$k]=$snoofstudent[$i];
      $k++;
    }
  }
 
  shuffle($array1);
  shuffle($array2);
  shuffle($array3);

  $remaining = sizeof($snoofstudent)%3;
  $extra = array();
  $flag = 0;
  if($remaining == 1){ 
    $extra[0] = $array3[sizeof($array3)-1];
    $flag = 1;
  }
  elseif ($remaining == 2) {
    $extra[0] = $array3[sizeof($array3)-1];
    $extra[1] = $array3[sizeof($array3)-2];
    $flag = 2;  
  }

  $var = 0;
  while($var<sizeof($array1)){

    if($flag==0){
            $id='VCE'.substr(str_shuffle(str_repeat("0123456789", 4)), 0, 4);
            $s = substr(str_shuffle(str_repeat("0123456789QWERTYUIOPLKJHGFDSAZXCVBNM", 4)), 0, 4);$s='#'.$s;
      $query1 = "INSERT into generate (branch,section,semester,student1,student2,student3,student4,project_id,password,faculty_id,project_type) VALUES ('$branch','$section','$semester','$array1[$var]','$array2[$var]','$array3[$var]','NONE','$id','$s','VCE511','$type')";
      mysqli_query($connection, $query1);
       $query1 = "INSERT into project_details (project_id,password,project_name,project_team_lead,project_status,project_member1,project_member2,project_member3,faculty_id,review1,review2,review3,final,specification,project_type) VALUES ('$id','$s','--------','$array1[$var]','Waiting for Guide Approval','$array2[$var]','$array3[$var]','NULL','VCE511',0,0,0,0,'NULL','$type')";
      mysqli_query($connection, $query1);
      $var++;

    }
    elseif($flag==1){
       $id='VCE'.substr(str_shuffle(str_repeat("0123456789", 4)), 0, 4);
       $s = substr(str_shuffle(str_repeat("0123456789QWERTYUIOPLKJHGFDSAZXCVBNM", 4)), 0, 4);$s='#'.$s;
      $query1 = "INSERT into generate (branch,section,semester,student1,student2,student3,student4,project_id,password,faculty_id,project_type) VALUES ('$branch','$section','$semester','$array1[$var]','$array2[$var]','$array3[$var]','$extra[0]','$id','$s','VCE511','$type')";
      mysqli_query($connection, $query1);
      $flag = 0;
     
      $query1 = "INSERT into project_details (project_id,password,project_name,project_team_lead,project_status,project_member1,project_member2,project_member3,faculty_id,review1,review2,review3,final,specification,project_type) VALUES ('$id','$s','--------','$array1[$var]','Waiting for Guide Approval','$array2[$var]','$array3[$var]','$extra[0]','VCE511',0,0,0,0,'NULL','$type')";
      mysqli_query($connection, $query1);
      $var++;

      
    }
    elseif($flag==2){
      $id='VCE'.substr(str_shuffle(str_repeat("0123456789", 4)), 0, 4);
      $s = substr(str_shuffle(str_repeat("0123456789QWERTYUIOPLKJHGFDSAZXCVBNM", 4)), 0, 4);$s='#'.$s;
      $query1 = "INSERT into generate (branch,section,semester,student1,student2,student3,student4,project_id,password,faculty_id,project_type) VALUES ('$branch','$section','$semester','$array1[$var]','$array2[$var]','$array3[$var]','$extra[0]','$id','$s','VCE511','$type')";
  
      mysqli_query($connection, $query1);
      
       $query1 = "INSERT into project_details (project_id,password,project_name,project_team_lead,project_status,project_member1,project_member2,project_member3,faculty_id,review1,review2,review3,final,specification,project_type) VALUES ('$id','$s','--------','$array1[$var]','Waiting for Guide Approval','$array2[$var]','$array3[$var]','$extra[0]','VCE511',0,0,0,0,'NULL','$type')";
      mysqli_query($connection, $query1);
      $var++;

      
      $id='VCE'.substr(str_shuffle(str_repeat("0123456789", 4)), 0, 4);
      $s = substr(str_shuffle(str_repeat("0123456789QWERTYUIOPLKJHGFDSAZXCVBNM", 4)), 0, 4);$s='#'.$s;
      $query1 = "INSERT into generate (branch,section,semester,student1,student2,student3,student4,project_id,password,faculty_id,project_type) VALUES ('$branch','$section','$semester','$array1[$var]','$array2[$var]','$array3[$var]','$extra[1]','$id','$s','VCE511','$type')";
  
      mysqli_query($connection, $query1);
      
       $query1 = "INSERT into project_details (project_id,password,project_name,project_team_lead,project_status,project_member1,project_member2,project_member3,faculty_id,review1,review2,review3,final,specification,project_type) VALUES ('$id','$s','--------','$array1[$var]','Waiting for Guide Approval','$array2[$var]','$array3[$var]','$extra[1]','VCE511',0,0,0,0,'NULL','$type')";
      mysqli_query($connection, $query1);
        $var++;
      $flag = 0;

    }
  else{

  }
}

echo "<script> alert('SUCCESSFULLY GENERATED '); window.location='admin.php'; </script>";
}
?>