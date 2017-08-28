<?php while ( have_posts() ) : the_post(); ?>

  <?php
  get_header();
  get_banner(); ?>
<?php endwhile; // End of the loop. ?>



<div class="Merriweather marginxl aboutContent">


<?php $title1= get_post_custom_values('Title1');
foreach ( $title1 as $key => $titleone ) { ?>
<div class="text-align-center uppercase"><h2>
   <?php echo "$titleone";  ?>
   </h2>
   </div>
<?php }
?>
<?php $content1= get_post_custom_values('Content1');
foreach ( $content1 as $key => $contentone ) { ?>
<div>
   <?php echo "$contentone";  ?>
   </div>
<?php  }
?>
<?php $title2= get_post_custom_values('Title2');
foreach ( $title2 as $key => $titletwo ) { ?>
<div class="text-align-center uppercase"><h2>
  <?php echo "$titletwo"; ?>
  </h2>
  </div>
<?php }
?>
<?php $content2= get_post_custom_values('Content2');
foreach ( $content2 as $key => $contenttwo) { ?>
<div>
  <?php echo "$contenttwo"; ?>
  </div>
<?php  }
?>

</div>



<?php get_footer(); ?>
