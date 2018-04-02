<?php

require_once 'connect.php';

class News
{   

    public $newsposts = array();
    private $database;
 
    function __construct($database_connection)
    {
      $this->database = $database_connection;
    }

    public function create_newspost($userid, $title, $text)
    {

    }

    public function load_all_news()
    {
      try
      {
         $statement = $this->database->prepare("SELECT * FROM news");
         $statement->execute();

         $result = $statement->fetchAll(PDO::FETCH_CLASS, 'NewsPost');

         var_dump($result);

         foreach ($result as $newspost)
         {
          array_push($newsposts, $newspost);
         }
      }
      catch (PDOException $e)
      {
          echo $e->getMessage();
      }
    }

    public function get_news()
    {
      return $newsposts;
  }
}

class NewsPost
{
  public $id;
  public $title;
  public $text;
  public $user_id;
  public $timestamp;
}

?>