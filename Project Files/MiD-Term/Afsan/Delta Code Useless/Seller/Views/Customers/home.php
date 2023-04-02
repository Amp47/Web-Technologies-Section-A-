<?php include_once '../../Views/CommonLayer/header.php'; ?>
<?php
    $data = file_get_contents('../../Models/Products.json');
    $data = json_decode($data, true);
?>
<div class="d-flex gap-5 m-5 flex-wrap">
<?php
    foreach ($data as $key => $value) {
        echo '<div class="card" style="width: 18rem;">
        <img src="'.$value['imgUrl'].'" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">'.$value['title'].'</h5>
            <p class="card-text">'.$value['description'].'</p>
            <p>$'.$value['price'].'</p>
            <a href="../../Controllers/CustomersControllers/cartController.php?id='.$value["id"].'" class="btn btn-primary">Add TO Cart</a>
        </div>
    </div>';
    }
?>
</div>


<?php  include_once '../../Views/CommonLayer/footer.php'; ?>
