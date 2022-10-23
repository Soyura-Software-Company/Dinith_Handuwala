
<?php


if (!isset($_SESSION)) {
    session_start();
}

require_once ('../database/dbconnect.php');


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">


    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Student Management</title>

    <style>
        *{padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            background: rgb(219,226,226);

        }
        .row{

            background: white;
            border-radius: 20px;
            box-shadow: 12px 12px 22px grey;
        }

        img{
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn1:hover{
            background: white;
            border: 1px solid;
            color: black;
        }
    </style>



</head>

<body>
<?php
$Wrongpassword = null;
$userName = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['submit'])){

        $userName = stripslashes($_POST['username']);
        $password = stripslashes($_POST['password']);
        $password = md5($password);

        $db = new dbConnect();
        $query="SELECT * FROM AdminUser WHERE UseName=? AND Password=?;";

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


                $_SESSION['AdminUseruserid'] = $row['Id'];


            }


            echo "<script> window.location.href='../admin/admin_dashbord.php';</script>";


        }else{
            $Wrongpassword = "Wrong Password Or UserName";

        }






    }
}
?>





<section class="Form my-4 mx-6">
    <div class="container">
        <div class="row no-gutters">

            <div class="col-lg-5 px-0 pt-0">
                <img src="../dist/img/one.jpg" class="img-fluid" alt="">

            </div>
            <div class="col-lg-7 px-5 pt-5">
                <h1 class="font-weight-bold py-3">ADMIN | Login</h1>




                <form action="admin.php" method="POST">



                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" placeholder="Userame" class="form-control my-3 p-2" name='username'>

                        </div>

                    </div>

                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" placeholder="Password" class="form-control my-3 p-2" name='password'>

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-7">
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                        </div>
                    </div>

                    <div>
                        <lable>  <p2 style="color:red"><?php echo $Wrongpassword ?></p2>     </lable>
                    </div>




                    <div class="form-row">
                        <div class="col-lg-7">

                            <button type="submit"  name="submit" class="btn1 mt-3 mb-5" > Login </button>

                        </div>

                    </div>


                </form>
            </div>

        </div>

    </div>

</section>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->


<script src="../js/jquery.js">    </script>
<script src="../js/popper.js">    </script>
<script src="../js/bootstrap.js"></script>
</body>


</html>