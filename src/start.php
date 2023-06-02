<?php // strict requirement

// include "includingTest.php";
// require "src/Car.php";
// require "src/SuperCar.php";

function myAutoloader($className) {
    $classFile = "src/$className.php";
    if (file_exists($classFile)) {
        require_once $classFile;
    }
}

spl_autoload_register('myAutoloader');

$pdo = new PDO("mysql:host=localhost;dbname=blog", "root", "");

$res = $pdo->query("SELECT * FROM `posts`");
foreach ($res as $row) {
  var_dump($row);
}

?>
