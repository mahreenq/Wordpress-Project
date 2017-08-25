<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>
<?php

echo ' <h1> INHABITENT JOURNAL</h1>';

echo '<div class="blogshomepage">';

global $query_string;
        query_posts ('posts_per_page=3');
while ( have_posts() ) : the_post();
echo '<div class="bloghomepage">';
the_post_thumbnail();
?>

<?php if ( 'post' === get_post_type() ) : ?>
<div class="entry-meta">
  <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
</div><!-- .entry-meta -->



<?php the_title(); ?>

<?php endif; ?>

<?php
echo '<br><div class=" white-button"><a   href="'.get_permalink().'"> READ ENTRY </a> </div> </div>';


endwhile;
echo '</div>';


?>
