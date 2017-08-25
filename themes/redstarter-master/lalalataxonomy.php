<?php

echo 'taxonomy.php'; ?>


<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header();

?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

      <?php /* Start the Loop */
      echo '<div class="allproducts">';?>





      <?php

    //  global $query_string;
    //          query_posts ('posts_per_page= 16');

      while ( have_posts() ) : the_post(); ?>

				<?php
        echo '<div class="singleproduct">';

        echo '<a href="'.get_permalink().'">';
        echo the_post_thumbnail();
        echo the_title();
        $mykey_values = get_post_custom_values( 'Price' );
        foreach ( $mykey_values as $key => $value ) {
          echo ".....$"."$value";
        }

        echo '</a>';
        echo '</div>';
				?>

			<?php endwhile; ?>

      <?php echo '</div>'; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php echo 'archive.php ends'; ?>
