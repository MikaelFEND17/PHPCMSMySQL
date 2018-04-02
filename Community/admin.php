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
    <title>Community - Admin</title>
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
        <div>
            <h3>ADMINISTRATION</h3>
        </div>

        <?php
        if (isset($_GET['action']) && ($_GET['action'] == 'list_users'))
        {
        ?>
            <div>
                <div>
                    <h4>Users</h4>
                </div>
            </div>

            <div> 
                <div><strong>Username</strong></div>
                <div><strong>Edit</strong></div> 
                <div><strong>Ban</strong></div> 
            </div>


        <?php
        }
        else if (isset($_GET['action']) && ($_GET['action'] == 'misc'))
        {
        ?>

            <form>
                <div>
                    <div>
                        <h4>News</h4>
                    </div>
                </div>

                <div>   
                    <button type="submit" form="form-misc" name="btn-submit">Submit</button>
                </div>
            </form>

        <?php
        }
        else
        {
        ?>

            <div>
                <a href="news.php?action=new">New News Post</a>
                <br>
                <a href="?action=list_users">List Users</a>
                <br>
                <a href="?action=misc">Misc Settings</a>
            </div>

        <?php
        }

        //Things to add?
        // Num on News
        ?>

    </main>

</div>
    
</body>
</html>