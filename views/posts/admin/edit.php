<?php include __DIR__ . "/../../layout/header.php"; ?>

    <form method="post" action="post-edit?id=<?php echo e($post->id); ?>" class="bg-dark p-3 rounded text-light" >

        <!-- Input Field -->
        <div class="form-group mb-3">
            <label for="name">Name:</label>
            <input type="text" value="<?php echo e($post->title); ?>" name="title" class="form-control bg-dark text-light">
        </div>
        <!-- Textarea Field -->
        <div class="form-group mb-3">
            <label for="message">Message:</label>
            <textarea class="form-control bg-dark text-light" name="content" rows="15"><?php echo e($post->content); ?></textarea>
        </div>
        <!-- Submit Button -->
        <input type="submit" value="Save Post" class="btn btn-primary"/>
    </form>

<?php include __DIR__ . "/../../layout/footer.php"; ?>
