<?php
require_once ('service/studentuserservice.php');
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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



<section class="Form my-4 mx-6">
    <div class="container">
        <div class="row no-gutters">

            <div class="col-lg-5 px-0 pt-0">
                <img src="./dist/img/one.jpg" class="img-fluid" alt="">

            </div>
            <div class="col-lg-7 px-5 pt-5">
                <h1 class="font-weight-bold py-3">Reset</h1>

                <form action="SignUp.php" method="POST">

                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="username" placeholder="Enter new User Name" class="form-control my-3 p-2" name="username" id="usern" value = "">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" placeholder="Enter new Password" class="form-control my-3 p-2" name="password" value = "">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" placeholder="Re-Type new Password" class="form-control my-3 p-2" name="repassword" value = "">

                        </div>
                    </div>
                    <div>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </div>



                    <div class="form-row">
                        <div class="col-lg-7">
                            <button type="submit"  name="submit" class="btn1 mt-3 mb-5" > Update </button>




                        </div>
                    </div>




                </form>


            </div>




        </div>

    </div>









</section>






<script src="js/jquery.js">    </script>
<script src="js/popper.js">    </script>
<script src="js/bootstrap.js"></script>
<script src="js/sweetalert.js"></script>







</body>


</html>