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

  function insertPostComment($postId, $content) {
    $table = $this->getTableName();
    $smtp = $this->pdo->prepare("INSERT INTO `$table` (`content`, `post_id`) VALUES (:content, :postId)");
    $smtp->execute([
      'content' => $content,
      'postId' => $postId
    ]);

  }

  function fetchAllById($id) {

    $table = $this->getTableName();
    $model = $this->getModelName();

    $smtp = $this->pdo->prepare("SELECT * FROM `{$table}` WHERE post_id = :id");
    $smtp->execute(['id' => $id]);
    $comments = $smtp->fetchAll(PDO::FETCH_CLASS, "{$model}");
    return $comments;
  }

}



 ?>
