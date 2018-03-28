<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Community</title>
</head>
<body>

<div id="wrapper">

    <header>
        <h1>Community</h1>
    </header>
    
    <main>
        Login:
        <form id="form-login" action="/login.php" method="post">
            <label for="input-username">Username: </label>
            <br>
            <input id="input-username" type="text" name="username" value="" placeholder="Username">
            <br>
            <label for="input-password">Password: </label>
            <br>
            <input id="input-password" type="password" name="password" value="" placeholder="Password">
            <br>
            <br>
            <button type="submit" form="form-login">Login</button>
        </form>

    </main>

</div>
    
</body>
</html>