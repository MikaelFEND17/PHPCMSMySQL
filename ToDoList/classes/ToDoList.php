<?php

require_once 'connect.php';

class ToDoList
{
    public $tasks = array();
    private $database;
    
    function __construct($database_connection)
    {
      $this->database = $database_connection;
    }

    public function get_tasks()
    {
        try
        {
            $statement = $this->database->prepare("SELECT * FROM todo");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
  
            foreach ($result as $task)
            {
                array_push($this->tasks, $task);
            }

            return $this->tasks;
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function add_task($task)
    {
        try
        {
            $statement = $this->database->prepare("INSERT INTO todo(task) 
                                        VALUES(:task)");
               
            $statement->bindparam(":task", $task);
            $statement->execute(); 

            return $statement; 
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function mark_as_finished($id)
    {
        try
        {
            $timestamp = date("Y-m-d H:i:s");
            $statement = $this->database->prepare("UPDATE todo SET done=1, datedone=now() WHERE id=:id");
            $statement->bindparam(":id", $id);
            $statement->execute();

            return $statement; 
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

}

class Task
{
    public $id;
    public $task;
    public $done;
    public $dateadded;
    public $datedone;
}

?>