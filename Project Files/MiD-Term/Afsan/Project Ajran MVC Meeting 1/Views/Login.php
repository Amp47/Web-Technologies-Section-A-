<?php
session_start();
if (isset($_SESSION['username']) || isset($_COOKIE['username'])) {
    $_SESSION["username"] = $_COOKIE['username'];
    header('Location: Dashboard.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <?php
include 'Nav.php';
?>
    <h1>Login</h1>
    <form action="../Controllers/LoginHandler.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Login">
    </form>
</body>

</html>