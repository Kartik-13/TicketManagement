<?php
include "session.php";
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
</style>

    
  </head>
  <body>
    <h1>Add New City</h1>
    <form action="cityadd.php" method="post">
      <label for="pname">City Name</label>
      <input
        type="text"
        id="cname"
        name="cname"
        placeholder="Enter city name"
        required
      />

      <label for="cstatus">Status</label>
      <select  name = "cstatus"id="cstatus" required>
        <option value="">-- Select Status --</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
      </select>
     

      <input type="submit" value="Submit" />
    </form>
  </body>
</html>

