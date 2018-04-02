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
                        Comments
                    </div>  
                </div>
             </div>

        <?php
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
                        Comments: 
                    </div>  
                </div>
             </div>
        <?php
        }
        else
        {


        ?>
            <div>
                <div>
                    <h3>Blogs</h3>
                </div>
                <div>
                    <a href="blog_post.php">New Post</a>
                </div>
                <div>
                    <div>
                        By User: 
                    </div>
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
                        Comments
                    </div>  
                </div>
             </div>

        <?php
        }

    ?>
      
    </main>

</div>

    
</body>
</html>