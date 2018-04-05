<?php
include_once 'classes/ToDoList.php';

$todo_list = new ToDoList($database_connection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo List</title>
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
    
    <script src="ToDoList.js" defer></script>
</head>
<body>

    <div id="wrapper">
        <header>
            <h1>To Do List PHP</h1>
        </header>

        <main>

        <?php

        $task_list = $todo_list->get_tasks();

        foreach ($task_list as $task)
        {
        ?>
            
            <div class="todo-item">
                <div class="todo-task">
                    <?php
                        if ($task->done)
                        {
                        ?>
                            <s><?=$task->task?></s>
                        <?php
                        }
                        else
                        {
                        ?>
                            <?=$task->task?>
                        <?php
                        }
                    ?>
                </div>
                <div class="todo-done">
                    <?php
                    if (!$task->done)
                    {
                    ?>
                        <a href="done.php?id=<?=$task->id?>">Done</a>
                    <?php
                    }
                    ?>
                </div>
                <div class="todo-showmore"><a href="javascript:void(0)" class="show-more">Show More</a></div>
                <div class="hidden">
                        <strong>Date Added:</strong> <?=$task->dateadded?>
                        <strong>Date Done:</strong> <?=$task->datedone?>
                </div>
            </div>
        <?php 
        }

        if (isset($_GET['success']))
        {
        ?>  
            <br>
            <div>
                <strong>Task sucessfully added.</strong>
            </div>
        <?php
        }
        else if (isset($_GET['empty']))
        {
        ?>
            <br>
            <div>
                <strong class="red">Task can't be empty</strong>
            </div>
        <?php
        }
        ?>
        

            <br>
            <div id="todo-add">
                <form id="form-add" action="add.php" method="POST">
                    <input type="text" name="task">
                    <button type="submit" form="form-add">Add</button>
                </form>
            </div>

        </main>
    </div>
    
</body>
</html>