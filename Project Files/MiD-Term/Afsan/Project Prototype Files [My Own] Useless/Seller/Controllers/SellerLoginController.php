<?php
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
  header('Location: ../CommonLayer/SellerHome.php');
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
      header('Location: ../CommonLayer/SellerHome.php');
      exit();
    }
  }

  // Display an error message
  echo 'Invalid username or password!';
}
?>