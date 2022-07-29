<?php

if (isset($_POST['submit'])) {

    //connecting database
    include('connection.php');
    echo "</br>";
    //collecting form data
    $first_name = $_POST["firstName"];
    $last_name = $_POST["lastName"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $citizenship_no=$_POST["citizenship_no"];
    $DOB = $_POST["DOB"];
    $insurance_no. = $_POST["insurance_no."];
    $address = $_POST["address"];
    $FSP = $_POST["FSP"];
    $FSD = $_POST["FSD"];
    $bill_number = $_POST["bill_number"];
    $gender = $_POST["gender"];
    $
    
    //number validation
    if (!is_numeric($mobile)) {
        echo "<script>
        alert(\"Please Enter Only Number\")
        window.location=\"familyadd.php\";
    </script>";
    }
    //length validationg
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

        $sql_insert_data = "INSERT INTO `user`(`first_name`, `last_name`, `mobile`,'email','citizenship_no.','DOB','insurance_no','address','FSP','FSD', 'bill_number',`gender`)
        VALUES ('$first_name','$last_name',$mobile,'$gender','$email','$citizenship_no', '$DOB','$insurance_no.','$address','$FSP','$FSD','$bill_number', 'gender')";

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