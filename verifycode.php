<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dinith Handuwala | Email Verify</title>

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
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    #verify {
      justify-content: center;
    }

    #verify1 {
      text-align: center;
    }

    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .fields-input{
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 15px 0;
    }
    .otp_field{
      border-radius: 5px;
      font-size: 50px;
      height: 70px;
      width: 70px;
      border: 3px solid #cacaca;
      margin: 1%;
      text-align: center;
      font-weight: 600;
      outline: none;
      
    }
    .otp_field::-webkit-inner-spin-button,
    .otp_fieldwe::-webkit-outer-spin-button{
      -webkit-appearance: none;
      margin: 0;
    }
    .otp_field:valid{
      border-color: #3095d8;
      box-shadow: 0 10px 10px -5px rgba(0, 0, 0, 0.25);
    }
  </style>
</head>

<body class="hold-transition login-page" id="login">


  <div class="container login-box">
    <div  id="verify">

      <!-- /.login-logo -->
      <div class="card card-outline card-info">

     

        <div class="card-body" id="verify1">

          <form action="#.php" method="POST">
            <div class="mb-3">
              <h3><strong>Please Verify Your Account</strong> </h3><hr>
            </div>

            <div class="center mb-3">
              <img src="dist/img/verifycode.jpg" alt="" width="100%">
            </div>
            
            <div class="mb-4" id="verify1">
              Enter the four digit code we sent to your email address to verify your new account:
            </div>

            <div class="alert-danger"> Error</div>
            <div class="fields-input mb-4">
              <input type="number" name="otp1" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
              <input type="number" name="otp2" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
              <input type="number" name="otp3" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
              <input type="number" name="otp4" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
              
            </div>
            <div class="mb-3 col-md-6 center">

              <button type="submit" name="submit" class="btn btn-info btn-block">Continue</button>

            </div>

          </form>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script src="js/jquery.js"> </script>
  <script src="js/popper.js"> </script>
  <script src="js/bootstrap.js"></script>
  <script src="js/sweetalert.js"></script>
  <script src="js/verify.js"></script>

  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</body>

</html>