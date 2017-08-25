



<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>



    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full ); ?>

<div class="singleAdventure white" style="background:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo $backgroundImg[0]; ?>');background-size:cover;">


    <?php
      echo '<div class="adventureTitleArchivePage">';
      the_title();
      echo '</div>';
      echo '<br><a href="'.get_permalink().'"> READ MORE </a>';
    echo '</div>';
    ?>
