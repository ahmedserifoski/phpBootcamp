<?php
namespace App\User;

use App\Core\AbstractRepository;
use PDO;

class UsersRepository extends AbstractRepository {

  public function getModelName () {
    return "App\\User\\UserModel";
  }

  public function getTableName () {
    return "users";
  }

  public function findUser($username) {
      $table = $this->getTableName();
      $model = $this->getModelName();
      $smtp = $this->pdo->prepare("SELECT * FROM `$table` WHERE username = :username");
      $smtp->execute(['username' => $username]);
      $smtp->setFetchMode(PDO::FETCH_CLASS, $model);
      $user = $smtp->fetch(PDO::FETCH_CLASS);

      return $user;
  }
// UsersRepository.php addUser function
public function addUser($user) {
  $table = $this->getTableName();
  $model = $this->getModelName();
  $username = $user->username;
  $password = $user->password;

  $smtp = $this->pdo->prepare("INSERT INTO `$table` (username, password) VALUES (:username, :password)");
  $smtp->execute([
      'username' => $username, 
      'password' => $password  // Saving the hashed password directly
  ]);

  // Fetch the user after insertion
  // $userId = $this->pdo->lastInsertId();
  // $smtp = $this->pdo->prepare("SELECT * FROM `$table` WHERE id = :id");
  // $smtp->execute(['id' => $userId]);
  // $smtp->setFetchMode(PDO::FETCH_CLASS, $model);
  // $user = $smtp->fetch(PDO::FETCH_CLASS);

  // return $user;
}
}
 ?>
