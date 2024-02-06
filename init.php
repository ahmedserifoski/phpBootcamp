<?php
//when we use the __DIR__ variable we MUST not include the . before the / in
//the following pfad from the file
require __DIR__ . "/autoload.php";

function e($str) {
  return htmlentities($str, ENT_QUOTES, 'UTF-8');
}

$container = new App\Core\Container();

 ?>
