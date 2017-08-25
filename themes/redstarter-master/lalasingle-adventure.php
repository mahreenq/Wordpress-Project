<?php
echo 'single-adventure.php begins';
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header();
get_banner();
?>


		<?php while ( have_posts() ) : the_post(); ?>
			<?php

						echo '<h2>';
						the_title();
						echo '</h2>';
						echo '<br>';
						echo 'By '.get_the_author();
						the_content();
						?>

<?php get_template_part( 'template-parts/content-socialmedia' ); ?>

<?php endwhile; // End of the loop. ?>


<?php get_footer(); ?>
<?php echo 'single-adventure.php ends'; ?>
