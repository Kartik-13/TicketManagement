<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "passenger_info";

$conn = mysqli_connect($serverName,$userName,$password,$dbName);

if (!$conn) {
    die("Connection Error".mysqli_connect_error());
}