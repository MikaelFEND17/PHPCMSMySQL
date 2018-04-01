<?php
    session_start();
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
    
    <main>

        <?php
        if (isset($_GET['action']) && ($_GET['action'] == 'list_users'))
        {
        ?>


            Username
            Edit
            Delete

        <?php
        }
        else
        {
        ?>
            <a hred="news.php?action=new">New News Post</a>
            <br>
            <a href="?action=list_users">List Users</a>
        <?php
        }
        ?>

    </main>

</div>
    
</body>
</html>