
<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */
echo 'lajdnfnknsw';
?>


<?php if ( have_posts() ) : ?>

  <header class="page-header">
    <?php
    echo '<br>';
    echo '<br>';
    echo '<h1>LATEST ADVENTURES</h1>'


    ?>
  </header><!-- .page-header -->

  <?php /* Start the Loop */?>
  <?php echo '<div class="allAdventures ">';  ?>
  <?php while ( have_posts() ) : the_post(); ?>

    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full ); ?>

<div class="singleAdventure white" style="background:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo $backgroundImg[0]; ?>');background-size:cover;">


    <?php
      echo '<div class="adventureTitleArchivePage">';
      the_title();
      echo '</div>';
      echo '<br><a href="'.get_permalink().'"> READ MORE </a>';
    echo '</div>';
    ?>

  <?php endwhile; ?>
  <?php echo '</div>'; ?>


<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>
