<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <main class="col-md-12">
        <?php
          if(have_posts()){
            while (have_posts()){
              the_post(); ?>

              <h2 class="entry-title"><?php the_title(); ?></h2>

              <p class="post-information"><?php echo "<span class='bold'>Published</span> " . get_the_date(); echo " | "; echo "<span class='bold'>Written By</span> " . get_the_author(); ?></p>

              <?php the_content(); ?>
          <?php  }//ends while loop
          }//ends the if statement
        ?>
      </main>
    </div>
  </div>
<?php get_footer(); ?>
