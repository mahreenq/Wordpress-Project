
<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

  <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full ); ?>
 <div class="singleJournalOnArchive">
<div class="singleJournalImage white flex" style="background: url('<?php echo $backgroundImg[0]; ?>');background-size:cover;">

  <div class="titleOnJournalPage flex align-self-flex-start">
    <?php  the_title(); ?>
  </div>  <!--titleonJournalPage-->


<div class="commentsOnJournalArchive flex align-self-flex-end">
      <?php if ( 'post' === get_post_type() ) : ?>
      <div class="entry-meta">
        <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
      </div>
</div> <!--commentsonJournalARchive-->
      <?php endif; ?>

</div> <!--singleJournalImage-->

 <div class"journalExcerpt Merriweather">
<?php the_excerpt();?>
</div> <!--journal Excerpt-->

<?php echo '<div class="white-button"><a href="'.get_permalink().'"> READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a> </div>'; ?>

</div> <!--singleJournalonArchive-->
