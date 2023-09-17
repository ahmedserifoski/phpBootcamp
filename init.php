<?php
//this file is not used at the moment, for some reason I can't include init.php
//inside index.php and post.php. WEIRD !!!

//when we use the __DIR__ variable we MUST not include the . before the / in
//the following pfad from the file
require __DIR__ . "/autoload.php";

function e($str) {
  return htmlentities($str, ENT_QUOTES, 'UTF-8');
}

$container = new App\Core\Container();


 ?>
