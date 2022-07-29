<?php

if (isset($_POST['register'])) {

    //connecting database
    include('connection.php');
    echo "</br>";
    //collecting form data
    $first_name = $_POST["firstName"];
    $last_name = $_POST["lastName"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];  //use md5()
    $confirm_password = $_POST["confirm_password"]; //use md5()
    $gender = $_POST["gender"];
    $role = $_POST["role"];
    
    //number validation
    if (!is_numeric($mobile)) {
        echo "<script>
        alert(\"Please Enter Only Number\")
        window.location=\"register.php\";
    </script>";
    }
    //length validation
    if (strlen($mobile) != 10) {
        echo "<script>
        alert(\"Enter 10 Digits Number \");
        window.location=\"register.php\";
    </script>";
    }
    //inserting into table
    if ($password === $confirm_password) {
        // $sql_insert_data = "INSERT INTO user
        // (first_name, last_name, mobile, gender, email, password)
        // VALUES('$first_name','$last_name', $mobile, '$gender', '$email', '$password')";

        $sql_insert_data = "INSERT INTO `user`(`first_name`, `last_name`, `mobile`, `gender`, `email`, `password`, `role`, `status`)
        VALUES ('$first_name','$last_name',$mobile,'$gender','$email','$password', $role,0)";

        //checking data insertion
        if (mysqli_query($connection, $sql_insert_data)) {
            echo "<script>
                    alert(\"Creation Successful\");
                    window.location=\"index.php\";
                </script>";
        } else {
            die("data insertion failed! </br>" . mysqli_error($connection));
            echo "</br>";
        }
    } 
    else {
        echo "<script>
        alert(\"Password Not Match!\");
        // window.location=\"register.php\";
    </script>";
    }
    mysqli_close($connection);
}