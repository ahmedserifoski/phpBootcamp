<?php

//this is your connection to the databank, it's called PDO and it's an object
//to access databases
$pdo = new PDO(
  "mysql:host=localhost;dbname=blog;charset=utf8",
  "AhmedBlog",
  "Q8qlh7a[M4gK3.Fm"
  );
  //this has sth to do with charset utf8, different languages and stuff
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



?>
