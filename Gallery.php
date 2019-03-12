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
    <title>Africa Gallery</title>
    <link href="main.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="logo">
      <a href="Events.php"><img src="Images/logo.jpg" hight="1px"></a>
      <p>Contact Us: 000-111-2222</p>
    </div>
    <div class="image">
      <img src="Images/gallery_1.jpg" alt="Africa Gallery" title="Africa Gallery" style="width:100%;">
    </div>
    <div class="Heading" align="center">
      <h1>Africa Gallery R.S.V.P</h1>
      <h2>Harvard Museum of Natural History</h2>
    </div>

    <div class="details">
      <div class="details_1">
      <p>Visitors will see impressive mounted specimens of African wildlife collected over a century ago, including hippopotamus, lion, ostrich, hyena, gorilla,
         and a variety of rare animals from the island of Madagascar, as well as an interactive video display about endangered species.</p>
      </div>
      <div class="details_2">
      <p><b>Address:</b> <br>26 Oxford Street<br>Cambridge, MA <br>
      <b>Date:</b> March 7, 2019<br>
      <b>Hours of operation:</b> 9:00 AM to 5:00 PM <br>
      <b>Price:</b> Free!!! </p>
      </div>
    </div>

    <div class="Ticketconfirm">
    <button value="click me" id="Cancel" onclick="parent.location='Events.php'">Cancel</button>
    <button value="click me" id="Interested" onclick="parent.location='Gallery_1.php'">RSVP Join!!!</button>

    <div class="box">
        <p>Copyright © 2019, EVENTMAG MANAGEMENT</p>
    </div>

  </body>
</html>
