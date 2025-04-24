<?php
include "session.php";
include "db.php";

$name = $_POST['name'];
$id = $_POST['id'];

$ticketNumber = $_POST['ticket_number'];

$sql = "DELETE FROM tickets WHERE id = '$id'";

if(mysqli_query($conn,$sql)) {
    // echo "Ticket Deleted successfuly";
    header("Location: index.php");
    exit(); //For not runnig other code after this line
} else {
    echo "Error in Deleted data ".mysqli_error($conn);
}

// Redirect back to main page after 2 seconds
header("refresh:2; url=index.php");