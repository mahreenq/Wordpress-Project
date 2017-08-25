<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>



<div class="allproducts">


        <?php	while ( have_posts() ) : the_post(); ?>

<div class="singleproduct">

    <?php  echo '<a href="'.get_permalink().'">'; ?>
      <div class="singleProductImage">
      <?php echo the_post_thumbnail();?>
      </div>



<div class="productInfoOnArchive">

          <div class="productNameOnArchive">
                <?php echo the_title(); ?>
          </div>


          <div class="priceOnArchive">
    <?php $mykey_values = get_post_custom_values( 'Price' );
    foreach ( $mykey_values as $key => $value ) {
      echo "$"."$value";
    }  ?>
          </div>

  </div>



</a>
</div>

  <?php endwhile; ?>
</div>
