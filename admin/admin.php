<?php
session_start();
$adminid = $_SESSION['adminid'];
include '../db/dbconnect.php';
if (!isset($_SESSION['adminid']))
    header("Location : ../index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admin Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-5">
                                    SESSION DETAILS
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <?php
                            echo 'Admin';
                            echo '<br>';
                            echo 'Vardhaman College of Engineering';
                            ?>
                            <div class="clearfix"></div>
                            <form action="../authenticate/logout.php" method="post">
                                <button class="btn btn-default" name="admin_logout" value="admin_logout">LogOut</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Details Upload
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="pull-left">
                                    <form action="xlsfileupload.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Branch:</label>
                                            <select class="form-control col-xs-2" name="branch">
                                                <option value="" disabled selected>Branch</option>
                                                <option value="CSE">CSE</option>
                                                <option value="ECE">ECE</option>
                                                <option value="IT">IT</option>
                                                <option value="EEE">EEE</option>
                                                <option value="CIVIL">CIVIL</option>
                                                <option value="MECH">MECH</option>
                                            </select>
                                            <br>
                                            <label>Semester:</label>
                                            <select class="form-control col-xs-2" name="semester">
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
                                            <br>
                                            <label>Section:</label>
                                            <select class="form-control col-xs-2" name="section">
                                                <option value="" disabled selected>Section</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                            <br>
                                            <label>Project Type :</label>
                                            <select class="form-control col-xs-2" name="pro-type">
                                                <option value="" disabled selected>Type</option>
                                                <option value="mini-project">Mini Project</option>
                                                <option value="major-project">Major Project</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Student Details</label>
                                            <input type="file" class="form-control" name="student_form">
                                        </div>
                                        <div class="form-group>">
                                            <label>Faculty Details</label>
                                            <input type="file" class="form-control" name="faculty_form">
                                        </div><br>
                                        <button type="submit" class="btn btn-default" value="infoupload" name="upload">Upload</button>
                                        <button type="submit" class="btn btn-default" value="infodelete" name="delete">Delete</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Generate List
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="pull-left">
                                    <form action="admin.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Branch:</label>
                                            <select class="form-control col-xs-2" name="branch">
                                                <option value="" disabled selected>Branch</option>
                                                <option value="CSE">CSE</option>
                                                <option value="ECE">ECE</option>
                                                <option value="IT">IT</option>
                                                <option value="EEE">EEE</option>
                                                <option value="CIVIL">CIVIL</option>
                                                <option value="MECH">MECH</option>
                                            </select>
                                            <br>
                                            <label>Semester:</label>
                                            <select class="form-control col-xs-2" name="semester">
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
                                            <br>
                                            <label>Section:</label>
                                            <select class="form-control col-xs-2" name="section">
                                                <option value="" disabled selected>Section</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                            <br>
                                            <label>Project Type :</label>
                                            <select class="form-control col-xs-2" name="pro-type-gen">
                                                <option value="" disabled selected>Type</option>
                                                <option value="mini-project">Mini Project</option>
                                                <option value="major-project">Major Project</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                        <br>
                                        <br>
                                        <button type="submit" class="btn btn-default" value="generatelist" name="generate">Generate</button>
                                        <button type="submit" class="btn btn-default" value="show" name="show">Show</button>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="table-responsive">
                                            <?php

                                            if (isset($_POST['generate'])) {
                                                $branch = $_POST['branch'];
                                                $semester = $_POST['semester'];
                                                $section = $_POST['section'];
                                                $type = $_POST['pro-type-gen'];
                                                $sqlpos = "SELECT * from generate where branch='$branch' and semester='$semester' and section='$section' and project_type='$type'";
                                                $rowpos = mysqli_query($connection, $sqlpos);
                                                if (mysqli_num_rows($rowpos) == 0)
                                                    include 'generate.php';
                                                else
                                                    include 'tableshow.php';
                                            }
                                            if (isset($_POST['show'])) {
                                                include 'tableshow.php';
                                            }
                                            ?>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.col-lg-10 (nested) -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Faculty Assign (Mini & Major Projects )
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="pull-left">
                                    <form action="admin.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Branch:</label>
                                            <select class="form-control col-xs-2" name="branch-fac">
                                                <option value="" disabled selected>Branch</option>
                                                <option value="CSE">CSE</option>
                                                <option value="ECE">ECE</option>
                                                <option value="IT">IT</option>
                                                <option value="EEE">EEE</option>
                                                <option value="CIVIL">CIVIL</option>
                                                <option value="MECH">MECH</option>
                                            </select>
                                            <br>
                                            <!--<label>Semester:</label>
                                            <select class="form-control col-xs-2" name="semester">
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
                                            <br>
                                            <label>Section:</label>
                                            <select class="form-control col-xs-2" name="section">
                                                <option value="" disabled selected>Section</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option vlaue="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                            <br>-->
                                            <label>Project Type :</label>
                                            <select class="form-control col-xs-2" name="pro-type-gen-fac">
                                                <option value="" disabled selected>Type</option>
                                                <option value="mini-project">Mini Project</option>
                                                <option value="major-project">Major Project</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                        <br>
                                        <br>
                                        <button type="submit" class="btn btn-default" value="generatelist" name="generate-fac">Generate</button>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="table-responsive">
                                            <?php

                                            if (isset($_POST['generate-fac'])) {
                                                $branch = $_POST['branch-fac'];
                                                $type = $_POST['pro-type-gen-fac'];

                                                include 'generate_faculty.php';
                                            }

                                            ?>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.col-lg-10 (nested) -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Extra Team Member Update
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form action="admin.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Project ID :</label>
                                        <input class="form-control col-xs-2" type="text" name="pid">
                                        <br>
                                        <label>Project Password :</label>
                                        <input class="form-control col-xs-2" type="text" name="ppass">
                                        <br>
                                        <label>Extra Member Roll No :</label>
                                        <input class="form-control col-xs-2" type="text" name="pextra">
                                        <br>
                                    </div>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-default" value="Upload" name="extra-but">Update</button>
                                </form>
                                <?php
                                if (isset($_POST['extra-but'])) {
                                    $pid = $_POST['pid'];
                                    $ppass = $_POST['ppass'];
                                    $pextra = $_POST['pextra'];
                                    $sql = "UPDATE project_details SET project_member3 = '$pextra' where project_id = '$pid' and password = '$ppass' ";

                                    mysqli_query($connection, $sql);
                                    echo "<script> alert('SUCCESSFULLY UPDATED  '); window.location='admin.php'; </script>";
                                }

                                ?>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Delete a Team
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form action="admin.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Project ID :</label>
                                        <input class="form-control col-xs-2" type="text" name="pidel">
                                        <br>
                                        <label>Project Password :</label>
                                        <input class="form-control col-xs-2" type="text" name="ppassdel">
                                        <br>

                                    </div>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-default" value="Upload" name="tdel-but">Delete</button>
                                </form>
                                <?php
                                if (isset($_POST['tdel-but'])) {
                                    $pidel = $_POST['pidel'];
                                    $ppassdel = $_POST['ppassdel'];

                                    $sql = "DELETE from project_details where project_id = '$pidel' and password = '$ppassdel' ";

                                    mysqli_query($connection, $sql);
                                    echo "<script> alert('SUCCESSFULLY DELETED '); window.location='admin.php'; </script>";
                                }

                                ?>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Update Upload
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form action="admin.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Type of Project :</label>
                                        <select class="form-control col-xs-2" name="type-up">
                                            <option value="" disabled selected>Branch</option>
                                            <option value="Mini Project">Mini Project</option>
                                            <option value="Major Project">Major Project</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        <br>
                                        <label>Branch :</label>
                                        <label>Branch:</label>
                                        <select class="form-control col-xs-2" name="branch-up">
                                            <option value="" disabled selected>Branch</option>
                                            <option value="CSE">CSE</option>
                                            <option value="ECE">ECE</option>
                                            <option value="IT">IT</option>
                                            <option value="EEE">EEE</option>
                                            <option value="CIVIL">CIVIL</option>
                                            <option value="MECH">MECH</option>
                                        </select>
                                        <br>
                                        <label>Semester:</label>
                                        <select class="form-control col-xs-2" name="semester-up">
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
                                        <br>
                                        <label>Section:</label>
                                        <select class="form-control col-xs-2" name="section-up">
                                            <option value="" disabled selected>Section</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                        <br>
                                        <label>Schedule File :</label>
                                        <input class="form-control col-xs-2" type="file" name="file">
                                        <br>
                                    </div>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-default" value="Upload" name="updates">Upload</button>
                                    <button type="submit" class="btn btn-default" value="Delete" name="updates-del">Delete</button>
                                </form>
                                <?php
                                if (isset($_POST['updates'])) {
                                    $typeup = $_POST['type-up'];
                                    $bup = $_POST['branch-up'];
                                    $sup = $_POST['semester-up'];
                                    $scup = $_POST['section-up'];
                                    $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
                                    $file_loc = $_FILES['file']['tmp_name'];
                                    $file_size = $_FILES['file']['size'];
                                    $file_type = $_FILES['file']['type'];
                                    $folder = "../uploads/";
                                    // new file size in KB
                                    $new_size = $file_size / 1024;
                                    // new file size in KB
                                    // make file name in lower case
                                    $new_file_name = strtolower($file);
                                    // make file name in lower case
                                    $final_file = str_replace(' ', '-', $new_file_name);
                                    if (move_uploaded_file($file_loc, $folder . $final_file)) {
                                        $to = $bup . '-' . $sup . '-' . $scup;
                                        $sql = "INSERT INTO updates values('$typeup','$to','$final_file')";
                                    } else {
                                ?>
                                        <script>
                                            alert('error while uploading file');
                                            //window.location.href = 'student.php';
                                        </script>
                                <?php
                                    }
                                    mysqli_query($connection, $sql);
                                }
                                if (isset($_POST['updates-del'])) {
                                    $sql = "DELETE   FROM updates WHERE 1";
                                    mysqli_query($connection, $sql);
                                }
                                ?>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Notifications Upload
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form action="admin.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Notification :</label>
                                        <input class="form-control col-xs-2" type="text" name="hnoti">
                                        <br>
                                    </div>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-default" value="Upload" name="hnoti-but">Upload</button>
                                    <button type="submit" class="btn btn-default" value="Delete" name="hnoti-del">Delete</button>
                                </form>
                                <?php
                                if (isset($_POST['hnoti-but'])) {
                                    $hnoti = $_POST['hnoti'];
                                    $sql = "INSERT INTO hnoti values('$hnoti')";
                                    mysqli_query($connection, $sql);
                                }
                                if (isset($_POST['hnoti-del'])) {
                                    $sql = "DELETE  FROM hnoti WHERE 1";
                                    mysqli_query($connection, $sql);
                                }
                                ?>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Documents Download
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="pull-left">
                                    <form action="exporttoexcel.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Branch:</label>
                                            <select class="form-control col-xs-2" name="branch1">
                                                <option value="" disabled selected>Branch</option>
                                                <option value="CSE">CSE</option>
                                                <option value="ECE">ECE</option>
                                                <option value="IT">IT</option>
                                                <option value="EEE">EEE</option>
                                                <option value="CIVIL">CIVIL</option>
                                                <option value="MECH">MECH</option>
                                            </select>
                                            <br>
                                            <label>Semester:</label>
                                            <select class="form-control col-xs-2" name="semester1">
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
                                            <br>
                                            <label>Section:</label>
                                            <select class="form-control col-xs-2" name="section1">
                                                <option value="" disabled selected>Section</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                        </div>
                                        <br>
                                        <br>
                                        <button type="submit" class="btn btn-default" value="" name="dow-doc">Download</button>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="table-responsive">

                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.col-lg-10 (nested) -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-8 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="../dist/vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../dist/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="../dist/vendor/metisMenu/metisMenu.min.js"></script>
        <!-- Morris Charts JavaScript -->
        <script src="../dist/vendor/raphael/raphael.min.js"></script>
        <script src="../dist/vendor/morrisjs/morris.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>
</body>

</html>