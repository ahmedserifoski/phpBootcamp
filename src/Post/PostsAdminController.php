<?php 
namespace App\Post;
use App\Core\AbstractController;
use App\User\LoginService;

class PostsAdminController extends AbstractController {
    
    public function __construct(
        PostsRepository $postsRepository,
        LoginService $loginService
        ) {
        $this->postsRepository = $postsRepository;
        $this->loginService = $loginService;
    }

    public function adminIndex() {
        $this->loginService->check();

        $allPosts = $this->postsRepository->fetchAll();
        $this->render("posts/admin/index", [
            "allPosts" => $allPosts
        ]);
    }

    public function editPost() {
        $id = $_GET["id"];
        $post = $this->postsRepository->fetchSpecificPost($id);

        // $postEdited = false;
        if(!empty($_POST["title"]) && !empty($_POST["content"])) {
            $post->title = $_POST["title"];
            $post->content = $_POST["content"];
            $this->postsRepository->update($post);
            // $postEdited = true; 
            header('Location: admin-index'); // Replace 'admin-index' with the actual route for the page with all blog posts
            exit(); // Stop further execution
        }   

       

        $this->render("posts/admin/edit", [
            "post" => $post,
            // "postEdited"=> $postEdited
        ]);


        
    }
}
?>