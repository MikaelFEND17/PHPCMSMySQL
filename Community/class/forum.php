<?php

require_once 'connect.php';

class Forum
{
    public $id;
    public $category_name;
    public $last_post_timestamp;
    public $last_post_username;
    public $last_post_id;
    public $last_post_title;
    public $thead_count;
    public $reply_count;

    public $threads = array();
    
    private $database;
 
    function __construct($database_connection)
    {
      $this->database = $database_connection;
    }

    public function get_forum_categories()
    {
        try
        {
            $statement = $this->database->prepare("SELECT * FROM forum_category");  
            $statement->execute(); 
            $result = $statement->fetchAll(PDO::FETCH_CLASS, 'ForumCategory');
   
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

    public function get_forum_threads_from_category()
    {

    }

    public function get_forum_thread()
    {

    }

    public function get_replies_for_thread($thread_id)
    {

    }

    public function create_thread($user_id, $forum_id, $thread_title, $thread_text)
    {
    }

    public function create_reply($user_id, $thread_id, $thread_text)
    {
    }

}

class ForumCategory
{
    public $id;
    public $name;
}

class ForumThread
{
    public $id;
    public $user_id;
    public $category_id;
    public $thread_title;
    public $thread_message;
    public $timestamp;

    public $replies = array();

}

class ForumReply
{
    public $id;
    public $user_id;
    public $thread_id;
    public $reply_message;
    public $timestamp;
}

?>