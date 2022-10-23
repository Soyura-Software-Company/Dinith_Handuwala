<?php
if (!isset($_SESSION)) {
  session_start();
  require_once ('../database/dbconnect.php');
 
}
$db = new dbConnect();

  $logBtn =  '<a class="nav-link " href="../view/login.php">LOGIN</a>';
  $regBtn = '<a class="nav-link " href="../SignUp.php">REGISTER</a>';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SoftJava</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome -->

    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        #white {
            color: white;
        }
        
        #card {
            margin: 0;
            display: flex;
            position: relative;
            background-color: #00D7FF;
            color: white;
            text-align: center;
            padding: 0.3em;
            padding-left: 8px;
        }
        
        #view {
            background-color: white;
        }
        
        @import url('https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@300&family=Noto+Serif+Sinhala&display=swap');
        #sinhala {
            font-family: 'Noto Serif Sinhala', serif;
        }
        
        #sinhala1 {
            font-family: 'Noto Serif Sinhala', serif;
            text-align: justify;
            font-size: 18px;
        }
        
        #login_link {
            color: white;
        }
        
        #login_link:hover {
            color: #00D7FF;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
            <img src="../dist/img/logo.jpg" alt="" width="50px">
            <h3 class="nav">SoftJava</h3>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span >  <i id="bar" class="fa fa-bars"></i></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#contactus">CONTACT US</a>
                    </li>

                    <li class="nav-item">
                        <?php
                            echo $logBtn;
                        ?>
                       
                    </li>

                    <li class="nav-item">
                    <?php
                            echo $regBtn;
                        ?>
                        
                    </li>

            </div>
        </div>
    </nav>



    <section id="home" class="mb-5">
        <div class="container" id="white">

            <h3 id="sinhala">තාක්ෂණවේදයේ</h3>
            <h1 id="sinhala"><span>රජුන්  </span> තනන<br>තොරතුරු තාක්ෂණ පන්තිය</h1>

            <a href="#dinith"> <button class="text-uppercase mb-2">Dinith Handuwala</button></a>

        </div>
    </section>

    <section class="container mb-5" id="dinith">

        <div class="row container">
            <div class="col-lg-6 col-md-8 col-12 mb-3">
                <img src="../dist/img/ss.png" alt="" width="70%" class="mb-3">
                <h1>DINITH HANDUWALA</h1>

            </div>
            <div class="callout callout-info col-lg-6 col-md-8 col-12">
                <h3 id="sinhala">ඔබේ ගුරුවරයා,</h3>

                <p id="sinhala1">
                    ගම්‌/ බණ්ඩාරනායක විද්‍යාලයේ ඉංජිනේරු තාක්ෂණය විෂය ධාරාව ඔස්සේ උසස්පෙළ හදාරා කොළඹ විවිශ්වවිද්‍යාලයට තේරී පත්වී, Birmingham City ජාත්‍යන්තර විශ්වවිද්‍යාලයේ මෘදුකාංග ඉංජිනේරු ගෞරව උපාධිය හදාරමින්‌, ජාත්‍යන්තරව පිළිගත්‌ තොරතුරු තාක්ෂණය ඩිප්ලෝමාවක්ද, ව්‍යාපාර
                    කළමනාකරණය ඩිප්ලෝමාවක්ද හදාරා ඇත. මේ වන විට වසර 6ක් උසස්පෙළ සිසුන්‌ සරසවි මාවතට යොමුකරමින්‌ ඔවුන්ට විශිෂ්ඨ ප්‍රතිඵල ලබාදෙමින්‌ නිවැරදි මගකට යොමුකල සිසු හදරැදි ගුරුවරයෙකි. තොරතුරු තාක්ෂණය ඉගැන්වීමේ මනා නිපුණයෙක්‌ වන ඔබේ ගුරුවරයා දිවයිනේ
                    සෑම දිස්ත්‍රික්කයක්ම ආවරණය වන පරිදි සිසුන්‌ දහස්ගණනක්‌ රැස්කර ගනිමින්‌ නොකඩවා Online තාක්ෂණය ඔස්සේ මේ වන විටත්‌ ඉගැන්වීම්‌ කටයුතු සිදුකරයි. සෑම වසරකම රජයේ හා පෞද්ගලික විශ්වවිද්‍යාලයීය සිසුන්‌ විසින්‌ හොබවන තොරතුරු තාක්ෂණික වැඩසටහන්‌
                    ගණනාවකට දේශකවරයා ලෙස සහභාගී වන අතර උසස්පෙළ සිසුන්ව සරසවි අත්දැකීම්‌ සමග විශිෂ්ඨ ප්‍රතිඵලයකට රැගෙන යනු නොඅනුමානය.
                </p>
            </div>
        </div>

    </section>

   








    <section class="content container mb-5">
        <div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Class Time Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="row mt-4">


                            <?php
$startTme = null;
$endTime = null;
$className = null;
$description = null;
$grade = null;


$gradeId;
$timeTableId;
$zoomLinkId;
$classId;
$gradeId = null;


$query = "SELECT timetable.Id as tidd, timetable.Description, timetable.StartTime, timetable.EndTime, timetable.ZoomLink_Id, timetable.Class_Id, class.Id, class.Description as classdes, class.Grade_Id FROM timetable INNER JOIN class ON timetable.Class_Id = class.Id WHERE timetable.Status= '1'";
$result = $db->getfromdb($query);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        $timeTableId = $row["tidd"];
        $zoomLinkId = $row["ZoomLink_Id"];
        $classId = $row["Class_Id"];
        $startTme = $row["StartTime"];
$endTime = $row["EndTime"];
$className = $row["classdes"];
$description = $row["Description"];
$gradeId =  $row["Grade_Id"];




        $query2 = "SELECT * FROM  classdate WHERE TimeTable_Id= '$timeTableId'";
        $result2 = $db->getfromdb($query2);
        $resultCheck2 = mysqli_num_rows($result2);


        $mondayD = null;
        $tuesdayD = null;
        $wednessdayD = null;
        $thursdayD = null;
        $fridayD = null;
        $saturdayD = null;
        $sundayD = null;


        if ($resultCheck2 > 0) {

            while ($row2 = mysqli_fetch_assoc($result2)) {


                $monday = $row2["Monday"];
                $tuesday = $row2["Tuesday"];
                $wednessday = $row2["Wednessday"];
                $thursday = $row2["Thursday"];
                $friday = $row2["Friday"];
                $saturday = $row2["Saturday"];
                $sunday = $row2["Sunday"];

                if ($monday == 1) {
                    $mondayD = 'Monday -';
                }
                if ($tuesday == 1) {

                    $tuesdayD = 'Tuesday -';
                }
                if ($wednessday == 1) {

                    $wednessdayD = 'Wednessday -';
                }
                if ($friday == 1) {

                    $fridayD = 'friday -';
                }
                if ($saturday == 1) {

                    $saturdayD = 'Saturday -';
                }
                if ($thursdayD == 1) {

                    $sundayD = 'Sunday';
                }
                if ($thursday == 1) {

                    $thursdayD = 'Thursday -';
                }
            }

        }
    
        $query3 = "SELECT * FROM  grade WHERE Id= '$gradeId'";
        $result3 = $db->getfromdb($query3);
        $resultCheck3 = mysqli_num_rows($result3);



        if ($resultCheck3 > 0) {

            while ($row3 = mysqli_fetch_assoc($result3)) {
    
    
                $grade = $row3["Grade"];
    
            }}
    
    echo '                                <div class="col-sm-4">
    <div class="position-relative p-3 bg-gray mb-3" style="height: 180px">
        <div class="ribbon-wrapper ribbon-lg">
            <div class="ribbon bg-success text-lg">
                '.$grade.'
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-calendar-alt">  &nbsp; </i>
            </div>
            <div>
               
            </div>
        </div>

        <div class="row">
            <div>
                <i class="fa fa-clock-o">  &nbsp; </i>
            </div>
            <div>
                <p id="time"> '.$startTme.' To '.$endTime.' p.m</p>
            </div>
        </div>

        <h2 class="lead mb-4"><b>'.$description.'</b></h2>

        <div class="text-right">
            <a href="../view/login.php" class="btn btn-sm btn-outline-light">
                 Click Here to Join
            </a>
        </div>


    </div>
</div>';

            
    }}
?>







                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

        <!-- /.container-fluid -->
    </section>




    <section class="container mb-5">
        <div class="col-12">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-aec37704-06d8-4b34-9afc-472746f7c6d0"></div>
        </div>

    </section>


    <section class="container mb-4" id="contactus">
        <h1>Contact Us</h1>
        <hr class="mb-5">

        <div class="row">
            <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box shadow">
                    <span class="info-box-icon bg-success"><i class="fa fa-phone-square"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">For O/L, A/L Students</span>
                        <span class="info-box-number">075 885 9822</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box shadow">

                    <span class="info-box-icon bg-info"><i class="fa fa-phone-square"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">  For Grade 6, 7, 8, 9 Students</span>
                        <span class="info-box-number">076 251 4161</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box shadow">
                    <span class="info-box-icon bg-warning"><i class="fa fa-envelope-square"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Email</span>
                        <span class="info-box-number">softjavagroup@gmail.com</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- /.col -->
        </div>

    </section>


    <section class="content container mb-5">

        <!-- Default box -->
        <div class="card mb-5">
            <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                    <div class="">
                        <img src="../dist/img/contact.jpg" alt="" width="100%" class="mb-3">
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" id="inputName" class="form-control" placeholder="Your Name" />
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">E-Mail</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Your Email" />
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">Subject</label>
                        <input type="text" id="inputSubject" class="form-control" placeholder="Subject Here" />
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea id="inputMessage" class="form-control" rows="4" placeholder="Your Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info" value="Send message">
                    </div>
                </div>
            </div>
        </div>

    </section>










    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">


            <div class="footer-one col-lg-3 col-md-6 col-12 mb-4">
                <h5 class="pb-2">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p>425/1, Nilpanagoda, Minuwangoda</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>075 885 9822 / 076 251 4161</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>softjavagroup@gmail.com</p>
                </div>
            </div>


            <div class="footer-one col-lg-3 col-md-6 col-12 mb-4">
                <h5 class="pb-2">Features</h5>
                <div class="mb-2">
                    <a id="login_link" href="../view/login.php">LOGIN</a>

                </div>
                <div>
                    <a id="login_link" href="../SignUp.php">REGISTER</a>
                </div>

            </div>

            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3 copyright">
                <a href="https://www.facebook.com/handuwalaSir/"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="https://youtube.com/c/DinithHanduwala"><i class="fa fa-youtube"></i></a>


            </div>


            <div class="footer-one col-lg-3 col-md-6 col-12 mb-2">
                <div>
                    <p><strong></strong>Copyright &copy; 2021-2022 <a href="https://soyura.com">Soyura[Pvt]Ltd</a>. </strong> All rights reserved.</p>
                </div>


            </div>
        </div>


    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- Ion Slider -->
    <script src="../plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap slider -->
    <script src="../plugins/bootstrap-slider/bootstrap-slider.min.js"></script>
    <!-- AdminLTE for demo purposes -->

    <script>
        $(function() {
            /* BOOTSTRAP SLIDER */
            $('.slider').bootstrapSlider()

            /* ION SLIDER */
            $('#range_1').ionRangeSlider({
                min: 0,
                max: 5000,
                from: 1000,
                to: 4000,
                type: 'double',
                step: 1,
                prefix: '$',
                prettify: false,
                hasGrid: true
            })
            $('#range_2').ionRangeSlider()

            $('#range_5').ionRangeSlider({
                min: 0,
                max: 10,
                type: 'single',
                step: 0.1,
                postfix: ' mm',
                prettify: false,
                hasGrid: true
            })
            $('#range_6').ionRangeSlider({
                min: -50,
                max: 50,
                from: 0,
                type: 'single',
                step: 1,
                postfix: '°',
                prettify: false,
                hasGrid: true
            })

            $('#range_4').ionRangeSlider({
                type: 'single',
                step: 100,
                postfix: ' light years',
                from: 55000,
                hideMinMax: true,
                hideFromTo: false
            })
            $('#range_3').ionRangeSlider({
                type: 'double',
                postfix: ' miles',
                step: 10000,
                from: 25000000,
                to: 35000000,
                onChange: function(obj) {
                    var t = ''
                    for (var prop in obj) {
                        t += prop + ': ' + obj[prop] + '\r\n'
                    }
                    $('#result').html(t)
                },
                onLoad: function(obj) {
                    //
                }
            })
        })
    </script>
</body>

</html>