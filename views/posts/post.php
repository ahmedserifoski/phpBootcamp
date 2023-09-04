<?php
require __DIR__ . "/../layout/header.php";

// echo $post["title"];
// echo "<hr>";
// echo nl2br($post["content"]);
// echo "<hr>";
?>

<div class="card text-white bg-dark mb-3 border-0">
  <h1 class="card-header border-0 display-4"><?php echo $post["title"]; ?> </h1>
  <hr class="my-4">
  <p class="card-body"><?php echo nl2br($post["content"]); ?></p>
</div>

<div class="card text-white bg-dark mb-3 border-0">
  <h3 class="card-header display-6">Comments section:</h3>
  <ul class="list group">
    <?php foreach ($comments as $comment):?>
      <li class="card-body" >
          <?php echo$comment->content; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</div>

<?php
require __DIR__ . "/../layout/footer.php";
 ?>
