<?php


//this is the PostsRepository thata is in the namespace App\Post, there could be
//other PostsRepositories in other namespaces, that's why is't important to defined
//this specific PostsRepository
namespace App\Post;

//use the PDO and ArrayAccess object that isn't in any namespace
use PDO;
use ArrayAccess;
use App\Core\AbstractRepository;
/**
 * a class that deliveres data from databases are usually called Repositories
* and this is such a class
 */
class PostsRepository extends AbstractRepository
{
  //functions defined in classes are suposed to have CamelCase
  //fetching all posts from databank and table posts
  function getTableName () {
    return "posts";
  }

  //fetch individual post from table posts, there is also some prepare statements
  //against SQL injection
  function getModelName() {
    return "App\\Post\\PostModel";
  }
}
 ?>
