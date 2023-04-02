

<?php
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
  header('Location: home.php');
  exit();
}

// Check if the login form has been submitted
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Read the database json file
  $database = file_get_contents('database.json');
  $users = json_decode($database, true)['users'];

  // Check if the username and password are correct
  foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
      // Set the session variable
      $_SESSION['username'] = $username;

      // Set the cookie variable
      setcookie('username', $username, time() + (86400 * 30), '/');

      // Redirect to the home page
      header('Location: home.php');
      exit();
    }
  }

  // Display an error message
  echo 'Invalid username or password.';
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>

<?php 
		
		require 'navbar.html';
	 ?>


    <h1>B A i K i</h1>
  <h1 align= "center">Login</h1>
  
 
  
  <form method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>
    
    <label for="password">Password:</label>
    <input type="password" name="password" required><br>
    
    <input type="submit" name="login" value="Login">
  </form>
  
  <a href="forgot.php">Forgot Password?</a>
  <br>
  <br>
  <a href="registration.php">New User? Register Now !</a>

  <form method="get" action="forgot.php">
  <button type="submit" name="forgotpass">Forgot Password?</button>
</form>
<br>
<br>

<form method="get" action="registration.php">
  <button type="submit" name="register">New User?</button>
</form>
  
</body>
</html>