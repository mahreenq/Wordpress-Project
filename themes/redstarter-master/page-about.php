<?php


 ?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php
  get_header();
  get_banner();

  echo '<div class="aboutContent ">';
  the_content();
  echo '</div>';

  ?>
<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
