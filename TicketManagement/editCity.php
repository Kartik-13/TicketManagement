<?php

include "session.php";

$city = $_POST["cname"];
$status = $_POST["cstatus"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add City</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            text-align: left;
            font-weight: bold;
            color: #444;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            background-color: #4caf50;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: white;
            color: #333;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        /* Optional: Add a down-arrow icon for nicer UX (requires a wrapper or background image) */
        select:focus {
            outline: none;
            border-color: #4caf50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }

        <style>

        /* Add this to your existing <style> block */
        select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: white;
            color: #333;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        /* Optional: Add a down-arrow icon for nicer UX (requires a wrapper or background image) */
        select:focus {
            outline: none;
            border-color: #4caf50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }

        .home-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px;
            font-size: 16px;
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

    <h1>Edit City</h1>
    <form action="cityedit.php" method="post">
        <!-- Hidden input to store the ID -->
        <input type="hidden" name='id' value='<?php echo $_POST['id']; ?>' />

        <label for="cname">City Name</label>
        <input type="text" id="cname" name="cname" placeholder="Enter city name" required
            value="<?php echo $city; ?>" />

        <label for="cstatus">Status</label>
        <select name="cstatus" id="cstatus">
            <option value="active" <?php if (strtolower($status) == 'active')
                echo 'selected'; ?>>Active</option>
            <option value="inactive" <?php if (strtolower($status) == 'inactive')
                echo 'selected'; ?>>Inactive</option>

        </select>
        <input type="submit" value="Submit" />
    </form>
    <a href="city.php" class="home-button">Back</a>

</body>

</html>