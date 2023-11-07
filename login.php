<?php

session_start();

if(isset($_SESSION["success"])){

      $success = $_SESSION["success"];
}

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            
                $_SESSION["user_id"] = $user["id"];
               header("location: admin.php");

                } else {
                  $error = "Invalid password.";
               }
      
      
          } else {
        $error = "User not found.";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="animate/animate.min.css">
    <title>Login</title>
    <style>
         body,html{
            
           overflow-x: hidden;


         }


        body{
            
            background-image: url("bg-4.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }


          .wrapper{
             
            background-color:black;
            margin:0 auto;
            padding:40px;
            width:350px;
            height:350px;
            border-radius: 16px;
            opacity:0.9;

          }

          .wrapper form #name,#username,#password{
               
            display:block;
            margin: 0 auto;
            border:none;
            border-bottom:2px #fff solid;
          
            background-color: black;
            padding:10px;
            font-style:italic;
            font-size:18px;
            color:#fff;
            
 
           }

           #btn{
              
            display:block;
            margin: 0 auto;
            background-color: red;
            padding:10px;
            font-size:17px;
            width:230px;
            border-radius: 15px;
            color:white;
               
           }

           #checkbox{
                
            position:relative;
            left:30px;


           }
            


          .big-wrapper{
            
            margin-top:160px;


          }

          .profile-icon{
            height:40px;
            width:40px;
            border-radius:50%;
            display:block;
            margin: 0 auto;


          }
          .overlay-itro {
             background-color: rgba(0, 0, 0, 0.6);
             position: absolute;
             top: 0;
             left: 0px;
             padding: 0;
             height: 100%;
             width: 100%;
             opacity: 0.8;
             z-index:-1;
}

.success{
    background-color:green;
    color:white;
    border-radius:15px;
    padding:10px;
    text-align:center;
    font-size:23px;
    width:400px;
    margin:0 auto;


}
 


    </style>
</head>
<body>
  <div class="overlay-itro"></div>
  <?php  if(isset($success)){ ?>
                   <p class="success"> <?php echo $success .", now login your details"; ?></p>

               <?php  }  ?>
           <div class="big-wrapper">
            <div class="wrapper fade-up" data-aos="fade-up">
                         
                     <img src="profile-icon.png" class="profile-icon ">
                      <?php if(!empty($error)){ ?>
                      <p style="color:red;"><?php echo $error;?></p>
                       <?php }  ?>
                     <h3 style="color:#fff; text-align:center;">brainpals Login</h3>
                  <form action="login.php" method="POST" >
                    <!-- <p><input type="text" id="name" name="name" placeholder="name"></p> -->
                      <p><input type="text" id="username" name="username" placeholder="username"></p>
                      <p><input type="password" id="password" name="password" placeholder="password"></p>
                      <p><input type="submit" value="Submit" id="btn"></p>
                      <p><input type="checkbox"  id="checkbox"></p>

                  </form>

            </div>
        </div>

</body>
</html>