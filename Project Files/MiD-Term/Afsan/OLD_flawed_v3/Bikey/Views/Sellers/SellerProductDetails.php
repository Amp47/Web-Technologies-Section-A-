<?php
session_start();
include_once './../CommonLayer/SellerHeader.php'; ?>
<?php
//check if the user is already logged in
if (!isset($_SESSION['username'])) {
    header('Location: ./SellerLogin.php');
    exit();
} ?>

<?php
//find the product with the id
$data = json_decode(file_get_contents("../../Models/Products.json"));
$product = null;
foreach ($data as $key => $value) {
    if ($value->productID == $_GET['id']) {
        $product = $value;
        break;
    }
}
if ($product == null) {
    header('Location: ./SellerHome.php');
    exit();
}
?>

<h1>Edit Product</h1>
<div class="p-5 m-auto mt-5 border col-6">
    <form action="../../Controllers/ProductUpdateController.php" method="post">
        <div class="mb-3">
            <input type="hidden" class="form-control" name="productId" value="<?= $product->productID ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?= $product->name ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">image url</label>
            <input type="text" class="form-control" name="imgUrl" value="<?= $product->imgUrl ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" value="<?= $product->description ?>" name="description">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control" value="<?= $product->price ?>" name="price">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-danger" style="margin-left: 155px;"
            href="../../Controllers//ProductDeleteController.php?productID=<?= $product->productID ?>">Delete
            Product</a>
    </form>
</div>
<?php include_once './../CommonLayer/SellerFooter.php'; ?>