<?php

$pdo = new PDO(
  "mysql:host=localhost;
  dbname=blog",
  "root",
  ""
  );

function fetchPosts(){
  global $pdo;
  return $pdo->query("SELECT * FROM `posts`");
}

function fetchPost($title) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE title = :title");
    $stmt->bindParam(':title', $title);
    $stmt->execute();

    return $post = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>
