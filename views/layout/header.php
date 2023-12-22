<?php use App\Middleware\AuthMiddleware; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NFL</title>
  <link rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <style>

body {
  /* The image used */
  background-image: url("https://www.pixel4k.com/wp-content/uploads/2020/11/patrick-mahomes-ii-4k_1604343848-2048x1365.jpg.webp");
  background-color: darkgrey;
  background-blend-mode: multiply;

  text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.9); 

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
<?php
// Apply the middleware
$authMiddleware = new AuthMiddleware();
$authMiddleware->handle();
  // var_dump($authMiddleware->handle());
  // var_dump($GLOBALS["username"]);
// ...

?>
</head>
<body class="d-flex flex-column bg-secondary text-light min-vh-100 p-3 mb-2" >
  
<nav class="navbar navbar-expand-lg navbar-light bg-transparent text-light">
    <a class="navbar-brand text-light d-flex align-items-center" href="index"><img style="width: 100px;" src="https://1000logos.net/wp-content/uploads/2017/05/NFL-logo.png" alt="NFL logo"> <span style="font-size: 30px;" class="aligin-self-center"> Blog</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light" href="index">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="register">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="admin-index">Admin</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown text-light">
                <a 
                  class="nav-link dropdown-toggle text-light" 
                  href="#" 
                  id="navbarDropdownMenuLink" 
                  role="button" 
                  data-bs-toggle="dropdown" 
                  aria-expanded="false"
                  >
                <?= isset($GLOBALS['username']) ? "Hello, " . $GLOBALS['username'] : "Welcome " ?>
                </a>
                <ul class="dropdown-menu text-white bg-dark" aria-labelledby="navbarDropdownMenuLink">
                  <?php if (isset($GLOBALS['username'])) : ?>
                  <a class="dropdown-item text-light" href="logout">Logout</a>
                  <?php else : ?>
                  <a class="dropdown-item text-light" href="login">Login</a>
                  <?php endif; ?>
                </ul>

            </li>
        </ul>
    </div>
</nav>