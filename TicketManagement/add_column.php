<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "passenger_info";

// Connect to database
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL to add the 'Image' column
$sql = "ALTER TABLE tickets ADD Image VARCHAR(255)";

if (mysqli_query($conn, $sql)) {
    echo "✅ Column 'Image' added successfully!";
} else {
    echo "❌ Error adding column: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
