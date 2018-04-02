<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'classes/user.php';

$user = new User($database_connection);

if ($user->is_loggedin())
{		
    $user->logout();
    header("location: index.php?loggedout");
}

header("location: index.php");
?>