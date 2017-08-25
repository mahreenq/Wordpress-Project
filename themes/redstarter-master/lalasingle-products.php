



<?php
echo 'single-products.php';
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

		<?php while ( have_posts() ) : the_post(); ?>

<div class="singleproductpage">

				<div class="productImageSinglePage">
					<?php  the_post_thumbnail(); ?>
				</div>

				<div class="contentSingleProduct">
					<h2 class="orange uppercase"> <?php the_title();?> </h2>


					<?php	$mykey_values = get_post_custom_values( 'Price' );
						foreach ( $mykey_values as $key => $value ) {
							echo "$"."$value";
						}
						the_content();	?>

<?php get_template_part( 'template-parts/content-socialmedia' ); ?>



					</div>
	</div>


			<?php endwhile; ?>

<?php get_footer(); ?>
