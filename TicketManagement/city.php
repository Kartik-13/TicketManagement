<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Page</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        form {
            display: inline-block;
            margin: 5px;
        }

        input[type="submit"],
        input[type="text"] {
            padding: 8px 12px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="text"] {
            width: 200px;
        }

        .home-button {
            display: inline-block;
            margin-top: 20px;
            padding: 9px;
            font-size: 14px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .home-button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Ticket Management</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "passenger_info";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection Error " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM CITY";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border = '1'ccolspan = '2'>";
        echo "<tr><th>City</th><th>Status</th><th colspan = '2'>Action</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";

            echo "<td>" . $row['cityname'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";

            //i want fetch status  like cityname
    
            //Action buttons like Edit, Delete
            echo "<td>
                <form action = 'editCity.php' method = 'post'>
                <input type = 'hidden' name = 'cname' value = '" . $row['cityname'] . "'/>
                <input type = 'hidden' name = 'cstatus' value = '" . $row['status'] . "'/>
                <input type = 'hidden' name = 'id' value = '".$row['id']."'/>
                <input type = 'submit' value = 'Edit'/>
                </form>
                </td>
                      <td>
        <form action='deleteCity.php' method='post' onsubmit=\"return confirm('Are you sure you want to delete this record?');\">
            <input type='hidden' name='cname' value='" . $row['cityname'] . "'/>
            <input type='hidden' name='cstatus' value='" . $row['status'] . "'/>
            <input type = 'hidden' name = 'id' value = '" . $row['id'] . "'/>
            <input type='submit' value='Delete'/>
        </form>
      </td>";
        }
        echo "</table>";
    }
    #Add Button Outside table
    echo "<form action = './addCity.php' method = 'post'>
        <input type = 'submit' value = 'Add' style = 'margin-top:10px;'/>
      </form>";

      echo "<a href='selectoption.php' class='home-button'>Home</a>";
    ?>
</body>

</html>