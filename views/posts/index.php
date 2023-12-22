<?php include __DIR__ . "/../layout/header.php"; ?>

<!-- <?php var_dump($posts); ?> -->
<main>
  <section>
    <div class="card text-white bg-transparent mx-3 mb-3 border-0">
        <!-- <h2 class="mb-3 card-header border-0 display-6">qb's</h2> -->
        <p class="mt-4 mb-5" style="font-size: 22px;"> This is a blog where you can write anything you want. A bit dangerous in 2024 but it is what it is. Write sth. about NFL 🙄 🏈</p>
        <ul class="list group text-shadow">
          <?php foreach($posts as $post):?>
            <strong class="card text-white bg-transparent mb-3 border-0">
              <li class="list-group-item" >
                <a class="h4 link-light text-decoration-none" href="post?id=<?php echo e($post->id) ?>">
                  <?php echo e($post->title); ?>
                </a>
              </li>
            </strong>
          <?php endforeach; ?>
          
        </ul>
    </div>
  </section>
  <section>
    <div class="card text-white bg-transparent mb-3 border-0">
      <h2 class="mb-3 card-header border-0 display-6">Add New Blog Post</h2>
      <form method="post" action="addPost">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control bg-transparent text-white" id="title" name="title" required>
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea class="form-control bg-transparent text-white" id="content" name="content" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Post</button>
      </form>
    </div>
  </section>
</main>

<!-- <?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
 ?> -->

<?php include __DIR__ . "/../layout/footer.php"; ?>
