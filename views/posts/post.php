<?php
require __DIR__ . "/../layout/header.php";

// echo $post["title"];
// echo "<hr>";
// echo nl2br($post["content"]);
// echo "<hr>";
?>
<div  class="card text-white bg-transparent mb-3 border-0">
  <h1 class="card-header border-0 display-4"><?php echo e($post["title"]); ?> </h1>
  <hr class="my-4">
  <p class="card-body"><?php echo nl2br(e($post["content"])); ?></p>
</div>

<div class="card text-white bg-transparent mb-3 border-0">
  <h3 class="card-header display-6">Comments section:</h3>
  <ul class="list group">
    <?php foreach ($comments as $comment):?>
      <li class="card-body" >
        <?php //just sth against cyber attacks ?>
          <?php echo e($comment->content) ?>
      </li>
    <?php endforeach; ?>
  </ul>
</div>

<div class="container mt-5">

    <form action="post?id=<?php echo e($post->id) ?>" method="post">
        <div class="mb-3">
            <label for="content" class="form-label">Add Comment</label>
            <textarea class="form-control text-white bg-transparent" id="comment" name="content" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Comment</button>
    </form>
</div>

<!-- <?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
 ?> -->

<?php
require __DIR__ . "/../layout/footer.php";
 ?>
