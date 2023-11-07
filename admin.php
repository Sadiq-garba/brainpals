<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("location: login.php");
    exit();
}

include 'db.php';

$sql = "SELECT * FROM contact";
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>brainpals admin Dashboard</title>
    <style>

        body,html{
            background-color:#e8e8e8;
            overflow-x:hidden;
        }
    </style>
</head>
<body>


<div class="container">
<div class="row justify-content-center my-auto" style="padding-top:200px;">
<div class="col-md-8 col-12 ">
<table class="table">
     <thead class="thead-dark ">
               <tr>
            
                <th scope="col">Subject</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
                </tr>
    </thead>  
              <?php
               while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                     echo "<td><b>{$row['subject']}</b></td>";
                     echo "<td><a href='mailto: {$row['subject']}'>{$row['email']}</a></td>";
                     echo "<td><a href='message.php?id={$row['id']}'>Open</a> </td>";
                      echo "</tr>";
                 }
               ?>
           </table>
       </div>
    </div>
</div>


    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>