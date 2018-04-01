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
        <strong>Forum</strong><br>
        <br>
        Category - Num Threads - Last Post - Posted By - Time <br> 
    <?php 

        //List forum Categories as Links

        //Count Threads

        //Last Thread

        if (isset($_GET['fid']) && is_numeric($_GET['fid']))
        {
            ?>
            <?php
        }
        elseif (isset($_GET['tid']) && is_numeric($_GET['tid']))
        {
            ?>
            <?php
        }
        else
        {
            ?>

            <?php
        }
    ?>
      
    </main>

</div>

    
</body>
</html>