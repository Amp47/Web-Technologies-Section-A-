<?php
$vat = 15;

$price = 10;
$vatToPay = ($price / 100) * $vat;
$totalPrice = $price + $vatToPay;

echo ("Total with Vat = "). $totalPrice; 
?>