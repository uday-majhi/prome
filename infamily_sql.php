<?php

if (isset($_POST['submit'])) {

    //connecting database
    include('connection.php');
    echo "</br>";
    //collecting form data
    $first_name = $_POST["firstName"];
    $last_name = $_POST["lastName"];
    $mobile = $_POST["mobile"];
    $citizenship_no=$_POST["citizenship_no"];
    $DOB = $_POST["DOB"];
    $insurance_no. = $_POST["insurance_no."];
    $FSP = $_POST["FSP"];
    $gender = $_POST["gender"];
    $
    
    //number validation
    if (!is_numeric($mobile)) {
        echo "<script>
        alert(\"Please Enter Only Number\")
        window.location=\"familyadd.php\";
    </script>";
    }
    //length validation
    if (strlen($mobile) != 10) {
        echo "<script>
        alert(\"Enter 10 Digits Number \");
        window.location=\"familyadd.php\";
    </script>";
    }
    //inserting into table
    if ($submit === $submit) {
        // $sql_insert_data = "INSERT INTO user
        // (first_name, last_name, mobile, gender, email, password)
        // VALUES('$first_name','$last_name', $mobile, '$gender', '$email', '$password')";

        $sql_insert_data = "INSERT INTO `user`(`first_name`, `last_name`, `mobile`,'citizenship_no.','DOB','insurance_no','FSP',`gender`)
        VALUES ('$first_name','$last_name',$mobile,'$email','$citizenship_no', '$DOB','$insurance_no.','$FSP', '$gender',)";

        //checking data insertion
        if (mysqli_query($connection, $sql_insert_data)) {
            echo "<script>
                    alert(\"Creation Successful\");
                    window.location=\"infamily.php\";
                </script>";
        } else {
            die("data insertion failed! </br>" . mysqli_error($connection));
            echo "</br>";
        }
    } 
    else {
        echo "<script>
        alert(\"Not inserted!\");
        // window.location=\"infamily.php\";
    </script>";
    }
    mysqli_close($connection);
}