<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="SellerLogin.css">
</head>

<body>
    <h1>Welcome to Baiki Shoe </h1>
    <h1 align="center">Login</h1>

    <?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="login" value="Login">
    </form>

    <a href="SellerPasswordReset.php">Forgot Password?</a>
</body>

</html>