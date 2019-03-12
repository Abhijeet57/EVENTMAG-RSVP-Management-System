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
    <title>Kendall Square Ice Skating</title>
    <link href="main.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="logo">
      <a href="Events.php"><img src="Images/logo.jpg" hight="1px"></a>
      <p>Contact Us: 000-111-2222</p>
    </div>
    <div class="image">
      <img src="Images/Ice-skating_1.jpg" alt="Kendall Square Ice Skating" title="Kendall Square Ice Skating" style="width:100%;">
    </div>
    <div class="Heading" align="center">
      <h1>Kendall Square Ice Skating R.S.V.P</h1>
    </div>

    <div class="details">
      <div class="details_1">
      <p>Learn to ice-skate in Kendall Square!
      The Community Ice Skating @ Kendall Square is a open mid-December to mid-March (weather permitting).
      The Kendall Square Community Ice Skating Rink offers skate rentals, lessons and private rink rentals.
      The facility is refrigerated, zamboni-maintained and located in a landscaped courtyard.</p>
      </div>
      <div class="details_2">
      <p><b>Address:</b> <br>300 Athenaeum Street<br>Cambridge, MA <br>
      <b>Date:</b> March 7-20, 2019<br>
      <b>Hours of operation:</b> 11:00 AM to 9:00 PM <br>
      <b>Price:</b> Free!!! </p>
      </div>
    </div>

    <div class="Ticketconfirm">
    <button value="click me" id="Cancel" onclick="parent.location='Events.php'">Cancel</button>
    <button value="click me" id="Interested" onclick="parent.location='Ice_Skating_1.php'">RSVP Join!!!</button>
    </div>

    <div class="box">
        <p>Copyright © 2019, EVENTMAG MANAGEMENT</p>
    </div>

  </body>
</html>
