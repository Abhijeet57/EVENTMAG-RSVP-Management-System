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
    <title>Boston Wine Festival</title>
    <link href="main.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="logo">
      <a href="Events.php"><img src="Images/logo.jpg" hight="1px"></a>
      <p>Contact Us: 000-111-2222</p>
    </div>
    <div class="image">
      <img src="Images/Wine_Festival_1.png" alt="Boston Wine Festival" title="Boston Wine Festival  " style="width:100%;">
    </div>
    <div class="Heading" align="center">
      <h1>Boston Wine Festival R.S.V.P</h1>
      <h2>Boston Harbor Hotel</h2>
    </div>

    <div class="details">
      <div class="details_1">
      <p>The Boston Wine Festival features an all-star lineup of intimate winemaker hosted dinners, seminars and receptions taking place from January through March.
        Join us at one or several of the exciting events featured at the Boston Wine Festival including many of the best wineries and top personalities from the world of wine.</p>
      </div>
      <div class="details_2">
      <p><b>Address:</b> <br>70 Rowes Wharf<br>Boston, MA <br>
      <b>Date:</b> March 7-29, 2019<br>
      <b>Hours of operation:</b> 11:00 AM to 9:00 PM <br>
      <b>Price:</b> Free!!! </p>
      </div>
    </div>

    <div class="Ticketconfirm">
    <button value="click me" id="Cancel" onclick="parent.location='Events.php'">Cancel</button>
    <button value="click me" id="Interested" onclick="parent.location='Wine_Fest_1.php'">RSVP Join!!!</button>
    </div>

    <div class="box">
        <p>Copyright © 2019, EVENTMAG MANAGEMENT</p>
    </div>

  </body>
</html>
