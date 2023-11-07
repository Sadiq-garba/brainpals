<?php

$servername = "localhost";
$username= "root";
$password="";
$database="contact";


$conn = new mysqli($servername, $username, $password,$database);

if($conn->connect_error){

     
    die("<h1>Sorry something went wrong we will be back soon" . $conn->connect_error . "</h1>");


}
