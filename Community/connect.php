<?php 
$dsn = "mysql:host=localhost;dbname=mg";
$username = "root";
$password = "toor";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try 
{
    $conn = new PDO($dsn, $username, $password, $options);
} 
catch (PDOException $e)
{
    echo "Error!".$e->getMessage();
}
?>