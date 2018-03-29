<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Community-  Forum - New Reply</title>
</head>
<body>

<div id="wrapper">

    <header>
        <h1>Community</h1>
    </header>
    
    <main>
        <form id="form-login" action="/placeholder.php" method="post">
            <label for="textarea-message">Message: </label>
            <br>
            <textarea id="textarea-message"></textarea>
            <br>
            <br>
            <button type="submit" form="form-login">Post Reply</button>
        </form>

    </main>

</div>


    
</body>
</html>