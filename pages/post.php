<?php

//instead of requiring the database in every file we need, we just import it like
//this so it can only live in one place in a separate file
require "../database.php";
//instead of having the header in every file, we just import it from another file
//so it can only live inside that file
require '../elements/header.php';

 ?>
  <main>
<section>
  <h2>Detailed QB Page</h2>
  <?php
      //here we are using the function fetccPost() defined in the database file
      $post = fetchPost($_GET["id"]);
      //using data from $post variable
      echo $post["title"];
      echo "<hr>";
      // new line to brake line function makes sure we have the needed umbruche
      // between parameters
      echo nl2br($post["content"]);
  ?>
</section>
  </main>

<?php  require "../elements/footer.php"; ?>
