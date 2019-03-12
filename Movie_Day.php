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
    <title>LEGO Movie Days</title>
    <link href="main.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="logo">
      <a href="Events.php"><img src="Images/logo.jpg" hight="1px"></a>
      <p>Contact Us: 000-111-2222</p>
    </div>
    <div class="image">
      <img src="Images/legomovie_1.jpg" alt="LEGO Movie Days" title="LEGO Movie Days" style="width:100%;">
    </div>
    <div class="Heading" align="center">
      <h1>LEGO Movie Days R.S.V.P</h1>
      <h2>LEGOLAND Discovery Center Boston</h2>
    </div>

    <div class="details">
      <div class="details_1">
      <p>LEGOLAND® Discovery Center Boston is hosting the ultimate celebration of the new THE LEGO® MOVIE™ 2!
         Join Emmet, Wyldstyle and the gang during event weekends with exclusive building activities, out-of-this-world character experiences, interactive photo opportunities and more!
         It’s going to be AWESOME!</p>
      </div>
      <div class="details_2">
      <p><b>Address:</b> <br>598 Assembly Row<br>Somerville, MA <br>
      <b>Date:</b> March 7- April 28, 2019<br>
      <b>Hours of operation:</b> 9:00 AM to 5:00 PM<br>
      <b>Price:</b> Free!!! </p>
      </div>
    </div>

    <div class="Ticketconfirm">
    <button value="click me" id="Cancel" onclick="parent.location='Events.php'">Cancel</button>
    <button value="click me" id="Interested" onclick="parent.location='Movie_Day_1.php'">RSVP Join!!!</button>
    </div>

    <div class="box">
        <p>Copyright © 2019, EVENTMAG MANAGEMENT</p>
    </div>

  </body>
</html>
