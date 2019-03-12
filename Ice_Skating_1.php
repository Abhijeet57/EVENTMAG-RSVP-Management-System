<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
require_once "config.php";

$username = $_SESSION["username"];
$event = "Kendall Square Ice Skating";

$sql = "INSERT INTO eventregistration (UserName, EventName) VALUES ('$username', '$event')";
if($link->query($sql)){
      header("location: Booked.php");
  }
  else{
      echo "Something went wrong. Please try again later.";
  }

  mysqli_close($link);

  exit;


?>
