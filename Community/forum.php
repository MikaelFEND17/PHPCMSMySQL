<?php
session_start();

include_once 'class/user.php';
include_once 'class/forum.php';


$user = new User($database_connection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Community - Forum</title>
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
        ?>
        </ul>
    </nav>
    
    <main>

        <div>
            <div>
                <h3>Forum</h3>
            </div>
    <?php 

        if (isset($_GET['fid']) && is_numeric($_GET['fid']))
        {
        ?>
            <div>
                <div>Title</div>
            </div>
            <div>

            <?php

            ?>

            </div>
        <?php
        }
        elseif (isset($_GET['tid']) && is_numeric($_GET['tid']))
        {
        ?>          
            <div>
                    Thread Name - Posted By - Replies - Latest Reply By - Last Post Time 
            </div>
            <div>

            <?php

                //<a href="forum.php?tid="></a>
            ?>

            </div>
        <?php
        }
        else
        {
        ?>

            <div>
                Category - Num Threads - Last Post - Posted By - Last Post Time 
            </div>
            <div>

            <?php

                //<a href="forum.php?fid="></a>
            ?>

            </div>
        <?php
        }
    ?>
      
        </div>
    </main>

</div>

    
</body>
</html>