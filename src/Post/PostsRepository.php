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

  public function update(PostModel $postModel) {
    $table = $this->getTableName();
    $stmt = $this->pdo->prepare("UPDATE `{$table}` SET `title` = :title, `content` = :content WHERE `id` = :id");
    $stmt->execute([
      "id"=> $postModel->id,
      "title"=> $postModel->title,
      "content"=> $postModel->content
    ]);
  }

  public function addNewPost(PostModel $postModel) {
    $table = $this->getTableName();
    $stmt = $this->pdo->prepare("UPDATE `{$table}` SET `title` = :title, `content` = :content");
    $stmt->execute([
      "title"=> $postModel->title,
      "content"=> $postModel->content
    ]);
  }
}
 ?>
