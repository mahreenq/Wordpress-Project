<?php  echo 'home.php; '?>

<?php get_header(); ?>
 <div class="flex">

<div class="allPosts">

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'template-parts/content-journalarchive' ); ?>
<?php endwhile; ?>


</div><!--allPosts-->


<?php get_sidebar(); ?>

</div> <!--flex-->

<?php get_footer(); ?>
