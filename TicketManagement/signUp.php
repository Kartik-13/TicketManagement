<?php
include "db.php";

if (isset($_POST['signname'],$_POST['pass'])) {
    $name = trim($_POST['signname']);
    $pass = trim($_POST['pass']);

       // Check for empty or space-only values
    if ($name === '' || $pass === '') {
        echo "<script>alert('Fields cannot be empty or contain only spaces'); window.history.back();</script>";
        exit();
    }

    //Check if username is already exists
    $checkSql = "SELECT * FROM admin WHERE username = '$name'";
    $checkResult = mysqli_query($conn, $checkSql);
    if (mysqli_num_rows($checkResult) > 0) {
        # code...
        echo "<script>alert('Username already exists'); window.history.back();</script>";
        exit();
    }

    //Insert into database
    $sql = "INSERT INTO ADMIN (username,password) VALUES ('$name','$pass')";

    if (mysqli_query($conn,$sql)) {
        //Redirect Page
        header("Location: Login.html");
    } else {
        echo "Not able to Register";
    }
}