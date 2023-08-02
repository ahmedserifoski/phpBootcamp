<?php
namespace App\Core;

use PDO;
use ArrayAccess;
abstract class AbstractRepository {



  function fetchAll($table, $model) {

    //Getting all the data from the table posts and altering it from array to
    //object the same as we are doing down for the fetchPost() function.
    $smtp = $this->pdo->query("SELECT * FROM `{$table}`");
    $posts = $smtp->fetchAll(PDO::FETCH_CLASS, "{$model}");
    return $posts;

  }

  function fetchSpecificPost($table, $id, $model){
    $smtp = $this->pdo->prepare("SELECT * FROM `{$table}` WHERE id = :id");
    $smtp->execute(['id' => $id]);
    $smtp->setFetchMode(PDO::FETCH_CLASS, "{$model}");
    $post = $smtp->fetch(PDO::FETCH_CLASS);

    //creating a new PostModel and asigning the values of the defined variables
    //in PostModel to the values of the array(from the database) so we can work
    // with objects instead of arrays
    //***There is a function for that and we are doing that with the function
    //above, instead of writting this code.***
        // $post = new PostModel();
        // $post->id = $postArray["id"];
        // $post->title = $postArray["title"];
        // $post->content = $postArray["content"];
    return $post;
  }
}

 ?>
