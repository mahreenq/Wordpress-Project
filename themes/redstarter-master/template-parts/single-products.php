<!--template part-->
<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>




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
