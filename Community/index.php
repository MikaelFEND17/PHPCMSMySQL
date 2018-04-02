<?php
session_start();

include_once 'class/user.php';

$user = new User($database_connection);
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
            if ($user->is_loggedin())
            {

                $user_id = $_SESSION['user_session'];
                $statement = $database_connection->prepare("SELECT * FROM users WHERE id=:id");
                $statement->execute(array(":id"=>$user_id));
                $userRow = $statement->fetch(PDO::FETCH_ASSOC);
        ?>
        
                Welcome <?=$userRow['username'];?>.<br>
                What do you want to do today.
        
        <?php
            }
            else if (isset($_GET['loggedout']))
            {    
        ?>
                You are now logged out.
        <?php
            }
            else
            {
        ?>
                Welcome to our site, either <a href="login.php">login</a> or <a href="register.php">register</a>.
        <?php
            }
        ?>

        

    </main>

</div>
    
</body>
</html>