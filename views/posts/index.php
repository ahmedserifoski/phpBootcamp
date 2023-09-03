<?php include __DIR__ . "/../layout/header.php"; ?>


<main>
  <section>
    <div class="card text-white bg-dark mb-3 border-0">
        <h2 class="card-header border-0 display-4">Current QB's</h2>
        <ul class="list group">
          <?php foreach($posts as $post):?>
            <strong class="card text-white bg-dark mb-3 border-0">
              <li class="list-group-item" >
                <!-- why href="post?id... ?? -> lesson 94 of PHP Bootcamp, Routing
                einbauen und warum -->
                <a class="h4 link-light text-decoration-none" href="post?id=<?php echo $post->id ?>">
                  <?php echo $post->title; ?>
                </a>
              </li>
            </strong>
          <?php endforeach; ?>
        </ul>
    </div>
  </section>
</main>
<!--
<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
 ?> -->

<?php include __DIR__ . "/../layout/footer.php"; ?>
