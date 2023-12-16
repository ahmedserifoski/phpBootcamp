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
    // var_dump($_SERVER);
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

  public function register() {
    $error = null;
    $loggedIn = $this->loginService->check2();

    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Attempt to register the user
        $registrationResult = $this->loginService->registerUser($username, $password);

        if ($registrationResult === true) {
            // Registration successful, you might want to redirect to a success page
            header("Location: dashboard");
            return;
        } else {
            $error = $registrationResult; // Assign the error message
        }
    }

    $this->render("user/register", [
        "error" => $error,
        "loggedIn" => $loggedIn
    ]);
}

}

 ?>
