<?php
include "session.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "passenger_info";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    # code...
    die("Connection Error " . mysqli_connect_error());

}
if (isset($_POST['pname'], $_POST['pnum']) && isset($_FILES['image'])) {

    $name = $_POST['pname'];
    $Number = $_POST['pnum'];
    // $id = $_POST['id'];

    //Upload Image 
    $imgName = $_FILES['image']['name'];
    $tempName = $_FILES['image']['tmp_name'];
    $uploadfolder = "uploads/";
    $imgPath = $uploadfolder . basename($imgName);

    $cityname = $_POST['cityname'];

    //Move image to upload/ folder
    if (move_uploaded_file($tempName, $imgPath)) {
        //Store passenger info with image in database
        $sql = "INSERT INTO TICKETS (NAME,TICKET_NUMBER,IMAGE,CITY) VALUES ('$name','$Number','$imgName','$cityname')";

        if (mysqli_query($conn, $sql)) {
            # code...
            echo "<script>alert('Passenger added successfully!');window.location.href = 'index.php'</script>";
        } else {
            echo "<script>alert('Database Insert Successfully.');window.history().back();</script>";
        }
    } else {
        echo "<script>alert('Failed to upload image.');window.history().back();</script>";
    }
}


// // ===========================================================================================
// $name = $_POST['pname'];
// $Number = $_POST['pnum'];

// $sql = "INSERT INTO TICKETS (Name, Ticket_Number) VALUES ('$name','$Number')";

// if(mysqli_query($conn,$sql)) {
//     // echo "Ticket added successfuly";
//     header("Location: index.php");
//     exit(); //For not runnig other code after this line
// } else {
//     echo "Error in Inseting data ".mysqli_error($conn);
// }
// mysqli_close($conn);