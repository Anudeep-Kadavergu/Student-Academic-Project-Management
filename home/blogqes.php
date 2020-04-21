<?php
include '../db/dbconnect.php';
$text=$_POST['text'];
$id=substr(str_shuffle(str_repeat("0123456789", 8)), 0, 8);
$sql="INSERT INTO `blog`(`id`, `question`, `answer`) VALUES ('$id','$text','')";
mysqli_query($connection,$sql);
?>