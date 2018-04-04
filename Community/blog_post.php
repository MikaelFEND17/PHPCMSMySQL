<?php
session_start();

include_once 'class/user.php';
include_once 'class/blog.php';

$user = new User($database_connection);

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
    <title>Community - Blog - New Post</title>
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
        <div id="blog-newpost">
            <form id="form-login" method="post">
                <label for="input-title"><strong>Title:</strong> </label>
                <br>
                <input id="input-title" type="text" name="title" value="" placeholder="Title">
                <br>
                <label for="textarea-message"><strong>Message:</strong> </label>
                <br>
                <textarea id="textarea-message" name="message"></textarea>
                <br>
            
                <label for="category"><strong>Category:</strong></label><br>
                Add Category                <br>
                <label for="tags"><strong>Tags:</strong></label><br>
                <label for="comments"><strong>Disable Comments:</strong></label><br>
                <br>
                <button type="submit" form="form-login" name="btn-submit-post">Post Entry</button>
            </form>
        </div>
        
    </main>

</div>

</body>
</html>