
<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<?php

if(get_post_type()=='adventure'){

	  echo '<h1 class="dashedBorderBottom padding-med text-align-center">LATEST ADVENTURES</h1>';

}

else if(is_tax()=="product type"){

	echo '<div class="termtitle text-align-center dashedBorderBottom padding-sm">';
	echo '<h1 class="page-title">';
	  single_term_title();
	echo '</h1>';
	  the_archive_description( '<div class="taxonomy-description text-align-center">', '</div>' );
	echo '</div>';
} else {

	echo ' <h1 class="shoptitle text-align-center">SHOP STUFF</h1>';


	  $terms = get_terms( 'Product Type', $args );
	  if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
	      $count = count( $terms );
	      $term_list = '<p class="my-term-archive">';

	      echo '<div class= "shoppageTerm flex justify-content-space-around dashedBorderBottom"> ';
	      foreach ( $terms as $term ) {
	          $i++;

	          $name = $term->name;
	          $term_list .= ' <div class= "productTypeIconShopPage text-align-center">  <a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $name ) ) . '">' . $name .'</a> </button>' .'</div>';

	      }

	      echo $term_list;
	      echo '</div>';
	}

}

?>

<div class="allproducts flex flex-wrap justify-content-center">
