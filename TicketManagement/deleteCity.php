<?php
include "session.php";
include "db.php";

$name = $_POST["cname"];
$status = $_POST["cstatus"];
$id = $_POST['id'];

// $sql = "DELETE FROM CITY WHERE CITYNAME = '$name' AND STATUS = '$status'";
$sql = "DELETE FROM CITY WHERE id = '$id'";

if(mysqli_query($conn, $sql)) {
    //City deleted successfully
    header("Location: city.php");
    exit();
} else {
echo "Error in deleting data ".mysqli_error( $conn );
}
// Redirect back to main page after 2 seconds
header("refresh:2; url=city.php");