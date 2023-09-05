<?php
namespace App\Post;
use App\Core\AbstractRepository;
use PDO;

class CommentsRepository extends AbstractRepository {

  function getTableName () {
    return "comments";
  }

  function getModelName () {
    return "App\\Post\\CommentModel";
  }

  function fetchAllById($id) {

    $table = $this->getTableName();
    $model = $this->getModelName();

    $smtp = $this->pdo->prepare("SELECT * FROM `{$table}` WHERE post_id = :id");
    $smtp->execute(['id' => $id]);
    $smtp->setFetchMode(PDO::FETCH_CLASS, "{$model}");
    $comments = $smtp->fetch(PDO::FETCH_CLASS);

    return $comments;
  }

}



 ?>
