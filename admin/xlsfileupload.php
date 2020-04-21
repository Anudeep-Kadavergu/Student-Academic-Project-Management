<?php
include_once '../db/dbconnect.php';

  $branch = $_POST['branch'];
  $semester = $_POST['semester'];
  $section = $_POST['section'];
  $type=$_POST['pro-type'];

if(isset($_POST['upload'])){
 
 $query = "INSERT into data_table (branch,section,semester) VALUES ('$branch','$section','$semester')";
 mysqli_query($connection, $query);

 $studentname = $_FILES["student_form"]["name"];
 $facultyname = $_FILES["faculty_form"]["name"];
 $target_dir_student = "List/Student";
 $target_dir_faculty = "List/Faculty";
 $student_target_file = $target_dir_student . basename($_FILES["student_form"]["name"]);
 $faculty_target_file = $target_dir_faculty . basename($_FILES["faculty_form"]["name"]);

 //Extensions
 $student_FileType = strtolower(pathinfo($student_target_file,PATHINFO_EXTENSION));
 $faculty_FileType = strtolower(pathinfo($faculty_target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("xlsx","xls","xlsm");
 
  // Check extension
  if( in_array($student_FileType,$extensions_arr) && in_array($faculty_FileType,$extensions_arr) ){
  
    $query0result = mysqli_query($connection,"SELECT * from list");

   // Upload file
   move_uploaded_file($_FILES['student_form']['tmp_name'],$target_dir_student.$studentname);
   move_uploaded_file($_FILES['faculty_form']['tmp_name'],$target_dir_faculty.$facultyname);
    
   $filename_student = "List/Student/".$branch.$semester.$section.$type.".".$student_FileType;
   $filename_faculty = "List/Faculty/".$branch.$semester.$section.$type.".".$faculty_FileType;
   rename($student_target_file,$filename_student);
   rename($faculty_target_file,$filename_faculty);
   
  
   include_once 'exceltodatabase.php';
   ?>
   <script> window.alert("Files Uploaded to Server"); window.location='admin.php';</script>
   <?php
   
  }
  else{
    //echo '<script> alert("Please Upload valid Files"); </script>';
  }
}

if(isset($_POST['delete'])){
  
  $result = mysqli_query($connection, "SELECT * from data_table where branch='$branch' and section='$section' and semester='$semester'");
  
  if(mysqli_num_rows($result)!=0){
  $query = "DELETE from student_details where student_section='$section' and student_branch='$branch' and student_semester='$semester' and project_type='$type'";
  mysqli_query($connection, $query);

  $query1 = "DELETE from faculty_details where faculty_branch='$branch' and faculty_semester='$semester' and faculty_section='$section' and project_type='$type'";
  mysqli_query($connection, $query1);

  $query2 = "DELETE from data_table where branch='$branch' and section='$section' and semester='$semester'";
  mysqli_query($connection, $query2);

  $query3 = "DELETE from project_details where project_id in (select project_id from generate where branch='$branch' and section='$section' and semester='$semester' and project_type='$type' )";
   mysqli_query($connection, $query3);

    $query4 = "DELETE from generate where branch='$branch' and section='$section' and semester='$semester' and project_type='$type'";
    mysqli_query($connection, $query4);

  header("Location: admin.php");
  }
}
?>