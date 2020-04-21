<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">

    <!-- Bootstrap Core CSS -->
    <link href="../dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../dist/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-1.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../dist/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../dist/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
<?php
include '../db/dbconnect.php';

$branch = $_POST['branch-stu'];
$semester = $_POST['semester-stu'];
$section = $_POST['section-stu'];
?>

<div class="w3-container" style="display: block;margin-top:10px;margin-left: 100px;">
  <div class="row" style="display: inline-block;margin-top: -50px;margin-left: 0px;">

  <div class="col-lg-8">

    <div class="panel panel-default" style="min-width: 500px;">
                        <div class="panel-heading">
                           Register Your  Details
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                            <div class="pull-left">
                                <form action="home/self_generate.php" method="post" enctype = "multipart/form-data">
                                    <div class="form-group">
                                        <label >Roll No :</label>
                                        <input class="form-control col-xs-2" type="text" name="regroll">
                                        <br>
                                        <label >Name (In Capitals) :</label>
                                        <input class="form-control col-xs-2" type="text" name="regnamestu">
                                        <br>
                                        <label >Branch :</label>
                                        <input class="form-control col-xs-2" type="text" name="regbranch" value="<?php echo $branch; ?>" readonly>
                                        <br>
                                        <label >Section :</label>
                                        <input class="form-control col-xs-2" type="text" name="regsec" value="<?php echo $section; ?>" readonly>
                                        <br>
                                        <label >Semester :</label>
                                        <input class="form-control col-xs-2" type="text" name="regsem" value="<?php echo $semester; ?>" readonly>
                                        <br>
                                        <label >CGPA :</label>
                                        <input class="form-control col-xs-2" type="number" step=".01" name="regcgpa" >
                                        <br>
                                        <label >Mail id :</label>
                                        <input class="form-control col-xs-2" type="mail" name="regmail" >
                                        <br>
                                        
                                    </div>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-default" value="Upload" name="reg-stu-pro">Register</button>
                                     
                                </form>
                            </div>
                        </div>
                    </div>
  </div>
</div>
</div>