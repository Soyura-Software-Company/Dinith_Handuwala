<?php

require_once('../database/dbconnect.php');

$db = new dbConnect();
if(!isset($_SESSION)){
    session_start();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student | Profile</title>

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

<?php
$fName = null;
$lName = null;
$address = null;
$mobile = null;
$whatsapp = null;
$email = null;
$grade = null;
$gender = null;
$image = null;
$imageuploda = null;
$district = null;
$school = null;

$district = null;
$grade = null;

$sId = $_SESSION['userid'];

                                            $query4 = "SELECT  * From student WHERE StudentUser_Id = $sId";
                                            $result4 = $db->getfromdb($query4);
                                            $resultCheck4 = mysqli_num_rows($result4);

                                            if ($resultCheck4 > 0) {

                                                while ($row4 = mysqli_fetch_assoc($result4)) {
                                                   

                                                    $fName = $row4["Fname"];
                                                    $lName = $row4["Lname"];
                                                    $address = $row4["Address"];
                                                    $mobile = $row4["Mobile"];
                                                    $whatsapp = $row4["WhatsappNumber"];
                                                    $email = $row4["Mail"];
                                                    $gender = $row4["Gender"];
                                                    $district = $row4["District_Id"];
                                                    $school = $row4["SchoolName"];
                                                }
                                            }


                                            $query7 = "SELECT  * From district WHERE Id = $district";
                                            $result7 = $db->getfromdb($query7);
                                            $resultCheck7 = mysqli_num_rows($result7);

                                            if ($resultCheck7 > 0) {

                                                while ($row7 = mysqli_fetch_assoc($result7)) {
                                                   

                                                    $district = $row7["District"];

                                                }
                                            }


                                            
                                            ?>


<?php
    $file_name = null;
    $file_type = null;
    $file_size = null;
    $temp_name = null;

if (isset($_POST['submit'])) {
    

    if(isset($_FILES['image']['name']) && isset($_FILES['image']['type']) && isset($_FILES['image']['size']) && isset($_FILES['image']['tmp_name'])){
        
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $temp_name = $_FILES['image']['tmp_name'];

    $upload_to = 'studentimage/';
    $file_name = $_SESSION['userid'].'_'.$file_name;

    move_uploaded_file($temp_name,$upload_to.$file_name);
}




$districtId = null;
$gradeId = null;

$district = $_POST['district'];
$grade = $_POST['grade'];

        
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



$query="UPDATE `student` SET 
`Fname`='".$_POST['fname']."',
`Lname`='".$_POST['lname']."',
`Gender`='".$_POST['gender']."',
`Address`='".$_POST['address']."',
`Mobile`='".$_POST['pnumber']."',
`WhatsappNumber`='".$_POST['wnumber']."',
`Mail`='".$_POST['email']."',
`SchoolName`='".$_POST['school']."',
`District_Id`='".$districtId."',
`Grade_Id`='". $gradeId."'
 WHERE `StudentUser_Id`= '".$_SESSION['userid']."'";

$db->insertIntoDb($query);


if((isset($_FILES['image']['name']))){

$query="UPDATE `studentimage` SET 
`image`='".$file_name."'
 WHERE `studentId`= '".$_SESSION['userid']."'";

$db->insertIntoDb($query);
    }

}


if (isset($_POST['imageupload'])) {

    
    
$imageuploda = '                                <div class="form-group col-md-6 mb-5">
<label for="exampleInputPassword1">Select Profile Image</label><br>
<input type="file" name="image" id="image">

</div>';
    

}



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
                                <li class="breadcrumb-item active">Payments</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="mb-5">
                <div class="col-md-12">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-info">
                            <h3 class="widget-user-username">Name</h3>
                            <h5 class="widget-user-desc">Grade</h5>
                        </div>
                        <div class="widget-user-image">
                            <?php  
                            $userId = $_SESSION['userid'];
                            $imageN = null;
                            $query5 = "SELECT  * From studentimage WHERE studentId = $userId";
                            $result5 = $db->getfromdb($query5);
                            $resultCheck5 = mysqli_num_rows($result5);

                            if ($resultCheck5 > 0) {

                                while ($row5 = mysqli_fetch_assoc($result5)) {

                                    $imageN = $row5["image"];
                                
                                }}
                            
                            ?>
                            <img class="img-circle elevation-2" src="./studentimage/<?php  echo $imageN; ?>" alt="User Avatar">
                        </div>

                    </div>
                    <!-- /.widget-user -->
                </div>
            </section>




            <section class="col-12 mb-5">
                <div>
                    <div class="card card-outline card-danger">
                        <div class="card-header ">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="form-row">

                                    <div class="input-group col-md-6 mb-3">
                                  
                                        <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $fName  ?>">

                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group col-md-6 mb-3">
                                        <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php  echo $lName  ?>">

                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-row">

                                    <div class="input-group col-md-12 mb-3">
                                        <input type="text" name="address" class="form-control" placeholder="Address" value="<?php  echo $address  ?>">

                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-home"></span>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="form-row">

                                    <div class="input-group col-md-6 mb-3">
                                        <input type="tel" name="pnumber" class="form-control" placeholder="Mobile Number" value="<?php  echo $mobile  ?>">

                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-phone"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group col-md-6 mb-3">
                                        <input type="tel" name="wnumber" class="form-control" placeholder="Whatsapp Number" value="<?php  echo $whatsapp  ?>">

                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-phone"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group col-md-6 mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php  echo $email  ?>">

                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group col-md-6 mb-3">
                                        <input type="text" name="school" class="form-control" placeholder="School" value="<?php  echo $school  ?>">

                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-school"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group">
                                    
                                    <div class="form-group col-md-6 mb-3">
                                    <label>Grade</label> <br>
                                        <select class="custom-select" name= 'grade'>
                                            <?php

                                            $query3 = "SELECT  Grade From Grade";
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
                                    <div class="form-group">
                                    
                                    <div class="form-group col-md-6 mb-3">
                                    <label>Gender</label> <br>
                                        <select class="custom-select" name="gender">

                                        <?php 
                                        $gender = $gender;
                                        $male = 'Male';
                                        $female = 'Female';
                                        $other = 'Other';
                                        $select1 = null;
                                        $select2 = null;
                                        $select3 = null;


                                        if($gender == 'Male'){
                                            $select1 = 'selected';
                                        }else if($gender  == 'Female'){
                                            $select2 = 'selected';
                                        }else if($gender  == 'Other'){
                                            $select3 = 'selected';
                                        } 
                                        ?>
                                        
<option <?php  echo $select1 ?>>Male</option>
<option <?php  echo $select2 ?>>FeMale</option>
<option <?php  echo $select3 ?>>Other</option>

                                        </select>



                                    </div>

                                </div>
                                </div>




<label>District</label> <br>
<div class="form-group">
                                    
                                    <div class="form-group col-md-6 mb-3">
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
</div>

<?php  echo $imageuploda  ?>




<div class="mb-3">
                                    <button type="file" name="imageupload" class="btn btn-danger">Update Profile Picture</button>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="submit" class="btn btn-danger">Update</button>
                                </div>


                            </form>







                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.content -->
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