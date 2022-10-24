<?php

require_once ('../common/logindetals.php');
require_once ('../database/dbconnect.php');
require_once ('../service/paymentservice.php');

if (!isset($_SESSION)) {
  session_start();

}

$sId = new LoginDetails();


$classid ;
$St = "";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  
    if(isset($_POST['view'])){
        $paymentid = (int)$_POST["view"];
        $filename = '';
        $uploadto = '../dist/uploadimage/';
        $fileuplload = null;
        $db = new dbConnect();
        $payment = '';
        $className = "";
        $studentname = '';
        $date =  '' ;
    
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
          if(isset($_POST['view'])){
            $grade = stripslashes($_POST['view']);
    
            $query3 = "SELECT  * From Payment WHERE Status='1' AND Id = '$paymentid';";
            $result3 = $db->getfromdb($query3);
            $resultCheck3 = mysqli_num_rows($result3);
            
           
    
    
            if ($resultCheck3 > 0) {
    
                while ($row3 = mysqli_fetch_assoc($result3)) {
    
                    $filename = $row3["SlipImage"];
                    $studentname = $row3["Discription"];
                    $payment = $row3["PaymentAmount"];
                    $date = $row3["PaymentDate"];
                    
    
                }}
          }
        
        }
    
        
    }}




    
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get Class</title>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body >



<style>
.box{

    width: 1000px;
    height: 550px;
    top: 50%;
    left: 50%;

    position : absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;

}


</style>


<?php







?>


<div class="box">
 <!-- Main content -->
 <form action="subscribeclass.php" method="POST" enctype="multipart/form-data">
                <!-- general form elements -->
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Payment Amount</h3></br>
                <h3 class="card-title">Class Id :_ </h3>
                
                <input type="number" class="form-control" name = 'Cid' id="cid" value = "<?php  echo $paymentid ?>"  disabled >
                <h3 class="card-title" ></h3>

                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Payment Amount</label>
                    <input type="number" class="form-control" name = 'amount' id="amount" value="<?php echo $payment;  ?>" disabled >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Payment Date</label>
                    
                    <input type="text" class="form-control" name = 'note' id="date" value="<?php echo $date;  ?>" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" class="form-control" name = 'note' id="note" value="<?php echo $studentname;  ?>" disabled>
                  </div>
                  


                
                </div>
                <!-- /.card-body -->

            

              <?php
              echo $filename;
              //$imgpath = substr($imgpath,0);

            echo '<div class="form-group">
            <label for="exampleInputPassword1">upload Slip</label><br>
            <img src ="'.$uploadto.$filename.'" style ="height:500px">
            <div>';

          


?>
            </div>
            </form>

</div>

   


<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<script>
$(function () {
  bsCustomFileInput.init();
});
</script>





            <!-- /.card -->
</body>
</html>