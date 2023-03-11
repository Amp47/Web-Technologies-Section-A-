<?php
$productID = $_POST['productId'];
$name = $_POST['name'];
$imgUrl = $_POST['imgUrl'];
$description = $_POST['description'];
$price = $_POST['price'];

$json = file_get_contents('./../Models/Products.json');
$data = json_decode($json, true);

$new_user = array(
    'productID' => $productID,
    'name' => $name,
    'imgUrl' => $imgUrl,
    'description' => $description,
    'price' => $price,
);

$data[] = $new_user;
$json = json_encode($data);
file_put_contents('./../Models/Products.json', $json);
//profile picture -> pfp
// if (isset($_FILES['pfp'])) {
//     $file_name = $productID;
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
header('Location: ./../Views/Sellers/SellerHome.php');