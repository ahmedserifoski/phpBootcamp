<?php

session_start();

require "../init.php";

$pathInfo = $_SERVER["PATH_INFO"];

$routes = [
  "/index" => [
    "controller" => "postsController",
    "method" => "index"
  ],
  "/post" => [
    "controller" => "postsController",
    "method" => "post"
  ],
  "/login" => [
    "controller" => "loginController",
    "method" => "login"
  ],
  "/dashboard" => [
    "controller" => "loginController",
    "method" => "dashboard"
  ],
  "/logout" => [
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

//
// if($pathInfo == "/index") {
//   $postsController = $container->make("postsController");
//   $postsController->index();
// } elseif ($pathInfo == "/post") {
//   $postsController = $container->make("postsController");
//   $postsController->post();
// }

 ?>
