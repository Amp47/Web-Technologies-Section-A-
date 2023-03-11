<?php
session_start();
include_once './../CommonLayer/SellerHeader.php';
$data = json_decode(file_get_contents("../../Models/Products.json"));

//this counter used to calculate the total added items by the Seller
$count = 0;
foreach ($data as $key => $value) {
    $count++;
}
?>
<?php
//check if the user is already logged in
if (!isset($_SESSION['username'])) {
    header('Location: ./SellerLogin.php');
    exit();
} ?>

<p class="fw-bold p-3">Welcome <?= $_SESSION["username"] ?></p>
<p class="fw-bold mx-3">Total Item <?= $count ?></p>
<div class="d-flex flex-wrap">
    <?php
    foreach ($data as $key => $value) {
        echo "<div class='card m-3' style='width: 18rem;'>
        <img src='" . $value->imgUrl . "' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'>$value->name</h5>
            <p class='card-text'>$value->description</p>
            <a href='./SellerProductDetails.php?id=$value->productID' class='btn btn-primary'>Edit Product</a>
        </div>
    </div>";
    }
    ?>
</div>
<?php include_once './../CommonLayer/SellerFooter.php'; ?>