<?php include __DIR__ . "/../../layout/header.php"; ?>

    <form method="post" action="admin-post-edit?id=<?php echo e($post->id); ?>" class="bg-transparent p-3 rounded text-light" >

        <!-- Input Field -->
        <div class="form-group mb-3">
            <!-- <strong><?php if($postEdited) { echo "Post edited"; } ?></strong> -->
        </div>
        <div class="form-group mb-3">
            <label for="name">Name:</label>
            <input type="text" value="<?php echo e($post->title); ?>" name="title" class="form-control bg-transparent text-light">
        </div>
        <!-- Textarea Field -->
        <div class="form-group mb-3">
            <label for="message">Message:</label>
            <textarea class="form-control bg-transparent text-light" name="content" rows="15"><?php echo e($post->content); ?></textarea>
        </div>
        <!-- Submit Button -->
        <input type="submit" value="Save Post" class="btn btn-primary"/>
    </form>

<?php include __DIR__ . "/../../layout/footer.php"; ?>
