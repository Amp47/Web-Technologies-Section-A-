<?php
// Start the session
session_start();
//check if the user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: ./SellerHome.php');
    exit();
}
?>
<?php include_once './../CommonLayer/SellerHeader.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <div class="col-6 m-auto border p-5 mt-5">
        <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['error']; ?>
        </div> <?php } ?>
        <?php unset($_SESSION['error']); ?>
        <form method="Post" action="../../Controllers/SellerPasswordResetController.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp" value="<?php if (isset($_SESSION['foundUser'])) {
                       echo $_SESSION['foundUser'];
                   } ?>" <?php if (isset($_SESSION['foundUser'])) {
                    echo "readonly";
                } ?>>
            </div>
            <?php if (isset($_SESSION['foundUser'])) { ?>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">New Password</label>
                <input type="password" class="form-control" name="newPassword">
            </div>
            <?php } ?>
            <input type="submit" class="btn btn-primary mb-2" name="Update" value="Reset"> <br>
            <a href="./SellerLogin.php">Go back</a>
        </form>
    </div>
</body>

</html>