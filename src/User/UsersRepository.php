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

}
 ?>
