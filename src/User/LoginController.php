<?php
namespace App\User;

use App\Core\AbstractController;

class LoginController extends AbstractController{

  private $loginService;
  public function __construct(LoginService $loginService) {
    $this->loginService = $loginService;
  }

  public function dashboard() {
    $this->loginService->check();
    $this->render("user/dashboard", []);
  }

  public function logout() {
    $this->loginService->logoutAttempt();
    header("Location: login");
  }
 
    //make this if logged in to dispplay the user name top right corner in the header navigation
  public function login() {
    $loggedIn = null;
    $error = null;


    if(!empty($_POST["username"]) && !empty($_POST["password"])) {

      $username = $_POST["username"];
      $password = $_POST["password"];

      if($this->loginService->loginAttempt($username, $password)) {
          $loggedIn = true;
          header("Location: dashboard");
          return;
      } else {
        $error = "Username or password false";
      }
    }

    $this->render("user/login", [
      "error" => $error,
      "loggedIn" => $loggedIn,

    ]);
  }

  public function register() {



    $registered = "Alma is registered user";
    $this->render("user/register", [
      "registered" => $registered
    ]);
  }

}


 ?>
