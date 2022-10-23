<?php

if (!isset($_SESSION)) {
    session_start();
}
require_once('../database/dbconnect.php');
$db = new dbConnect();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student | Dashboard</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php
        include 'sidebar.php';

        ?>

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../dist/img/logo.jpg" alt="LPALogo" height="80" width="80">
        </div>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="dashbord.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->




        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashbord.php">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->


            <section class="col-12 mb-5">
                <div>
                    <div class="card">
                        <div class="card-header ">
                            <h3 class="card-title">Time Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Grade</th>
                                        <th>Lecture</th>
                                        <th>Date</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Subscribe Button</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $gradeId;
                                    $timeTableId;
                                    $zoomLinkId;
                                    $classId;
                                    $query = "SELECT timetable.Id as tidd, timetable.Description, timetable.StartTime, timetable.EndTime, timetable.ZoomLink_Id, timetable.Class_Id, class.Id, class.Description as classdes, class.Grade_Id FROM timetable INNER JOIN class ON timetable.Class_Id = class.Id WHERE timetable.Status= '1'";
                                    $result = $db->getfromdb($query);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0) {

                                        while ($row = mysqli_fetch_assoc($result)) {

                                            $timeTableId = $row["tidd"];
                                            $zoomLinkId = $row["ZoomLink_Id"];
                                            $classId = $row["Class_Id"];

                                            $query2 = "SELECT * FROM  classdate WHERE TimeTable_Id= '$timeTableId'";
                                            $result2 = $db->getfromdb($query2);
                                            $resultCheck2 = mysqli_num_rows($result2);


                                            $mondayD = null;
                                            $tuesdayD = null;
                                            $wednessdayD = null;
                                            $thursdayD = null;
                                            $fridayD = null;
                                            $saturdayD = null;
                                            $sundayD = null;


                                            if ($resultCheck2 > 0) {

                                                while ($row2 = mysqli_fetch_assoc($result2)) {


                                                    $monday = $row2["Monday"];
                                                    $tuesday = $row2["Tuesday"];
                                                    $wednessday = $row2["Wednessday"];
                                                    $thursday = $row2["Thursday"];
                                                    $friday = $row2["Friday"];
                                                    $saturday = $row2["Saturday"];
                                                    $sunday = $row2["Sunday"];

                                                    if ($monday == 1) {
                                                        $mondayD = 'Monday -';
                                                    }
                                                    if ($tuesday == 1) {

                                                        $tuesdayD = 'Tuesday -';
                                                    }
                                                    if ($wednessday == 1) {

                                                        $wednessdayD = 'Wednessday -';
                                                    }
                                                    if ($friday == 1) {

                                                        $fridayD = 'friday -';
                                                    }
                                                    if ($saturday == 1) {

                                                        $saturdayD = 'Saturday -';
                                                    }
                                                    if ($thursdayD == 1) {

                                                        $sundayD = 'Sunday';
                                                    }
                                                    if ($thursday == 1) {

                                                        $thursdayD = 'Thursday -';
                                                    }
                                                }


                                                echo '<tr>
<form action="subscribeclass.php" method ="GET">
<td>' . $row["classdes"] . '</td>
<td>' . $row["Description"] . '</td>


<td>


' . $mondayD . ' 
' . $tuesdayD . '
' . $wednessdayD . '
' . $thursdayD . '
' . $fridayD . '
' . $saturdayD . '
' . $sundayD . '




</td>









<td>' . $row["StartTime"] . '</td>
<td> ' . $row["EndTime"] . '</td>
<td><button class="btn btn-outline-info" value = ' . $classId . ',' . $timeTableId . ' name = "classId"> Pay Here</button></td>


</form>
</tr>';
                                            }
                                        }
                                    }


                                    ?>


                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.content -->
            </section>


            <section class="content container mb-5">
        <div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Class Time Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="row mt-4">



                                        <?php

                                        $ssstId = null;
                                        $sIdd = $_SESSION["userid"];
                                        $ss = $_SESSION['userid'];

                                        $query6 = "SELECT  Id From student WHERE StudentUser_Id= '$ss' ";
                                        $result6 = $db->getfromdb($query6);
                                        $resultCheck6 = mysqli_num_rows($result6);
                                        if ($resultCheck6 > 0) {

                                            while ($row6 = mysqli_fetch_assoc($result6)) {
                                                $ssstId = $row6["Id"];
                                            }
                                        }
                                        $query3 = "SELECT paymentstatus.Id, paymentstatus.PaymentStatus, paymentstatus.Class_Id, paymentstatus.Student_Id,paymentstatus.TimeTableId , class.Id AS classId, class.Description,class.Grade_Id FROM paymentstatus JOIN class ON paymentstatus.Class_Id = class.Id WHERE paymentstatus.PaymentStatus= '1' AND paymentstatus.Student_Id = '$ssstId'";
                                        $result3 = $db->getfromdb($query3);
                                        $resultCheck3 = mysqli_num_rows($result3);
                                        $className = "";
                                        $timetableId = "";


                                        if ($resultCheck3 > 0) {

                                            while ($row3 = mysqli_fetch_assoc($result3)) {


                                                $timetableId = $row3["TimeTableId"];
                                                $startTime = "";
                                                $endTime = "";
                                                $zoomId = "";
                                                $link = "";
                                                $classId = "";


                                                $query4 = "SELECT * FROM timetable  WHERE timetable.Id= '$timetableId'";
                                                $result4 = $db->getfromdb($query4);
                                                $resultCheck4 = mysqli_num_rows($result4);


                                                if ($resultCheck4 > 0) {

                                                    while ($row4 = mysqli_fetch_assoc($result4)) {

                                                        $startTime = $row4["StartTime"];
                                                        $endTime = $row4["EndTime"];
                                                        $className = $row4["Description"];
                                                        $zoomId = $row4["ZoomLink_Id"];
                                                        $classId = $row4["Class_Id"];
                                                    }
                                                }

                                                $query6 = "SELECT ZoomLink FROM zoomlink  WHERE Id= '$zoomId'";
                                                $result6 = $db->getfromdb($query6);
                                                $resultCheck6 = mysqli_num_rows($result6);


                                                if ($resultCheck6 > 0) {

                                                    while ($row6 = mysqli_fetch_assoc($result6)) {

                                                        $link = $row6["ZoomLink"];
                                                    }
                                                }



                                                echo '                                <div class="col-sm-4">
    <div class="position-relative p-3 bg-gray mb-3" style="height: 180px">
        <div class="ribbon-wrapper ribbon-lg">
            <div class="ribbon bg-success text-lg">
                '.$className.'
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-calendar-alt">  &nbsp; </i>
            </div>
            <div>
               
            </div>
        </div>

        <div class="row">
            <div>
                <i class="fa fa-clock-o">  &nbsp; </i>
            </div>
            <div>
                <p id="time"> '.$startTime.' To '.$endTime.' p.m</p>
            </div>
        </div>

        <h2 class="lead mb-4"><b>' . $row3["Description"] . '</b></h2>

        <div class="text-right">
        <a href="' . $link . '" class="btn btn-sm btn-outline-light">
                 Click Here to Join
            </a>
        </div>


    </div>
</div>';

                                              
                                            }
                                        }


                                        ?>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>


                <!-- /.container-fluid -->
            </section>






        


        <!-- Main Footer -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>


    </div>
    <!-- ./wrapper -->
    <?php
        include 'footer.php';
        ?>
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../dist/js/adminlte.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/jszip/jszip.min.js"></script>
    <script src="../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard3.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>