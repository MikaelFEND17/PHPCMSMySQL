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
    public $blog_id;
    public $title;
    public $post_text;
    public $date;    
    
    function __construct($database_connection)
    {
      $this->database = $database_connection;
    }
}

?>