<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //php test
    echo "<h1>Designing HTML form using PHP with validation of user inputs <br> LAB TASK -> 2 <br></h1>";
    echo "<h2>:::Write everything in a single PHP script:::</h2>";
    
    // define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $dobErr = $degreeErr = $bloodGrpErr ="";
$name = $email = $gender = $comment = $dob = $website = $degree = $bloodGrp ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name cannot be empty!";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "email cannot be empty!";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["date of birth"])) {
    $dobErr = "date of birth is required";
  } else {
    $dob = $_POST["date of birth"];
  }
  
  //not needed
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = $_POST["website"];
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }    
  }
  //not needed

  //not needed
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = $_POST["comment"];
  }
  //not needed

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "Please, select required degrees.";
  } else {
    $degree = $_POST["degree"];
  }

  if (empty($_POST["blood group"])) {
    $bloodGrpErr = "Blood Group must be selected.";
  } else {
    $bloodGrp = $_POST["blood group"];
  }

}
?>






<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  
  
  <hr><strong>Name:</strong>
  <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br><hr>

  <strong>E-mail:</strong>
  <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br><hr>

  <strong>Date Of Birth:</strong>
  <input type="date" id="birthdate" name="birthdate" type="submit">
  <span class="error"><?php echo $dobErr;?></span>
  <br><br><hr>

  <strong>Website:</strong>
  <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br><hr>
  
  <strong>Comment:</strong> 
  <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br><hr>
  
  <strong>Gender:</strong>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br><hr>
  <input type="submit" name="submit" value="Submit">
  <br><br>

  <strong>Degree:</strong>
  <input type="checkbox" id="deg1" name="deg1" value="SSC">
  <label for="vehicle1"> SSC </label>
  <input type="checkbox" id="deg2" name="deg2" value="HSC">
  <label for="vehicle1"> HSC </label>
  <input type="checkbox" id="deg3" name="deg3" value="Bsc">
  <label for="vehicle1"> BSc </label>
  <input type="checkbox" id="deg4" name="deg4" value="MSc">
  <label for="vehicle1"> Msc </label>
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br><hr>
  <input type="submit" value="Submit">
  <br><br><hr>

  <strong>BLOOD GROUP:</strong>
  <label for="blood group">:</label>
  <select name="blood group" id="blood group">
  <option value="" disable selected>Select your option</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
  <br><br><hr>

</form>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo "<br>";

echo $degree;
echo "<br>";

echo $website;
echo "<br>";
echo $comment;

echo "<br>";
echo $gender;

echo "<br>";
echo $bloodGrp;
echo "<br>";


    ?>
    
</body>
</html>