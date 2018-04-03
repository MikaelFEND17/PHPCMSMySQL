<?php
session_start();

include_once 'class/user.php';

$user = new User($database_connection);

if (isset($_POST['btn-register']))
{ 
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $email_repeat = trim($_POST['email-repeat']);
    $password = trim($_POST['password']); 
    $password_repeat = trim($_POST['password-repeat']); 

    $error = array();

    if ($username == "")
    {
        array_push($error, "You must enter a username.");
    }
    else if (strlen($username) < 6)
    {
        array_push($error, "Username must be at least 6 characters.");
    }

    if ($email != "")
    {
        if (!filter_var($umail, FILTER_VALIDATE_EMAIL)) 
        {
            array_push($error, "Please enter a valid e-mail address!");
        }
        if ($email !=  $email_repeat)
        {
            array_push($error, "E-mails didn't match.");
        }
    }
    else
    {
        array_push($error, "You must enter an e-mail.");
    }

    if ($password != "")
    {
        if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,50}$/', $password))
        {
            array_push($error, "Password did not meet security requirements");
        }
        if ($password !=  $password_repeat)
        {
            array_push($error, "Passwords didn't match.");
        }
    }
    else
    {
        array_push($error, "You must enter a password.");
    }

    if (isset($error))
    {
        try
        {
            $statement = $database_connection->prepare("SELECT username, email FROM users WHERE username=:username OR email=:email");
            $statement->execute(array(':username'=>$username, ':email'=>$email));
            $row = $statement->fetch(PDO::FETCH_ASSOC);
      
            if ($row['name'] == $username) 
            {
                array_push($error, "Username already taken.");
            }
           else if ($row['email'] == $email) 
           {
                array_push($error, "That e-mail is already registered.");
           }
           else
           {
                if ($user->register($username, $email, $password)) 
                {
                    header("Location: register.php?success");
                }
           }
       }
       catch(PDOException $e)
       {
          echo $e->getMessage();
       }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Community - Register</title>
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
                Profile
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

        <ul>

    <?php
    if (isset($error))
    {
        foreach ($error as $error)
        {
            ?>
            <li><?=$error;?></li>
            <?php
        }
        ?>
        </ul>
        <?php
    }
    else if (isset($_GET['success']))
    {
        ?>
        Registration complete, login <a href='index.php'>here</a>.
        <?php
    }
    else
    {
    ?>

        <form id="form-register" method="post">
            <label for="input-username"><strong>Username:</strong> </label>
            <br>
            <input id="input-username" type="text" name="username" value="" placeholder="Username">
            <br>
            <label for="input-email"><strong>E-mail:</strong> </label>
            <br>
            <input id="input-email" type="text" name="email" value="" placeholder="E-mail">
            <br>            
            <label for="input-email-repeat"><strong>E-mail again:</strong> </label>
            <br>
            <input id="input-email-repeat" type="text" name="email-repeat" value="" placeholder="E-mail">
            <br>
            <label for="input-password"><strong>Password:</strong> </label>
            <br>
            <input id="input-password" type="password" name="password" value="" placeholder="Password">
            <br>            
            <label for="input-password-repeat"><strong>Password again:</strong> </label>
            <br>
            <input id="input-password-repeat" type="password" name="password-repeat" value="" placeholder="Password">
            <br>
            <br>
            <button type="submit" form="form-register" id="btn-register" name="btn-register">Register</button>
        </form>

    <?php        
    }
    ?>
      
    </main>

</div>
    
</body>
</html>