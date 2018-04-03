<?php
session_start();

include_once 'class/user.php';

$user = new User($database_connection);

if (isset($_POST['btn-login']))
{
    $username = trim($_POST['username']);
    $email = trim($_POST['username']);
    $password = trim($_POST['password']);
  
    if ($user->login($username, $email, $password))
    {
        header("Location: index.php");
    }
    else
    {
        $error = "Username or password was incorrect.";
    } 
}
else if (isset($_POST['btn-login-resetpassword']))
{
    //Send Mail
    $sent = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Community</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<div id="wrapper">

    <header>
        <h1>Community</h1>
    </header>
    
    <nav>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="news.php">News</a>
            </li>
            <li>
                <a href="blog.php">Blog</a>
            </li>
            <li>
                <a href="forum.php">Forum</a>
            </li>
            <?php
            if ($user->is_loggedin())
            {
            ?>
            <li>
                <a href="logout.php">Log out</a>
            </li>
            <?php
            }
            else
            {
            ?>
            <li><a href="login.php">Log in</a> / <a href="register.php">Register</a></li>
            <?php
            }
            ?>
        </ul>
    </nav>

    <main>

        <?php
            if (isset($_GET['forgot']))
            {
        ?>
            <form id="form-login-forgotpassword" method="post">
                <label for="input-value">Username / E-mail: </label>
                <br>
                <input id="input-text" type="text" name="input-value" value="" placeholder="">
                <br>
                <button type="submit" form="form-login" name="btn-login-resetpassword">Reset Password</button>
            </form> 
        <?
            }
            else if (isset($_POST['btn-login-resetpassword']))
            {
                if ($sent)
                {
                ?>
                    An e-mail was sent to xxxx with instructions on how to reset your password.
                <?php  
                }
                else
                {
                ?>
                    Could not find username or e-mail in the database.<br>
                    Please try again.
                <?php
                }
            }
            else if (!$user->is_loggedin())
            {
        ?>
        
            <strong>Login:</strong>
        <?php
            if (isset($error))
            {
        ?>
                <?=$error;?>
        <?php
            }
        ?>
            <form id="form-login" method="post">
                <label for="input-username">Username: </label>
                <br>
                <input id="input-username" type="text" name="username" value="" placeholder="Username">
                <br>
                <label for="input-password">Password: </label>
                <br>
                <input id="input-password" type="password" name="password" value="" placeholder="Password">
                <br>
                <input type="checkbox" id="checkbox-rememberme" name="rememberme" value="Remember">
                <label for="checkbox-rememberme">Keep me logged in.</label>
                <br>
                <br>
                <button type="submit" form="form-login" name="btn-login">Login</button>
            </form> 
            <br>
            Don't have an account? <a href="register.php">Register here</a>. Forgot password? <a href="login.php">Click here</a>
        
        <?php
            }
            else
            {
        ?>
                You are already logged in.<br>
                <br>
                <a href="javascript:history.back();">Go Back</a>
        <?php
            }
        ?>

        

    </main>

</div>
    
</body>
</html>
