<?php
namespace App\Comment;
use App\Core\AbstractRepository;

class CommentsRepository extends AbstractRepository {

  function getTableName () {
    return "comments";
  }

  function getModelName () {
    return "App\\Comment\\CommentModel";
  }
}


 ?>
