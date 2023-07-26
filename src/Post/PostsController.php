<?php
namespace App\Post;
use App\Core\AbstractController;

class PostsController extends AbstractController {

  //this PostsController is supposed to get the class PostsRepository when created
  //it's just a class like we can define all other classes to get  a class upon creation
  public function __construct(PostsRepository $postsRepository) {
    $this->postsRepository = $postsRepository;
  }

  //this function index() is representing the app logic that is needed for the
  //index page where we have all our posts
  public function index(){
    $posts = $this->postsRepository->fetchPosts();
    $this->render("posts/index", [
      "posts" => $posts
    ]);
  }

  public function post(){
    $id = $_GET["id"];
    $post = $this->postsRepository->fetchPost($id);
    $this->render("posts/post", [
      "post" => $post
    ]);
  }

}


 ?>
