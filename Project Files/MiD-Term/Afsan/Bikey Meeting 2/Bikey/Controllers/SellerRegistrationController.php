<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

$json = file_get_contents('./../Models/SellerUser.json');
$data = json_decode($json, true);

$new_user = array(
    'username' => $username,
    'email' => $email,
    'password' => $password,
);

$data[] = $new_user;
$json = json_encode($data);
file_put_contents('./../Models/SellerUser.json', $json);

//profile picture -> pfp
// if (isset($_FILES['pfp'])) {
//     $file_name = $username;
//     $file_tmp = $_FILES['pfp']['tmp_name'];
//     $file_size = $_FILES['pfp']['size'];
//     $file_type = $_FILES['pfp']['type'];

//     $upload_dir = '../Data/SellerData/AccountInfo/img/';
//     $target_file = $upload_dir . basename($file_name) . '.jpg';

//     if (move_uploaded_file($file_tmp, $target_file)) {
//         echo 'File uploaded successfully.';
//     } else {
//         echo 'File upload failed.';
//     }
// }

//redirecting to SellerLogin.PHP Page
header('Location: ./../Views/Sellers/SellerLogin.php');