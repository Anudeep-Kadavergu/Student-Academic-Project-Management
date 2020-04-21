<?php
include '../db/dbconnect.php';
session_start();

if(isset($_POST['admin-btn'])){

    $id = $_POST['adminid'];
    $pass = $_POST['adminpass'];

//$result = mysqli_query($connection,"select * from faculty_details where faculty_id='$id' and faculty_pass='$pass'");
    if($id=='admin'&&$pass=='EPICS@cse2019')
    {
        $_SESSION['adminid'] = $id;
        header('Location: ../admin/admin.php');
    }
    else
        echo "Username or Password is incorrect";
}

if(isset($_POST['student-btn'])){
    
    $id = $_POST['studentid'];
    $pass = $_POST['studentpass'];
    
    $result = mysqli_query($connection,"select * from project_details where project_id='$id' and password='$pass'");
    if(mysqli_num_rows($result)==1)
    {
       $_SESSION['projectid'] = $id;
       header('Location: ../student/student.php');
   }
   else
    echo "Username or Password is incorrect";
}
if(isset($_POST['student-btn-log'])){
    
    $id = $_POST['studentid'];
    $pass = $_POST['studentpass'];
    
    $result = mysqli_query($connection,"select * from student_details where student_id='$id' and student_pass='$pass'");
    if(mysqli_num_rows($result)==1)
    {
       $_SESSION['studentid'] = $id;
       header('Location: virtuallab/student.php');
   }
   else
    echo "Username or Password is incorrect";
}

if(isset($_POST['faculty-btn'])){
    
    $id = $_POST['facultyid'];
    $pass = $_POST['facultypass'];
    
    $result = mysqli_query($connection,"select * from faculty_details where faculty_id='$id' and faculty_pass='$pass'");
    if(mysqli_num_rows($result)!=0)
    {
        $_SESSION['facultyid'] = $id;
        header('Location: ../faculty/faculty.php');
    }
    else
        echo "Username or Password is incorrect";
}


?>