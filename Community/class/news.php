<?php

require_once 'connect.php';

class News
{
    public $id;
    public $title;
    public $news_text;
    public $user_id;
    public $date_posted;
    
    private $database;
 
    function __construct($database_connection)
    {
      $this->database = $database_connection;
    }

    public function create_newspost($userid, $title, $text)
    {

    }
}

?>