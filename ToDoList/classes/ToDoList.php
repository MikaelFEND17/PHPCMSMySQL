<?php

class ToDoList
{
    private $database;
    
    function __construct($database_connection)
    {
      $this->database = $database_connection;
    }

    public function get_all_todos()
    {

    }

    public function add_todo()
    {

    }

    public function set_as_finished($id)
    {

    }
}

class Task
{
    public $id;
    public $task;
    public $completed;
}

?>