<?php include __DIR__ . "/../layout/header.php"; ?>


<main>
  <section>
    <h2>Current QB's</h2>
    <ul>
        <?php foreach($posts as $post):?>
          <strong>
            <li>
              <a href="post.php?id=<?php echo $post->id ?>">
                <?php echo $post->title ?>
              </a>
            </li>
          </strong>
        <?php endforeach; ?>
    </ul>
  </section>
</main>

<?php include __DIR__ . "/../layout/footer.php"; ?>
