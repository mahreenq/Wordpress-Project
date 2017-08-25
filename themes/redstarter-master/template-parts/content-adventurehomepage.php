<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>





<?php echo '<h1> LATEST ADVENTURES</h1>'; ?>

<?php echo '<div class="adventureshomepage">'; ?>
<?php
$args = array( 'post_type' => 'adventure', 'posts_per_page' => 4 );
   $loop = new WP_Query( $args );
   $i=0;
   while ( $loop->have_posts() ) : $loop->the_post(); ?>

   <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

   <?php if ($i===0){
     $i+=1; ?>

     <div class="adventureHomePageLarge" style="width:50%;height:100%;background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo $backgroundImg[0]; ?>');background-size:cover;">

  <?php } else if ($i===1){ ?>
  <?php  $i+=1;?>
<div class="lala" style="width:50%;">

    <div class="adventureHomePageMid" style="width:100%;height:50%;background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo $backgroundImg[0]; ?>');background-size:cover;">

  <?php  }else { ?>

    <div class="adventureHomePageSmall" style="width:50%;height:50%;background:  linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('<?php echo $backgroundImg[0]; ?>');background-size:cover;">

  <?php  };  ?>

  <?php

  echo '<div class="adventureTitleHome">';
  the_title();
  echo '</div>';

     echo '<div class="transparent-button"><a href="'.get_permalink().'"> READ MORE </a></div>';
     echo '</div>'; ?>

<?php  endwhile; ?>
</div>
<?php echo '</div>'; ?>
<?php echo '<a class="green-button>" href="http://localhost:8888/wordpress/?post_type=adventure"> MORE ADVENTURES </a>'; ?>


<?php echo '<br>';
