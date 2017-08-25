<?php
echo 'singhbvjvle.php begins';
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header();

?>

<div class="main-page-body ">
			<div class="page-body">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part('template-parts/single' , get_post_type() ); ?>
			<?php get_template_part( 'template-parts/content-socialmedia' ); ?>

		<?php endwhile; ?>

			</div>


</div>


<?php get_footer(); ?>
<?php echo 'single.php ends'; ?>
