<?php
include "session.php";
include "db.php";
if(isset($_POST["cname"],$_POST["cstatus"])){
$cityname = $_POST["cname"];
$status = $_POST["cstatus"];

$sql = "INSERT INTO CITY (CITYNAME,STATUS) VALUES ('$cityname','$status')";

if (mysqli_query($conn, $sql)) {
    # code...
    echo "<script>alert('City added successfully!');window.location.href = 'city.php'</script>";
} else {
    echo "<script>alert('Database Insert Successfully.');window.history().back();</script>";
}
}
?>  