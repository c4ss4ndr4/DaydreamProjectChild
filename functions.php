<?php
/*
Author: Cassandra Marshall
URL: http://daydreamproject.com

These are the functions for the child theme based off of reverie.

*/

/*add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'acme_product',
		array(
			'labels' => array(
				'name' => __( 'Slides' ),
				'singular_name' => __( 'Slides' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}*/

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '"><br /> More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



?>