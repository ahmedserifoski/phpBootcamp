<?php 

namespace App\User;
class LoginService {

    private $usersRepository;
    public function __construct(UsersRepository $usersRepository) {
        $this->usersRepository = $usersRepository;
    }
    public function loginAttempt($username, $password) {
        $user = $this->usersRepository->findUser($username);
    
        if (empty($user)) {
            return false;
        }
    
        if (password_verify($password, $user->password)) {
            $_SESSION["login"] = $user->username;
            session_regenerate_id(true);
            return true;
        } else {
            return false;
        }
    }

    // Inside LoginService.php

    public function registerUser($username, $password) {
        // Additional validation if needed
        $error = null;
    
        // Check if the username is available
        if (!$this->isUsernameAvailable($username)) {
            $error = "Username already taken";
            return $error;  // Username is not available
        }
    
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        // Create a new user in the database
        $user = new UserModel();  // Assuming you have a UserModel class
        $user->username = $username;
        $user->password = $hashedPassword;
    
        // Save the user to the database using the repository
        if($this->usersRepository->addUser($user)){
            $this->loginAttempt($username, $password);
        } else {
            $error = "Error during registration. Please try again.";
        }
    
        // You might want to perform additional actions here if needed
    
        return $error ? $error : true;  // Return error if there is one, otherwise, return true
    }
    

    // Additional function to check if a username is available
    private function isUsernameAvailable($username) {
        $existingUser = $this->usersRepository->findUser($username);
        return empty($existingUser);  // If empty, the username is available
    }

    

    public function check() {
        if(!empty($_SESSION["login"])) {
            return true;
          } else {
            header("Location: login");
            //instead of die() it would be better here to add an exception and then to redirect to login in the index.php routing file
            die();
          }
    }

    public function check2() {
        if(!empty($_SESSION["login"])) {
            return true;
          } else {
            return false;
            //instead of die() it would be better here to add an exception and then to redirect to login in the index.php routing file

          }
    }



    public function logoutAttempt() {
        unset($_SESSION["login"]);
    }
}
?>