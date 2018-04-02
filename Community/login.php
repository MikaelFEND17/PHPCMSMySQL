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
            if (!$user->is_loggedin())
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
            <form id="form-login" action="login.php" method="post">
                <label for="input-username">Username: </label>
                <br>
                <input id="input-username" type="text" name="username" value="" placeholder="Username">
                <br>
                <label for="input-password">Password: </label>
                <br>
                <input id="input-password" type="password" name="password" value="" placeholder="Password">
                <br>
                <br>
                <button type="submit" form="form-login" name="btn-login">Login</button>
            </form> 
            <br>
            Don't have an account? <a href="register.php">Register here</a>
        
        <?php
            }
            else
            {
        ?>
                You are already logged in.
        <?php
            }
        ?>

        

    </main>

</div>
    
</body>
</html>
