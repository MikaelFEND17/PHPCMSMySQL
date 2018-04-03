<?php
include_once 'classes/ToDoList.php';

$todo_list = new ToDoList($database_connection);

$todo_list->load_all_todos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo List</title>
</head>
<body>

    <div>
        <header>
            To Do List PHP
        </header>

        <main>


            <div id="headers">
                <div id="todo-header">To Do</div>
                <div id="todo-header">Done</div>
            </div>
            <div id="items">

            <?php

            $todos = $todo_list->get
            ?>

                <div id="done-items"></div>
                <div id="done-items"></div>

            <?php 

            ?>
            </div>


        </main>
    </div>
    
</body>
</html>