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
    <title>Events</title>
    <link href="main.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="logo">
      <a href="Events.php"><img src="Images/logo.jpg" hight="1px"></a>
      <p>Contact Us: 000-111-2222</p>
      <div class="logo_1">
      <a href="logout.php">LogOut</a>
      <a href="Create_Event.php">Create Event</a>
      </div>
    </div>

    <div class="events">
      <div class="locations" id="skating/b1">
        <a href="Ice_Skating.php">
        <img src="Images/Ice-skating.jpg" id="skating" alt="Skating Event" title="Skating Event">
        </a>
        <div class="desc">
        <b>Kendall Square Ice Skating <br> March 7-20, 2019</b><br>
        <p>Place: Cambridge, MA<br> Price: Free</p>
        <a href="Ice_Skating.php">View Details</a>
        </div>
      </div>

      <div class="locations">
        <a href="Movie_Day.php">
        <img src="Images/legomovie.png" alt="LEGO Movie" title="LEGO Movie Days" >
        </a>
        <div class="desc" id="movie/b2">
        <b>LEGO Movie Days <br> March 7- April 28, 2019</b><br>
        <p>Place: Somerville, MA <br>Price: Free </p>
        <a href="Movie_Day.php">View Details</a>
        </div>
      </div>

      <div class="locations">
        <a href="Wine_Fest.php">
        <img src="Images/Wine_Festival.jpg" alt="Wine Festival" title="Wine Festival" >
        </a>
        <div class="desc" id="festival/b3">
        <b>Boston Wine Festival <br>March 7-29,2019</b><br>
        <p>Place: Boston, MA <br>Price: Free </p>
        <a href="Wine_Fest.php">View Details</a>
        </div>
      </div>

      <div class="locations">
        <a href="Gallery.php">
        <img src="Images/gallery.jpg" alt="Africa Gallery" title="Africa Gallery" >
        </a>
        <div class="desc" id="gallery/ny1">
        <b>Africa Gallery <br> March 7, 2019</b> <br>
        <p>Place: Boston, MA <br>Price: Free </p>
        <a href="Gallery.php">View Details</a>
        </div>
      </div>
      </div>

      <div class="box">
          <p>Copyright © 2019, EVENTMAG MANAGEMENT</p>
      </div>

  </body>
</html>
