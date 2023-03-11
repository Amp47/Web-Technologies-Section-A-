<?php
session_start();
$username = $_POST['username'];
//get the user from json file
$data = json_decode(file_get_contents("./../Models/SellerUser.json"));

//find the product with the id
if (isset($_SESSION["foundUser"])) {
    $foundUser = $_SESSION["foundUser"];
    foreach ($data as $key => $user) {
        if ($user->username == $foundUser) {
            $user->password = $_POST['newPassword'];
            file_put_contents("./../Models/SellerUser.json", json_encode($data));
            unset($_SESSION['foundUser']);
            header('Location: ./../Views/Sellers/SellerLogin.php');
            return;
        }
    }
}
foreach ($data as $key => $user) {
    if ($user->username == $username) {
        $_SESSION['foundUser'] = $username;
        header('Location: ./../Views/Sellers/SellerPasswordReset.php');
        return;
    }
}
$_SESSION['error'] = "User not found";
header('Location: ./../Views/Sellers/SellerPasswordReset.php');
