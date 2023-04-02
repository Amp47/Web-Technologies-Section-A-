<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <?php include 'Nav.php'; ?>
    <h1>welcome</h1>
    <?php
        session_start();
        $imgurl = '../img/' . $_SESSION['username'] . '.jpg';
    ?>
    <img src="<?= $imgurl ?>"  alt="">
    <?php
    if (isset($_SESSION['username'])) {
        echo 'Hello ' . $_SESSION['username'];
    } else {
        header('Location: Login.php');
    }
    ?>
</body>
</html>

<style>
    img{
        display: flex;
        width: 150px ;
        justify-content: center;
        flex-direction: row;
        align-items: center;
        margin: 10px;
    }
</style>