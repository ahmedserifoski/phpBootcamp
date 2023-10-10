<?php
namespace App\User;

use App\Core\AbstractController;

class LoginController extends AbstractController{

  public function __construct(UsersRepository $usersRepository) {
    $this->usersRepository = $usersRepository;
  }

  public function login() {
    if(!empty($_POST["username"]) && !empty($_POST["password"])) {

      $username = $_POST["username"];
      $password = $_POST["password"];

      var_dump($username);
      var_dump($password);
    }
    // var_dump($_POST);
    $this->render("user/login", []);
  }

}


 ?>
