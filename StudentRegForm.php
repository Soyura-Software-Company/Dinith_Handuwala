<?php
if (!isset($_SESSION)) {
  session_start();
  require_once ('database/dbconnect.php');
  require_once ('service/StudentService.php');
}
$db = new dbConnect();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dinith Haduwala | Registration</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">


    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        #regi {
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

<body>

<?php
$firstName = null;
$lastName = null;
$gender = null;
$address = null;
$mobile = null;
$whatsappMobile = null;
$email  = null;
$sclName = null;
$joindate = null;
$district = null;
$grade = null;
$check = null;


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if(isset($_POST['submitreg'])){
   

    $firstName = stripslashes($_POST['fname']);
    $lastName = stripslashes($_POST['lname']);
    $gender = stripslashes($_POST['gender']);
    $address = stripslashes($_POST['address']);
    $mobile = stripslashes($_POST['mobile']);
    $whatsappMobile = stripslashes($_POST['whatsappmobile']);
    $email  = stripslashes($_POST['email']);
    $sclName = stripslashes($_POST['sclname']);
    $joindate = stripslashes($_POST['joindate']);
    $district = stripslashes($_POST['district']);
    $grade = stripslashes($_POST['grade']);

 

    if(empty($firstName)){

      echo '<script type="text/javascript">
          swal("", "first name is required !!", "warning");
          </script>';
  }elseif(empty($lastName)){
   
      echo '<script type="text/javascript">
          swal("", "last name is required !!", "warning");
          </script>';
  }elseif(empty($gender)){
   
    echo '<script type="text/javascript">
        swal("", "please select a gender !!", "warning");
        </script>';
}elseif(empty($address)){
   
  echo '<script type="text/javascript">
      swal("", "address is required !!", "warning");
      </script>';
}elseif(empty($mobile)){
   
  echo '<script type="text/javascript">
      swal("", "mobile number is required !!", "warning");
      </script>';
}elseif(empty($sclName)){
   
  echo '<script type="text/javascript">
      swal("", "School Name is required !!", "warning");
      </script>';
}elseif(empty($joindate)){
   
  echo '<script type="text/javascript">
      swal("", "please select a joing date", "warning");
      </script>';
}elseif(empty($district)){
   
  echo '<script type="text/javascript">
      swal("", "please select a district !!", "warning");
      </script>';
}elseif(empty($grade)){
   
  echo '<script type="text/javascript">
      swal("", "please select a grade !!", "warning");
      </script>';
}elseif(!isset($_POST['check'])){
   
  echo '<script type="text/javascript">
      swal("", "you must agree our turms of service", "warning");
      </script>';
}else{

$districtId = null;
$gradeId = null;



        
        $query="SELECT Id,District FROM District WHERE District= '".$district."'";
        $result = $db->getfromdb($query);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0 ){
          
    
          while($row = mysqli_fetch_assoc($result)){
            $districtId = $row['Id'];
             
          }
        }

        $query="SELECT Id,Grade FROM Grade WHERE Grade= '".$grade."'";
        $result = $db->getfromdb($query);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0 ){
        
          while($row = mysqli_fetch_assoc($result)){
            $gradeId = $row['Id'];
             
          }
        }


  $studentReg = new StudentService();
  $district = (int)$district;
  $grade = (int)$grade;
  $userid = (int)$_SESSION['userid'];
  $studentReg->__constructWithoutId($firstName,$lastName,$gender,$address,$mobile,$whatsappMobile,$email,$sclName,$joindate,$districtId,$gradeId,$userid);
    $studentReg->insertStudent();

    echo '<script type="text/javascript">
    swal("", "successfully registerd", "warning");
    </script>';

    echo "<script> window.location.href='php/dashbord.php';</script>";
    //echo "<script> window.location.href='verifycode.php';</script>";
   
  
      }
}}

?>

    <section id="regi">

        <div class=" col-md-6 mt-5  container">

            <div class="card card-outline card-info col-md-12">
                <div class="card-header text-center">
                    <h1 id="not-bold"> <b>Soft </b>Java</h1>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Get's Started.</p>

                    <form action="StudentRegForm.php" method="POST">
                        <div class="form-row">

                            <div class="input-group col-md-6 mb-3">

                                <input type="text" name="fname" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name" value="<?php echo $firstName ?>">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group col-md-6 mb-3">
                                <input type="text" name="lname" class="form-control" id="exampleInputPassword1" placeholder="Enter Second Name" value="<?php echo $lastName ?>">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="input-group col-md-1 mb-0">
                                <label for="">Gender</label>
                            </div>

                            <div class="input-group col-md-5 mb-3">

                                <select class="form-control select2" style="width: 100%;" name="gender" aria-placeholder="Gender">
                                    <option> <?php echo $gender ?> </option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>

                                </select>
                            </div>
                            <div class="input-group col-md-2 mb-0">
                                <label for="">Date Of Birth</label>
                            </div>
                            <div class="input-group col-md-4 mb-3">
                                <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate" name="joindate" value="<?php echo $joindate ?>" />
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="input-group col-md-12 mb-3">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" name="address" value="<?php echo $address ?>">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-home"></span>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="form-row">

                            <div class="input-group col-md-6 mb-3">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile" name="mobile" value="<?php echo $mobile ?>">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group col-md-6 mb-3">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Whatsapp Number" name="whatsappmobile" value="<?php echo $whatsappMobile ?>">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-mobile"></span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="input-group col-md-6 mb-3">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="<?php echo $email ?>">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group col-md-6 mb-3">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter School Name" name="sclname" value="<?php echo $sclName ?>">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-school"></span>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="form-row">

                            <div class="input-group col-md-1 mb-0">
                                <label for="">District</label>
                            </div>
                            <div class="input-group col-md-5 mb-3">
                                <select class="form-control select2" style="width: 100%;" name="district">
                                    <option> <?php echo $district ?> </option>
                                    <option>Gampaha</option>
                                    <option>Colombo</option>
                                    <option>Nuwara Eliya</option>
                                    <option>Negombo</option>
                                    <option>Kaluthara</option>
                                    <option>Kandy</option>
                                    <option>Matale</option>
                                    <option>Galle</option>
                                    <option>Matara</option>
                                    <option>Hambantota</option>
                                    <option>Jaffna</option>
                                    <option>Kilinochchi</option>
                                    <option>Mannar</option>
                                    <option>Vavuniya</option>
                                    <option>Mullaitivu</option>
                                    <option>Batticola</option>
                                    <option>Ampara</option>
                                    <option>Trincomalee</option>
                                    <option>Kurunegala</option>
                                    <option>Puttalam</option>
                                    <option>Anuradhapura</option>
                                    <option>Polonnaruwa</option>
                                    <option>Badulla</option>
                                    <option>Moneragala</option>
                                    <option>Rathnapura</option>
                                    <option>Kegalle</option>


                                </select>
                            </div>
                            <div class="input-group col-md-1 mb-0">
                                <label for="">Grade</label>
                            </div>
                            <div class="input-group col-md-5 mb-3">
                                <select class="form-control select2" style="width: 100%;" name="grade">
                                    <?php

                                    $query3 = "SELECT  Grade From grade";
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


                        </div>






                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="check[]" class="custom-control-input" id="exampleCheck1" value="pass">
                                <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                            </div>
                        </div>

                        <div class="mb-3">

                            <button type="submit" name="submitreg" class="btn btn-info"> Submit </button>
                        </div>

                    </form>



                    I already have an Account? <a href="view/login.php" class="text-center"> Log In Here</a>
                </div>
                <!-- /.form-box -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.register-box -->
    </section>

    <script>

  
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
  
</script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>