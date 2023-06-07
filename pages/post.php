<?php

require "../database.php";
require '../elements/header.php';

 ?>
  <main>
<section>
  <h2>One QB Page</h2>
  <?php
      var_dump($_GET["title"]);
      // $post = fetchPost($_GET["title"]);
      // echo ($post["title"]);
  ?>
  <pre>
    <?php //var_dump($_GET["title"]); ?>
  </pre>
</section>
  </main>

<?php  require "../elements/footer.php"; ?>
