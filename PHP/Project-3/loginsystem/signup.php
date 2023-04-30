<?php
session_start();
include 'includes/header.inc.php' ;
include 'includes/nav.inc.php' ;
include 'includes/footer.inc.php' ;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sign-up Form</title>
    <style></style>
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <div class="signup-form">
      <h1>Sign-up Form</h1>

      <form action="includes/signup.inc.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <label for="password">Password:</label>
        <input type="password" name="pwd" required>
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" name="confirm_password" required>
        <label for="email">Email:</label>
        <input type="email"  name="email" required>
        <button type="submit">Sign up</button>
        </form>
      <p>Already have an account? <a href="http://localhost/loginsystem/index.php">Login</a></p>
      <p>Already have an account? <a href="http://localhost/loginsystem/Home.php">Home</a></p>
    </div>
  </body>
</html>
