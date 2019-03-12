<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
// Initialize the session
require_once "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){

  $eventname = $_POST['eventname'];
  $startdate = $_POST['sdate'];
  $duration = $_POST['duration'];
  $description = $_POST['description'];

  $eventname_err = $duration_err = $description_err= $startdate_err = "";

  if(empty(trim($eventname))){
      $eventname_err = "Please enter a eventname.";
  }
  else if (empty(trim($startdate))){
      $startdate_err = "Please enter a date.";
  }
  else if (empty(trim($duration))){
    $duration_err = "Please enter a duration.";
  }
  else if (empty(trim($description))){
    $description_err = "Please enter a description.";
  }
  else {
    $sql = "INSERT INTO event (EventName, Date,Duration, Description)
    values ('$eventname','$startdate','$duration','$description')";
    $link->query($sql);
  }
  mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Event</title>
    <link href="main.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="logo">
      <a href="Events.php"><img src="Images/logo.jpg" hight="1px"></a>
      <p>Contact Us: 000-111-2222</p>
    </div>
    <div class="image">
      <img src="Images/Ice-skating_1.jpg" alt="Event" title="Create Event" style="width:100%;">
    </div>
    <div class="Heading" align="center">
      <h1>Create New Event!</h1>
    </div>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="new_event">

      <label for="ename">Event Name</label>
      <input type="text" id="ename" name="eventname" placeholder="Event name.." required>
      <label for="sdate">Start Date</label>
      <input type="date" id="sdate" name="sdate" placeholder="Enter start date..">

      <label for="duration">Duration</label>
      <input type="text" id="duration" name="duration" placeholder="Event duration.." required>

      <label for="description">Event Description</label>
      <textarea id="description" name="description" placeholder="Write event description.." style="height:200px"></textarea>

      <input type="submit" value="Submit">
      <!--<input type="button" value="Create" onclick="myform()">-->
      <input type="button" value="Discard" onclick="parent.location='Events.php'">

    </div>
</form>

    <div class="box">
        <p>Copyright © 2019, EVENTMAG MANAGEMENT</p>
    </div>

    </body>
</html>
