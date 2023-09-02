<?php
//in this AbstractRepository we defined all the function we need for the code to
//work, then in the PostsRepository we just define the data that the
//AbstractRepository needs (getTableName() and getModelName), and we just use
//them because the PostsRepository extends the AbstractRepository
namespace App\Core;

//use the PDO and ArrayAccess object that isn't in any namespace
use PDO;
use ArrayAccess;

abstract class AbstractRepository {

  private $pdo;

  //when I create an instance of this class I need to pass a PDO variable to it
  //this is called Construcotr Injection, This is an object (PostsRepository)
  //that needs a class (PDO, database connection in this case) injected into it
  //for it to run, otherwise it errors
  public function __construct(PDO $pdo) {
    $this->pdo = $pdo;
  }

  abstract function getTableName();

  abstract function getModelName();

  //fetching all posts from databank and table posts
  function fetchAll() {
    //Getting all the data from the table posts and altering it from array to
    //object the same as we are doing down for the fetchPost() function.
    $table = $this->getTableName();
    $model = $this->getModelName();
    $smtp = $this->pdo->query("SELECT * FROM `{$table}`");
    $posts = $smtp->fetchAll(PDO::FETCH_CLASS, "{$model}");
    return $posts;

  }

    //fetch individual post from table posts, there is also some prepare statements
    //against SQL injection
  function fetchSpecificPost($id){
    $table = $this->getTableName();
    $model = $this->getModelName();
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
