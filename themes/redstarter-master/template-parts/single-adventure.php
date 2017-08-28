<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>
<?php get_banner(); ?>

<div class="padding-med">

    <?php  echo '<h1 class="uppercase">';
      the_title();
      echo '</h1>';
      echo '<br>';
      echo 'By '.get_the_author();
      the_content();
      ?>
      <?php get_template_part( 'template-parts/content-socialmedia' ); ?>

</div>
