<?php

session_start();

if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: Login.html");
    exit();
}

?>

