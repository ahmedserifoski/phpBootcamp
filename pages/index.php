<?php

require "../database.php";
require '../header.php';

 ?>


  <main>


    <section>
  <h2>Current QB's</h2>
  <ul>
    <?php $res = $pdo->query("SELECT * FROM `posts`"); ?>

      <?php foreach($res as $row): ?>
        <strong><li> <?php echo $row['title'] ?> </li></strong>
        <li> <?php echo $row['content'] ?> </li><hr>  <!-- Alternatively, you can use curly braces for variable interpolation -->
      <?php endforeach; ?>
  </ul>
</section>
  </main>

<?php  require "../footer.php"; ?>
