<?php
/*
set_include_path ( "./classes" );
spl_autoload_register ();

//class is automatically loaded from ./classes/myclass.php
$object_instance = new MyClass ();
*/

define('HOST', 'localhost'); // Database host name ex. localhost
define('USER', 'root'); // Database user. ex. root ( if your on local server)
define('PASSWORD', 'root'); // user password  (if password is not set for user then keep it empty )
define('DATABASE', 'community'); // Database Database name
    
// PDO
$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE.';charset=utf8', USER, PASSWORD);

    // PDO
    /*$pdo = new PDO(
        'mysql:host='.HOST.';dbname='.DATABASE.'',
        USER, 
        PASSWORD, 
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        )
    );*/

if (isset($_POST['btn-login']))
{
    // Code
        
    $username = PDO::quote($_POST['username']);
    $password = PDO::quote($_POST['password']);
}

$params = array(':username' => $username, ':password' => $password);
$pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
$pdo->execute($params);

$query = "SELECT id FROM users";

// PDO
$result = $pdo->query($query);
$result->setFetchMode(PDO::FETCH_CLASS, 'User');

while ($user = $result->fetch()) 
{
    echo $user->info()."\n";
}


    //Session?

?>