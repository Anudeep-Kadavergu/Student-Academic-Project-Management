<html>
<head>
	<title></title>
	<style type="text/css">
	.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(Preloader_8.gif) center no-repeat #fff;
  background-size: 100px 100px;
}


*, div{
  box-sizing: border-box;
  font-family: sans-serif;
  text-align: center;}
  

  
.modal, .prompt{
  position: fixed;
  top: 160px;
  left: 0px;
  right: 0px;
  margin: 0 auto;
  display: block;
  background: white;
  padding: 40px;
  width: 600px;
  max-width: 100%;
  z-index: 1;
}
.modal-head{
  position: fixed;
  top: 90px;
  left: 0px;
  right: 0px;
  margin: 0 auto;
  display: block;
  background: white;
  width: 600px;
  max-width: 100%;
  z-index: 1;
}


button{
  border: none;
   background-color:  #4CAF50;
   font-weight: bold;
   color: blue;
   font-size: 14px;
   padding: 15px;
   cursor: pointer;
   float: right;
   outline: none;
   border:1px solid red;
   border-radius: 10%;
}
   button:hover{
     background-color: gray;
 }
   
  

  

  

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<script>
	function goBack(){
		window.history.back();
	}
  //paste this code under the head tag or in a separate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    //$(".se-pre-con").fadeOut("slow");
     setTimeout(function(){ $('.se-pre-con').fadeOut() }, 1000);
  });
</script>
</head>
<body style="background:grey;opacity:0.9" >
<div class="se-pre-con"></div>
<div id='rrr'>
</div>
<?php
//error_reporting(0);
include '../db/dbconnect.php'; 
if(isset($_POST['generate-team'])) {
	$teamlead=$_POST['teamleader'];
	$leadpass=$_POST['teamleader1'];
	$member1=$_POST['teammember1'];
	$member1pass=$_POST['teammember11'];
	$member2=$_POST['teammember2'];
	$member2pass=$_POST['teammember22'];
	
	if($member1pass == null || $member2pass == null || $leadpass == null){
		//echo "<script> alert('FILL ALL THE FIELDS '); window.location='index.php'; </script>";
		?>
  	<div class="modal-head" style="background: red;">
    <h2>Your Message</h2>
</div>
  <div class="modal">
    
    <p>Fill All the Fields <br><br> Please Try Again </p>
   <button id="gotit" onclick='goBack()'>GOT IT!</button>
  </div>

			<?php
	}
	else if ($teamlead == $member1 || $member1 == $member2 || $member2 == $teamlead){
		//echo "<script> alert('CHOOSE DIFFERENT TEAM MEMBERS  ') ; window.location='index.php'; </script>";
		?>
  	<div class="modal-head" style="background: red;">
    <h2>Your Message</h2>
</div>
  <div class="modal">
    
    <p>Choose Different Team Members <br><br> Please Try Again </p>
   <button id="gotit" onclick='goBack()'>GOT IT!</button>
  </div>

			<?php
	}
	else{
		if($member2=="NONE"){
			$sql = "select * from project_details where project_team_lead in('$teamlead','$member1','$member2') OR project_member1 in('$teamlead','$member1') OR project_member2 in('$teamlead','$member1') OR project_member3 in('$teamlead','$member1') ";
		$result=mysqli_query($connection,$sql);

		}
		else{
			$sql = "select * from project_details where project_team_lead in('$teamlead','$member1','$member2') OR project_member1 in('$teamlead','$member1','$member2') OR project_member2 in('$teamlead','$member1','$member2') OR project_member3 in('$teamlead','$member1','$member2') ";
		$result=mysqli_query($connection,$sql);
		}
        
		 $result1=mysqli_query($connection,"select * from student_details where student_id='$teamlead' and student_pass = '$leadpass'");
		 $row1=mysqli_num_rows($result1);
		 $result2=mysqli_query($connection,"select * from student_details where student_id='$member1' and student_pass = '$member1pass'");
		 $row2=mysqli_num_rows($result2);
		 $result3=mysqli_query($connection,"select * from student_details where student_id='$member2' and student_pass = '$member2pass'");
		 $row3=mysqli_num_rows($result3);
		 
		
		if(mysqli_num_rows($result)!=0){
			echo "<script> alert('YOUR TEAM IS BEEN ALREADY REGISTERED  '); window.location='../index.php'; </script>";
			
		}
		else if ($row1 == 1 and  $row2 == 1 and $row3 == 1){
			$sql = "select student_branch , student_semester , student_section from student_details where student_id='$teamlead' ";
			$result=mysqli_query($connection,$sql);
			$row = mysqli_fetch_row($result);
    
			 $id='VCE'.substr(str_shuffle(str_repeat("0123456789", 4)), 0, 4);
            $s = substr(str_shuffle(str_repeat("0123456789QWERTYUIOPLKJHGFDSAZXCVBNM", 4)), 0, 4);
            $s='#'.$s;
      $query1 = "INSERT into generate (branch,section,semester,student1,student2,student3,student4,project_id,password,faculty_id,project_type) VALUES ('$row[0]','$row[2]','$row[1]','$teamlead','$member1','$member2','NONE','$id','$s','VCE511','others')";
      mysqli_query($connection, $query1);
       $query1 = "INSERT into project_details (project_id,password,project_name,project_team_lead,project_status,project_member1,project_member2,project_member3,faculty_id,review1,review2,review3,final,specification,project_type) VALUES ('$id','$s','--------','$teamlead','Waiting for Guide Approval','$member1','$member2','NONE','VCE511',0,0,0,0,'NULL','others')";
      mysqli_query($connection, $query1);
      echo "<script> alert('SUCCESSFULLY REGISTERED ----- CHECK IN PROJECT TEAM DETAILS FOR PROJECT ID AND PASSWORD '); </script>";
      mkdir('../Cloud Storage/'.$id, 0777, true);
      ?>
  	<div class="modal-head" style="background: lightgreen;">
    <h2>Your Message</h2>
</div>
  <div class="modal">
    
    <p>Successfully Registered <br> Check in Project Details for Project ID and Password<br> All the Best </p>
   <button id="gotit" onclick='goBack()'>GOT IT!</button>
  </div>

			<?php
		
			
		}
		else {
			//echo "<script> alert('AUTHENTICATION FAILED --> WRONG WEB ACCESS KEYS <-- '); window.location='../index.php' </script>";
			?>
	<div class="modal-head" style="background: red;">
    <h2>Your Message</h2>
</div>		
  <div class="modal">
 
    <p>Authentication Faied --> Wrong Web Access Keys <br> <br> Please Try Again </p>
   <button id="gotit" onclick='goBack()'>GOT IT!</button>
  </div>

			<?php
		}

	}
}
?>
<!-- STUDENT REGISTER -->
<?php

if(isset($_POST['reg-stu-pro'])){
	include '../db/dbconnect.php';
	$roll=$_POST['regroll'];
	$name=$_POST['regnamestu'];
	$branch=$_POST['regbranch'];
	$section=$_POST['regsec'];
	$sem=$_POST['regsem'];
	$cgpa=$_POST['regcgpa'];
	$maill=$_POST['regmail'];
	$sql="SELECT * from student_details where student_id ='$roll' and student_section='$section'  and student_semester ='$sem' and student_branch='$branch'";
	$result=mysqli_query($connection,$sql);

	
	if(mysqli_num_rows($result)>0) {
		//echo "<script> alert('FILL ALL THE FIELDS '); window.location='../index.php'; </script>";
		?>
  	<div class="modal-head" style="background: red;">
    <h2>Your Message</h2>
</div>
  <div class="modal">
    
    <p>You are already registered <br><br> All the best</p>
   <button id="gotit" onclick='goBack()'>GOT IT!</button>
  </div>

			<?php
	}
	else {
		 $s = substr(str_shuffle(str_repeat("0123456789QWERTYUIOPLKJHGFDSAZXCVBNM", 4)), 0, 4);
		 $pass='#'.$s;
		 $query = "INSERT INTO `student_details`(`student_id`, `student_pass`, `student_name`, `student_branch`, `student_section`, `student_semester`, `student_cgpa`, `student_email`, `project_type`) VALUES ('$roll','$pass','$name','$branch','$section','$sem','$cgpa','$maill','others')";
		 mysqli_query($connection,$query);

		?>
  	<div class="modal-head" style="background: green;">
    <h2>Your Message</h2>
</div>
  <div class="modal">
    
		
    <p>Succesfully Registered <br><br> Your Password is <?php echo $pass; ?>  <br> <p style="color: red;">Preserve your password for future use</p></p>
    <?php mkdir('../StudentArea/'.$roll, 0777, true); ?>
   <button id="gotit" onclick='goBack()'>GOT IT!</button>
  </div>

			<?php
	}
	
}
?>
</body>
</html>



