<?php
require("connection.php");
    if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    // echo $username;
    // echo $password;


    //retriving username and password from database
    $sql = "SELECT *FROM user
    WHERE email='$username' AND password='$password'";

    $result = mysqli_query($connection, $sql) or die("Querry Failed! ".mysqli_error($connection));

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
        session_start();
        $_SESSION["username"] = $row['email'];
        $_SESSION["role"] = $row['role'];
        header("location:dashboard.php");
        }
    }else{
            echo "<script>
            alert(\"Username And Password not match!\");
            window.location=\"index.php\";
            </script>";
        }
        echo("Hello");
    }
?>