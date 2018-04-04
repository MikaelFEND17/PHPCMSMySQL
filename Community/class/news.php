<?php

require_once 'connect.php';

class News
{   

    public $newsposts = array();
    public $comments = array();
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
         $statement = $this->database->prepare("SELECT * FROM news ORDER BY timestamp DESC");
         $statement->execute();

         $result = $statement->fetchAll(PDO::FETCH_CLASS, 'NewsPost');

         foreach ($result as $newspost)
         {
            array_push($this->newsposts, $newspost);
         }
      }
      catch (PDOException $e)
      {
          echo $e->getMessage();
      }
    }

    public function get_news()
    {
      return $this->newsposts;
  }

  public function get_news_by_id($id)
  {
    try
    {
        $statement = $this->database->prepare("SELECT * FROM news WHERE id=:id");
        $statement->bindparam(":id", $id);   
        $statement->setFetchMode(PDO::FETCH_CLASS, 'NewsPost');      
        $statement->execute(); 
        $result = $statement->fetch();
       
        if ($statement->rowCount() > 0)
        {
            return $result;
        }
        else
        {
           return NULL;
        }
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
  }

  public function get_comments_from_id($id)
  {
    try
        {
        $statement = $this->database->prepare("SELECT * FROM news_comments WHERE news_id=:id");
        $statement->bindparam(":id", $id);        
        $statement->execute(); 
        $result = $statement->fetchAll(PDO::FETCH_CLASS, 'NewsCommments');
   
        if ($statement->rowCount() > 0)
        {
            return $result;
        }
        else
        {
           return NULL;
        }
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
  }

  public function get_number_of_comments($id)
  {
    return 0;
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

class NewsCommments
{
    public $id;
    public $news_id;
    public $user_id;
    public $text;
    public $timestamp;
}

?>