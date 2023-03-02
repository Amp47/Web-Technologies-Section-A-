<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>LAB TASK 3 [SIGNUP]</title>
</head>
<body>
    
    <h1 align="center">TASK Details: Designing HTML Login, <br>Change Password forms using <br>PHP with validation of user inputs</h1>
    <h2 align="center">:::Welcome to Signup:::</h2><br>
    <!-- --> <!--Bootstrap Region -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- --> <!--Bootstrap Region -->

    <!-- -->
<?php
    // define variables and set to empty values
    $nameErr = $emailErr =  $passwordError = "";
    $username = $email =  $password = "";

    //usanme
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "User Name is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]* .{2,30}$/",$username)) {
      $nameErr = "Only letters and white space allowed with at least 2 characters";
    }
  }
    
    //passworld
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
    } else {
        $password = ($_POST["password"]);
        if (!preg_match("/^[0-9' ]*.{8,12}$/", $password)) {
            $passwordError = "At least 8 digit needed";
        }
    }
    
    //email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  
}
    



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
}

?>


<center>
<hr><p><span class="error">*All informations are required before submission. </span></p><hr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <hr>  
  User Name: <input type="text" name="name" value="<?php echo $username;?>" required>
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br><hr>

  <hr>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>" required>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br><hr>

  <hr>
  Password: <input type="text" name="password" value="<?php echo $password;?>" required>
  <span class="error">* <?php echo $passwordError;?></span>
  <br><br><hr>
  
  <hr>
  <input type="checkbox" id="remember_me" name="remember_me" value="remember_me">
  <label for="remember_me">Remember Me</label>
  <br><a href="ChangePassword.php">--Forgot Password?--</a>
  <hr>


  

  <hr><input type="submit" name="submit" value="Submit"><hr>  
</form>
<center>
    
<?php
echo "<h2>Your Input:</h2>";
echo $username;
echo "<br>";
echo $email;
echo "<br>";

?>

    

    
</body>
</html>