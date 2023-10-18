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
 
  public function login() {
    $error = null;
    if(!empty($_POST["username"]) && !empty($_POST["password"])) {

      $username = $_POST["username"];
      $password = $_POST["password"];

      if($this->loginService->loginAttempt($username, $password)) {
          header("Location: dashboard");
          return;
      } else {
        $error = "Username or password false";
      }
    }

    $this->render("user/login", [
      "error" => $error
    ]);
  }

}


 ?>
