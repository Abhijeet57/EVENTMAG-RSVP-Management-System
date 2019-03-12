<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
    <link href="main.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="logo">
      <a href="Events.php"><img src="Images/logo.jpg" hight="1px"></a>
      <p>Contact Us: 000-111-2222</p>
      <div class="logo_1">
      <a href="logout.php">LogOut</a>
      </div>
    </div>

    <div class="Booking" align="center">
    <h1>Event Registration is Successful</h1>
    <p><a href="Events.php"> Click Here</a>for more Events.
    </p>
    </div>

  </body>
</html>
