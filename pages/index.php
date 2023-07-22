<?php
  //requiring the autoload and database file through init.php
  require "../init.php";

  //getting the header, instead of having it in all files
  // require '../elements/header.php';

  $postsController = $container->make("postsController");
  $postsController->index();


?>
<!-- adding the footer vie require, instead of having it here, more visable -->
<!-- <?php  require "../elements/footer.php"; ?> -->
