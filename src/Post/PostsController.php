<?php
namespace App\Post;

class PostsController {

  //this PostsController is supposed to get the class PostsRepository when created
  //it's just a class like we can define all other classes to get  a class upon creation
  public function __construct(PostsRepository $postsRepository) {
    $this->postsRepository = $postsRepository;
  }

  //this function index() is representing the app logic that is needed for the
  //index page where we have all our posts
  public function index(){
    $posts = $this->postsRepository->fetchPosts();
    require __DIR__ . "/../../views/posts/index.php";
  }

  public function post(){
    $id = $_GET["id"];
    $post = $this->postsRepository->fetchPost($id);
    require __DIR__ . "/../../views/posts/post.php";
  }

}


 ?>
