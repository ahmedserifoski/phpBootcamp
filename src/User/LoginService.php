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