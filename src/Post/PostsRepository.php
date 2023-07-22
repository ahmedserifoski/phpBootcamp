<?php


//this is the PostsRepository thata is in the namespace App\Post, there could be
//other PostsRepositories in other namespaces, that's why is't important to defined
//this specific PostsRepository
namespace App\Post;

//use the PDO object that isn't in any namespace
use PDO;
use ArrayAccess;
/**
 * a class that deliveres data from databases are usually called Repositories
* and this is such a class
 */
class PostsRepository
{


  private $pdo;

  //when I create an instance of this class I need to pass a PDO variable to it
  //this is called Construcotr Injection, This is an object (PostsRepository)
  //that needs a class (PDO, database connection in this case) injected into it
  //for it to run, otherwise it errors
  public function __construct(PDO $pdo) {
    $this->pdo = $pdo;
  }

  //functions defined in classes are suposed to have CamelCase
  //fetching all posts from databank and table posts
  function fetchPosts(){
    //Getting all the data from the table posts and altering it from array to
    //object the same as we are doing down for the fetchPost() function.
    $smtp = $this->pdo->query("SELECT * FROM `posts`");
    $posts = $smtp->fetchAll(PDO::FETCH_CLASS, "App\\Post\\PostModel");
    return $posts;
  }

  //fetch individual post from table posts, there is also some prepare statements
  //against SQL injection
  function fetchPost($id) {
      $smtp = $this->pdo->prepare("SELECT * FROM `posts` WHERE id = :id");
      $smtp->execute(['id' => $id]);
      $smtp->setFetchMode(PDO::FETCH_CLASS, "App\\Post\\PostModel");
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
