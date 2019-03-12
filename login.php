<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: Events.html");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM users WHERE username = '$username'";
        if($result=$link->query($sql))
        {
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            $username = $row["username"];
            $h_password = $row["password"];
          }
          }
          else {
            echo "error in sql query";
          }

          if ($password == $h_password) {
              session_start();

              // Store data in session variables
              $_SESSION["loggedin"] = true;
              $_SESSION["id"] = $id;
              $_SESSION["username"] = $username;

              // Redirect user to welcome page
              header("location: Events.php");
            }
          else{
        // Display an error message if password is not valid
              $password_err = "The password you entered was not valid.";
              }
          }
     else{
        // Display an error message if username doesn't exist
        $username_err = "No account found with that username.";
          }
    }
  else{
      echo "Oops! Something went wrong. Please try again later.";
      }
    }
else {
      // code...
      }
// Close connection
mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>RSVP Event Management</title>
    <link href="main.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="logo">
      <a href="login.php"><img src="Images/logo.jpg" hight="1px"></a>
      <p>Contact Us: 000-111-2222</p>
    </div>

    <div class="image">
      <img src="Images/BackgroundImage.png" alt="image" style="width:100%;">
    </div>

    <div class="Login" align="center">
    <p>Online RSVP For Any Event</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="action">
      <input type="email" id="email" name="username" placeholder="Email ID" value="<?php echo $username; ?>">
      <span id="Invalid-email"><?php echo $username_err; ?></span>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <span id="Invalid-password"><?php echo $password_err; ?></span>
      <button value="click me" id="login" >Enjoy!</button>
    </div>
      </form>
      </div>

    <div class="information">
      <h2><p>Get Started Now!!!</p></h2>
      <p> EVENTMAG provides you millions of events every year. It is simple and easy to use event management RSVP tool.</p>
      <p>Customizable, powerful, and user-friendly. <a href="register.php">Click here</a> to get started now!!!</p>
    </div>

    <div class="box">
        <p>Copyright © 2019, EVENTMAG MANAGEMENT</p>
    </div>
    <script src="main.js" type="text/javascript"></script>
    </body>
</html>
