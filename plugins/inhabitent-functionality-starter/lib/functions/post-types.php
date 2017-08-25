<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 /**
  * Create custom post type(s)
  */


  function my_product_taxonomy($cpt) {
    $labels = array(
      'name'              => _x( $cpt, 'taxonomy general name' ),
      'singular_name'     => _x( $cpt, 'taxonomy singular name' ),
      'search_items'      => __( 'Search '.$cpt ),
      'all_items'         => __( 'All '.$cpt ),
      'parent_item'       => __( 'Parent '.$cpt ),
      'parent_item_colon' => __( 'Parent '.$cpt.':' ),
      'edit_item'         => __( 'Edit '.$cpt ),
      'update_item'       => __( 'Update '.$cpt ),
      'add_new_item'      => __( 'Add '.$cpt.'Test' ),
      'new_item_name'     => __( 'New '.$cpt ),
      'menu_name'         => __( $cpt ),
    );
    $args = array(
      'labels' => $labels,
      'hierarchical' => true,
    );
    //register_taxonomy( 'product_category', 'products', $args );
    return $args;
  }





   ?>
