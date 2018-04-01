<?php
include_once 'classes/user.php';

$user = new User($database_connection);

$user->logout();

header("location: index.php");
?>