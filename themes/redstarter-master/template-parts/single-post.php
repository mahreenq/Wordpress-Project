
<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<div class="flex">
		<div class="singleJournalOnArchive ">
      <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full ); ?>
		<div class="singleJournalImage white flex" style="background: url('<?php echo $backgroundImg[0]; ?>');background-size:cover;">

		<div class="titleOnJournalPage flex align-self-flex-start uppercase">
					<?php  the_title(); ?>
		</div>  <!--titleonJournalPage-->


		<div class="commentsOnJournalArchive flex align-self-flex-end uppercase">
				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
				</div>
		</div> <!--commentsonJournalARchive-->
				<?php endif; ?>

		</div> <!--singleJournalImage-->

		<div class"journalEcerpt">
		<?php the_content();?>

		</div> <!--journal Excerpt-->
		<footer class="entry-footer padding-top-bottom-sm">
			<?php red_starter_entry_footer(); ?>

		</footer><!-- .entry-footer -->
		<?php get_template_part( 'template-parts/content-socialmedia' ); ?>
		<?php  	// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
	</div> <!--singleJournalonARchive-->
  <div>
    <?php get_sidebar(); ?>
  </div>

</div>
