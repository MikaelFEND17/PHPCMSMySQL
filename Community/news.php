<?php
session_start();

include_once 'classes/news.php';

if (isset($_POST['btn-submit-post']))
{ 
    $title = trim($_POST['title']);
    $message = trim($_POST['message']);
  
    $error = array();
    
    if ($title == "")
    {
        array_push($error, "You must enter a title.");
    }
    else if (strlen($title) < 5)
    {
        array_push($error, "Username must be at least 5 characters.");
    }
    
    if ($message == "")
    {
        array_push($error, "You must enter a message.");
    }
    else if (strlen($message) < 5)
    {
        array_push($error, "Message must be at least 5 characters long.");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Community - News</title>
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

            //Loop
            if (isset($_GET['action']) && ($_GET['action'] == 'new'))
            {
                ?>

                <form id="form-login" action="news.php?action=save" method="post">
                    <label for="input-title">Title: </label>
                    <br>
                    <input id="input-title" type="text" name="title" value="" placeholder="Title">
                    <br>
                    <label for="textarea-message">Message: </label>
                    <br>
                    <textarea id="textarea-message"></textarea>
                    <br>
                    <br>
                    <button type="submit" form="form-login" name="btn-submit-post">Post News</button>
                </form>

                <?php
            }
            else if (isset( $_GET['id']) && is_numeric($_GET['id']))
            {
                ?>

                Lista alla nyheter

                Title 
                Text
                Timestamp
                Comments

                <?php
            }
            else
            {
                ?>

                Lista alla nyheter

                Title 
                Text
                Timestamp
                Num Comments
    
                <?php
            }

        ?>

    </main>

</div>

</body>
</html>