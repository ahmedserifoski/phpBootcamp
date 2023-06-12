<?php
namespace App\Post;

/**
 * a class that deliveres data from databases are usually called Repositories
* and this is such a class
 */
class PostsRepository
{

  //fetch individual post from table posts, there is also some prepare statements
  //against SQL injection
  function fetchPost($id) {
      global $pdo;
      $smtp = $pdo->prepare("SELECT * FROM `posts` WHERE id = :id");

      $smtp->execute(['id' => $id]);
      return $smtp->fetch();
  }

  //functions defined in classes are suposed to have CamelCase
  //fetching all posts from databank and table posts
  function fetchPosts(){
    global $pdo;
    return $pdo->query("SELECT * FROM `posts`");
  }


}



 ?>
