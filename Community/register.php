<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Community - Register</title>
</head>
<body>

<div id="wrapper">

    <header>
        <h1>Community</h1>
    </header>
    
    <main>

        <form id="form-register" action="/register.php?user=create" method="post">
            <label for="input-username">Username: </label>
            <br>
            <input id="input-username" type="text" name="username" value="" placeholder="Username">
            <br>
            <label for="input-email">E-mail: </label>
            <br>
            <input id="input-email" type="text" name="email" value="" placeholder="E-mail">
            <br>            
            <label for="input-email-repeat">E-mail again: </label>
            <br>
            <input id="input-email-repeat" type="text" name="email-repeat" value="" placeholder="E-mail">
            <br>
            <label for="input-password">Password: </label>
            <br>
            <input id="input-password" type="password" name="password" value="" placeholder="Password">
            <br>            
            <label for="input-password-repeat">Password again: </label>
            <br>
            <input id="input-password-repeat" type="password" name="password-repeat" value="" placeholder="Password">
            <br>
            <br>
            <button type="submit" form="form-register">Register</button>
        </form>
      
    </main>

</div>
    
</body>
</html>