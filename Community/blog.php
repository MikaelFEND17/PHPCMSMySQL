<?php
session_start();

include_once 'class/user.php';
include_once 'class/blog.php';

$user = new User($database_connection);
$blog = new Blog($database_connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Community - Blog</title>
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
        if (isset($_GET['id']) && is_numeric($_GET['id']))
        {
            $blogpost = $blog->get_blog_post($_GET['id']);

            if ($blogpost == NULL)
            {
            ?>

            <div>
                No blog post with ID <?=$_GET['id']?> found.
            </div>

            <?php
            }
            else
            {
            ?>

            <div>
                <div>
                    <h3>Blog Title Here</h3>
                </div>

                <div>
                    <div>
                        <strong>By User:</strong> <a href="profile.php?id=<?=$blogpost->user_id?>"><?=$user->get_username_by_id($blogpost->user_id);?></a>
                    </div>
                    <div>
                        <strong><?=$blogpost->title?></strong>
                    </div>
                    <div>
                        <?=$blogpost->text?>
                    </div>                    
                    <div>
                        <strong>Posted:</strong> <?=$blogpost->timestamp?>
                    </div>
                </div>           

                <div>
                    Comments
                </div>  

                <?php
                
                $comments = $blog->get_comments_for_id($blogpost->id);

                foreach ($comments as $comment)
                {

                }
                
                ?>

             </div>

        <?php
            }
        }
        else if (isset($_GET['uid']) && is_numeric($_GET['uid']))
        {
        ?>
            <div>
                <div>
                    <h3>Blog Title</h3>
                </div>
                <div>
                    By User: 
                </div>
                <div>
                    <div>
                        Title 
                    </div>
                    <div>
                        Text
                    </div>                    
                    <div>
                        Posted:
                    </div>
                    <div>
                        Comments (0)
                    </div>  
                </div>
             </div>
        <?php
        }
        else
        {

        ?>
            <div id="blogs-wrapper">
                <div id="blogs-header">
                    <h3>BLOGS</h3>
                </div>
                <div>
                    <a href="blog_post.php">New Post</a>
                </div>

                <?php

                $blogposts = $blog->get_all_blog_posts();

                foreach ($blogposts as $blogpost)
                {
                ?>
                <div class="blog-post">
                    <div>
                        <strong>By User:</strong> <a href="profile.php?id=<?=$blogpost->user_id?>"><?=$user->get_username_by_id($blogpost->user_id);?></a>
                    </div>
                    <div>
                        <strong><a href="blog.php?id=<?=$blogpost->id?>"><?=$blogpost->title?></a></strong>
                    </div>
                    <div>
                        <?=$blogpost->text?>
                    </div>                    
                    <div>
                        <strong>Posted:</strong> <?=$blogpost->timestamp?>
                    </div>
                    <div>
                        Comments (0)
                    </div>  
                </div>
                <?php
                }
                ?>

             </div>

        <?php
        }

    ?>
      
    </main>

</div>

    
</body>
</html>