<?php include __DIR__ . "/../layout/header.php"; ?>

<div class="container mt-5">
   <div class="row justify-content-center">
       <div class="col-md-6">
           <div class="card bg-dark text-light">
               <div class="card-header">
                   <h3 class="card-title">Login</h3>
               </div>
               <div class="card-body bg-dark text-light">
                 <?php //i deleted the following from the following line of code: action="index.php/login" ?>
                   <form  method="POST" method="login">
                       <div class="mb-3">
                           <label class="form-label">Username</label>
                           <input type="text" class="form-control bg-dark text-light" name="username" required>
                       </div>
                       <div class="mb-3">
                           <label class="form-label">Password</label>
                           <input type="password" class="form-control bg-dark text-light" name="password" required>
                       </div>
                       <button type="submit" class="btn btn-primary">Login</button>
                   </form>
               </div>
           </div>
       </div>
 </div>
</div>

<?php

 ?>

<?php  include __DIR__ . "/../layout/footer.php"; ?>
