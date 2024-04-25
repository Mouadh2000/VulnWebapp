<?php
require_once 'database.php';
class UserModel extends Database {
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    

    public function setfirstName($firstname) {
        $this->firstname = $firstname;
    }

    public function setlastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    public function isEmailUsed($email){
        $query = "SELECT id FROM users WHERE email = ?";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(1, $email);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
    
        return $result !== false;
    }
    public function checkLogin($email, $password) {
        try{
            $hashedPassword = md5($password);
            $query = "SELECT id, email, password FROM users WHERE email = ? and password = ?";
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
    public function getUserById($userId){
        $query = "SELECT * FROM users WHERE id = ?";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(1, $userId);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
    public function getUserEmail($lastname){
        $query = "SELECT email FROM users WHERE lastname = ?";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(1, $lastname);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return ($result && isset($result['email'])) ? $result['email'] : null;
    }
    public function saveUser($firstname, $lastname, $email, $password) {
        try {
            $hashedPassword = md5($password);
            $query = "INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
            $statement = $this->connection->prepare($query);
            $statement->bindParam(1, $firstname);
            $statement->bindParam(2, $lastname);
            $statement->bindParam(3, $email);
            $statement->bindParam(4, $hashedPassword);

            $statement->execute();
        

        } catch (PDOException $e) {
            echo "User registration failed: " . $e->getMessage();
        }
    }
    public function getLoginAttempts($email) {
        try {
            $query = "SELECT login_attempts FROM users WHERE email = ?";
            $statement = $this->connection->prepare($query);
            $statement->bindParam(1, $email);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_ASSOC);

            return $result['login_attempts'] ?? 0;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return 0;
        }
    }
    public function getLastAttemptTime($email) {
        try {
            $query = "SELECT last_attempt_time FROM users WHERE email = ?";
            $statement = $this->connection->prepare($query);
            $statement->bindParam(1, $email);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_ASSOC);

            return $result['last_attempt_time'] ?? 0;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return 0;
        }
    }
    public function incrementLoginAttempts($email) {
        try {
            $query = "UPDATE users SET login_attempts = login_attempts + 1, last_attempt_time = ? WHERE email = ?";
            $statement = $this->connection->prepare($query);
            $lastAttemptTime = time();
            $statement->bindParam(1, $lastAttemptTime);
            $statement->bindParam(2, $email);
            $statement->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function resetLoginAttempts($email) {
        try {
            $query = "UPDATE users SET login_attempts = 0, last_attempt_time = 0 WHERE email = ?";
            $statement = $this->connection->prepare($query);
            $statement->bindParam(1, $email);
            $statement->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
}


