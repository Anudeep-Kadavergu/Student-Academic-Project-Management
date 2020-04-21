<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
//Load the settings
$connection = mysqli_connect("localhost", "root", "", "project");
$projectid = $_COOKIE['projectid'];
     $uploadFolder = $projectid."/";
 

function getFileType($extension)
{
    $images = array('jpg', 'gif', 'png', 'bmp');
    $docs   = array('txt', 'rtf', 'doc');
    $apps   = array('zip', 'rar', 'exe');
     
    if(in_array($extension, $images)) return "Images";
    if(in_array($extension, $docs)) return "Documents";
    if(in_array($extension, $apps)) return "Applications";
    return "";
}
function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 
    
    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 
    
    $bytes /= pow(1024, $pow); 
    
    return round($bytes, $precision) . ' ' . $units[$pow]; 
} 
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Online file storage</title>
	<style type="text/css" media="all"> 
    	@import url("style.css");
	</style>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	

</head>
<body style="background:url('../Images/clouddata2.png') no-repeat center ;;">
	 <div class="" style="height:80px;margin-bottom: 30px;padding:0.01em 16px;color:#fff!important;background-color:#000!important">
    <a href="../faculty_projects.php" style="color: white;">Go Back<i class="fa fa-arrow-circle-left" style="font-size:45px;color:red"></i></a><center><h1 style="size: 36px;">STUDENT ACADEMIC PROJECT MANAGEMENT APPLICATION</h1></center>
</div>
	<div id="container">
    	<h1>Documents Uploaded</h1>
	    <fieldset>
		    <legend>Previousely uploaded files</legend>
		    <!--<ul id="menu">
		        <li><a href="">All files</a></li>
		        <li><a href="">Documents</a></li>
		        <li><a href="">Images</a></li>
		        <li><a href="">Applications</a></li>
		    </ul>-->
		     
		    <ul id="files">
		    	<?php
		    	/** LIST UPLOADED FILES **/
$uploaded_files = "";
 
//Open directory for reading
$dh = opendir($uploadFolder);
//LOOP through the files
while (($file = readdir($dh)) !== false) 
{
	if($file != '.' && $file != '..')
{
	$filename = $uploadFolder . $file;
$parts = explode("_", $file);
$size = formatBytes(filesize($filename));
$added = date("m/d/Y", $parts[0]);
$origName = $parts[1];
$filetype = getFileType(substr($file, strlen($file) - 3));
$uploaded_files .= "<li class=\"$filetype\"><a href=\"$filename\" preview>$origName</a> $size - $added</li>\n";
    }
}
closedir($dh);
if(strlen($uploaded_files) == 0)
{
    $uploaded_files = "<li><em>No files found</em></li>";
}
?>
<?php echo $uploaded_files; ?>
		    </ul>
		</fieldset>
	</div>
 
</body>
</html>