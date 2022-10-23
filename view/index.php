<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    
    
</head>

<body>
    <?php 
    
if (!isset($_SESSION['userid'])) {

    echo "<script> window.location.href='login.php';</script>";
    exit();
}else{

    echo "<script> window.location.href='../php/dashbord.php';</script>";
    exit();
}


    
    ?>

    
</body>


</html>