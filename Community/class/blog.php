<?php

require_once 'connect.php';

class Blog
{
    public $id;
    public $title;

    private $database;
 
    function __construct($database_connection)
    {
      $this->database = $database_connection;
    }


    public function get_all_blog_posts()
    {
        try
        {
            $statement = $this->database->prepare("SELECT * FROM blog");  
            $statement->execute(); 
            $result = $statement->fetchAll(PDO::FETCH_CLASS, 'BlogPost');
   
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

    public function get_number_of_blog_posts($number)
    {
        
    }

    public function get_blog_post($id)
    {
        try
        {
            $statement = $this->database->prepare("SELECT * FROM blog WHERE id=:id");  
            $statement->bindparam(":id", $id);   
            $statement->setFetchMode(PDO::FETCH_CLASS, 'BlogPost');      
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

    public function get_blog_posts_by_user_id($id)
    {
        try
        {
            $statement = $this->database->prepare("SELECT * FROM blog_comments WHERE post_id=:id");
            $statement->bindparam(":id", $id);   
            $statement->setFetchMode(PDO::FETCH_CLASS, 'BlogCommments');      
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
        $statement = $this->database->prepare("SELECT * FROM blog_comments WHERE post_id=:id");
        $statement->bindparam(":id", $id);   
        $statement->setFetchMode(PDO::FETCH_CLASS, 'BlogCommments');      
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

  public function get_number_of_comments($id)
  {
    return 0;
  }

}

class BlogPost
{
    public $id;
    public $user_id;
    public $title;
    public $text;
    public $timestamp;    
}

class BlogCommments
{
    public $id;
    public $blog_id;
    public $user_id;
    public $text;
    public $timestamp;
}

?>