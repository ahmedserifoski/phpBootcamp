<?php
//apparently this is a class that makes other classes so we don'w have to make
//them ourselves, that would be tedious since we would have to make the instance
//of the same class 100 times

namespace App\Core;

use App\Post\PostsRepository;

use PDO;

class Container{
  //watch blog 3, Contaier Abschnitt. Everything explained there
  public $recipes = [];
  public $instances = [];

  public function __construct(){
    $this->recipes = [
      "postsRepository" => function() {
        return new PostsRepository($this->make("pdo"));
      },
      "pdo" => function() {
        $pdo = new PDO(
          "mysql:host=localhost;dbname=blog;charset=utf8",
          "AhmedBlog",
          "Q8qlh7a[M4gK3.Fm"
        );
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
      }
    ];
}




  public function make($name){
    if(!empty($instances[$name])){
      return $this->instances[$name];
    }
    $this->instances[$name] = $this->recipes[$name]();

    return $this->instances[$name];
  }

  /*
  private $pdo;
  private $postsRepository;

  public function getPDO() {
    //with this if statement we check if the pdo objects allready exists,
    //if it exists, we just return the existing on, if not we make a new pdo
    //connection and return that. We are doing this to prevent the pdo and
    // PostsRepository objects to not get remade every time we call them
    if (!$this->pdo) {
      //this is your connection to the databank, it's called PDO and it's an object
      //to access databases
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
    //with this if statement we check if the postsRepository object allready exists,
    //if it exists, we just return the existing on, if not we make a new postsRepository
    //connection and return that. We are doing this to prevent the pdo and
    // PostsRepository objects to not get remade every time we call them

    if(!empty($this->postsRepository)) {
      return $this->postsRepository;
    }
    $pdo = $this->getPDO();
    $this->postsRepository = new PostsRepository($pdo);
    return $this->postsRepository;
  }
*/
}

 ?>
