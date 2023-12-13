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
    $loggedIn = $this->loginService->check2();

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

    //if stuff don't work return to 22.november commit. or 22 october i don't know

    $this->render("user/login", [
      "error" => $error,
      "loggedIn" => $loggedIn
    ]);
  }

}


 ?>
