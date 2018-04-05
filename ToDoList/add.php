<?php
include_once 'classes/ToDoList.php';

$todo_list = new ToDoList($database_connection);

$task = trim($_POST['task']);

if ($task == "")
{
    header("location: index.php?empty");
}
else
{
    $todo_list->add_task($task);
    header("location: index.php?success");
}

?>