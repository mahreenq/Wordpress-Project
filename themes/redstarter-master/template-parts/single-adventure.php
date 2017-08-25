<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>
<?php

get_banner();


      echo '<h2>';
      the_title();
      echo '</h2>';
      echo '<br>';
      echo 'By '.get_the_author();
      the_content();
      ?>
