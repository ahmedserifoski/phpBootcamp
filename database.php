<?php

//this is your connection to the databank, it's called PDO and it's an interface
//to access databases
$pdo = new PDO(
  "mysql:host=localhost;dbname=blog;charset=utf8",
  "root",
  ""
  );
  //this has sth to do with charset utf8, different languages and stuff
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

//fetching all posts from databank and table posts
function fetchPosts(){
  global $pdo;
  return $pdo->query("SELECT * FROM `posts`");
}

//fetch individual post from table posts, there is also some prepare statements
//against SQL injection
function fetchPost($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $post = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>
