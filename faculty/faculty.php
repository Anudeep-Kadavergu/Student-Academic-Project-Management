<?php
session_start();
$facultyid = $_SESSION['facultyid'];
include '../db/dbconnect.php';
if (isset($_POST['proopen'])) {
    $projectid = $_POST['project'];
    setcookie('projectid', $projectid);
    setcookie('facultyid', $facultyid);
    $sql = "DELETE FROM notifications WHERE project_id='$projectid'";
    $result = mysqli_query($connection, $sql);
    header('location:faculty_projects.php');
}
if (!isset($_SESSION['facultyid']))
    header("Location : ../index.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                var cookies = $.cookie();
                for (var cookie in cookies) {
                    $.removeCookie(cookie);
                }


            });
        })(jQuery);
    </script>

    <style type="text/css">
        input[type=text],
        select {
            width: 100%;
            padding: 8px 16px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        #aa {
            display: none;
        }
    </style>




</head>

<body onload="clearListCookies()">
    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="w3-container w3-black" style="height:80px;margin-bottom: 30px;">
                        <center>
                            <h1>STUDENT ACADEMIC PROJECT MANAGEMENT APPLICATION</h1>
                        </center>
                    </div>
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
                            $result = mysqli_query($connection, "SELECT * from faculty_details where faculty_id = '$facultyid'");
                            $row = mysqli_fetch_assoc($result);
                            echo $row['faculty_name'];
                            echo '<br>';
                            echo $row['faculty_branch'];
                            ?>
                            <div class="clearfix"></div>
                            <form action="logout.php" method="post">
                                <button class="btn btn-default" name="admin_logout" value="admin_logout">LogOut</button>
                            </form>
                        </div>
                    </div>
                    <?php
                    $sqlpro = "SELECT project_id from project_details where faculty_id='$facultyid'";
                    $resultpro = mysqli_query($connection, $sqlpro);
                    $rowpro = mysqli_fetch_row($resultpro);
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <h5> </h5>

                            </div>
                            <!-- /.list-group -->
                        </div>
                        <!-- /.panel-body -->

                    </div>
                    <!-- /.panel -->
                    <?php

                    $sql = "SELECT * from notifications where project_id='$rowpro[0]'";
                    $result = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_row($result)) {
                        if ($row[2] != $facultyid) {
                    ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">

                                </div>
                                <div class="panel-body">
                                    <h5> You have Message from <?php echo $row[2] ?> <form method="post" action="faculty.php"><button type='submit' class="fa fa-close" style="float: right;" name="close"></button><input id="aa" type="text" value="<?php echo $row[2]; ?>" name="sender" hidden="hidden"></h5>


                                </div>
                                <!-- /.panel-body -->

                            </div>
                    <?php
                        }
                    }
                    ?>
                    <?php

                    if (isset($_POST['close'])) {
                        $sender = $_POST['sender'];
                        $sql = "DELETE FROM notifications WHERE sender='$sender'";
                        $result = mysqli_query($connection, $sql);
                    }




                    ?>



                    <!-- /.panel -->
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">

                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                </div>


                <div class="row">

                    <div class="col-lg-7">
                        <?php
                        $sqlmain = "SELECT * FROM project_details where faculty_id='$facultyid'";
                        $resultmain = mysqli_query($connection, $sqlmain);
                        $pro = array();
                        $k = 0;
                        while ($rowmain = mysqli_fetch_row($resultmain)) { ?>
                            <div class="panel panel-default">
                                <?php
                                $sqlc = "select * from notifications where project_id='$rowmain[0]' and not sender='$facultyid'";
                                $resultc = mysqli_query($connection, $sqlc);
                                $count = mysqli_num_rows($resultc);
                                ?>

                                <div class="panel-heading">
                                    Project Details <br> <span style="float:right;
                         margin-top: -23px;
                         top: 0px;
                         right: 40px;
                         padding: 3px 6px;
                         border-radius: 10%;
                         background-color: red;
                         color: white;
                         "><?php echo $count;  ?> new</span>
                                </div>
                                <!-- /.panel-heading -->

                                <div class="panel-body">
                                    <div class="pull-left">
                                        <form method="post" action="faculty.php" enctype="multipart/form-data">
                                            <label>Project ID :</label>

                                            <input type="text" name="project" value="<?php echo $rowmain[0];
                                                                                        $pro[$k++] = $rowmain[0]; ?>" readonly>
                                            <br>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    Team Members
                                                </div>
                                                <!-- /.panel-heading -->

                                                <div class="panel-body">
                                                    <div class="pull-left">
                                                        <h5><?php echo $rowmain[4] ?></h5>
                                                        <h5><?php echo $rowmain[6] ?></h5>
                                                        <h5><?php echo $rowmain[7] ?></h5>
                                                        <h5><?php echo $rowmain[8] ?></h5>


                                                    </div>
                                                    <!-- /.panel-body -->
                                                </div>
                                            </div>



                                            <!-- /.panel -->


                                            <input type="submit" name="proopen" value="Goto Project Panel">
                                        </form>
                                    </div>
                                    <br><br><br>
                                    <div class="panel panel-default" style="float: right;">
                                        <div class="panel-heading">
                                            Project Status
                                        </div>
                                        <!-- /.panel-heading -->

                                        <div class="panel-body" style="padding-right: 160px;">
                                            <div class="pull-left">
                                                <h5><b>Project Type :</b> <?php echo $rowmain[16] ?></h5>
                                                <h5><b>Abstract : </b></h5>
                                                <h5><?php if ($rowmain[10] != '') echo "Abstract Submitted";
                                                    else
                                                        echo "Pending Submission"; ?></h5>
                                                <h5><b>Status :</b> </h5>
                                                <h5><?php echo $rowmain[5]; ?></h5>


                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                    </div>
                                </div>

                                <!-- /.panel-body -->

                            </div>

                        <?php
                        }
                        ?>

                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Broadcast Message :
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form method="post" action="faculty.php" enctype="multipart/form-data">

                                    <label>Message To be Sent : </label>

                                    <input type="text" name="grp-msg" placeholder="Enter Message to be sent ">
                                    <button type="submit" class="btn btn-default" value="generatelist" name="grp-btn">Send</button>
                                    <br>
                                </form>
                                <?php if (isset($_POST['grp-btn'])) {
                                    $msg = $_POST['grp-msg'];
                                    date_default_timezone_set("Asia/Calcutta");
                                    $s = date("h:i:sa");
                                    $v = '';
                                    for ($x = 0; $x < strlen($s) - 5; $x++) {
                                        $v = $v . $s[$x];
                                    }

                                    $w = '';
                                    for ($x = 8; $x < 10; $x++) {
                                        $w = $w . $s[$x];
                                    }
                                    $w = strtoupper($w);
                                    $v = $v . ' ' . $w;
                                    $d = date("d-m-Y");
                                    foreach ($pro as $value) {
                                        $query1 = "INSERT into messages (project_id,messages,sender,type,daate,time) VALUES('$value','$msg','$facultyid','text','$d','$v')";
                                        mysqli_query($connection, $query1);
                                        $query1 = "INSERT into notifications (project_id,notification,sender) VALUES('$value','$msg','$facultyid')";
                                        mysqli_query($connection, $query1);
                                    }
                                } ?>
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