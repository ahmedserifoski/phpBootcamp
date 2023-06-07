<?php

require "../database.php";
require '../elements/header.php';

 ?>


  <main>


    <section>
  <h2>Current QB's</h2>
  <ul>
    <?php $res = fetchPosts(); ?>

      <?php foreach($res as $row): ?>
        <strong>
          <li>
            <a href="post.php?title=<?php echo $row["title"] ?>">
              <?php echo $row['title'] ?>
            </a>
           </li>
        </strong>

      <?php endforeach; ?>
  </ul>
</section>
  </main>

<?php  require "../elements/footer.php"; ?>
