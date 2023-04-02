<?php
session_start();
session_unset();
session_destroy();
setcookie('username', '', time() - 3600, '/');
header('Location: ../Views/Sellers/SellerLogin.php');
exit();
