

<?php
require_once ('service/studentuserservice.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dinith Handuwala | Sign Up</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
      #login {
            background-image: url("dist/img/17213260_rm373batch13-085.jpg");
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
<?php
$userName = "";
$password = "";
$repassword = "";
$check = "";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
if(isset($_POST['submit'])){
    $userName = stripslashes($_POST['username']);
    $password = stripslashes($_POST['password']);
    $repassword = stripslashes($_POST['repassword']);




    if(empty($userName)){
        $errors1[] = 'username is Required';
        echo '<script type="text/javascript">
  					swal("", "user name is required !!", "warning");
  					</script>';
    }

    if(empty($password)){
        $errors1[] = 'password is Required';
        echo '<script type="text/javascript">
  					swal("", " password is Required !!", "warning");
  					</script>';
        //echo '<script> alert("password is Required"); </script>';
    }

    if(empty($repassword)){
        $errors1[] = 'retype password';

        echo '<script type="text/javascript">
  					swal("", " retype password !!", "warning");
  					</script>';
       // echo '<script> alert("retype password"); </script>';
    }

if(!empty($userName) && !empty($password) && !empty($repassword)){
    if($password == $repassword){
        $encpassword =md5($password);

        $db = new dbConnect();
        $query="SELECT * FROM StudentUser WHERE username= '".$userName."'";
        $result = $db->getfromdb($query);
        $resultCheck = mysqli_num_rows($result);


if($resultCheck > 0 ){
    
    while($row = mysqli_fetch_assoc($result)){

      $check = "username is already exist use another username";

        echo '<script type="text/javascript">
        swal("", "username is already exist use another username", "warning");
        </script>';
       
    }

}else{$user = new studentuserservice();
    $user->__constructWithOutId($userName,$encpassword);
    $user->insertStudentUser();
    echo '<script type="text/javascript">
    swal("", "account created success", "warning");
    </script>';

    echo "<script> window.location.href='view/login.php';</script>";
}


        
        
    }else{
        echo '<script type="text/javascript">
        swal("", " passwords are not same", "warning");
        </script>';

    }

    
    

    
}
    

}

}



?>


 <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-info">
      <div class="card-header text-center">
        <h1><b>Dinith </b>Handuwala</h1>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign Up</p>

        <form action="SignUp.php" method="POST">
          <div class="input-group mb-3">
          <input type="username" placeholder="Enter User Name" class="form-control" name="username" id="usern" value = "<?php echo $userName ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
          <input type="password" placeholder="Enter Password" class="form-control" name="password" value = "<?php echo $password ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
          <input type="password" placeholder="Re-Type Password" class="form-control" name="repassword" value = "<?php echo $repassword ?>">
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
          
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="submit" class="btn btn-info btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
<div style="color:red"><?php  echo $check  ?></div>

        <!-- /.social-auth-links -->

        <p class="mb-0">
          <a href="view/login.php" class="text-center">Already Have an Account?</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script src="js/jquery.js">    </script>
    <script src="js/popper.js">    </script>
    <script src="js/bootstrap.js"></script>
    <script src="js/sweetalert.js"></script>
</body>

</html>