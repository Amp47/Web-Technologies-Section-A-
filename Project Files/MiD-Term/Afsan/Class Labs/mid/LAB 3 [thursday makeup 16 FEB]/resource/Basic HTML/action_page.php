<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>

</head>
<body>
<div class="container">
  <form action="/action_page.php" method="post">
  <?php if (isset($_GET['error'])) { ?>

   <p class="error"><?php echo $_GET['error']; ?></p>

    <?php } ?>
    <label for="usrname">Username:</label>
    <input type="text" id="usrname" name="usrname" required><br><br>

    <label for="psw">Password:</label>
  <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  <br><br>

    <input type="submit" value="Submit">
  </form>
</div>

<div id="message">
  <h4>Password must contain the following:</h4>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>

<?php

?>
</body>
</head>