<a href="Dashboard.php">Dashboard Page</a>
<a href="Registration.php">Reg</a>
<?php
if (isset($_SESSION['username']) || isset($_COOKIE['username'])) {
    $_SESSION["username"] = $_COOKIE['username'];
    echo ' <br> <a href="../Controllers/LogoutHandler.php">Logout</a>';
}
?>
<style>
    a {
        display: flex;
        justify-content: center;
        flex-direction: row;
        align-items: center;
        text-decoration: none;
        color: blue;
        gap: 10px;
        margin: 10px;
    }
</style>