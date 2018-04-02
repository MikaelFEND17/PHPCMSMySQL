<?php

require_once 'connect.php';

class Blog
{
    
    private $database;
 
    function __construct($database_connection)
    {
      $this->database = $database_connection;
    }

    public $id;
    public $title;

}

class BlogPost
{
    public $id;
    public $user_id;
    public $title;
    public $text;
    public $timestamp;    
    
    function __construct($database_connection)
    {
      $this->database = $database_connection;
    }
}

?>