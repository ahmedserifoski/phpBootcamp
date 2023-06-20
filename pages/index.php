<?php  //requiring the autoload and database file through init.php
  require "../init.php";
  //getting the header, instead of having it in all files
  require '../elements/header.php';



  ?>
  <main>
    <section>
      <h2>Current QB's</h2>
      <ul>
        <!-- using fetchPosts() function from PostRepository class, I make a new
        instance of the PostsRepository class and get all the functions from it -->
        <?php
        $postsRepository = $container->getPostsRepository();

        $postsRepository2 = $container->getPostsRepository();

        var_dump($postsRepository);
        echo "<br>";
        var_dump($postsRepository2);
        $res = $postsRepository->fetchPosts();

        ?>
          <!-- since the response is an object, we can access the data with
          a foreach loop -->
          <?php foreach($res as $row): ?>
            <strong>
              <li>
                <!-- making the titles of the data that we get an actual link -->
                <a href="post.php?id=<?php echo $row->id ?>">
                  <!-- displaying the data -->
                  <?php echo $row->title ?>
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
