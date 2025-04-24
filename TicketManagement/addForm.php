<?php
include "session.php";
include "db.php";

//fetch active cities
$sql = "SELECT * FROM CITY WHERE STATUS = 'Active'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Passenger</title>
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
  </style>
</head>

<body>
  <h1>Add New Passenger</h1>
  <form action="./add.php" method="post" enctype="multipart/form-data">
    <label for="pname">Name</label>
    <input type="text" id="pname" name="pname" placeholder="Enter your name" required />

    <label for="pnum">Ticket Number</label>
    <input type="number" id="pnum" name="pnum" placeholder="Enter ticket number" required />
    <label for="pcity">City</label>
    <select name="cityname" required>
      <option value="">-- Select City --</option>
      <?php
      while ($row = mysqli_fetch_assoc($result)) { ?>
      
        <option value="<?php echo $row['cityname'] ?>"><?php echo $row['cityname'] ?></option>
      <?php } ?>
    </select>


    <label for="image">Upload Image</label>
    <input type="file" name="image" accept="image/*" required />

    <input type="submit" value="Submit" />
  </form>
</body>

</html>