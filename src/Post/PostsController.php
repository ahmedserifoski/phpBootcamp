<?php
namespace App\Post;
use App\Core\AbstractController;

class PostsController extends AbstractController {

  //this PostsController is supposed to get the class PostsRepository when created
  //it's just a class like we can define all other classes to get  a class upon creation
  public function __construct(
      PostsRepository $postsRepository,
      CommentsRepository $commentsRepository
  ) {
    $this->postsRepository = $postsRepository;
    $this->commentsRepository = $commentsRepository;
  }

  //this function index() is representing the app logic that is needed for the
  //index page where we have all our posts
  public function index(){
    $posts = $this->postsRepository->fetchAll();
    $this->render("posts/index", [
      "posts" => $posts
    ]);
  }

  //and this is the function that gets a specific post once we've clicked on it
  public function post(){
    $id = $_GET["id"];
    $post = $this->postsRepository->fetchSpecificPost($id);
    $comments = $this->commentsRepository->fetchAllById($id);
    $this->render("posts/post", [
      "post" => $post,
      "comments" => $comments
    ]);
  }

}


 ?>
