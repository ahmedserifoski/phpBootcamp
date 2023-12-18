 <?php include __DIR__ . "/../../layout/header.php"; ?>

 <main>

  <section>
    <div class="card text-white bg-transparent mb-3 border-0">
        <h2 class="card-header border-0 display-6 text-center">Edit Posts</h2>
        <p style="font-size: 22px;" class="m-3 mb-5">This page is so awesome, the moment you become a user you also become an admin 😎 You can edit posts by clicking on them 🔥</p>
        <ul class="list group">
          <?php foreach($allPosts as $post):?>
            <strong class="card text-white bg-transparent mb-3 border-0">
              <li class="list-group-item" >
                <!-- why href="post?id... ?? -> lesson 94 of PHP Bootcamp, Routing
                einbauen und warum -->
                <a class="h4 link-light text-decoration-none" href="admin-post-edit?id=<?php echo e($post->id) ?>">
                  <?php echo e($post->title); ?>
                </a>
              </li>
            </strong>
          <?php endforeach; ?>
        </ul>
    </div>
  </section>
</main>

 <?php include __DIR__ . "/../../layout/footer.php"; ?>
