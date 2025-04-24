<?php

include "session.php";
include "db.php";

$name = $_POST['pname'];
$number = $_POST['pnum'];
$cityname = $_POST['cityname'];
$id = $_POST['id'];
$imageQuery = ""; // empty by default

// Check if image is uploadedS
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $imgName = $_FILES['image']['name'];
    $tempName = $_FILES['image']['tmp_name'];
    $uploadFolder = "uploads/";
    $imgPath = $uploadFolder . basename($imgName);

    // Move image to uploads folder
    if (move_uploaded_file($tempName, $imgPath)) {
        $imageQuery = ", IMAGE = '$imgName'";
    } else {
        echo "<script>alert('Failed to upload new image'); window.history.back();</script>";
        exit();
    }
}

// Final SQL with optional image update
$sql = "UPDATE tickets SET Name = '$name', TICKET_NUMBER = '$number' $imageQuery, CITY = '$cityname' WHERE id = '$id'"   ;

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
} else {
    echo "Error in updating data: " . mysqli_error($conn);
}
