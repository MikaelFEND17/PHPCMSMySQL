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
            <?php
            if ($user->is_loggedin())
            {
            ?>
            <li>
                <a href="profile.php">Profile</a>
            </li>
            <?php
            }
            ?>
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
        $profileUser = NULL;
        if (isset($_GET['action']) && ($_GET['action'] == 'edit'))
        {
            if (isset($_GET['id']) && is_numeric($_GET['id']))
            {
                $id = trim($_GET['id']);
                $profileUser = new User($database_connection);
                $profileUser->create_user_from_id($id);
                ?>

                <strong>Username:</strong><br>
                Username<br>
                <form action="POST">
                    <label for="profile-firstname"><strong>First name:</strong></label>
                    <input id="profile-firstname" type="text" name="firstname" value="">
                    <label for="profile-lastname"><strong>Last name:</strong></label>
                    <input id="profile-lastname" type="text" name="lastname" value="">
                </form>

            <?php
            }
        }
        else if (isset($_GET['id']) && is_numeric($_GET['id']))
        {
            $profileUser = new User($database_connection);
            $profileUser->create_user_from_id($_GET['id']);
        }
        else if ($user->is_loggedin())
        {            
            $profileUser = new User($database_connection);
            $profileUser->create_user_from_id($_SESSION['user_session']);
        }
        if ($profileUser != NULL)
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
            <div>
                <?php
                if (($user->is_loggedin()) && ($_SESSION['user_session'] == $profileUser->id))
                {
                ?>
                    <a href="profile.php?action=edit">Edit Profile</a>
                <?php
                }
                else
                {
                ?>  
                    <a href="message.php?action=send&id=<?=$profileUser->id?>">Send Message</a>
                <?php
                }
                ?>
            </div>
        </div>
        <?php
        }
        ?>
      
    </main>

</div>

</body>
</html>