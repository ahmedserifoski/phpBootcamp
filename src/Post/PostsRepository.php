<?php


//this is the PostsRepository thata is in the namespace App\Post, there could be
//other PostsRepositories in other namespaces, that's why is't important to defined
//this specific PostsRepository
namespace App\Post;

//use the PDO object that isn't in any namespace
use PDO;
use ArrayAccess;
use App\Core\AbstractRepository;
/**
 * a class that deliveres data from databases are usually called Repositories
* and this is such a class
 */
class PostsRepository extends AbstractRepository
{


  public $pdo;

  //when I create an instance of this class I need to pass a PDO variable to it
  //this is called Construcotr Injection, This is an object (PostsRepository)
  //that needs a class (PDO, database connection in this case) injected into it
  //for it to run, otherwise it errors
  public function __construct(PDO $pdo) {
    $this->pdo = $pdo;
  }

  //functions defined in classes are suposed to have CamelCase
  //fetching all posts from databank and table posts
  function fetchPosts () {
    return $this->fetchAll("posts", "App\\Post\\PostModel");
  }

  //fetch individual post from table posts, there is also some prepare statements
  //against SQL injection
  function fetchPost($id) {
    return $this->fetchSpecificPost("posts", $id, "App\\Post\\PostModel");
  }
}
 ?>
