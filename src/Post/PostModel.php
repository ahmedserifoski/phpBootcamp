<?php

namespace App\Post;
use App\Core\AbstractModel;
// with the creation of this model we can give it a couple of variables (the same
// ones that we have in our database) and change the data from an array to an object
// The code that does that is in the AbstractRepository right before the return statement

//I am using this Modal to just make possible to reach data as objects or arrays
class PostModel extends AbstractModel {

  public $id;
  public $title;
  public $content;

}

?>
