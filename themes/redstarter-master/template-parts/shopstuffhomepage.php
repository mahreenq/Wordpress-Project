
<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>
<?php
echo '<br>';
echo ' <h1 class= "text-align-center"> SHOP STUFF </h1>';


$terms = get_terms( 'Product Type', $args );
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    $count = count( $terms );
    $i = 0;
    $term_list = '<p class="my_term-archive">';

    echo '<div class= "homepageTerm flex justify-content-space-around marginauto width90"> ';
    foreach ( $terms as $term ) {
        $i++;


        $name = $term->name;
        $desc = $term->description;
        $term_list .= '<div class= "productTypeIcon padding-sm text-align-center marginauto width25 margin-xsm solidgreyborderallaround"> <img class="width30" src ="http://localhost:8888/wordpress/wp-content/themes/redstarter-master/assets/images/product-type-icons/'.$name.'.svg"><div class="homedesc Merriweather padding1rem">'.$desc.'</div><a href="'.esc_url( get_term_link( $term ) ).'" alt="'.esc_attr( sprintf( __( 'View all post filed under %s','my_localization_domain' ), $name ) ).'">'.'<div class="homeTerms green-button marginauto">'.$name.' STUFF'.'</a>'.'</div></div>';

    }

    echo $term_list;

    echo '</div>';

}
?>
