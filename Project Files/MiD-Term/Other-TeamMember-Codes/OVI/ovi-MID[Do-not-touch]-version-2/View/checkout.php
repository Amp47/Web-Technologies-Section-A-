<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
  // Redirect to the login page
  header("Location: login.php");
  exit();
}

// Read the database file and extract the user and cart data
$json = file_get_contents('../Models/database.json');
$data = json_decode($json, true);

$users = $data['users'];
$cart = $data['cart'];

// Find the logged in user's data
$username = $_SESSION['username'];
$user = [];
$filteredUsers = array_filter($users, function($u) use ($username) {
  return $u['username'] == $username;
});

if (!empty($filteredUsers)) {
  $user = array_values($filteredUsers)[0];
}

// Make sure the cart is an array
if (!is_array($cart)) {
  $cart = [];
}

// Calculate the total amount
$total = array_reduce($cart, function($sum, $item) {
  return $sum + $item['price'];
}, 0);

// Process the checkout form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Save the order to the database
  // ...

  // Redirect to the confirmation page
  header("Location: confirmation.php");
  exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Checkout</title>
</head>

<body>
    <?php 
		
		include 'navbar.html';
	 ?>
    <h1>Checkout</h1>

    <p><strong>Name:</strong> <?php echo $user['username']; ?></p>
    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
    <p><strong>Phone NO:</strong> <?php echo $user['phone']; ?></p>


    <h2>Cart Items</h2>
    <ul>
        <?php foreach ($cart as $item): ?>
        <li><?php echo $item['name']; ?> - $<?php echo $item['price']; ?></li>
        <?php endforeach; ?>
    </ul>

    <p><strong>Total:</strong> $<?php echo $total; ?></p>

    <form method="post">
        <input type="submit" value="Done">
    </form>
</body>

</html>