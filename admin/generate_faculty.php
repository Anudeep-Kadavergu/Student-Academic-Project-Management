<?php
include '../db/dbconnect.php';
$branch = $_POST['branch-fac'];
$type=$_POST['pro-type-gen-fac'];
 $student=mysqli_query($connection,"select * from project_details where project_id in (select project_id from generate where branch='$branch') order by specification");
$current_cat = null;
$i=0;
while ($row = mysqli_fetch_assoc($student)) {
  if ($row["specification"] != $current_cat) {
    $current_cat = $row["specification"];
    ${"a"."_".$current_cat}=array();
    $i=0;
    }
${"a"."_".$current_cat}[$i]=$row['project_id'];
$i++;

  
}
$student1=mysqli_query($connection,"select DISTINCT(specification) from project_details where project_id in (select project_id from generate where branch='$branch')");
$j=0;
$specify=array();
while($row= mysqli_fetch_assoc($student1)){
	$specify[$j++]=$row['specification'];
}
$snooffaculty=array();
$l=0;
$v=0;
while($v<sizeof($specify)){
	$faculty=mysqli_query($connection,"select * from faculty_details where faculty_branch='$branch' and project_type='$type' and specification='$specify[$l]'");
	$u=0;
	while($row = mysqli_fetch_assoc($faculty)){
    $snooffaculty[$u] = $row['faculty_id'];
    $u++;
  }
  $var=0;
  $i=0;
  $v2=0;
  while($v2<sizeof(${"a"."_".$specify[$l]})){
   if($var==(sizeof($snooffaculty)))
      $var=0;
  $fac=$snooffaculty[$var];
  $pro=${"a"."_".$specify[$l]}[$i];
  mysqli_query($connection,"UPDATE project_details set faculty_id='$fac' where project_id='$pro'");
  $var++;
  $i++;
  $v2++;
}
$l++;
$v++;


}
echo "success";

?>