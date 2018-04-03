<?php

class ToDoList
{
    public $tasks = array();
    private $database;
    
    function __construct($database_connection)
    {
      $this->database = $database_connection;
    }

    public function load_all_todos()
    {

    }

    public function add_todo()
    {

    }

    public function set_as_finished($id)
    {

    }

    public function get_tasks()
    {
        return $tasks;
    }
}

class Task
{
    public $id;
    public $task;
    public $completed;
}

?>