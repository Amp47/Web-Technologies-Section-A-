<?php
//update the product
$productId = $_POST['productId'];
$name = $_POST['name'];
$imgUrl = $_POST['imgUrl'];
$description = $_POST['description'];
$price = $_POST['price'];
//get the data from the json file
$data = json_decode(file_get_contents("./../Models/Products.json"));


//find the product with the id
foreach ($data as $key => $value) {
    if ($value->productID == $productId) {
        $value->name = $name;
        $value->imgUrl = $imgUrl;
        $value->description = $description;
        $value->price = $price;
        break;
    }
}


//save the data to the json file
file_put_contents("./../Models/Products.json", json_encode($data));

//redirect to the seller home page
header('Location: ./../Views/Sellers/SellerHome.php');