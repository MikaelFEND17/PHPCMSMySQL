<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    define('HOST', 'localhost'); 
    define('USER', 'root'); 
    define('PASSWORD', 'root'); 
    define('DATABASE', 'todo');
    
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,            
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );

    try 
    {
        $database_connection = new PDO('mysql:host='.HOST.';dbname='.DATABASE.';charset=utf8', USER, PASSWORD, $options);
    } 
    catch (PDOException $e)
    {
        echo "Error!".$e->getMessage(); 
    }
?>