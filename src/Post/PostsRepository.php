<?php


//this is the PostsRepository that is in the namespace App\Post, there could be
//other PostsRepositories in other namespaces, that's why is't important to defined
//this specific PostsRepository
namespace App\Post;

use App\Core\AbstractRepository;
/**
 * a class that deliveres data from databases are usually called Repositories
* and this is such a class
 */
class PostsRepository extends AbstractRepository
{
  //functions defined in classes are suposed to have CamelCase
  function getTableName () {
    return "posts";
  }

  function getModelName() {
    return "App\\Post\\PostModel";
  }
}
 ?>
