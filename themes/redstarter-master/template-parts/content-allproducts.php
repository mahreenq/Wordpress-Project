<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>


<?php echo ' <br><br><br><h1 class="shoptitle">SHOP STUFF</h1>';


  $terms = get_terms( 'Product Type', $args );
  if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
      $count = count( $terms );
      $term_list = '<p class="my_term-archive">';

      echo '<div class= "shoppageTerm"> ';
      foreach ( $terms as $term ) {
          $i++;

          $name = $term->name;
          $term_list .= ' <div class= "productTypeIconShopPage">  <a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $name ) ) . '">' . $name .'</a> </button>' .'</div>';

      }

      echo $term_list;
      echo '</div>';
}
 ?>
