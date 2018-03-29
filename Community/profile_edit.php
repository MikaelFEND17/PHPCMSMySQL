<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Community - Profile - Edit</title>
</head>
<body>
    

<div id="wrapper">

    <header>
        <h1>Community</h1>
    </header>
    
    <main>

        <form action="POST">
            <label for="profile-username">Username:</label>
            <input id="profile-username" type="text" name="username" value="" disabled>
        </form>
      
    </main>

</div>

</body>
</html>