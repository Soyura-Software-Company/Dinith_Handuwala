<?php

require_once('../database/dbconnect.php');


$db = new dbConnect();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Create Time Table</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
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
    include 'admin_sidebar.php';

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
                <li class="breadcrumb-item active">Create Time Table</li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

<form action="createtimetable.php" method="POST" >
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">Add New Time Table</h3>
                </div>
                <!-- /.card-header -->
                <form action="createtimetable.php" method ="POST">

                <div class="card-body">
                  <div class="row">

                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label>Select Grade</label>
                        <select class="form-control select2 select2-info" data-dropdown-css-class="select2-info" style="width: 100%;">
                          <option selected disabled>-Select Grade-</option>
                          <?php

                          $query3 = "SELECT Grade From grade";
                          $result3 = $db->getfromdb($query3);
                          $resultCheck3 = mysqli_num_rows($result3);

                          if ($resultCheck3 > 0) {

                            while ($row3 = mysqli_fetch_assoc($result3)) {
                              $Grade = $row3["Grade"];

                              echo '<option>' . $Grade . '</option>';
                             
                            }
                          }

                          ?>
                        </select>

                      </div>
                      <!-- /.form-group -->



                    </div>

                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label>Select Class</label>
                        <select class="form-control select2 select2-info" data-dropdown-css-class="select2-info" style="width: 100%;">
                          <option selected disabled>-Select Class-</option>
                          <?php

$query4 = "SELECT  class.Description, class.Grade_Id FROM class JOIN grade ON grade.Id";
$result4 = $db->getfromdb($query4);
$resultCheck4 = mysqli_num_rows($result4);
                          if ($resultCheck4 > 0) {

                            while ($row4 = mysqli_fetch_assoc($result4)) {
                              $Description = $row4["Description"];

                              echo '<option>' . $Description . '</option>';
                            }
                          }

                          ?>
                        </select>

                      </div>


                    </div>


                  </div>

                  <div class="row">
                    <div class="form-group col-12">
                      <label>Select Date</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate" name="classdate" />

                      </div>
                    </div>
                  </div>


                  <div class="row">

                    <div class="form-group col-6 ">
                      <label>Start Time</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="time" class="form-control datetimepicker-input" data-target="#reservationdate" name="classdate" />

                      </div>
                    </div>

                    <div class="form-group col-6 ">
                      <label>End Time</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="time" class="form-control datetimepicker-input" data-target="#reservationdate" name="classdate" />

                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="form-group col-12">
                      <label>Enter Zoom Link</label>
                      <input type="text" class="form-control" id="zoomlink" placeholder="Enter Zoom Link">
                    </div>
                  </div>



                  <!-- /.card-body -->
                </div>

                <div class="card-footer text-right">
                  <a href="#" class="btn btn-sm btn-outline-info">
                   CREATE New Time Table
                  </a>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->

          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
                        </form>






    </div>

    <!-- Main Footer -->
    <?php
    include 'admin_footer.php';
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
  <script src="../plugins/select2/js/select2.full.min.js"></script>

  <!-- date-range-picker -->
  <script src="../plugins/daterangepicker/daterangepicker.js"></script>




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
  <script>
    $(function() {

      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })


    })
  </script>




</body>

</html>