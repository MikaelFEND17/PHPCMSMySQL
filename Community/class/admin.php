<?php

require_once 'user.php';

class Admin
{   
    private $database;
 
    function __construct($database_connection)
    {
      $this->database = $database_connection;
    }

    public function get_all_users()
    {
        try
        {
           $statement = $this->database->prepare("SELECT * FROM users");
           $statement->execute();
  
           $result = $statement->fetchAll(PDO::FETCH_CLASS, 'User');
  
           var_dump($result);
  
           foreach ($result as $newspost)
           {
            array_push($newsposts, $newspost);
           }
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}


?>