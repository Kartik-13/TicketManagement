<?php 
include "session.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: white;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            margin-bottom: 30px;
            font-size: 26px;
            color: #2e7d32;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 14px 28px;
            margin: 10px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        input[type="submit"]:focus {
            outline: none;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h1>Select a Section to Manage</h1>
        <input type="submit" value="Ticket" name="ticket" />
        <input type="submit" value="City" name="city" />
    </form>

    <?php 
    if (isset($_POST["ticket"])) {
        header("Location: index.php");
        exit();
    }
    else if(isset($_POST["city"])) {
        header("Location: city.php");
        exit();
    }
    ?>
</body>
</html>
