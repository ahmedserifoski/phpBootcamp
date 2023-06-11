<?php

//requiring the databank file from separate place
require "../database.php";
//getting the header, instead of having it in all files
require '../elements/header.php';

 ?>


  <main>


    <section>
  <h2>Current QB's</h2>
  <ul>
    <!-- using fetchPosts() function from database file -->
    <?php $res = fetchPosts(); ?>
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
