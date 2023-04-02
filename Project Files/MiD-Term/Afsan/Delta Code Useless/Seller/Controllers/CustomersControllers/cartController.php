<?php
session_start();
$ProudctId = $_GET['id'];
$ProudctId = (int)$ProudctId;

$data = file_get_contents('../../Models/Products.json');
$data = json_decode($data, true);

//find the product from the json file
foreach ($data as $key => $value) {
    if ($value['id'] == $ProudctId) {
        $product = $value;
    }
}

////print the product
//echo '<div class="card" style="width: 18rem;">
//    <div class="card-body">
//        <h5 class="card-title">'.$product['title'].'</h5>
//        <p class="card-text">'.$product['description'].'</p>
//        <p>$'.$product['price'].'</p>
//    </div>
//</div>';

$cart = array();
//save the array in session
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
}
//add the new product into the cart session
array_push($cart, $product);
$_SESSION['cart'] = $cart;
//cart total price
$totalPrice = 0;
foreach ($cart as $key => $value) {
    $totalPrice += $value['price'];
}
//save it to a session
$_SESSION['totalPrice'] = $totalPrice;
//save total item count in a session
$_SESSION['totalItems'] = count($cart);

//clear the cart if get has clearCart
if (isset($_GET['clearCart'])) {
    $_SESSION['cart'] = array();
    $_SESSION['totalPrice'] = 0;
    $_SESSION['totalItems'] = 0;
}

header('Location: ../../Views/Customers/cart.php');