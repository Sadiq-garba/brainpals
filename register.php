<?php  
 session_start();
 include_once "db.php";


//check if the request method is a post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
     
  //get the user inputs
    

    $username= $_POST["username"];

    $password= password_hash($_POST["password"], PASSWORD_DEFAULT);


      //check if input are not empty
    if(!empty($username) && !empty($password)){



          //sql statement to insert user inputs into database
         $sql ="INSERT INTO users(username,password) VALUES( '$username', '$password') ";
          // this execute the sql statement
         $conn->query($sql);
           // redirect to login page 
         $_SESSION["success"] = "Your registration was successful";
         header("location:login.php");

         
         



         





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


 


    </style>
</head>
<body>
  <div class="overlay-itro"></div>
           <div class="big-wrapper">
            <div class="wrapper fade-up" data-aos="fade-up">
                         <img src="profile-icon.png" class="profile-icon ">
                   <h3 style="color:#fff; text-align:center;">Register</h3>
                  <form action="register.php" method="POST" >
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