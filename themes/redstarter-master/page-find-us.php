<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
echo 'findus';
get_header();

echo 'page.php';
echo '<br><br>';
?>
<div class="main-page-body flex">
	<div class="page-body">
<h1><?php the_title(); ?></h1>

<div class="googlemap">
<iframe width="80%" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJV8QansdzhlQRatww-ihk6jo&key=AIzaSyAVbHEerVLRAURU4vv65s6FCGU1s9z5u8Y" allowfullscreen></iframe>
</div>

<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
	<?php endwhile;?>
</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
