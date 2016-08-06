<?php

/**
* Create the Press Realease custom post type
**/

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'pressrelease',
    array(
      'labels' => array(
        'name' => __( 'Press Releases' ),
        'singular_name' => __( 'Press Release' )
      ),
      'public' => true
    )
  );
register_taxonomy( 'type', 'produit', array( 'hierarchical' => true, 'label' => 'Type', 'query_var' => true, 'rewrite' => true ) )
}

?>