<?php echo 'archive-products';  ?>




<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
 ?>

 <?php



get_header();




?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


      header class="page-header">
        <?php echo ' <h1>SHOP STUFF</h1>';


          $terms = get_terms( 'Product Type', $args );
          if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
              $count = count( $terms );
              $i = 0;
              $term_list = '<p class="my_term-archive">';

              echo '<div class= "homepageTerm"> ';
              foreach ( $terms as $term ) {
                  $i++;

                  $name = $term->name;
                  $desc = $term->description;
                  $term_list .= ' <div class= "productTypeIcon">  <a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $name ) ) . '">' . $name .'</a> </button>' .'</div>';

                  if ( $count != $i ) {
                      $term_list .= ' &middot; ';
                  }
                  else {
                      $term_list .= '</p>';
                  }
              }
              //echo $terms;
              echo $term_list;

              echo '</div>';

          } ?>









<?php if(is_category()=='Product Type'){
while ( have_posts() ) : the_post();
 echo the_title();
 endwhile;
 }else {
   while ( have_posts() ) : the_post();
    echo the_title();
    endwhile;
 }

?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

<?php echo 'archive-products.php ends'; ?>
