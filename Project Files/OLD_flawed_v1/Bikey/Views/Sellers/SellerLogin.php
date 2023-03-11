<?php
// Start the session
session_start();
//check if the user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: ./SellerHome.php');
    exit();
} ?>
<?php include_once './../CommonLayer/SellerHeader.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <div class="col-6 m-auto border p-5 mt-5">
        <form method="Post" action="../../Controllers/SellerLoginController.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="remember">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            <input type="submit" class="btn btn-primary" name="Login" value="Login">
            <div>

                <a class="btn btn-danger" style="margin-left: 155px;" href="./SellerPasswordReset.php?productID"> Forgot
                    Password? </a>


            </div>
        </form>
    </div>
</body>

</html>