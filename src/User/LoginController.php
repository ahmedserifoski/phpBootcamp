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
    var_dump($_SERVER);
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
    var_dump($_POST);

    $error = null;
    $loggedIn = $this->loginService->check2();

    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!empty($_POST["username"]) && !empty($_POST["password"])) {

        // Handle form submission
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Additional validation if needed

        // Attempt to register the user
        if ($this->loginService->registerUser($username, $password)) {
            // Registration successful, you might want to redirect to a success page
            header("Location: dashboard");
            return;
        } else {
            $error = "Error during registration. Please try again.";
        }
    }

    $this->render("user/register", [
        "error" => $error,
        "loggedIn" => $loggedIn
    ]);
  }
}

 ?>
