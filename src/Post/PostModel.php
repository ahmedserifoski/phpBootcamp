<?php

namespace App\Post;

// with the creation of this model we can give it a couple of variables (the same
// ones that we have in our database) and change the data from an array to an object
// The code that does that is in the PostsRepository right before the return statement

//I am using this Modal to just make possible to reach data as objects or arrays
class PostModel implements \ArrayAccess {



  public $id;
  public $title;
  public $content;

    //implementing ArrayAccess so that we can access our data as arrays
    //(in addition to accessing it as objects already)
    public function offsetExists(mixed $offset): bool
    {
      return isset($this->$offset);
    }

    public function offsetGet(mixed $offset): mixed
    {
      return $this->$offset;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->$offset = $value;
    }

    public function offsetUnset(mixed $offset): void
    {
      unset($this->$offset);
    }
}

?>
