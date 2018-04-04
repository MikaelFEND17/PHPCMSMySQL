<?php
session_start();

require_once 'connect.php';

class User
{
    public $id;
    public $username;
    public $email;
    public $rank;
    
    private $database;
 
    function __construct($database_connection)
    {
      $this->database = $database_connection;
    }
    
    
    public function login($username, $email, $password)
    {
        try
        {
           $statement = $this->database->prepare("SELECT * FROM users WHERE username=:username OR email=:email LIMIT 1");
           $statement->execute(array(':username'=>$username, ':email'=>$email));
           $userRow = $statement->fetch(PDO::FETCH_ASSOC);
           if ($statement->rowCount() > 0)
           {
              if (password_verify($password, $userRow['password']))
              {
                 $_SESSION['user_session'] = $userRow['id'];
                 return true;
              }
              else
              {
                 return false;
              }
           }
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }

    public function register($username, $email, $password)
    {
        try
        {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
            $statement = $this->database->prepare("INSERT INTO users(username, email, password) 
                                        VALUES(:username, :email, :password)");
               
            $statement->bindparam(":username", $username);
            $statement->bindparam(":email", $email);
            $statement->bindparam(":password", $hashed_password);            
            $statement->execute(); 
    
            return $statement; 
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }    
    }

    public function is_loggedin()
    {
        if (isset($_SESSION['user_session']))
        {
           return true;
        }
    }

    public function get_username_by_id($id)
    {
        try
        {
           $statement = $this->database->prepare("SELECT username FROM users WHERE id=:id");
           $statement->bindparam(":id", $id);        
           $statement->execute(); 
           $userRow = $statement->fetch(PDO::FETCH_ASSOC);
           
           //echo var_dump($userRow);
           if ($statement->rowCount() > 0)
           {
                return $userRow['username'];
           }
           else
           {
               return "Unknown User";
           }
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function create_user_from_id($id)
    {
        try
        {
           $statement = $this->database->prepare("SELECT * FROM users WHERE id=:id");    
           $statement->bindparam(":id", $id);         
           $statement->execute(); 
           $userRow = $statement->fetch(PDO::FETCH_ASSOC);   
           
           if ($statement->rowCount() > 0)
           {
                $this->id = $userRow['id'];
                $this->username = $userRow['username'];
                $this->email = $userRow['email'];
           }
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

}

class UserInformation
{
    function __construct()
    {
    }
}

$user_ranks = array("Administrator", "Member");

?>