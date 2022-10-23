<?php


require_once('../database/dbconnect.php');


if (!isset($_SESSION)) {
  session_start();
}
$db = new dbConnect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Students Payment Details</title>

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
                <li class="breadcrumb-item active">Students Payment Details</li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->




      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">Students Payment Details</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Student</th>
                        <th>Mobile</th>
                        <th>Payment Date</th>
                        <th>Amount</th>
                        <th>Class Id</th>
                        <th>Student Id</th>
                        <th>Access</th>
                        <th>Cancel</th>
                        <th>View</th>
                      </tr>
                    </thead>
                    <tbody>

                      
                    <?php
                            
                            $query3 = "SELECT  * From Payment WHERE Status='1'";
                            $result3 = $db->getfromdb($query3);
                            $resultCheck3 = mysqli_num_rows($result3);
                            $id="";
                            $image = "";
                            $description = "";
                            $amount = "";
                            $date = "";  
                            $cllassid = "";
                            $sid = "";
                           


                            if ($resultCheck3 > 0) {

                                while ($row3 = mysqli_fetch_assoc($result3)) {


                                    $id=$row3["Id"];      
                            $image = $row3["SlipImage"];
                            $description = $row3["Discription"];
                            $amount = $row3["PaymentAmount"];
                            $date = $row3["PaymentDate"];  
                            $cllassid = $row3["Class_Id"];
                            $sid = $row3["Student_Id"];

                            
                            $paymentStatus = "ALLOWED";

                        
                            $query = "SELECT  PaymentStatus From PaymentStatus WHERE Student_Id=$sid AND Class_Id = $cllassid AND PaymentStatus = '0'";
                            $result = $db->getfromdb($query);
                            $resultCheck = mysqli_num_rows($result);

                            if ($resultCheck > 0) {
                              while($row = mysqli_fetch_assoc($result)) {


                                    $paymentStatus= '<button class="btn btn-primary" value = "'.$id.'" name = "access" > Give Access '.$cllassid.','.$sid.'</button>';

                                }}

          //                      $query2 = "SELECT  PaymentStatus From PaymentStatus WHERE Student_Id=$sid AND Class_Id = $cllassid AND PaymentStatus = '0'";
         //                       $result2 = $db->getfromdb($query2);
          //                      $resultCheck2 = mysqli_num_rows($result2);
//
                         //       if ($resultCheck2 > 0) {
           //                         if ($row2 = mysqli_fetch_assoc($result2)) {
                                        
           //                             $paymentStatus= '<button class="btn btn-primary" value = "'.$cllassid.'.'.$sid.'" name = "classId"> Give Access '.$cllassid.'.'.$sid.'</button>';

                     //               }}


                                    $fName = '';
                                        $lName = '';
                                        $mobile = '';
                                $query4 = "SELECT  Fname,Lname,Mobile From Student WHERE Id=$sid";
                                $result4 = $db->getfromdb($query4);
                                $resultCheck4 = mysqli_num_rows($result4);

                                if ($resultCheck4 > 0) {
                                    if ($row4 = mysqli_fetch_assoc($result4)) {
                                        $fName = $row4["Fname"];
                                        $lName = $row4["Lname"];
                                        $mobile = $row4["Mobile"];
                                        
                                    }}
                                    
                                    

                            echo'<tr>
                            
                            <td>'.$fName.' '.$lName.'</td>
                            <td>'.$mobile.'</td>
            <td>'.$date.'</td>
            <td>'.$amount.'</td>
            <td>'.$cllassid.'</td>
            <td>'.$sid.'</td>
            <form action="" method ="POST">
            <td>'.$paymentStatus.'</td>
            </form>
            <form action="studentpaymentdetails.php" method ="POST">
            <td><button class="btn btn-primary" value = "'.$id.'" name = "cancel"> Cancel '.$id.'</button></td>
            </form>
            <form action="viewpayment.php" method ="POST">
            <td><button class="btn btn-primary" value = "'.$id.'" name = "view"> View '.$id.'</button></td>
            </form>
            </tr>
                            ';
                                }}

                                    ?>


            






                                        


                    </tbody>

                  </table>
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