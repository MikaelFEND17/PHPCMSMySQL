<?php
include_once 'classes/ToDoList.php';

$todo_list = new ToDoList($database_connection);

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
    $id = $_GET['id'];
    $todo_list->mark_as_finished($id);
}

header("location: index.php");
?>