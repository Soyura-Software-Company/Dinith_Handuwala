<?php


require_once('../database/dbconnect.php');
require_once ('../service/timetableservice.php');
require_once ('../service/zoomlinkservice.php');

require_once ('../service/classdateservice.php');
$db = new dbConnect();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            <!-- DataTables -->
            <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
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


$dates = '<div>
<h3 class="card-title">
                  
               
                </h3>
                <h3 class="card-title">
               ..
                 
                </h3>
                <h3 class="card-title">
                 .
            
                </h3>
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Date
                </h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="Monday" name="Monday" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Monday</span>
                    <!-- Emphasis label -->
                    
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>






                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="Tuesday" name="Tuesday" id="todoCheck2" checked>
                      <label for="todoCheck2"></label>
                    </div>


                    <span class="text">Tuesday</span>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>





                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="Wednessday" name="Wednessday" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Wednessday</span>
                    
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>






                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="Thursday" name="Thursday" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Thursday</span>
                  
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>




                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="Friday" name="Friday" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Friday</span>
                    
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>




                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="Saturday" name="Saturday" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Saturday</span>
                   
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>



                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="Sunday" name="Sunday" id="todoCheck7">
                      <label for="todoCheck7"></label>
                    </div>
                    <span class="text">Sunday</span>
                   
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
</div>
              <!-- /.card-body -->



';

$query3 = "SELECT  Description,Id From Class WHERE Status='1'";
$Description = null;                              
$EndTime = null;
$ZoomLink_Id = null;
$StartTime = null;
$saveButton = '<button type="submit"  name="save" class="btn1 mt-3 mb-5" > save </button>';
$alert =  '';
$id = '';
$zlnk = null;
$upId = '';
$tUpdateid = null;
$timetable = new TimeTableService();
$zoomlinkobj = new ZoomLinkService();
$classdate = new ClassDateService();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  
    $monday = '0';
    $tuesday = '0';
    $wednessday = '0';
    $thursday = '0';
    $friday = '0';
    $saturday = '0';
    $sunday = '0';



  if(isset($_POST['class'])){





    if(true){

        if(isset($_POST['Monday'])){
        
          $monday = '1';
        
        }
        if(isset($_POST['Tuesday'])){
          $tuesday = '1';
        }
        
        if(isset($_POST['Wednessday'])){
          $wednessday = '1';
        }
        
        if(isset($_POST['Thursday'])){
          $thursday = '1';
        }
        
        if(isset($_POST['Friday'])){
          $friday = '1';
        }
        
        if(isset($_POST['Saturday'])){
          $saturday = '1';
        }
        
        if(isset($_POST['Sunday'])){
          $sunday = '1';
        }
        
        
                }else{
                  echo 'select plz';
                }





   
    $class = $_POST['class'];
    $description = $_POST['description'];
    $startTime =$_POST['startTime'];
    $endTime =$_POST['endTime'];
    $zoomLinkId =$_POST['zoomLinkId'];

    $classArr = explode(",",$class, 5);
    
    $zoomlinkobj->__constructWithOutId($zoomLinkId);
    $zoomlinkobj->insertZoomLink();
    $query5 = "SELECT  ZoomLink,Id From ZoomLink WHERE ZoomLink= '$zoomLinkId'";
    $result5 = $db->getfromdb($query5);
    $resultCheck5 = mysqli_num_rows($result5);
    $zId;
    if ($resultCheck5 > 0) {

        while ($row5 = mysqli_fetch_assoc($result5)) {         

            $zId = $row5["Id"];
        }}



    $timetable-> __constructWithOutId($description,$startTime,$endTime,$zId, $classArr[0]);
    $timetable->insertTimeTable();



    $query7 = "SELECT  Id From TimeTable";
    $result7 = $db->getfromdb($query7);
    $resultCheck7 = mysqli_num_rows($result7);
    $ttId;
    if ($resultCheck7 > 0) {

        while ($row7 = mysqli_fetch_assoc($result7)) {         

            $ttId = $row7["Id"];
        }}


  $classdate-> __constructWithoutId($monday,$tuesday,$wednessday,$thursday,$friday,$saturday,$sunday,$ttId);
  $classdate->insertClassDate();
    
    $alert = '<div class="container">
    
    <div class="alert alert-success">
      <strong>Success!</strong>
    </div>
    
  </div>';
       
      
  }

  if(isset($_POST['eddit'])){
    $dates = null;
    $id = $_POST['eddit'];

    $id = explode(",",$id, 5);
    $upId = $id[1];
    $id = $id[0];

    
    $query = "SELECT  `Description`,`StartTime`,`EndTime`,`ZoomLink_Id`,`Id` From TimeTable WHERE Id= '$id'";
    $result = $db->getfromdb($query);
    $resultCheck = mysqli_num_rows($result);
    $className = "";
    $disables= 'disabled';
    $query3 = null;
   
    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {


            $Description = $row["Description"];                                 
            $EndTime = $row["EndTime"];
            $ZoomLink_Id = $row["ZoomLink_Id"];
            $StartTime = $row["StartTime"];
            $tUpdateid = $row["Id"];



        }}

    $query5 = "SELECT  ZoomLink,Id From ZoomLink WHERE Id= '$upId'";
    $result5 = $db->getfromdb($query5);
    $resultCheck5 = mysqli_num_rows($result5);
    $zId;
    if ($resultCheck5 > 0) {

        while ($row5 = mysqli_fetch_assoc($result5)) {         

            $zlnk = $row5["ZoomLink"];
        }}


    $saveButton = '<button type="submit"  name="update" class="btn1 mt-3 mb-5" value='.$upId.'> update </button>';
    
       
      
  }


 
  if(isset($_POST['update'])){
    
  
    $description = $_POST['description'];
    $startTime =$_POST['startTime'];
    $endTime =$_POST['endTime'];
    $zoomLink =$_POST['zoomLinkId'];
    $bid = $_POST['update'];
    

$zoomlinkobj-> __constructWithId($bid,$zoomLink);
    $zoomlinkobj->updateZoomLink();

    $timetable-> __constructWithId($bid,$description,$startTime,$endTime);
    $timetable->updateTimeTable();
    $alert = '<div class="container">
    
    <div class="alert alert-success">
      <strong>Updated!</strong>
    </div>
    
  </div>';
       
       
      
}

}


  ?>
<!-- Modal -->

<?php
    include 'admin_sidebar.php';

    ?>

<div class="content-wrapper">

<section class="Form my-4 mx-6">



        <div class="container">

            <div class="row no-gutters">
                
            <div class="col-lg-5 px-0 pt-0">
                    




</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>





<form action="" method="POST">















<?php
echo $dates ; 

?>






                 </div>
                 <div class="col-lg-7 px-2 pt-2">
                            <h1 class="font-weight-bold py-3">Time table</h1>
                            <h4>update time table</h4>


                 
                            
                            
                            <div class="form-group">
    <label for="exampleInputEmail1">Select a class</label>
    <select class="form-control" name = 'class' grade='grade' <?php echo $disables ?> >
    
        <?php
    echo $query3; 
    $result3 = $db->getfromdb($query3);
    $resultCheck3 = mysqli_num_rows($result3);
    $className = "";
   


    if ($resultCheck3 > 0) {

        while ($row3 = mysqli_fetch_assoc($result3)) {


            $className = $row3["Description"];
            $id = $row3["Id"];
            echo '<option>'.$id.',    '.$className.''. '</option>';

        }}


?>
   
    </select>
   
  </div>

                        <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" id="description" name='description' placeholder="Description" value = '<?php echo $Description ?>'>
  </div>

</br>

                        <div class="form-group">
    <label for="exampleInputPassword1">Start time</label>
    <input type="text" class="form-control" id="startTime" name='startTime' placeholder="Start time" value = '<?php echo$StartTime  ?>'>
  </div>

  </br>
                
                        <div class="form-group">
    <label for="exampleInputPassword1">End time</label>
    <input type="text" class="form-control" id="endTime" name='endTime' placeholder="End time" value = '<?php echo$EndTime  ?>'>
  </div>

  </br>
                
                        <div class="form-group">
    <label for="exampleInputPassword1">Zoom link</label>
    <input type="text" class="form-control" id="zoomLinkId" name='zoomLinkId' placeholder="Zoom link" value = '<?php echo$zlnk  ?>'>
  </div>

  </br>

                

                       

           
                    



                    <div class="form-row">
                        <div class="col-lg-7">
                        
                            

                            <?php
                            echo $saveButton ;

echo $alert;
?>
                        </div>

                    </div>

                    
                   
                     </form>
                </div>

            </div>

        </div>

    </section>

<section class="content">


                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Time Table</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                    <th>Description</th>
                                                    <th>Start Time</th>
                                                        <th> End Time</th>
                                                        <th>Zoom Link</th>
                                                        <th>Day</th>
                                                        <th>Eddit</th>
                                                       
                                                    </tr>
                                                    </thead>
                                                    <tbody>



                                    
<?php
                            
                            $query3 = "SELECT  Description,StartTime,EndTime,ZoomLink_Id,Id From TimeTable WHERE Status='1'";
                            $result3 = $db->getfromdb($query3);
                            $resultCheck3 = mysqli_num_rows($result3);
                            $className = "";
                           


                            if ($resultCheck3 > 0) {

                                while ($row3 = mysqli_fetch_assoc($result3)) {


                                    $Description = $row3["Description"];
                                    $EndTime = $row3["EndTime"];
                                    $ZoomLink_Id = $row3["ZoomLink_Id"];
                                    $StartTime = $row3["StartTime"];
                                    $id = $row3["Id"];

                                    $query2 = "SELECT * FROM ClassDate WHERE TimeTable_Id= '$id'";
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

                                        }}

                                    echo '<tr>
                                    <td>'.$Description.'</td>
                                    <td>'.$StartTime.'</td>
                                    <td>'.$EndTime.'</td>
                                    <td>'.$ZoomLink_Id.'</td>
                                    <td>
                                    
                                    ' . $mondayD . ' 
                                    ' . $tuesdayD . '
                                    ' . $wednessdayD . '
                                    ' . $thursdayD . '
                                    ' . $fridayD . '
                                    ' . $saturdayD . '
                                    ' . $sundayD . '
                                    
                                    </td>
                                    <form action="" method ="POST">
                                    <td><button class="btn btn-primary" value = "'.$id.','.$ZoomLink_Id.'" name = "eddit"> Eddit</button></td>
                                    </form>
                                   
                                    </tr>'
                                    ;

                                }}

                                    ?>

                                  
                    

                    


                                                    </tbody>
                                                    <tfoot>
                                                    <thead>
                                                    <tr>
                                                    <th>Description</th>
                                                    <th>Start Time</th>
                                                        <th> End Time</th>
                                                        <th>Zoom Link</th>
                                                        <th>Day</th>
                                                        <th>Eddit</th>
                                                      
                                                    </tr>
                                                    </thead>

                                                    </tfoot>
                                                </table>
                                                

                                            </div>

                                            
                                            <!-- /.card-body -->
                                        </div>
                      
                            <!-- /.container-fluid -->
                        </section>
</div>


<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
<script src="../dist/js/adminlte.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/pages/dashboard.js"></script>

</body>
</html>