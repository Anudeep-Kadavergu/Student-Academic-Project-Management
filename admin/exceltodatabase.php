<?php

include_once '../db/dbconnect.php';
require 'Classes/PHPExcel/IOFactory.php';
	
$inputfilename = "List/Student/".$branch.$semester.$section.$type.".".$student_FileType;
$inputfilename1 = "List/Faculty/".$branch.$semester.$section.$type.".".$faculty_FileType;
$exceldata = array();
$exceldata1 = array();

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
 
//  Read your Excel workbook
try
{
    $inputfiletype = PHPExcel_IOFactory::identify($inputfilename);
    $objReader = PHPExcel_IOFactory::createReader($inputfiletype);
	$objPHPExcel = $objReader->load($inputfilename);
	
	$inputfiletype1 = PHPExcel_IOFactory::identify($inputfilename1);
    $objReader1 = PHPExcel_IOFactory::createReader($inputfiletype1);
    $objPHPExcel1 = $objReader1->load($inputfilename1);

}
catch(Exception $e)
{
	die('Error loading file "'.pathinfo($inputfilename,PATHINFO_BASENAME).'": '.$e->getMessage());
	die('Error loading file "'.pathinfo($inputfilename1,PATHINFO_BASENAME).'": '.$e->getMessage());
}
 
//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0); 
$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestColumn();

 
//  Loop through each row of the worksheet in turn
for ($row = 1; $row <= $highestRow; $row++)
{ 
    //  Read a row of data into an array
    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
	
    //  Insert row data array into your database of choice here
	$sql = "INSERT INTO student_details (student_id,student_pass,student_name,student_branch,student_section,student_semester,student_cgpa,student_email,project_type)
			VALUES ('".$rowData[0][0]."', '".$rowData[0][1]."', '".$rowData[0][2]."', '".$rowData[0][3]."', '".$rowData[0][4]."', '".$rowData[0][5]."', '".$rowData[0][6]."', '".$rowData[0][7]."', '".$type."')";
	
	if (mysqli_query($connection, $sql)) {
		$exceldata[] = $rowData[0];
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}
}

$sheet1 = $objPHPExcel1->getSheet(0); 
$highestRow1 = $sheet1->getHighestRow(); 
$highestColumn1 = $sheet1->getHighestColumn();

 
//  Loop through each row of the worksheet in turn
for ($row = 1; $row <= $highestRow1; $row++)
{ 
    //  Read a row of data into an array
    $rowData1 = $sheet1->rangeToArray('A' . $row . ':' . $highestColumn1 . $row, NULL, TRUE, FALSE);
	
    //  Insert row data array into your database of choice here
	$sql = "INSERT INTO faculty_details (faculty_id,faculty_pass,faculty_name,faculty_branch,faculty_section,faculty_semester,faculty_email,specification,project_type)
			VALUES ('".$rowData1[0][0]."', '".$rowData1[0][1]."', '".$rowData1[0][2]."', '".$rowData1[0][3]."', '".$rowData1[0][4]."', '".$rowData1[0][5]."', '".$rowData1[0][6]."', '".$rowData1[0][7]."','".$type."')";
	
	if (mysqli_query($connection, $sql)) {
		$exceldata1[] = $rowData[0];
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}
}
 
mysqli_close($connection);
?>