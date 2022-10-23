<?php


if (!isset($_SESSION)) {
    session_start();
}

require_once ('../database/dbconnect.php');
require_once ('../common/logindetals.php');


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dinith Handuwala | Log In</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <style>
      #login {
            background-image: url("../dist/img/17213260_rm373batch13-085.jpg");
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: left;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
  </style>
</head>

<body class="hold-transition login-page" id="login">
  <div style="color:red">
<?php
$wrong = "I forgot my password";
$Wrongpassword = null;
$userName = null;
$password = null;
$userid = null;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['submit'])){
        
        $userName = stripslashes($_POST['username']);
        $password = stripslashes($_POST['password']);
        $password = md5($password);

        $db = new dbConnect();
        $sId = new LoginDetails();
        $query="SELECT * FROM StudentUser WHERE UserName=? AND Password=?;";
        
        $connection = $db->getConnection();
        $stmt = mysqli_stmt_init($connection);

        


        if(!mysqli_stmt_prepare($stmt, $query)){
            echo '<script type="text/javascript">
            swal("", " Sql statement faild", "warning");
            </script>';

        }else{
           
            mysqli_stmt_bind_param($stmt,"ss", $userName, $password);
            

        }

        mysqli_stmt_execute($stmt);
        

        $result = mysqli_stmt_get_result($stmt);
        
        
        $resultCheck = mysqli_num_rows($result);


        if($resultCheck > 0 ){

            while($row = mysqli_fetch_assoc($result)){
       
                
                $_SESSION['userid'] = $row['Id'];
                $_SESSION['username'] = $row['UserName'];
               
                $sId->setStudentId($row['Id']);
                $userid = $row['Id'];
                
            }

            
            

            
        }else{
            $Wrongpassword = "Wrong Password Or UserName";

        }
        

        

  
        $query3 = "SELECT  Id From Student WHERE StudentUser_Id='$userid'";
        $result3 = $db->getfromdb($query3);
        $resultCheck3 = mysqli_num_rows($result3);
        $className = "";
       


        if ($resultCheck3 > 0) {

            if ($row3 = mysqli_fetch_assoc($result3)) {
                echo "<script> window.location.href='../php/dashbord.php';</script>";

               
            }}else{


              $query4 = "SELECT  UserName,Password From studentuser WHERE UserName='$userName' AND Password='$password'";
              $result4 = $db->getfromdb($query4);
              $resultCheck4 = mysqli_num_rows($result4);
              $className = "";
             
      
      
              if ($resultCheck4 > 0) {
      
                  if ($row4 = mysqli_fetch_assoc($result4)) {
                    echo "<script> window.location.href='../StudentRegForm.php';</script>";
                  }}else{
                    
                  }







               
                

            }


    }
}
    ?>
</div>
 <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-info">
      <div class="card-header text-center">
        <h1><b>Dinith </b>Handuwala</h1>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign into your account</p>

        <form action="login.php" method="post">
          <div class="input-group mb-3">
            <input type="text" placeholder="Userame" class="form-control" name='username'>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" placeholder="Password" class="form-control" name='password'>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" checked="checked">
                <label for="remember">
                  Remember Me
                </label>
              </div>
              <div>
                <lable>
                  <p2 style="color:red"><?php echo $Wrongpassword ?></p2>
                </lable>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="submit" class="btn btn-info btn-block">Log In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href=""><?php  echo $wrong ?></a>
        </p>
        <p class="mb-0">
          <a href="../SignUp.php" class="text-center">Register Here</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>