<?php
namespace App\Core;

abstract class AbstractController {

  //the following function is requiring the needed view and makes shure
  //that we only pass on the needed data (posts or post, but not both since
  //that would cause an error) - with the exract function
  protected function render($name, $params) {
    extract($params);
    require __DIR__ . "/../../views/{$name}.php";
  }

}


 ?>
