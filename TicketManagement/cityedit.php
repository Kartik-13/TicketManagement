<?php
include "session.php";
include "db.php";
if (isset($_POST["cname"], $_POST["cstatus"])) {
    $cityname = $_POST["cname"];
    $status = $_POST["cstatus"];
    $id = $_POST['id'];

    $sql = "UPDATE CITY SET STATUS = '$status' WHERE id = '$id'";
    

    if (mysqli_query($conn, $sql)) {
        # code...
        echo "<script>alert('City updated successfully!');window.location.href = 'city.php'</script>";
    } else {
        echo "<script>alert('Database Insert Successfully.');window.history().back();</script>";
    }
}

?>