<?php 

// AuthMiddleware.php

namespace App\Middleware;

class AuthMiddleware {
    public function handle() {
        // Check if the user is logged in
        if (isset($_SESSION['login'])) {
            // Make the username available globally
            $GLOBALS['username'] = $_SESSION['login'];
        }
    }
}


?>