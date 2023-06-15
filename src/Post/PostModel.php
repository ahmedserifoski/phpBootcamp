<?php

namespace App\Post;

// with the creation of this model we can give it a couple of variables (the same
// ones that we have in our database) and change the data from an array to an object
// The code that does that is in the PostsRepository right before the return statement
class PostModel {

  public $id;
  public $title;
  public $content;

}

?>
