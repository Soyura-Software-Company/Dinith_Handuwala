<?php

require_once('../common/logindetals.php');
require_once('../database/dbconnect.php');
require_once('../service/paymentservice.php');
require_once('../service/paymentstatusservice.php');

if (!isset($_SESSION)) {
  session_start();
}

$sId = new LoginDetails();
      $db = new dbConnect();

$classid;
$St = "";
$timetableid = '';
$newId2 = null;

if ($_SERVER['REQUEST_METHOD'] == "GET") {

  if (isset($_GET['classId'])) {
    $classid = $_GET["classId"];
    $classid = explode(",", $classid, 5);
    $timetableid = $classid[1];
    $classid = $classid[0];

  }
}





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

      <?php

      $ssstId = null;

      $timetableid2 = '';
      $filename = null;
      $uploadto = null;
      $fileuplload = null;
      $db = new dbConnect();
      $payment = new paymentservice();
      $paymentStatus = new PaymentStatusService;


      $classid = $_GET["classId"];
    $classid = explode(",", $classid, 5);
    $timetableid = $classid[1];
    $classid = $classid[0];

    $errors = array();
        if (isset($_POST['uploadpayment'])) {

 

          $note = stripslashes($_POST['note']);
          $date = stripslashes($_POST['date']);
          $amount = stripslashes($_POST['amount']);
          //$timetableid2 = $_POST['tableid'];
          $id = $_POST['uploadpayment'];




          $filename = time() .','. $_FILES['image']['name'];
          $filetype = $_FILES['image']['type'];
          $filesize = $_FILES['image']['size'];
          $tempname = $_FILES['image']['tmp_name'];

          $uploadto = '../dist/uploadimage/';

          if ($filetype = 'image/png') {
			
          }elseif($filetype = 'image/jpeg'){
                     
          }elseif($filetype = 'image/svg'){
      
          }else{
            $errors[] = 'Only JPEG,PNG,SVG files are allowed.';
          }
      
          // checking file size


        



          $query3 = "SELECT  Id From Payment ";
          $result3 = $db->getfromdb($query3);
          $resultCheck3 = mysqli_num_rows($result3);
          if ($resultCheck3 > 0) {

            while ($row3 = mysqli_fetch_assoc($result3)) {
              $newId2 = $row3["Id"] + 1;
            }
          }
          $ss = $_SESSION['userid'];

          $query6 = "SELECT  Id From Student WHERE StudentUser_Id= '$ss' ";
          $result6 = $db->getfromdb($query6);
          $resultCheck6 = mysqli_num_rows($result6);
          if ($resultCheck6 > 0) {

            while ($row6 = mysqli_fetch_assoc($result6)) {
              $ssstId = $row6["Id"];
            }
          }



         


          $pId = null;
          $query4 = "SELECT  Id From Payment WHERE Id2= '$newId2'";
          $result4 = $db->getfromdb($query4);
          $resultCheck4 = mysqli_num_rows($result4);
          if ($resultCheck4 > 0) {

            while ($row4 = mysqli_fetch_assoc($result4)) {
              $pId = $row4["Id"];
            }
          }

          if (empty($errors)) {
            $fileuplload =  move_uploaded_file($tempname, $uploadto . $filename);
            $payment->__constructWithOutId($filename, $note, $amount, $date, $ssstId, $id, $newId2);
            $succ = $payment->insertPayment();
            $paymentStatus->__constructWithOutId('0', $ssstId, $id, $timetableid, $pId);
          $paymentStatus->insertPaymentStatus();
 
           }
 

          
          

          if(empty($errors)) {
            echo "<script> window.location.href='dashbord.php';</script>";
              exit();
          }













          if ($succ) {

            $St = 'Success';
          }




           
          
        }
      



      ?>

      <section>
      <div class="col-md-12">
            <div class="card card-outline card-warning collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Info</h3>

                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h3 id="grade">Grade 6 </h3>
                Class ID : <span><?php echo $classid ?> </span>

              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      </section>

      <section class="col-12 container mb-5">

        <div class="box">
          <!-- Main content -->
          <form  method="POST" enctype="multipart/form-data">
            <!-- general form elements -->
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">Payment</h3></br>

              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Payment Amount</label>
                  <input type="number" class="form-control" name='amount' id="amount" placeholder="Enter amount" required>

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Select Month</label>
                  <input type="month" class="form-control" name='date' id="date" placeholder="Select Month" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Note</label>
                  <input type="text" class="form-control" name='note' id="note" placeholder="Note" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Upload Payment Slip</label><br>
                  <input type="file" name="image" id="">
                </div>
                <div class="form-group">
                  <p style="color:red;font-size:38px;">
                    <strong><?php echo $St;   ?></strong>
                  </p><br>

                </div>


              </div>
              <!-- /.card-body -->
              <?php 
			if (!empty($errors)) {
				echo '<div class="errors">';
				echo '<b>File not uploaded. Check following errors:</b><br>';
				foreach ($errors as $error) {
					echo '- ' . $error;
				}
				echo '</div>';
			}

		 ?>
              <div class="card-footer">
                <button type="submit" class="btn btn-info" name="uploadpayment" value="<?php echo $classid ?>">Submit</button>
              </div>


              <?php
              if ($fileuplload) {
                echo '<div class="form-group">
    <label for="exampleInputPassword1">upload Slip</label><br>
    <img src ="' . $uploadto . $filename  . '" style ="height:200px">
    <div>';
              }


              ?>
            </div>
          </form>

        </div>

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


  <!-- OPTIONAL SCRIPTS -->
  <script src="../plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../dist/js/pages/dashboard3.js"></script>
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>

</body>

</html>