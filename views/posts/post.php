<?php
require __DIR__ . "/../layout/header.php";

// echo $post["title"];
// echo "<hr>";
// echo nl2br($post["content"]);
// echo "<hr>";
?>

<div class="jumbotron">
  <h1 class="display-4"><?php echo $post["title"]; ?> </h1>
  <hr class="my-4">
  <p><?php echo nl2br($post["content"]); ?></p>
</div>

<?php
require __DIR__ . "/../layout/footer.php";
 ?>
