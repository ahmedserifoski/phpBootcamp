<?php

//instead of requiring the autoload and database (which are in the init.php)
//in every file we need, we just import it like
//this so it can only live in one place in a separate file
include "../init.php";

?>
  <main>
    <section>
      <h2>Detailed QB Page</h2>
      <?php
          //creating an instance of postsController class
          $postsController = $container->make("postsController");
          //here we are using the function fetchPost() defined in the
          //PostsRepository file

          $postsController->post();

      ?>
    </section>
  </main>
