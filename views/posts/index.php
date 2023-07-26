<?php include __DIR__ . "/../layout/header.php"; ?>


<main>
  <section>
    <h2>Current QB's</h2>
    <ul>
        <?php foreach($posts as $post):?>
          <strong>
            <li>
              <!-- why href="post?id... ?? -> lesson 94 of PHP Bootcamp, Routing
                  einbauen und warum -->
              <a href="post?id=<?php echo $post->id ?>">
                <?php echo $post->title; ?>
              </a>
            </li>
          </strong>
        <?php endforeach; ?>
    </ul>
  </section>
</main>
<!--
<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
 ?> -->

<?php include __DIR__ . "/../layout/footer.php"; ?>
