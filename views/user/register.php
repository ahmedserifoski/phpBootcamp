<?php include __DIR__ . "/../layout/header.php"; ?>

<?php if(!empty($error)): ?>
    <p><?php echo $error; ?></p>
<?php endif; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-dark text-light">
                <div class="card-header">
                    <h3 class="card-title">Register</h3>
                </div>
                <div class="card-body bg-dark text-light">
                    <form method="POST" action="register">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control bg-dark text-light" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control bg-dark text-light" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control bg-dark text-light" name="confirm_password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . "/../layout/footer.php"; ?>

