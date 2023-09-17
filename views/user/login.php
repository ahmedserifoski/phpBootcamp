<?php include __DIR__ . "/../layout/header.php"; ?>

<div class="container mt-5">
   <div class="row justify-content-center">
       <div class="col-md-6">
           <div class="card">
               <div class="card-header">
                   <h3 class="card-title">Login</h3>
               </div>
               <div class="card-body">
                   <form action="index.php/login" method="post">
                       <div class="mb-3">
                           <label for="username" class="form-label">Username</label>
                           <input type="text" class="form-control" id="username" name="username" required>
                       </div>
                       <div class="mb-3">
                           <label for="password" class="form-label">Password</label>
                           <input type="password" class="form-control" id="password" name="password" required>
                       </div>
                       <button type="submit" class="btn btn-primary">Login</button>
                   </form>
               </div>
           </div>
       </div>
 </div>
</div>

<?php  include __DIR__ . "/../layout/footer.php"; ?>
