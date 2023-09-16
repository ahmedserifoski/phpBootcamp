<?php
namespace App\User;

use App\Core\AbstractRepository;
use PDO;

class UsersRepository extends AbstractRepository {

  function getTableName () {
    return "users";
  }

  function getModelName () {
    return "App\\User\\UserModel";
  }

  public function findUser($username) {
      $table = $this->getTableName();
      $model = $this->getModelName();
      $smtp = $this->pdo->prepare("SELECT * FROM `{$table}` WHERE username = :username");
      $smtp->execute(['username' => $username]);
      $smtp->setFetchMode(PDO::FETCH_CLASS, "{$model}");
      $user = $smtp->fetch(PDO::FETCH_CLASS);

      return $user;
  }

}
 ?>
