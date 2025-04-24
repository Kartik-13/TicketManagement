<?php

session_start();

include "db.php";

if(isset($_POST['logname'],$_POST['logpass'])) {


    #Login..
    $lname = $_POST['logname'];
    $lpass = $_POST['logpass'];

    $sql = "SELECT * FROM ADMIN WHERE USERNAME = '$lname' AND PASSWORD = '$lpass'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) == 1) {
        //Login Successful  
        $_SESSION['username'] = $lname;   //set session variable

        // echo "<script>alert('Login Successful');window.location.href = 'index.php';</script>";
        header("Location: selectoption.php");
   
} else {
    echo "<script>alert('Invalid username and password');window.history.back();</script>";
}
} else {
    echo "<script>alert('Form data is not recived');window.history.back();</script>";
}