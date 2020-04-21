<?php
include 'extra/mobile_detect.php';
$detect = new Mobile_Detect();

// Check for any mobile device.
if ($detect->isMobile())
	echo "<center style='color:red;margin-top:200px;font-size:50px;'><h1> better use pc or desktops or laptops with chrome browser</h1></center>";
else{

	include "db/dbconnect.php";
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Application</title>
		<link rel="icon" type="image/jpg" href="icons/ico4.png">
		<link rel="stylesheet" href="dist/css/style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<!-- Bootstrap Core CSS -->
		<link href="dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- MetisMenu CSS -->
		<link href="dist/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="dist/css/sb-admin-1.css" rel="stylesheet">

		<!-- Morris Charts CSS -->
		<link href="dist/vendor/morrisjs/morris.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="dist/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script>

    	function myFunction() { 
    		if(navigator.userAgent.indexOf("Chrome") != -1 )
    		{

    		}
    		else if((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1 || (navigator.userAgent.indexOf("Safari") != -1) || (navigator.userAgent.indexOf("Firefox") != -1 ) || (navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) 
    		{
    			alert('Open in Chrome');
    		}

    	}
    </script>
    <script type="text/javascript">
    	$("#menu-toggle").click(function(e) {
    		e.preventDefault();
    		$("#wrapper").toggleClass("toggled");
    	});
    	$("#menu-toggle-2").click(function(e) {
    		e.preventDefault();
    		$("#wrapper").toggleClass("toggled-2");
    		$('#menu ul').hide();
    	});

    	function initMenu() {
    		$('#menu ul').hide();
    		$('#menu ul').children('.current').parent().show();
   //$('#menu ul:first').show();
   $('#menu li a').click(
   	function() {
   		var checkElement = $(this).next();
   		if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
   			return false;
   		}
   		if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
   			$('#menu ul:visible').slideUp('normal');
   			checkElement.slideDown('normal');
   			return false;
   		}
   	}
   	);
}
$(document).ready(function() {
	initMenu();
});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<script type="text/javascript">
  //paste this code under the head tag or in a separate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    //$(".se-pre-con").fadeOut("slow");
    setTimeout(function(){ $('.se-pre-con').fadeOut() }, 1000);
});
</script>

<script async>(function(w, d) { w.CollectId = "5d6383f6ae4d5f51c193cefe"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>

</head>




<body style="background:white;" onload="myFunction()">
	<div class="se-pre-con"></div>


	<!--<img src="v2.jpg" style="height: 130px;width: 100%;border: 3px solid black;">-->
	<div class="w3-container w3-black" id ="head-main" style="margin-left: 0px;width: 100%">

		<center><img src="icons/logo-2.png" style="float: left;height: 80px;padding-bottom: 10px;padding-left: 40px;"><h1 style="font-weight: 800;">STUDENT ACADEMIC PROJECT MANAGEMENT</h1></center>
	</div>




	<div id="wrapper" style="float: left;height: 100%;">
		<!-- Sidebar -->
		<div id="sidebar-wrapper" style="height: 100%;padding-bottom: 1305px;">
			<ul class="sidebar-nav nav-pills nav-stacked" id="menu">
				<li>
					<a href="javascript:openLink(event, 'Home')"  class="tablinks active"><span class="fa-stack fa-lg pull-left"><i class="fa fa-home fa-stack-1x "></i></span> Home</a>

				</li>
				<li>
					<a href="#"  class="tablinks"><span class="fa-stack fa-lg pull-left"><i class="fa fa-sign-in fa-stack-1x "></i></span>Login</a>
					<ul class="nav-pills nav-stacked" style="list-style-type:none;">
						<li class="tablinks"><a href="javascript:openLink(event, 'Admin')"><span class="fa-stack fa-lg pull-left"><i class="fa fa-lock fa-stack-1x "></i></span>Admin Login</a></li>
						<li class="tablinks"><a href="javascript:openLink(event, 'Faculty')"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user fa-stack-1x "></i></span>Project Guide Login</a></li>
						<li class="tablinks"><a href="javascript:openLink(event, 'Student')"><span class="fa-stack fa-lg pull-left"><i class="fa fa-users fa-stack-1x "></i></span>Project Team  Login</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:openLink(event, 'Schedule')" class="tablinks"><span class="fa-stack fa-lg pull-left"><i class="fa fa-calendar fa-stack-1x "></i></span>Project Schedule</a>
				</li>
				<li>
					<a href="javascript:openLink(event, 'Status')" class="tablinks"><span class="fa-stack fa-lg pull-left"><i class="fa fa-file-o fa-stack-1x "></i></span>Project Status</a>
				</li>
				<li>
					<a href="javascript:openLink(event, 'Rejected')" class="tablinks"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Rejected Projects</a>
				</li>
				<li>
					<a href="javascript:openLink(event, 'Completed')" class="tablinks"><span class="fa-stack fa-lg pull-left"><i class="fa fa-check-circle fa-stack-1x "></i></span>Projects Completed</a>
				</li>
				<li>
					<a href="javascript:openLink(event, 'Marks')" class="tablinks"><span class="fa-stack fa-lg pull-left"><i class="fa fa-check-circle fa-stack-1x "></i></span>Project Marks</a>
				</li>
				<li>
					<a href="javascript:openLink(event, 'Team')" class="tablinks"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user-plus fa-stack-1x "></i></span>Project Team Details</a>
				</li>
				<li>
					<a href="javascript:openLink(event, 'StuReg')" class="tablinks"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user-plus fa-stack-1x "></i></span>Student Register</a>
				</li>
				<li>
					<a href="javascript:openLink(event, 'Register')" class="tablinks"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user-plus fa-stack-1x "></i></span>Project Team Register</a>
				</li>
				<!--<li>
					<a href="javascript:openLink(event, 'StuLog')" class="tablinks"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user fa-stack-1x "></i></span>Student Login</a>
				</li>-->


            <!--<li>
               <a href="javascript:openLink(event, 'QAblog')" class="tablinks"><span class="fa-stack fa-lg pull-left"><i class="fa fa-calendar fa-stack-1x "></i></span> Q & A Blog</a>
           </li>-->
           <li>
           	<a href="javascript:openLink(event, 'Contact')" class="tablinks"><span class="fa-stack fa-lg pull-left"><i class="fa fa-phone fa-stack-1x "></i></span>Contact</a>
           </li>
       </ul>
   </div>
   <!-- /#sidebar-wrapper -->

</div>
<!-- /#wrapper -->
<!-- jQuery -->





<div id="Home" class="w3-container page" style="display: block;">
	

	<div class="w3-container" style="width: 500px;height: 300px;padding: 10px;margin-top:45px;position: absolute;left: 300px;border:1px solid grey;">
		<img class="mySlides" src="Images/image.jpg" style="width:100%;height: 86%">
		<img class="mySlides" src="Images/image1.jpg" style="width:100%;height: 86%">
		<img class="mySlides" src="Images/image.jpg" style="width:100%;height: 86%">
		<img class="mySlides" src="Images/image2.png" style="width:100%;height: 86%">

		<center><h3>Project Management</h3></center>
	</div>

	<div class="" style="width: 300px;height: 400px;padding: 10px;position: absolute;left: 850px;margin-top: 45px;border:1px dashed grey;">
		<div>
			<h5 style="float: left;font-weight: 800">Notifications</h5><br>
		</div>
		<hr style=" border-top: 1px dashed red;">
		<marquee width="100%" height="320px" behavior="scroll" bgcolor="" direction="up" onmouseover="this.stop()" 
		onmouseout="this.start()">  
		<?php
		$sql="select * from hnoti";
		$result = mysqli_query($connection,$sql);
		while($row = $result->fetch_assoc()){ ?>


			<p><?php echo $row['hnoti'] ?> </p>
		<?php } ?>  
	</marquee>  
</div>
<div style="width: 70%;margin-top:350px;margin-left:250px;padding: 80px 0px 40px;overflow:hidden;">

</div>
<div class="" style="margin-left: 280px;border:16px solid grey;">
	<div class="w3-card">
		<div style="margin:-15px -15px -15px -15px;background: #f35d00;padding: 1.5rem;border-top-left-radius: 5px;padding-bottom:30px;border-top-right-radius: 5px;">
			<div>
				<h2 style="line-height: 100%;font-size: 21px;color: #fefefe;font-family:  sans-serif;font-weight: 900;">FIND YOUR CODE HERE</h2>
			</div>
			<div style="float: right;margin-top: -35px;margin-left: -100px;;">
				<form action="index.php" method="post">
					<input type="text" name="find" placeholder="Search" style="height: 30px;width: 300px;padding: 15px;">
					<button class="icon" style="margin-left: -3px;padding: 5px;" name="find-but" type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</div>
		<?php
		if(isset($_POST['find-but'])){
			$res=$_POST['find'];
		}
		?>

		<script>
// then echo it into the js/html stream
// and assign to a js variable
var spge = '<?php echo $res ;?>';
var addr='https://stackoverflow.com/search?q='+spge;
// then
window.location=addr;

</script>

<div style="margin:-0px -15px -15px -15px;background: #fefefe;padding: 15px;">
	<h3 style="font-size: 20px;line-height: 2.28571429rem;color:#f35d00;font-weight: 700;margin-bottom: 1.5rem;">
		Popular Categories
	</h3>
	<div style="display: inline-block;">
		<div class="cell" style="width: 250px;float: left;">
			<h5 style="font-size: 18px;line-height: 2.28571429rem;color:#f35d00;font-weight: 700">Android Development</h5>
			<ul style="margin-left:-35px;list-style: none;margin-bottom: 1.5rem;display: block;font-size: 14px;line-height: 2.28571429rem;">
				<li><a href="https://developer.android.com/guide/components/fundamentals" style="color: black;">App Basics & Devices</a> </li>
				<li><a href="https://developer.android.com/topic/libraries/architecture" style="color: black;">Architecture Componets</a>  </li>
				<li><a href="https://developer.android.com/guide/topics/ui" style="color: black;">Interface & Navigation</a>  </li>
			</ul>
		</div>
		<div class="cell" style="width: 250px;float: left;">
			<h5 style="font-size: 18px;line-height: 2.28571429rem;color:#f35d00;font-weight: 700">Machine Learning</h5>
			<ul style="margin-left:-35px;list-style: none;margin-bottom: 1.5rem;display: block;font-size: 14px;line-height: 2.28571429rem;">
				<li><a href="https://machinelearningmastery.com/basic-concepts-in-machine-learning/" style="color: black;">Inductive Learning</a>  </li>
				<li><a href="https://skymind.ai/wiki/neural-network" style="color: black;">Neural Networks </a>  </li>
				<li><a href="https://skymind.ai/wiki/neural-network" style="color: black;">Deep Learning </a>  </li>
			</ul>
		</div>
		<div class="cell" style="width: 250px;float: left;">
			<h5 style="font-size: 18px;line-height: 2.28571429rem;color:#f35d00;font-weight: 700">Web Development</h5>
			<ul style="margin-left:-35px;list-style: none;margin-bottom: 1.5rem;display: block;font-size: 14px;line-height: 2.28571429rem;">
				<li><a href="https://en.yeeply.com/blog/6-different-kinds-web-app-development/" style="color: black;">Animated web application</a>  </li>
				<li><a href="https://en.yeeply.com/blog/6-different-kinds-web-app-development/" style="color: black;">Dynamic web application </a>  </li>
				<li><a href="https://en.yeeply.com/blog/6-different-kinds-web-app-development/" style="color: black;">Static web application </a>  </li>

			</ul>
		</div>
		<div class="cell" style="width: 250px;float: left;">
			<h5 style="font-size: 18px;line-height: 2.28571429rem;color:#f35d00;font-weight: 700">Artificial Intelligence</h5>
			<ul style="margin-left:-35px;list-style: none;margin-bottom: 1.5rem;display: block;font-size: 14px;line-height: 2.28571429rem;line-height: 2.28571429rem;">
				<li><a href="https://en.wikipedia.org/wiki/Category:Open-source_artificial_intelligence" style="color: black;">Open-source artificial intelligence‎</a> </li>
				<li><a href="https://en.wikipedia.org/wiki/Category:Virtual_assistants" style="color: black;">Virtual Assistants</a></li>
				<li><a href="https://en.wikipedia.org/wiki/Category:Game_artificial_intelligence" style="color: black;">Game Artificial Intelligence‎</a></li>
			</ul>
		</div>
		<div class="cell" style="width: 250px;float: left;">
			<h5 style="font-size: 18px;line-height: 2.28571429rem;color:#f35d00;font-weight: 700">Artificial Intelligence</h5>
			<ul style="margin-left:-35px;list-style: none;margin-bottom: 1.5rem;display: block;font-size: 14px;line-height: 2.28571429rem;">
				<li><a href="https://en.wikipedia.org/wiki/Category:Chatterbots" style="color: black;">Chatterbots</a></li>
				<li><a href="https://en.wikipedia.org/wiki/Category:Cloud_robotics" style="color: black;">Cloud Robotics‎ </a></li>
				<li><a href="https://en.wikipedia.org/wiki/Category:Signal_processing_conferences" style="color: black;">Signal Processing </a></li>
			</ul>
		</div>

	</div>
</div>

</div>

</div>
<!--
   <div class="" style="margin-left: 280px;height:400px;margin-top: 20px;">

  <div style="padding:20px;margin-left:0px;margin-top:20px;margin-top: -10px;">
    <div class="best" style="float: left;">
  <article>
    <h1>Student Academic Project Management</h1>
    <p>During project Development, forming of team and advancement for abstract submission and evaluation is the main problem. .</p>
    <p>Each team have an Evaluator who suggest what are the changes needed and evaluate the projects frequently. </p>
    <p style="color: red"><b>Best Project selected by Management</b></p>
  </article>
  <svg viewBox="0 0 100 100"><path d="M55.1,48.4a5.33,5.33,0,1,0-5.33-5.33A5.34,5.34,0,0,0,55.1,48.4Zm0-7.66a2.33,2.33,0,1,1-2.33,2.33A2.33,2.33,0,0,1,55.1,40.74ZM30.84,60.17a1.5,1.5,0,0,0,1.63-.33L43.3,49l9.41,9.41a1.54,1.54,0,0,0,2.12,0l5.32-5.32,7.37,7.37a1.5,1.5,0,0,0,2.56-1.06V35.1a1.5,1.5,0,0,0-1.5-1.5H31.42a1.5,1.5,0,0,0-1.5,1.5V58.79A1.5,1.5,0,0,0,30.84,60.17ZM32.92,36.6H67.08v19.2L62,50.72a2.62,2.62,0,0,0-3.7,0l-4.53,4.53-8.62-8.62a2.68,2.68,0,0,0-3.7,0l-8.53,8.53Zm-29,19,1.8,1.6a4.63,4.63,0,0,1,1.19,5.28L6,64.71A7.64,7.64,0,0,0,10.92,75l2.32.66a4.63,4.63,0,0,1,3.36,4.24l.12,2.41a7.62,7.62,0,0,0,7.62,7.28,7.74,7.74,0,0,0,1.31-.11L28,89.1a4.69,4.69,0,0,1,4.87,2.36l1.15,2.12a7.63,7.63,0,0,0,11.16,2.58l2-1.4a4.71,4.71,0,0,1,5.41,0l2,1.41a7.63,7.63,0,0,0,11.17-2.52l1.16-2.12a4.65,4.65,0,0,1,4.88-2.33l2.38.42a7.63,7.63,0,0,0,9-7.11l.13-2.41a4.63,4.63,0,0,1,3.38-4.22l2.33-.65a7.64,7.64,0,0,0,5-10.3L93,62.71a4.63,4.63,0,0,1,1.22-5.27L96,55.85a7.64,7.64,0,0,0,0-11.45l-1.8-1.6a4.63,4.63,0,0,1-1.19-5.28L94,35.29A7.64,7.64,0,0,0,89.07,25l-2.32-.66a4.63,4.63,0,0,1-3.36-4.24l-.12-2.41a7.62,7.62,0,0,0-7.62-7.28,7.76,7.76,0,0,0-1.31.11L72,10.9a4.58,4.58,0,0,1-.79.07,4.63,4.63,0,0,1-4.08-2.43L65.95,6.42A7.64,7.64,0,0,0,54.79,3.84l-2,1.4a4.72,4.72,0,0,1-5.41,0l-2-1.41A7.64,7.64,0,0,0,34.29,6.33L33.13,8.45a4.68,4.68,0,0,1-4.88,2.34l-2.38-.43a7.72,7.72,0,0,0-1.35-.12,7.63,7.63,0,0,0-7.62,7.23l-.13,2.41a4.63,4.63,0,0,1-3.39,4.22l-2.32.65a7.64,7.64,0,0,0-5,10.3L7,37.29a4.64,4.64,0,0,1-1.22,5.27L4,44.15a7.64,7.64,0,0,0,0,11.45Zm2-9.2,1.82-1.59a7.63,7.63,0,0,0,2-8.68L8.83,33.9a4.64,4.64,0,0,1,3-6.26L14.19,27a7.63,7.63,0,0,0,5.58-7l.13-2.41a4.63,4.63,0,0,1,4.62-4.39,4.68,4.68,0,0,1,.83.07l2.38.43a7.72,7.72,0,0,0,1.34.12,7.63,7.63,0,0,0,6.69-4l1.16-2.12A4.64,4.64,0,0,1,41,5.37a4.59,4.59,0,0,1,2.71.88l2,1.41a7.76,7.76,0,0,0,8.91,0l2-1.4a4.63,4.63,0,0,1,6.77,1.56L64.46,10a7.63,7.63,0,0,0,8,3.89l2.38-.41a4.63,4.63,0,0,1,5.42,4.35l.12,2.41a7.63,7.63,0,0,0,5.54,7l2.32.66a4.64,4.64,0,0,1,3,6.27l-.94,2.22a7.63,7.63,0,0,0,2,8.69l1.8,1.6a4.64,4.64,0,0,1,0,7l-1.81,1.59a7.63,7.63,0,0,0-2,8.68l.93,2.23a4.64,4.64,0,0,1-3,6.26L85.81,73a7.63,7.63,0,0,0-5.58,7l-.13,2.41a4.65,4.65,0,0,1-5.45,4.32l-2.38-.42a7.68,7.68,0,0,0-8,3.85l-1.16,2.12A4.64,4.64,0,0,1,59,94.63a4.59,4.59,0,0,1-2.71-.88l-2-1.41a7.64,7.64,0,0,0-8.91,0l-2,1.4a4.63,4.63,0,0,1-6.77-1.56L35.54,90a7.64,7.64,0,0,0-8-3.89l-2.38.41a4.64,4.64,0,0,1-5.43-4.35l-.12-2.41a7.63,7.63,0,0,0-5.54-7l-2.32-.66a4.64,4.64,0,0,1-3-6.27l.94-2.22a7.63,7.63,0,0,0-2-8.69l-1.8-1.6a4.64,4.64,0,0,1,0-7ZM30.46,72.49H69.54a6.65,6.65,0,0,0,6.64-6.64V34.15a6.65,6.65,0,0,0-6.64-6.64H30.46a6.65,6.65,0,0,0-6.64,6.64v31.7A6.65,6.65,0,0,0,30.46,72.49ZM26.82,34.15a3.64,3.64,0,0,1,3.64-3.64H69.54a3.64,3.64,0,0,1,3.64,3.64v31.7a3.64,3.64,0,0,1-3.64,3.64H30.46a3.64,3.64,0,0,1-3.64-3.64Z"/></svg>
  <a href="#0" style="margin-top: 200px;"><span>Download</span></a>
</div>
 <div class="best" style="float: right;width: 300px;height:300px;margin-left: -60px;">
  <article style="margin-left: 0px;width:200px;">
    <h1>Team</h1>
    <p>1.Sreyas Varma</p>
    <p>2.Ajay</p>
    <p>3.Anudeep Kadavergu</p>
    <p>4.Saikiran reddy Gangidi</p>
  </article>
  <svg viewBox="0 0 100 100"><path d="M55.1,48.4a5.33,5.33,0,1,0-5.33-5.33A5.34,5.34,0,0,0,55.1,48.4Zm0-7.66a2.33,2.33,0,1,1-2.33,2.33A2.33,2.33,0,0,1,55.1,40.74ZM30.84,60.17a1.5,1.5,0,0,0,1.63-.33L43.3,49l9.41,9.41a1.54,1.54,0,0,0,2.12,0l5.32-5.32,7.37,7.37a1.5,1.5,0,0,0,2.56-1.06V35.1a1.5,1.5,0,0,0-1.5-1.5H31.42a1.5,1.5,0,0,0-1.5,1.5V58.79A1.5,1.5,0,0,0,30.84,60.17ZM32.92,36.6H67.08v19.2L62,50.72a2.62,2.62,0,0,0-3.7,0l-4.53,4.53-8.62-8.62a2.68,2.68,0,0,0-3.7,0l-8.53,8.53Zm-29,19,1.8,1.6a4.63,4.63,0,0,1,1.19,5.28L6,64.71A7.64,7.64,0,0,0,10.92,75l2.32.66a4.63,4.63,0,0,1,3.36,4.24l.12,2.41a7.62,7.62,0,0,0,7.62,7.28,7.74,7.74,0,0,0,1.31-.11L28,89.1a4.69,4.69,0,0,1,4.87,2.36l1.15,2.12a7.63,7.63,0,0,0,11.16,2.58l2-1.4a4.71,4.71,0,0,1,5.41,0l2,1.41a7.63,7.63,0,0,0,11.17-2.52l1.16-2.12a4.65,4.65,0,0,1,4.88-2.33l2.38.42a7.63,7.63,0,0,0,9-7.11l.13-2.41a4.63,4.63,0,0,1,3.38-4.22l2.33-.65a7.64,7.64,0,0,0,5-10.3L93,62.71a4.63,4.63,0,0,1,1.22-5.27L96,55.85a7.64,7.64,0,0,0,0-11.45l-1.8-1.6a4.63,4.63,0,0,1-1.19-5.28L94,35.29A7.64,7.64,0,0,0,89.07,25l-2.32-.66a4.63,4.63,0,0,1-3.36-4.24l-.12-2.41a7.62,7.62,0,0,0-7.62-7.28,7.76,7.76,0,0,0-1.31.11L72,10.9a4.58,4.58,0,0,1-.79.07,4.63,4.63,0,0,1-4.08-2.43L65.95,6.42A7.64,7.64,0,0,0,54.79,3.84l-2,1.4a4.72,4.72,0,0,1-5.41,0l-2-1.41A7.64,7.64,0,0,0,34.29,6.33L33.13,8.45a4.68,4.68,0,0,1-4.88,2.34l-2.38-.43a7.72,7.72,0,0,0-1.35-.12,7.63,7.63,0,0,0-7.62,7.23l-.13,2.41a4.63,4.63,0,0,1-3.39,4.22l-2.32.65a7.64,7.64,0,0,0-5,10.3L7,37.29a4.64,4.64,0,0,1-1.22,5.27L4,44.15a7.64,7.64,0,0,0,0,11.45Zm2-9.2,1.82-1.59a7.63,7.63,0,0,0,2-8.68L8.83,33.9a4.64,4.64,0,0,1,3-6.26L14.19,27a7.63,7.63,0,0,0,5.58-7l.13-2.41a4.63,4.63,0,0,1,4.62-4.39,4.68,4.68,0,0,1,.83.07l2.38.43a7.72,7.72,0,0,0,1.34.12,7.63,7.63,0,0,0,6.69-4l1.16-2.12A4.64,4.64,0,0,1,41,5.37a4.59,4.59,0,0,1,2.71.88l2,1.41a7.76,7.76,0,0,0,8.91,0l2-1.4a4.63,4.63,0,0,1,6.77,1.56L64.46,10a7.63,7.63,0,0,0,8,3.89l2.38-.41a4.63,4.63,0,0,1,5.42,4.35l.12,2.41a7.63,7.63,0,0,0,5.54,7l2.32.66a4.64,4.64,0,0,1,3,6.27l-.94,2.22a7.63,7.63,0,0,0,2,8.69l1.8,1.6a4.64,4.64,0,0,1,0,7l-1.81,1.59a7.63,7.63,0,0,0-2,8.68l.93,2.23a4.64,4.64,0,0,1-3,6.26L85.81,73a7.63,7.63,0,0,0-5.58,7l-.13,2.41a4.65,4.65,0,0,1-5.45,4.32l-2.38-.42a7.68,7.68,0,0,0-8,3.85l-1.16,2.12A4.64,4.64,0,0,1,59,94.63a4.59,4.59,0,0,1-2.71-.88l-2-1.41a7.64,7.64,0,0,0-8.91,0l-2,1.4a4.63,4.63,0,0,1-6.77-1.56L35.54,90a7.64,7.64,0,0,0-8-3.89l-2.38.41a4.64,4.64,0,0,1-5.43-4.35l-.12-2.41a7.63,7.63,0,0,0-5.54-7l-2.32-.66a4.64,4.64,0,0,1-3-6.27l.94-2.22a7.63,7.63,0,0,0-2-8.69l-1.8-1.6a4.64,4.64,0,0,1,0-7ZM30.46,72.49H69.54a6.65,6.65,0,0,0,6.64-6.64V34.15a6.65,6.65,0,0,0-6.64-6.64H30.46a6.65,6.65,0,0,0-6.64,6.64v31.7A6.65,6.65,0,0,0,30.46,72.49ZM26.82,34.15a3.64,3.64,0,0,1,3.64-3.64H69.54a3.64,3.64,0,0,1,3.64,3.64v31.7a3.64,3.64,0,0,1-3.64,3.64H30.46a3.64,3.64,0,0,1-3.64-3.64Z"/></svg>
  <a href="#0" style="margin-left: -90px;"><span>Contact</span></a>
</div>  
</div>
</div>
-->
<!--
<div style="margin-left: 240px;">
<div style="float: left;padding: 100px;"><h2>Student's  Says</h2></div>
  <div style="float: right;margin-left: 100px">
<div class="rbd-core-ui">
  <div class="rbd-review-slider">
    <div class="rbd-review-container">
      <div class="rbd-review review1.1 rbd-curr" style="margin-left: 730px;">
        <h3 class="rbd-heading">Extremely Professional</h3>
        <i class="renderSVG" data-icon="star" data-repeat="5"></i>
        <div class="rbd-content"><img class="rbd-gravatar" src="https://en.gravatar.com/userimage/26363586/56972d52aba494b6f068d289c6d3d63d.jpg">Materials are top notch. People are top notch... they knew exactly how to handle my ignorance and turn it to a positive working business…</div>
        <div class="rbd-footing">
          <a class="rbd-button rbd-small" href="#">Read More</a>
        </div>
        <div class="rbd-review-meta">Written by Mark P. on Feb. 18, 2018</div>
      </div>
      <div class="rbd-review review1.3" style="margin-left: 730px;">
        <h3 class="rbd-heading">Test Review </h3>
        <i class="renderSVG" data-icon="star" data-repeat="5"></i>
        <div class="rbd-content">No Gravatar but here's a review…No Gravatar but here's a review…No Gravatar but here's a review…No Gravatar but here's a review…</div>
        <div class="rbd-footing">
          <a class="rbd-button rbd-small" href="#">Read More</a>
        </div>
        <div class="rbd-review-meta">Written by Anonymous. on Feb. 18, 2018</div>
      </div>
      <div class="rbd-review review1.2 rbd-next" style="margin-left: 730px;">
        <h3 class="rbd-heading">Test Company Marketing Delivers Such Great Service!</h3>
        <i class="renderSVG" data-icon="star" data-repeat="5"></i>
        <div class="rbd-content"><img class="rbd-gravatar" src="https://www.gravatar.com/avatar/ee304528491d860812f73d7d5cd0dc72?s=256">I'm a big fan of this test company. They really do the best work around, and their prices just can't be beat! I hear that Alex is a pretty cool guy…</div>
        <div class="rbd-footing">
          <a class="rbd-button rbd-small" href="#">Read More</a>
        </div>
        <div class="rbd-review-meta">Written by Alex D. on Feb. 19, 2018</div>
      </div>
      
      <div class="rbd-review review1.3" style="margin-left: 730px;">
        <h3 class="rbd-heading">Test Review jhsh</h3>
        <i class="renderSVG" data-icon="star" data-repeat="5"></i>
        <div class="rbd-content">No Gravatar but here's a review…No Gravatar but here's a review…No Gravatar but here's a review…No Gravatar but here's a review…</div>
        <div class="rbd-footing">
          <a class="rbd-button rbd-small" href="#">Read More</a>
        </div>
        <div class="rbd-review-meta">Written by Anonymous. on Feb. 18, 2018</div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
-->

<div style="margin-left: 250px;width: 100%;margin-top: 300px;">
	<div class="bo-wrap clr4">
		<div class="bo-footer">
			<div class="bo-footer-social"></div>
		</div>
	</div>


	<div class="bo-wrap clr3">
		<div class="bo-footer">
			<div class="bo-footer-smap">
				<a href="#">Policy</a> | <a href="https://www.vardhaman.org">Contact Us</a>
			</div>

			<div class="bo-footer-power" style="float: right;padding-right: 200px;">
				Design and Developed by - <a href="https://www.vardhaman.org">Sreyas,Ajay,Anudeep,Sai Kiran</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="bo-wrap clr4">
		<div class="bo-footer">
			<div class="bo-footer-copyright">&copy;2018 Computer Science Department-Vardhaman College |  All rights reserved.</div>
		</div>
	</div>
</div>
</div>
</div>



<div id="Admin" class="w3-container page" style="margin-left: 260px;display: none;">
	<div style="border: 2px #5b6b67 solid;background: black;opacity: 0.9;margin-top: 5px;padding: 20px;">


		<form class="w3-panel w3-card-4" action="authenticate/login.php" method="post" style="width: 100%;height: 265px;background: white;border: 1px solid gray;border-top: 10px solid #30dbb6;padding: 10px;box-shadow: 5px 5px 3px grey;padding: 25px;padding-top: 0px;margin-top: -5px;margin-bottom: -5px;">
			<h3 style="color: red;font-weight: 600;font-family: cursive;">Admin Login</h3>
			<hr style="border: 1px dashed red;
			border-radius: 5px;">

			<p><input class="w3-input" type="text" placeholder="ID" name="adminid"></p>
			<p><input class="w3-input" type="password" placeholder="Password" name="adminpass"></p>
			<p><button class="w3-btn " name="admin-btn" value="admin">Login</button></p>
		</form>

	</div>
</div>


<div id="Student" class="w3-container page" style="margin-left: 260px;display: none;">
	<div style="border: 2px #5b6b67 solid;background: black;opacity: 0.9;margin-top: 5px;padding: 20px;">
		<form class="w3-panel w3-card-4" action="authenticate/login.php" method="post" style="width: 100%;height: 260px;background: white;border: 1px solid gray;border-top: 10px solid #30dbb6;padding: 10px;box-shadow: 5px 5px 3px grey;padding: 25px;padding-top: 0px;margin-top: -5px;margin-bottom: -5px;">
			<h3 style="color: red;font-weight: 600;font-family: cursive;">Project Team Login</h3>
			<hr style="border: 1px  dashed red ;
			border-radius: 5px;">

			<p><input class="w3-input" type="text" placeholder="Project ID" name="studentid"></p>
			<p><input class="w3-input" type="password" placeholder="Password" name="studentpass"></p>
			<p><button class="w3-btn" name="student-btn" value="student">Login</button></p>
		</form>
	</div>
</div>

<div id="Faculty" class="w3-container page" style="margin-left: 260px;display: none;">
	<div style="border: 2px #5b6b67 solid;background: black;opacity: 0.9;margin-top: 5px;padding: 20px;">
		<form class="w3-panel w3-card-4" action="authenticate/login.php" method="post" style="width: 100%;height: 260px;background: white;border: 1px solid gray;border-top: 10px solid #30dbb6;padding: 10px;box-shadow: 5px 5px 3px grey;padding: 25px;padding-top: 0px;margin-top: -5px;margin-bottom: -5px;">
			<h3 style="color: red;font-weight: 600;font-family: cursive;">Project Guide Login </h3>
			<hr style="border: 1px dashed red;
			border-radius: 5px;">

			<p><input class="w3-input" type="text" placeholder="Faculty ID" name="facultyid"></p>
			<p><input class="w3-input" type="password" placeholder="Password" name="facultypass"></p>
			<p><button class="w3-btn" name="faculty-btn" value="faculty">Login</button></p>
		</form>
	</div>
</div>

<div id="Schedule" class="w3-container page" style="margin-left: 260px;margin-right: 10px;display: none;background: url('Images/schedule.jpg') no-repeat;width: 1000px;height: 1000px";>
 <!-- <?php
  /*$sql="select * from updates";
   $result = mysqli_query($connection,$sql);
   while($row = $result->fetch_assoc()){ ?>
      <div class="  " style="height: 140px;width: 100%;background: white;border: 1px solid gray;padding: 10px;;padding-left:20px;margin-top: 5px;">
        <h2><b>Project Type : <?php echo $row['head']; ?></b></h2>
        <?php $s=$row['subhead'];
        $arr = explode("-",$s);


    

?>
        <h3> <b>For :</b> <?php echo 'Branch : '.$arr[0].' &nbsp Semester : '.$arr[1].' &nbsp Section : '.$arr[2]; ?></h3>

        
        <a href="<?php echo 'uploads/'.$row['date'] ?>"><h5>Click here to download the file</h5></a> 
  
    </div>
    <?php
     }*/
     ?>-->

 </div>

 <div id="Status" class="w3-container page" style="margin-left: 260px;width: 600px;height: 200px;display: none;">
 	<div style="border: 2px #5b6b67 solid;background: black;opacity: 0.9;margin-top: 5px;padding: 20px;">
 		<form class="w3-panel w3-card-4" style="width: 100%;height: 220px;;background: white;border: 1px solid gray;border-top: 10px solid #30dbb6;padding: 10px;box-shadow: 5px 5px 3px grey;padding: 25px;padding-top: 0px;margin-top: -5px;margin-bottom: -5px">
 			<h3 style="color: blue;font-weight: 600;font-family: cursive;">Project Status </h3>
 			<hr style="border: 1px dashed red;
 			border-radius: 5px;">

 			<p><input class="w3-input" type="text" placeholder="Project ID" id="id1"></p>
 			<p><button class="w3-btn w3-orange" id="status-btn">Submit</button></p>
 		</form>
 	</div>
 </div>

<div id="Marks" class="w3-container page" style="display: none;margin-left: 260px;margin-top:10px;width: 600px;height: 200px;">
	<div style="border: 2px #5b6b67 solid;background: black;opacity: 0.9;margin-top: 5px;padding: 20px;">
		<form class="w3-container w3-card-4" style="width: 100%;height: 220px;;background: white;border: 1px solid gray;border-top: 10px solid #30dbb6;padding: 10px;box-shadow: 5px 5px 3px grey;padding: 25px;padding-top: 0px;margin-top: -5px;margin-bottom: -5px">
		<h3 style="color: blue;font-weight: 600;font-family: cursive;">Project Marks </h3>
 			<hr style="border: 1px dashed red;
 			border-radius: 5px;">
		<select class="w3-select" id="branch1" style="width: 100px;">
			<option value="" disabled selected>Branch</option>
			<option value="CSE">CSE</option>
			<option value="ECE">ECE</option>
			<option value="IT">IT</option>
			<option value="EEE">EEE</option>
			<option value="CIVIL">CIVIL</option>
			<option value="MECH">MECH</option>
		</select>
		<select class="w3-select" id="semester1" style="width: 100px;">
			<option value="" disabled selected>Semester</option>

			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
		</select>
		<select class="w3-select" id="section1" style="width: 100px">
			<option value="" disabled selected>Section</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option vlaue="C">C</option>
			<option value="D">D</option>
		</select>
		<p><button class="w3-btn w3-orange" id="marks-btn">Submit</button></p>
		</form>
	</div>
</div>

<div id="Rejected" class="w3-container page" style="display: none;margin-left: 260px;margin-top:5px;width:60%">
	<div style="border: 2px #5b6b67 solid;background: black;opacity: 0.9;margin-top: 5px;padding: 20px;">
		<form class="w3-container w3-card-4" style="background: white;border: 1px solid gray;border-top: 10px solid #30dbb6;padding: 10px;box-shadow: 5px 5px 3px grey;padding: 25px;padding-top: 0px;margin-top: -5px;margin-bottom: -5px;">
			<h3 style="color: red;font-weight: 600;font-family: cursive;">Projects Rejected </h3>
			<hr style="border: 1px dashed red;
			border-radius: 5px;">

			<select class="w3-select" id="branch" style="width: 100px;">
				<option value="" disabled selected>Branch</option>
				<option value="CSE">CSE</option>
				<option value="ECE">ECE</option>
				<option value="IT">IT</option>
				<option value="EEE">EEE</option>
				<option value="CIVIL">CIVIL</option>
				<option value="MECH">MECH</option>
			</select>
			<select class="w3-select" id="semester" style="width: 100px;">
				<option value="" disabled selected>Semester</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
			</select>
			<select class="w3-select" id="section" style="width: 100px">
				<option value="" disabled selected>Section</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option vlaue="C">C</option>
				<option value="D">D</option>
			</select>
			<p><br><button class="w3-btn w3-orange" id="reject-btn">Submit</button></p>
		</form>
	</div>
</div>

<div id="Completed" class="w3-container page" style="display: none;margin-left: 260px;margin-top:5px;width:60%;">
	<div style="border: 2px #5b6b67 solid;background: black;opacity: 0.9;margin-top: 5px;padding: 20px;">
		<form class="w3-container w3-card-4" style="background: white;border: 1px solid gray;border-top: 10px solid #30dbb6;padding: 10px;box-shadow: 5px 5px 3px grey;padding: 25px;padding-top: 0px;margin-top: -5px;margin-bottom: -5px;">
			<h3 style="color: red;font-weight: 600;font-family: cursive;">Projects Completed </h3>
			<hr style="border: 1px dashed red;
			border-radius: 5px;">
			<select class="w3-select" id="branch2" style="width: 100px;">
				<option value="" disabled selected>Branch</option>
				<option value="CSE">CSE</option>
				<option value="ECE">ECE</option>
				<option value="IT">IT</option>
				<option value="EEE">EEE</option>
				<option value="CIVIL">CIVIL</option>
				<option value="MECH">MECH</option>
			</select>
			<select class="w3-select" id="semester2" style="width: 100px;">
				<option value="" disabled selected>Semester</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
			</select>
			<select class="w3-select" id="section2" style="width: 100px">
				<option value="" disabled selected>Section</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option vlaue="C">C</option>
				<option value="D">D</option>
			</select>
			<p><br><button class="w3-btn w3-orange" id="complete-btn">Submit</button></p>
		</form>
	</div>
</div>
<div id="Team" class="w3-container page" style="display: none;margin-left: 260px;margin-top:3px;">
	<div style="border: 2px #5b6b67 solid;background: black;opacity: 0.9;margin-top: 5px;padding: 20px;">
		<form class="w3-container w3-card-4"n style="background: white;border: 1px solid gray;border-top: 10px solid #30dbb6;padding: 10px;box-shadow: 5px 5px 3px grey;padding: 25px;padding-top: 0px;margin-top: -5px;margin-bottom: -5px;">


			<h3 style="color: red;font-weight: 600;font-family: cursive;">Student Login </h3>
			<hr style="border: 1px dashed red;
			border-radius: 5px;">

			<p><input class="w3-input" type="text" placeholder="Roll No" name="stuid" id="stuid"></p>
			<p><input class="w3-input" type="password" placeholder="Password" name="facultypass" id="stupass"></p>

			<p><button class="w3-btn w3-orange" id="stu-btn">Login</button></p>
		</form>
	</div>
</div>

<!---<div id="StuLog" class="w3-container page" style="margin-left: 260px;display: none;">
	<div style="border: 2px #5b6b67 solid;background: black;opacity: 0.9;margin-top: 5px;padding: 20px;">
		<form class="w3-panel w3-card-4" action="login.php" method="post" style="width: 100%;height: 260px;background: white;border: 1px solid gray;border-top: 10px solid #30dbb6;padding: 10px;box-shadow: 5px 5px 3px grey;padding: 25px;padding-top: 0px;margin-top: -5px;margin-bottom: -5px;">
			<h3 style="color: red;font-weight: 600;font-family: cursive;">Student Login</h3>
			<hr style="border: 1px  dashed red ;
			border-radius: 5px;">

			<p><input class="w3-input" type="text" placeholder="Student ID" name="studentid"></p>
			<p><input class="w3-input" type="password" placeholder="Password" name="studentpass"></p>
			<p><button class="w3-btn" name="student-btn-log" value="student">Login</button></p>
		</form>
	</div>
</div>-->

<div id="Register" class="w3-container page" style="display: none;margin-left: 260px;margin-top: 5px;">
	<div style="border: 2px #5b6b67 solid;background: black;opacity: 0.9;margin-top: 5px;padding: 20px;">
		<form class="w3-container w3-card-4" style="background: white;border: 1px solid gray;border-top: 10px solid #30dbb6;padding: 10px;box-shadow: 5px 5px 3px grey;padding: 25px;padding-top: 0px;margin-top: -5px;margin-bottom: -5px;">
			<h3 style="color: red;font-weight: 600;font-family: cursive;">Team Register Here </h3>
			<hr style="border: 1px dashed red;
			border-radius: 5px;">
			<select class="w3-select" id="branch-reg" style="width: 100px;">
				<option value="" disabled selected>Branch</option>
				<option value="CSE">CSE</option>
				<option value="ECE">ECE</option>
				<option value="IT">IT</option>
				<option value="EEE">EEE</option>
				<option value="CIVIL">CIVIL</option>
				<option value="MECH">MECH</option>
			</select>
			<select class="w3-select" id="semester-reg" style="width: 100px;">
				<option value="" disabled selected>Semester</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
			</select>
			<select class="w3-select" id="section-reg" style="width: 100px">
				<option value="" disabled selected>Section</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option vlaue="C">C</option>
				<option value="D">D</option>
			</select>
			<p><br><button class="w3-btn w3-orange" id="register-btn">Submit</button></p>
		</form>
	</div>
</div>


<div id="StuReg" class="w3-container page" style="display: none;margin-left: 260px;margin-top: 5px;">
	<div style="border: 2px #5b6b67 solid;background: black;opacity: 0.9;margin-top: 5px;padding: 20px;">
		<form class="w3-container w3-card-4" style="background: white;border: 1px solid gray;border-top: 10px solid #30dbb6;padding: 10px;box-shadow: 5px 5px 3px grey;padding: 25px;padding-top: 0px;margin-top: -5px;margin-bottom: -5px;">
			<h3 style="color: red;font-weight: 600;font-family: cursive;">Student's Register Here </h3>
			<hr style="border: 1px dashed red;
			border-radius: 5px;">
			<select class="w3-select" id="branch-reg-stu" style="width: 100px;">
				<option value="" disabled selected>Branch</option>
				<option value="CSE">CSE</option>
				<option value="ECE">ECE</option>
				<option value="IT">IT</option>
				<option value="EEE">EEE</option>
				<option value="CIVIL">CIVIL</option>
				<option value="MECH">MECH</option>
			</select>
			<select class="w3-select" id="semester-reg-stu" style="width: 100px;">
				<option value="" disabled selected>Semester</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
			</select>
			<select class="w3-select" id="section-reg-stu" style="width: 100px">
				<option value="" disabled selected>Section</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option vlaue="C">C</option>
				<option value="D">D</option>
			</select>
			<p><br><button class="w3-btn w3-orange" id="register-btn-stu">Submit</button></p>
		</form>
	</div>
</div>

<div id="QAblog" class="w3-container page" style="display: none;margin-left: 260px;margin-top: 5px;">
	<div id="answer"></div>
	<?php 
	$sql="SELECT * from blog";
	$res=mysqli_query($connection,$sql);
	while($row=mysqli_fetch_row($res)){
		if($row[2]==''){ 
			?>
			<form id='usrform' action="index.php" method="post">

				<div style="border:1px solid grey;padding: 20px;">
					<div style="margin-bottom: 1em;border-bottom: 1px solid #e4e6e8;">

						<h1 style="margin-bottom: .5em;font-size: 30px;margin:0 0 1em;"><?php echo $row[1] ?></h1><input type="text" name="hid-id" id="hid-id" value="<?php echo $row[0] ?>" hidden>
					</div>
					<div style="margin-left: 20px;background:#eff0f1;padding: 5px;min-width: 300px;"><div style="width: 600px;"><p>Ans  :<pre>
						<?php echo $row[2]; ?>
					</pre></p></div></div>

					<div style="margin-left: 20px;">
						<h5>Post Your Answer Here : </h5>

						<textarea rows="4" cols="50" name="comment" form="usrform" id="ans-des" name="ans-des">Enter text here...</textarea>
						<button type="submit" name="" style="margin-left: 30px;" id='qans'>reply </button>

					</div>

				</div>
			</form>
			<?php  
			break;
		}} ?>
		<form id='usrform1' action="index.php" method="post">
			<div style="border:1px solid grey;padding: 20px;margin-top: 5px;">
				<div style="margin-bottom: 1em;border-bottom: 1px solid #e4e6e8;">
					<h1 style="margin-bottom: .5em;font-size: 30px;margin:0 0 1em;">Ask a  Question</h1>
				</div>
				<div style="margin-left: 20px;">
					<h5>Post Your Question Here : </h5>

					<textarea rows="4" cols="50" name="comment" form="usrform1" id='qes-blog' name="qes-blog">
					Enter text here...</textarea>
					<button type="submit" name="" style="margin-left: 30px;" id='blog-qes' name="blog-qes">Ask</button>

				</div>
			</div>
		</form>
	</div>

	<div id="Result" class="w3-container page" style="display: none;margin-left: 260px;margin-top: 60px;">

		<div class="spin" ></div>

	</div>


	<div id="Contact" class="w3-container page" style="display: none;margin-left: 260px;">
		<div class=" w3-card-4" style="width: 220px;height: 350px;padding: 10px;position: absolute;left: 400px;top: 140px;">

			<img src="Images/rajani.png" alt="picture" style="width:160px;margin-left:20px;border-radius: 50%;margin-top: 16px;margin-bottom: 10px;"/>
			<center>
				<h5></h5>
				<h6>Head of the Department</h6>
				<p><b>Dr. RajaniKanth Aluvalu</b></p> 
				<p>xxxxxxxxxxx@gmail</p>	
			</center>

		</div>

		<div class="w3-card-4" style="width: 220px;height: 350px;padding: 10px;position: absolute;left: 650px;top: 140px;">
			<img src="Images/venu-1.jpg" alt="picture" style="width:160px;height:160px;margin-left:20px;border-radius: 50%;margin-top: 16px;margin-bottom: 10px;"/>
			<center>
				<h5></h5>
				<h6>Project Incharge</h6>
				<p><b>Mr. S. Venu Gopal</b></p> 
				<p>xxxxxxxxxxx@gmail</p>	
			</center>

		</div>
		<div class="w3-card-4" style="width: 220px;height: 350px;padding: 10px;position: absolute;left: 900px;top: 140px;">
			<img src="Images/gp.jpg" alt="picture" style="width:160px;height:160px;margin-left:20px;border-radius: 50%;margin-top: 16px;margin-bottom: 10px;"/>
			<center>
				<h5></h5>
				<h6>Faculty Mentor</h6>
				<p><b>Mr.G.S.Prasada Reddy</b></p> 	
				<p>gsprasadareddy@vardham<br>an.org</p>
			</center>

		</div>
		<div class="clear"></div><br>



	</div>






	<script>
		let options = {
			'speed': 3000,
			'pause': true,
		}

		window.addEventListener('DOMContentLoaded', function() {
			let slider = document.querySelector('.rbd-review-slider');
			let slides = slider.querySelectorAll('.rbd-review');
			let total  = slides.length;
			let pause  = false;

			function pauseSlide(){
				slider.onmouseleave = function(){ pause = false; };
				slider.onmouseenter = function(){ pause = true; };
				return pause;
			}

			function slide(){
				if( options.pause && pauseSlide() ) return;

				let activeSlide = document.querySelector('.rbd-review-slider .rbd-review.rbd-curr');
				let prev, curr, next, soon;   

				curr = activeSlide;
				prev = activeSlide.previousElementSibling;
				next = activeSlide.nextElementSibling;

				if( next != null ){
					soon = next.nextElementSibling == null ? slides[0] : next.nextElementSibling;
				} else {
					next = slides[0];
					soon = slides[1];
				}

				if( prev != null ) prev.classList.remove('rbd-prev', 'rbd-curr', 'rbd-next');
				if( curr != null ) curr.classList.remove('rbd-prev', 'rbd-curr', 'rbd-next'); curr.classList.add('rbd-prev');
				if( next != null ) next.classList.remove('rbd-prev', 'rbd-curr', 'rbd-next'); next.classList.add('rbd-curr');
				if( soon != null ) soon.classList.remove('rbd-prev', 'rbd-curr', 'rbd-next'); soon.classList.add('rbd-next');
			}

			let slideTimer = setInterval(function(){
				slide();
			}, options.speed);
		}, true);

		function openLink(event, pageName) {


			var i, x, tablinks;

			x = document.getElementsByClassName("page");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace("active", "");
			}       
			document.getElementById(pageName).style.display = "block";
			document.getElementById('Result').innerHTML = "<div class='spin' ></div>";
			event.target.className += "active";

		}

		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
				x[myIndex-1].style.display = "block";

    setTimeout(carousel, 3000); // Change image every 2 seconds
}

$(document).ready(function(){
	$("#reject-btn").click(function(){
		document.getElementById("Result").style.display = "block";
		$('#Result','body').load(function() {
    // Animate loader off screen
    //$(".se-pre-con").fadeOut("slow");
    setTimeout(function(){ $('.spin').fadeOut() }, 3000);
});
		var branch = $("#branch").val();
		var semester = $("#semester").val();
		var section = $("#section").val();
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'branch1='+ branch + '&semester1='+ semester + '&section1=' + section;
    if(branch==null || semester==null || section==null)
    {
    	alert("Please Select All Fields");
    }
    else
    {
    // AJAX Code To Submit Form.
    $.ajax({
    	type: "POST",
    	url: "home/Rejected.php",
    	data: dataString,
    	cache: true,
    	success: function(result){
    		document.getElementById("Result").style.display = "block";
    		$('#Result').html(result);
    	}
    });
}
return false;
});
	$("#stu-btn").click(function(){

		document.getElementById("Result").style.display = "block";
		$('#Result','body').load(function() {
    // Animate loader off screen
    //$(".se-pre-con").fadeOut("slow");
    setTimeout(function(){ $('.spin').fadeOut() }, 3000);
});

		var rollno = $("#stuid").val();
		var pass = $("#stupass").val();

    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'rollno='+ rollno + '&pass='+ pass ;
    if(rollno==null || pass==null)
    {
    	alert("Please Select All Fields");
    }
    else
    {

    // AJAX Code To Submit Form.

    $.ajax({
    	type: "POST",
    	url: "home/student_team.php",
    	data: dataString,
    	cache: true,
    	success: function(result){
    		document.getElementById("Result").style.display = "block";


    		$('#Result').html(result);
    		document.getElementById("sidebar-wrapper").style.height = "100%";
    	}
    });
}
return false;


});
	$("#register-btn").click(function(){
		document.getElementById("Result").style.display = "block";
		$('#Result','body').load(function() {
    // Animate loader off screen
    //$(".se-pre-con").fadeOut("slow");
    setTimeout(function(){ $('.spin').fadeOut() }, 3000);
});
		var branch = $("#branch-reg").val();
		var semester = $("#semester-reg").val();
		var section = $("#section-reg").val();
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'branch-reg='+ branch + '&semester-reg='+ semester + '&section-reg=' + section;
    if(branch==null || semester==null || section==null)
    {
    	alert("Please Select All Fields");
    }
    else
    {
    // AJAX Code To Submit Form.
    $.ajax({
    	type: "POST",
    	url: "home/register.php",
    	data: dataString,
    	cache: true,
    	success: function(result){
    		document.getElementById("Result").style.display = "block";
    		$('#Result').html(result);
    	}
    });
}
return false;
});
	$("#register-btn-stu").click(function(){
		document.getElementById("Result").style.display = "block";
		$('#Result','body').load(function() {
    // Animate loader off screen
    //$(".se-pre-con").fadeOut("slow");
    setTimeout(function(){ $('.spin').fadeOut() }, 3000);
});
		var branch = $("#branch-reg-stu").val();
		var semester = $("#semester-reg-stu").val();
		var section = $("#section-reg-stu").val();
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'branch-stu='+ branch + '&semester-stu='+ semester + '&section-stu=' + section;
    if(branch==null || semester==null || section==null)
    {
    	alert("Please Select All Fields");
    }
    else
    {
    // AJAX Code To Submit Form.
    $.ajax({
    	type: "POST",
    	url: "home/register_student.php",
    	data: dataString,
    	cache: true,
    	success: function(result){
    		document.getElementById("Result").style.display = "block";
    		$('#Result').html(result);
    	}
    });
}
return false;
});
	$("#marks-btn").click(function(){
		document.getElementById("Result").style.display = "block";
		$('#Result','body').load(function() {
    // Animate loader off screen
    //$(".se-pre-con").fadeOut("slow");
    setTimeout(function(){ $('.spin').fadeOut() }, 3000);
});
		var branch = $("#branch1").val();
		var semester = $("#semester1").val();
		var section = $("#section1").val();
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'branch3='+ branch + '&semester3='+ semester + '&section3=' + section;
    if(branch==null || semester==null || section==null)
    {
    	alert("Please Select All Fields");
    }
    else
    {
    // AJAX Code To Submit Form.
    $.ajax({
    	type: "POST",
    	url: "home/marks.php",
    	data: dataString,
    	cache: true,
    	success: function(result){
    		document.getElementById("Result").style.display = "block";
    		$('#Result').html(result);
    	}
    });
}
return false;
});
	$("#status-btn").click(function(){
		document.getElementById("Result").style.display = "block";
		$('#Result','body').load(function() {
    // Animate loader off screen
    //$(".se-pre-con").fadeOut("slow");
    setTimeout(function(){ $('.spin').fadeOut() }, 3000);
});
		var id = $("#id1").val();

    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'id='+ id;
    if(id==null)
    {
    	alert("Please Select All Fields");
    }
    else
    {
    // AJAX Code To Submit Form.
    $.ajax({
    	type: "POST",
    	url: "home/status.php",
    	data: dataString,
    	cache: true,
    	success: function(result){
    		document.getElementById("Result").style.display = "block";
    		$('#Result').html(result);
    	}
    });
}
return false;
});

	$("#complete-btn").click(function(){
		document.getElementById("Result").style.display = "block";
		$('#Result','body').load(function() {
    // Animate loader off screen
    //$(".se-pre-con").fadeOut("slow");
    setTimeout(function(){ $('.spin').fadeOut() }, 3000);
});
		var branch = $("#branch2").val();
		var semester = $("#semester2").val();
		var section = $("#section2").val();
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'branch='+ branch + '&semester='+ semester + '&section=' + section;
    if(branch==null || semester==null || section==null)
    {
    	alert("Please Select All Fields");
    }
    else
    {
    // AJAX Code To Submit Form.
    $.ajax({
    	type: "POST",
    	url: "home/Completed.php",
    	data: dataString,
    	cache: true,
    	success: function(result){
    		document.getElementById("Result").style.display = "block";
    		$('#Result').html(result);
    	}
    });
}
return false;
});
	$("#qans").click(function(){

		var id = $("#hid-id").val();
		var text = $("#ans-des").val();
    // Returns successful data submission message when the entered information is stored in database.
    
    var dataString = 'id='+ id + '&text='+ text ;
    if(id==null || text==null )
    {
    	alert("Please Select All Fields");
    }
    else
    {
    	window.alert(text);
    // AJAX Code To Submit Form.
    $.ajax({
    	type: "POST",
    	url: "home/blog.php",
    	data: dataString,
    	cache: true,
    	success: function(result){

    		$('#QAblog #answer').html(result);


    	}
    });
}
return false;
});
	$("#blog-qes").click(function(){

		var text = $("#qes-blog").val();
    // Returns successful data submission message when the entered information is stored in database.
    
    var dataString ='text='+ text ;
    if(text==null )
    {
    	alert("Please Select All Fields");
    }
    else
    {
    	window.alert(text);
    // AJAX Code To Submit Form.
    $.ajax({
    	type: "POST",
    	url: "home/blogqes.php",
    	data: dataString,
    	cache: true,
    	success: function(result){

    		$('#QAblog #answer').html(result);
    	}
    });
}
return false;
});
});
</script>
</body>
</html>
<?php }
?>
