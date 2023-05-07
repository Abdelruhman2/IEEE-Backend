<?php
session_start();
include 'includes/header.inc.php' ;
include 'includes/nav.inc.php' ;
include 'includes/footer.inc.php' ;
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style.app.css">
 
    <meta charset="UTF-8">
    <title>Login Form</title>
    <style></style>
  </head>
  <body>
    <div class="login-form">
      <h2>Login Form</h2>
      <!-- includes/login.inc.php -->
      <form action="includes/login.inc.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <label for="password">Password:</label>
        <input type="password" name="pwd" required>
        <button name= 'submit' type="submit">Login</button>
        <p>Don't have an account? <a href  ="http://localhost/loginsystem/signup.php" >Sign up</a></p>
        
      </form>
    </div>
  </body>
</html>
