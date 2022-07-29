<?php      
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "new_project";


$connection = mysqli_connect($servername, $username, $password,$db_name);

// Check connection
if(!$connection){
    die("Database connection failed: " . mysqli_connect_errno());
    }
?>  
