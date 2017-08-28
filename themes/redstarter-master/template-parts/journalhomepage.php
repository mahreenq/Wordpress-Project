<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>
<?php

echo ' <h1 class="text-align-center"> INHABITENT JOURNAL</h1>';

echo '<div class="blogshomepage flex justify-content-space-around">';

global $query_string;
        query_posts ('posts_per_page=3');
while ( have_posts() ) : the_post();
echo '<div class="bloghomepage width30 solidgreyborderallaround padding1rem margin-xsm ">';
the_post_thumbnail();
?>

<?php if ( 'post' === get_post_type() ) : ?>
<div class="entry-meta smallfont Merriweather padding-bottom-xs">
  <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
</div><!-- .entry-meta -->


<div class="green uppercase">
<?php the_title(); ?>
</div>

<?php endif; ?>

<?php
echo '<div class=" white-button"><a   href="'.get_permalink().'"> READ ENTRY </a> </div> </div>';


endwhile;
echo '</div>';


?>
