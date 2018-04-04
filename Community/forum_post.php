<?php
session_start();

include_once 'class/user.php';
include_once 'class/forum.php';

$user = new User($database_connection);

if (isset($_POST['btn-start-thread']))
{

}
else if (isset($_POST['btn-post-reply']))
{

}
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
        if (isset($_GET['fid']) && is_numeric($_GET['fid']))
        {

            if (false)
            {
            ?>

            <div>
                Forum doesn't exist.<br>
                <br>
                <a href="javascript:history.back();">Go Back</a>
            </div>

            <?php
            }
            else
            {
        ?>

            <div>
                <form id="form-forum-thread" method="post">
                    <label for="input-title"><strong>Title:<strong></label>
                    <br>
                    <input id="input-title" type="text" name="title" value="" placeholder="Title">
                    <br>
                    <label for="textarea-message"><strong>Message:<strong></label>
                    <br>
                    <textarea id="textarea-message"></textarea>
                    <br>
                    <br>
                    <button type="submit" form="form-forum-thread" name="btn-start-thread">Start Thread</button>
                </form>
            </div>

        <?php
            }
        }
        else if (isset($_GET['tid']) && is_numeric($_GET['tid']))
        {
            //Check if thread is locked exsists
            if (false)
            {
            ?>
                <div>
                    Thread is locked and you can not make a new post.<br>
                    <br>
                    <a href="javascript:history.back();">Go Back</a>
                </div>

            <?php
            }
            else
            {
        ?>

            <div>
                <form id="form-forum-reply" method="post">
                    <label for="textarea-message"><strong>Message:<strong></label>
                    <br>
                    <textarea id="textarea-message"></textarea>
                    <br>
                    <br>
                    <button type="submit" form="form-forum-reply" name="btn-post-reply">Post Reply</button>
                </form>
            </div>

        <?php
            }
        }
        ?>

    </main>

</div>


    
</body>
</html>