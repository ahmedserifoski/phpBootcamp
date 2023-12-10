<?php include __DIR__ . "/../layout/header.php"; ?>

<!-- <?php var_dump($posts); ?> -->
<main>
  <section>
    <div class="card text-white bg-transparent mb-3 border-0">
        <h2 class="card-header border-0 pb-5 display-6">Current QB's</h2>
        <ul class="list group text-shadow">
          <?php foreach($posts as $post):?>
            <strong class="card text-white bg-transparent mb-3 border-0">
              <li class="list-group-item" >
                <!-- why href="post?id... ?? -> lesson 94 of PHP Bootcamp, Routing
                einbauen und warum -->
                <a class="h4 link-light text-decoration-none" href="post?id=<?php echo e($post->id) ?>">
                  <?php echo e($post->title); ?>
                </a>
              </li>
            </strong>
          <?php endforeach; ?>
        </ul>
    </div>
  </section>
</main>

<!-- <?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
 ?> -->

<?php include __DIR__ . "/../layout/footer.php"; ?>
