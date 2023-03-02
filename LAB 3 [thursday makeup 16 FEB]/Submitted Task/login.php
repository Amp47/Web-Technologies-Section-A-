<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>LAB TASK 3 [LOGIN]</title>
</head>
<body>
    <h1 align="center">TASK Details: Designing HTML Login, <br>Change Password forms using <br>PHP with validation of user inputs</h1>
    <h2 align="center">:::Welcome to the login page:::</h2><br>
    <!-- --> <!--Bootstrap Region -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- --> <!--Bootstrap Region -->


    <center>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>
                <hr>
                <table>
                    <tr>
                        <td><label for="username">Username: </label></td>
                        <td><input type="text" name="username" required><br></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password: </label></td>
                        <td><input type="text" name="password" required><br></td>
                    </tr>
                    <tr>
                        <td align="right" colspan="1"><input type="checkbox" id="remember_me" name="remember_me"
                                value="remember_me">
                            <label for="remember_me">Remember Me</label>
                        </td>
                    </tr>
                    <tr>
                    <td><br><a href="ChangePassword.php">Forgot Password?</a></td><br>
                        
                    <td align="right">
                        <a href="load.php"> <input type="submit" name="submit" value="submit"></a>
                        </td>
                        
                    </tr>
                </table>
                <hr>
            </fieldset>
        </form>
    </center>
    <?php
    $nameError = $passwordError = "";
    $username = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $usernameError = "Username is required";
        } else {
            $username = ($_POST["username"]);
            if (!preg_match("/^[a-zA-Z-' ]*.{2,30}$/", $username)) {
                $usernameError = "Only letters and white space allowed with at least 2 characters";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["password"])) {
            $passwordError = "Password is required";
        } else {
            $password = ($_POST["password"]);
            if (!preg_match("/^[0-9' ]*.{8,12}$/", $password)) {
                $passwordError = "At least 8 digit needed";
            }
        }
    }
    ?>

    

    
</body>
</html>