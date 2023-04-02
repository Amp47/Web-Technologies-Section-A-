<?php
session_start();
include_once '../../Views/CommonLayer/header.php'; ?>

    <section class="h-100 h-custom" style="background-color: #fff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2 p-5" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                            <h6 class="mb-0 text-muted"><?= $_SESSION['totalItems'] ?> Items</h6>
                                        </div>
                                    </div>
                                    <?php
                                    $cart = array();
                                    if (isset($_SESSION['cart'])) {
                                        $cart = $_SESSION['cart'];
                                    }
                                    foreach ($cart as $key => $value) {
                                        echo '<div class="row mb-4 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img
                                                src="'.$value["imgUrl"].'"
                                                class="img-fluid rounded-3 p-3" alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <h6 class="text-muted">' . $value["title"] . '</h6>
                                            <h6 class="text-black mb-0">' . $value["description"] . '</h6>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <button class="btn btn-link px-2"

                                                <i class="fas fa-minus"></i>
                                            </button>

                                            <input id="form1" min="0" name="quantity" value="1" type="number"
                                                   class="form-control form-control-sm" />

                                            <button class="btn btn-link px-2"

                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h6 class="mb-0">$ ' . $value["price"] . '</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                        </div>
                                    </div>';
                                    }
                                    ?>
                                    <hr class="my-4">
                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="./home.php" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a>
                                        </h6>
                                    </div>
                                </div>

                                <div class="col-lg-4 bg-grey mt-5 p-3">
                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total price</h5>
                                            <h5>$ <?= $_SESSION['totalPrice'] ?></h5>
                                        </div>

                                        <button type="button" class="btn btn-dark btn-block btn-lg"
                                                data-mdb-ripple-color="dark">Checkout
                                        </button>
                                        <a class="mx-5 btn btn-danger" href="../../Controllers/CustomersControllers/cartController.php?clearCart=True">Clear Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include_once '../../Views/CommonLayer/footer.php'; ?>