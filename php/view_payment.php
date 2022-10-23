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
    <title>Student | Payments</title>

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
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">


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
        <?php
        include 'sidebar.php';

        ?>



        


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
                                <li class="breadcrumb-item active">Payments</li>
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
                            <h3 class="card-title">Payment History</h3>
                        </div>
                        <!-- /.card-header -->

                        <section class="Form my-0 mx-4">
                            <div class="container">
                                <div class="row no-gutters">


<?php
$sIdd = $_SESSION["userid"];
$sid = "";
$path = '../dist/uploadimage/';
$sIdd = $_SESSION["userid"];
$query4 = "SELECT Id FROM Student WHERE StudentUser_Id = '$sIdd'";
$result4 = $db->getfromdb($query4);
$resultCheck4 = mysqli_num_rows($result4);


if ($resultCheck4 > 0) {

while ($row4 = mysqli_fetch_assoc($result4)) {
    $sid = $row4["Id"];

}}

$query3 = "SELECT SlipImage, PaymentAmount, PaymentDate FROM Payment WHERE Student_Id= '$sid'";
$result3 = $db->getfromdb($query3);
$resultCheck3 = mysqli_num_rows($result3);
$imgpath = "";
$paymentamount = "";
$paymentdate = "";



if ($resultCheck3 > 0) {

while ($row3 = mysqli_fetch_assoc($result3)) {


    $imgpath = $row3["SlipImage"];
    $paymentamount = $row3["PaymentAmount"];
    $paymentdate = $row3["PaymentDate"];

    $imgpath = substr($imgpath,0);
    

    
    echo '  <div class="col-lg-4 px-2 pt-2">
  <div class="card" style="width: 20rem;">
  <img src ="../dist/uploadimage/'.$imgpath.'" style ="height:200px">
  <div class="card-body">

    <h5 class="card-title">Date : '.$paymentdate.' </h5></br>
    <h5 class="card-title">Amount : '.$paymentamount.' </h5></br>

  </div>
  </div>
  </div>';
}}
?>


                                </div>
                            </div>
                        </section>




                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.content -->
            </section>

        
    </div>

    <!-- Main Footer -->
    <?php
    include 'footer.php';
    ?>
    </div>
    <!-- ./wrapper -->

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