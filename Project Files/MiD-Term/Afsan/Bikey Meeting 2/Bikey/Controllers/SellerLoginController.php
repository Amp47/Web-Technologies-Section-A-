<?php
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
  header('Location: ../Views/Sellers/SellerHome.php');
  exit();
}
// Check if the login form has been submitted
if (isset($_POST['Login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Read the database json file
  $database = file_get_contents('./../Models/SellerUser.json');
  $users = json_decode($database, true);

  // Check if the username and password are correct
  foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
      // Set the session variable
      $_SESSION['username'] = $username;

      // Check if the remember me checkbox is checked
      if (isset($_POST['remember'])) {
        // Set the cookie variable
        setcookie('username', $username, time() + (86400 * 30), '/');
      }
      // Redirect to the home page
      header('Location:../Views/Sellers/SellerHome.php');
      exit();
    }
  }
// Display an error message
  echo 'Invalid username or password!';
}