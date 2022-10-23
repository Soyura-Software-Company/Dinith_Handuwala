
<?php


require_once('../database/dbconnect.php');
require_once ('../service/classservice.php');
$db = new dbConnect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Add New Class</title>

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
<?php
$succ = '';
$newclass = new ClassesService();

if ($_SERVER['REQUEST_METHOD'] == "GET") {

      
      
    if(isset($_GET['save'])){

        $grade = stripslashes($_GET['grade']);
        $name = stripslashes($_GET['name']);
        $g =explode(",",$grade,5);
       

        $newclass->__constructWithOutId($name,$g[0]);

       
      $succ = $newclass->insertClasses();
    $succ = "Successfully saved";
    }}

?>

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
                <li class="breadcrumb-item active">Add New Class</li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

<form method="GET" >

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">Add New Class</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label>Grade</label>
                      <select name = 'grade' class="form-control select2 select2-info" data-dropdown-css-class="select2-info" style="width: 100%;">
                      <?php
                            
                            $query3 = "SELECT  Grade,Id From Grade WHERE Status='1'";
                            $result3 = $db->getfromdb($query3);
                            $resultCheck3 = mysqli_num_rows($result3);
                            $className = "";
                           


                            if ($resultCheck3 > 0) {

                                while ($row3 = mysqli_fetch_assoc($result3)) {


                                    $className = $row3["Grade"];
                                    $id = $row3["Id"];
                                    echo '<option>'.$id.', '.$className.''. '</option>';

                                }}

                                    ?>

                      </select>

                    </div>
                    <!-- /.form-group -->



                  </div>
                  <div class="form-group">
    <label for="exampleInputPassword1">Class name</label>
    </br>
    <input type="text" class="form-control" id="name" name='name' placeholder="class name">
  </div>


</div>
<div><h1><?php echo '              <div class="jumbotron text-center">
  <h1>'.$succ.'</h1> 
  
</div>' ?></h1></div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer text-right">
                  <button type="submit" name = "save" class="btn btn-sm btn-outline-success">ADD NEW CLASS</button>
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