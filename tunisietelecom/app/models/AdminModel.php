<?php
require_once 'database.php';

class AdminModel extends Database{
    
    public function checkLogin($email, $password) {
        try{
            $hashedPassword = md5($password);
            $query = "SELECT id, email, password FROM admin WHERE email = ? and password = ?";
            $statement = $this->connection->prepare($query);
            $statement->bindParam(1, $email);
            $statement->bindParam(2, $hashedPassword);
            $statement->execute();
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            if ($user !== false) {
                return $user['id']; 
            }
            return false;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
   
}

