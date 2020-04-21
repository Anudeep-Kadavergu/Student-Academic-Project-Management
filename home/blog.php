<?php
include '../db/dbconnect.php';
$id = $_POST['id'];
$text = $_POST['text'];
$sql = "UPDATE `blog` SET answer = '$text' where id = '$id'";
mysqli_query($connection, $sql);
?>