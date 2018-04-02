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
    <title>Community - Profile</title>
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
        if (isset($_GET['id']) && is_numeric($_GET['id']))
        {
            $id = trim($_GET['id']);
            $profileUser = new User($database_connection);
            $profileUser->create_user_from_id($id);

            echo var_dump($profileUser);

            if (isset($_GET['action']) && ($_GET['action'] == 'edit'))
            {
        ?>

                <form action="POST">
                    <label for="profile-username">Username:</label>
                    <input id="profile-username" type="text" name="username" value="" disabled>
                </form>

            <?php
            }
            else
            {
            ?>
                
                <div>
                    <div>
                        <h3>PROFILE</h3>
                    </div>
                    <div>
                        <strong>Username:</strong>
                        <br>
                        <?=$profileUser->username?>
                    </div>
                    <div>
                        <strong>E-mail:</strong>
                        <br>
                        <?=$profileUser->email?>
                    </div>
                </div>
                 
                

            <?php
            }
        }
        else
        {
            //Print some Error Shit here
        }
        ?>
      
    </main>

</div>

</body>
</html>