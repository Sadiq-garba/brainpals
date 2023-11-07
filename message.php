<?php
  include_once "db.php";
   if($_SERVER['REQUEST_METHOD'] =="GET"){


      if(isset($_GET['id'])){
         
            $id = $_GET['id'];

            $sql ="SELECT name,subject,email,message from contact WHERE id = '$id' ";
              
            $get =  $conn->query($sql);

           $result= $get->fetch_assoc();
      }


   }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
         
    <style>
         body{

             background-color:#e8e8e8;

         }
        .title, .sender{
                 
            text-align:center;
        }
        .message{
              
            border-top: 2px solid black;
            text-align:center; 
            padding-top:20px;


        }
    </style>    
</head>
<body>
    <div class="container">
       <div class="row justify-content-center align-items-center" style="padding-top:100px;" >
          <div class="col-md-8">       
          <h2 class="title"><?php echo $result['subject'] ?></h2>
          <p class="sender">From: <a href="mailto:<?php echo $result['email']; ?>"><?php echo $result['email']; ?></a></p>
          <p class="message"><?php echo $result['message'] ?></p>
        </div>
    </div>   
</div>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
