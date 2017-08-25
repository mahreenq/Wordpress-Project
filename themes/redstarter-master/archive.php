<?php
echo 'archive.php begins';
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header();

?>
<div id="primary" class="content-area border-edge">
   <main id="main" class="site-main" role="main">
		 
<?php get_template_part('template-parts/content-archiveheader');  ?>


<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('template-parts/content' , get_post_type() ); ?>
<?php  endwhile; ?>



						</div> <!--closing div created in template part -->
 </main>
</div>

<?php get_footer(); ?>

<?php echo 'archive.php ends'; ?>
