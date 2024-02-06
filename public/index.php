<?php

session_start();

require "../init.php";


$sth = $_SERVER["REQUEST_URI"];
echo $sth;
$url = $_SERVER["REQUEST_URI"];
$parsed_url = parse_url($url);
$path_segments = explode("/", $parsed_url['path']);
$pathInfo = end($path_segments);
// echo $pathInfo; // Output: post

$url = $_SERVER["REQUEST_URI"];
// Parse the URL
$parsedUrl = parse_url($url);

// Get the path
$path = $parsedUrl['path'];

// Output the result
echo $path;



$routes = [
  "index" => [
    "controller" => "postsController",
    "method" => "index"
  ],
  "post" => [
    "controller" => "postsController",
    "method" => "post"
  ],
  "admin-index" => [
    "controller" => "postsAdminController",
    "method" => "adminIndex"
  ],
  "admin-post-edit" => [
    "controller" => "postsAdminController",
    "method" => "editPost"
  ],
  "login" => [
    "controller" => "loginController",
    "method" => "login"
  ],
  "addPost" => [
    "controller" => "postsController",
    "method" => "addPost"
  ],
  "register" => [
    "controller" => "loginController",
    "method" => "register"
  ],
  "dashboard" => [
    "controller" => "loginController",
    "method" => "dashboard"
  ],
  "logout" => [
    "controller" => "loginController",
    "method" => "logout"
  ],
];

if(isset($routes[$pathInfo])) {
  $route = $routes[$pathInfo];

  $controllerName = $route["controller"];
  $methodName = $route["method"];

  $controller = $container->make($controllerName);
  $controller->$methodName();
}

 ?>
