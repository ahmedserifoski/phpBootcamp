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
    // var_dump($_SERVER);

    $this->render("posts/index", [
      "posts" => $posts
    ]);
  }

  //and this is the function that gets a specific post once we've clicked on it
  public function post(){
    $id = $_GET["id"];

    if(isset($_POST["content"])) {
      $content = $_POST["content"];
      $this->commentsRepository->insertPostComment($id, $content);
    }
    $post = $this->postsRepository->fetchSpecificPost($id);
    $comments = $this->commentsRepository->fetchAllById($id);
    $this->render("posts/post", [
      "post" => $post,
      "comments" => $comments
    ]);
  }

  // PostsController.php

public function addPost() {
  // Check if the form is submitted
  $posts = null;
  if (!empty($_POST["content"]) && !empty($_POST["title"])) {

      // Validate and process the form data
      $title = $_POST['title'];
      $content = $_POST['content'];
      // var_dump($title);
      // Additional validation if needed

      // Create a new post model
      $postModel = new PostModel();
      $postModel->title = $title;
      $postModel->content = $content;

      // Save the post to the database
      $this->postsRepository->addNewPost($postModel);
      $posts = $this->postsRepository->fetchAll();
      // Redirect to the post details page or any other page
      header("Location: index"); // Change this to the appropriate page
      exit;
  }

  // Display the form to add a post
  $this->render('posts/index', [
    'posts'=> $posts
  ]);
}


}


 ?>
