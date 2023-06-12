

<?php  //requiring the autoload and database file from separate place ?>
<?php   //require "../autoload.php"; ?>
<?php   //require "../database.php"; ?>
<?php   require "../init.php"; ?>
<?php  //getting the header, instead of having it in all files
require '../elements/header.php';

?>
  <main>
    <section>
      <h2>Current QB's</h2>
      <ul>
        <!-- using fetchPosts() function from PostRepository class, I make a new
        instance of the PostsRepository class and get all the functions from it -->
        <?php
        $postsRepository = new App\Post\PostsRepository();
        $res = $postsRepository->fetchPosts();

        ?>
          <!-- since the response is an object, we can access the data with
          a foreach loop -->
          <?php foreach($res as $row): ?>
            <strong>
              <li>
                <!-- making the titles of the data that we get an actual link -->
                <a href="post.php?id=<?php echo $row["id"] ?>">
                  <!-- displaying the data -->
                  <?php echo $row['title'] ?>
                </a>
               </li>
            </strong>
            <!-- instead of curly braces, this is another way of writting thea
            foreach loop, it's more clear when it ends-->
          <?php endforeach; ?>
      </ul>
    </section>
  </main>

<!-- adding the footer vie require, instead of having it here, more visable -->
<?php  require "../elements/footer.php"; ?>
