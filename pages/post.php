<?php

//instead of requiring the autoload and database in every file we need, we just import it like
//this so it can only live in one place in a separate file
// include "../autoload.php";
// include "../database.php";
include "../init.php";

//instead of having the header in every file, we just import it from another file
//so it can only live inside that file
require "../elements/header.php";

?>
  <main>
    <section>
      <h2>Detailed QB Page</h2>
      <?php
          //here we are using the function fetchPost() defined in the database file
          $postsRepository = new App\Post\PostsRepository();
          $id = $_GET["id"];
          $post = $postsRepository->fetchPost($id);
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
