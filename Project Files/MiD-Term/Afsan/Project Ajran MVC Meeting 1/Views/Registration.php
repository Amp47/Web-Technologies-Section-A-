<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
<?php include 'Nav.php'; ?>
<h1>Registration</h1>
<form action="../Controllers/RegistrationHandler.php" method="post" enctype="multipart/form-data">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="file" name="pfp">
    <input type="submit" name="submit" value="Register">
</form>
</body>
</html>