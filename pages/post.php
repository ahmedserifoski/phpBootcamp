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
          //creating an instance of PostsRepository class and passing the $pdo
          //databasa connection to it
          $postsRepository = $container->getPostsRepository();
          $id = $_GET["id"];
          //here we are using the function fetchPost() defined in the
          //PostsRepository file
          $post = $postsRepository->fetchPost($id);
          //using data from $post variable
          echo $post["title"];
          echo "<hr>";
          echo nl2br($post["content"]);

          echo "<hr>";

          // new line to brake line function makes sure we have the needed umbruche
          // between parameters
      ?>
    </section>
  </main>

<?php  require "../elements/footer.php"; ?>
