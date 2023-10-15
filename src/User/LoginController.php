<?php
namespace App\User;

use App\Core\AbstractController;

class LoginController extends AbstractController{

  public function __construct(UsersRepository $usersRepository) {
    $this->usersRepository = $usersRepository;
  }

  public function dashboard() {
    if(!empty($_SESSION["login"])) {
      echo "user logged in";
    } else {
      header("Location: login");
    }
  }

  public function logout() {
    unset($_SESSION["login"]);
    header("Location: login");
  }
 
  public function login() {
    $error = null;
    if(!empty($_POST["username"]) && !empty($_POST["password"])) {

      $username = $_POST["username"];
      $password = $_POST["password"];

      $user = $this->usersRepository->findUser($username);

      if(!empty($user)) {
        if(password_verify($password,$user->password)){
          $_SESSION["login"] = $user->username; 
          session_regenerate_id(true);
          header("Location: dashboard");
          return;
        } else {
          $error = "Wrong password";
        }
      } else {
        $error = "User does not exist.";
      }

      // var_dump($username);
      // var_dump($password);
    }
    // var_dump($_POST);
    $this->render("user/login", [
      "error" => $error
    ]);
  }

}


 ?>
