<?php
session_start();

include_once 'classes/forum.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Community - Forum - New Thread</title>
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
        <form id="form-forum-thread" action="placeholder.php" method="post">
            <label for="input-title">Title: </label>
            <br>
            <input id="input-title" type="text" name="title" value="" placeholder="Title">
            <br>
            <label for="textarea-message">Message: </label>
            <br>
            <textarea id="textarea-message"></textarea>
            <br>
            <br>
            <button type="submit" form="form-forum-thread">Start Thread</button>
        </form>

        <form id="form-forum-reply" action="placeholder.php" method="post">
            <label for="textarea-message">Message: </label>
            <br>
            <textarea id="textarea-message"></textarea>
            <br>
            <br>
            <button type="submit" form="form-forum-reply">Post Reply</button>
        </form>


    </main>

</div>


    
</body>
</html>