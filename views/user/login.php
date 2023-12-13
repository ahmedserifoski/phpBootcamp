<?php include __DIR__ . "/../layout/header.php"; ?>

<?php if(!empty($error)): ?>
    <p><?php echo $error; ?></p>
<?php endif; ?>



<div class="container mt-5">
    <?php if ($loggedIn): ?>
        <p style="font-size: 22px;">It seems like you are already logged in. So there is no need to do that again 🤪</p>
    <?php else: ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-dark text-light">
                    <div class="card-header">
                        <h3 class="card-title">Login</h3>
                    </div>
                    <div class="card-body bg-dark text-light">
                        <form method="POST" action="login">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control bg-dark text-light" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control bg-dark text-light" name="password" required>
                            </div>
                            <button type="submit" value="Log IN" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php

 ?>

<?php  include __DIR__ . "/../layout/footer.php"; ?>
