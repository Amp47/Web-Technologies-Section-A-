<?php 
// Start the session
session_start();
//check if the user is already logged in
if(isset($_SESSION['username'])){
    header('Location: ./SellerHome.php');
    exit();
}
?>
<?php include_once './../CommonLayer/SellerHeader.php'; ?>
<div class="p-5 m-auto mt-5 border col-6">
    <form action="../../Controllers/SellerRegistrationController.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirm">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
<?php include_once './../CommonLayer/SellerFooter.php'; ?>
