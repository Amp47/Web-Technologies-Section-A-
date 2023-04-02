<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>BAIKI Store</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <?php 
		
		require 'navbar.html';
	 ?>
    <div align="right">
        <form method="get" action="logout.php">
            <button class=logout type="submit" name="logout">Logout</button>
        </form>
    </div>
    <h1>BaiKi Shoe Store</h1>

    <p class=message>Welcome to our shoe store! We have a wide selection of shoes for men, women, and children.</p>
    <div class="welcome-message">

    </div>
    <div align="left">
        <form method="get" action="cart.php">
            <button class=cart type="submit" name="cart">View Cart</button>
        </form>
    </div>


    <h2>Men's Shoes</h2>

    <div class="shoe-list">
        <?php
    
    // Start the session
    session_start();



  
    // Check if the user is logged in
    if (!isset($_SESSION['username'])) {
      // Redirect to the login page
      header("Location: login.php");
      exit();
    }
  
      // Read the database json file
      $database = file_get_contents('../Models/database.json');
      $shoes = json_decode($database, true)['shoes'];

    
      
      // Display the men's shoes
      foreach ($shoes as $shoe) {
        if (strpos($shoe['name'], "Men's") !== false) {
          echo '<div class="shoe">';
          echo '<img class=img src="resources\shoe1.png"' . $shoe['image'] . '">';
          echo '<h3>' . $shoe['name'] . '</h3>';
          echo '<p>' . $shoe['description'] . '</p>';
          echo '<p>$' . $shoe['price'] . '</p>';
          echo '<form method="post">';
          echo '<input type="hidden" name="id" value="' . $shoe['id'] . '">';
          echo '<button class=button type="submit" name="add_to_cart">Add to Cart</button>';
          echo '</form>';
          echo '</div>';
        }
      }
    ?>
    </div>

    <h2>Women's Shoes</h2>

    <div class="shoe-list">
        <?php
      // Display the women's shoes
      foreach ($shoes as $shoe) {
        if (strpos($shoe['name'], "Women's") !== false) {
          echo '<div class="shoe">';
          echo '<img class=img src="resources\shoe2.png"' . $shoe['image'] . '">';
          echo '<h3>' . $shoe['name'] . '</h3>';
          echo '<p>' . $shoe['description'] . '</p>';
          echo '<p>$' . $shoe['price'] . '</p>';
          echo '<form method="post">';
          echo '<input type="hidden" name="id" value="' . $shoe['id'] . '">';
          echo '<button class=button type="submit" name="add_to_cart">Add to Cart</button>';
          echo '</form>';
          echo '</div>';
        }
      }
    ?>
    </div>

    <h2>Children's Shoes</h2>

    <div class="shoe-list">
        <?php
      // Display the children's shoes
      foreach ($shoes as $shoe) {
        if (strpos($shoe['name'], "Children's") !== false) {
          echo '<div class="shoe">';
          echo '<img class=img src="resources\shoe1.png"' . $shoe['image'] . '">';
          echo '<h3>' . $shoe['name'] . '</h3>';
          echo '<p>' . $shoe['description'] . '</p>';
          echo '<p>$' . $shoe['price'] . '</p>';
          echo '<form method="post">';
          echo '<input type="hidden" name="id" value="' . $shoe['id'] . '">';
          echo '<button class=button type="submit" name="add_to_cart">Add to Cart</button>';
          echo '</form>';
          echo '</div>';
        }
      }
    ?>
    </div>

    <p>Thank you for visiting our store!</p>

    <?php
    // Add the selected shoe to the cart
    if (isset($_POST['add_to_cart'])) {
      $shoe_id = $_POST['id'];
      
      // Read the database json file
      $database = file_get_contents('../Models/database.json');
      $data = json_decode($database, true);
      
      // Find the shoe in the shoes array
      $shoe = null;
      foreach ($data['shoes'] as $s) {
        if ($s['id'] == $shoe_id) {
          $shoe = $s;
          break;
        }
      }
      
      // Add the shoe to the cart array
      if ($shoe) {
        $data['cart'][] = $shoe;
        
        // Save the updated data to the database json file
        file_put_contents('../Models/database.json', json_encode($data));
      }
    }
  ?>


</body>

</html>