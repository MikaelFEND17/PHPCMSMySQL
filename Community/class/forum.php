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
    
    private $database;
 
    function __construct($database_connection)
    {
      $this->database = $database_connection;
    }

    public $threads = array();

    public function show_forum_categories()
    {

    }

    public function show_forum_category()
    {

    }

    public function show_forum_thread()
    {

    }

    public function get_replies_for_thread($thread_id)
    {

    }

    public function create_thread($user_id, $forum_id, $thread_title, $thread_text)
    {
        $timestamp;
    }

    public function create_reply($user_id, $thread_id, $thread_text)
    {
        $timestamp;


    }

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