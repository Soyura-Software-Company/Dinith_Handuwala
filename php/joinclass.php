<?php
$zoomlinkId = "";
require_once ('../database/dbconnect.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  
    if(isset($_POST['joinClass'])){
        $zoomlinkId = $_POST["joinClass"];
  
    }}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Zoom Link</title>

    <style>
        *{padding: 0;
          margin: 0;
          box-sizing: border-box;
        }

        body{
            

        }
        .row{

            background: white;
            border-radius: 20px;
            box-shadow: 12px 12px 22px grey;
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

    h1 {
  color: blue;
  font-family: verdana;
  font-size: 300%;
  text-align: center;

}
p  {
  color: red;
  font-family: courier;
  font-size: 160%;
  text-align: center;
}
    </style>

   
    
</head>

<body>
    <?php
$link = null;



    ?>





            <h1>Click This Join Zoom Meeting</h1>
</br></br></br></br></br></br>
<p>Link ::</p>  <p><a href="https://us04web.zoom.us/j/74656361006?pwd=aKBQjJhOZiGyaEvcWoach48WTbm7we.1">https://us04web.zoom.us/j/74656361006?pwd=aKBQjJhOZiGyaEvcWoach48WTbm7we.1</a></p>
                 </div>
                 
                 
                            


                 


    <!-- jQuery -->



    <script src="../js/jquery.js">    </script>
    <script src="../js/popper.js">    </script>
    <script src="../js/bootstrap.js"></script>
</body>


</html>