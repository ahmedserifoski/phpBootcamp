<?php 
namespace App\Post;
use App\Core\AbstractController;

class PostsAdminController extends AbstractController {
    
    public function __construct(PostsRepository $postsRepository) {
        $this->postsRepository = $postsRepository;
    }

    public function adminIndex() {
        $allPosts = $this->postsRepository->fetchAll();
        $this->render("posts/admin/index", [
            "allPosts" => $allPosts
        ]);
    }

    public function edit() {
        $id = $_GET("id");
        $post = $this->postsRepository->fetchSpecificPost($id);

    }
?>