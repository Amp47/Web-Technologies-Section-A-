<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <title>Login</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Baiki Shoe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../Sellers/SellerHome.php">Home</a>
                    </li>
                    <!-- check if logged in -->
                    <?php
                    //check if the user is already logged in
                    if (!isset($_SESSION["username"]) || $_SESSION['username'] == "") {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../Sellers/Sellerlogin.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Sellers/SellerRegistration.php">Registration</a>
                    </li>

                    <?php } ?>

                    <!-- check if logged in -->
                    <?php

                    //check if the user is already logged in
                    if (isset($_SESSION['username'])) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./CreateProduct.php">Add new Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../Controllers/SellerLogoutController.php">Logout</a>
                    </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>