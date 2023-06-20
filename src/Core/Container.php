<?php
//apparently this is a class that makes other classes so we don'w have to make
//them ourselves, that would be tedious since we would have to make the instance
//of the same class 100 times

namespace App\Core;

use App\Post\PostsRepository;

use PDO;

class Container{

  private $pdo;
  private $postsRepository;

  public function getPDO() {
    //this is your connection to the databank, it's called PDO and it's an object
    //to access databases
    if (!$this->pdo) {
      $this->pdo = new PDO(
        "mysql:host=localhost;dbname=blog;charset=utf8",
        "AhmedBlog",
        "Q8qlh7a[M4gK3.Fm"
      );
      $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    return $this->pdo;
  }


  public function getPostsRepository(){
    if(!empty($this->postsRepository)) {
      return $this->postsRepository;
    }
    $pdo = $this->getPDO();
    $this->postsRepository = new PostsRepository($pdo);
    return $this->postsRepository;
  }
}

 ?>
