<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>




<div class="singleproduct width25 solidborderwhitesm">

    <?php  echo '<a href="'.get_permalink().'">'; ?>
      <div class="singleProductImage">
      <?php echo the_post_thumbnail();?>
      </div>



<div class="productInfoOnArchive flex align-items-center solidgreyborderallaroundsm solidgreybordertoplrg padding-0.3rem smallfont">

          <div class="productNameOnArchive Merriweather width75 overflowhidden">
                <?php echo the_title(); ?>
          </div>


          <div class="priceOnArchive Merriweather width25 overflowhidden">
    <?php $mykey_values = get_post_custom_values( 'Price' );
    foreach ( $mykey_values as $key => $value ) {
      echo "$"."$value";
    }  ?>
          </div>

  </div>



</a>
</div>
