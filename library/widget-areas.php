<?php
/**
 * Register widget areas
 *
 * @package RBMTheme
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
function foundationpress_sidebar_widgets() {
	register_sidebar(array(
		'id' => 'sidebar-widgets',
		'name' => __( 'Sidebar widgets', 'real-big-marketing' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'real-big-marketing' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));

	// Footer
    $footer_columns = get_theme_mod( 'rbm_theme_footer_columns', 4 );
    for ( $index = 0; $index < $footer_columns; $index++ ) {
        register_sidebar(
            array(
                'name'          =>  'Footer ' . ( $index + 1 ),
                'id'            =>  'footer-' . ( $index + 1 ),
                'description'   =>  sprintf( __( 'This is Footer Widget Area %d', 'real-big-marketing' ), ( $index + 1 ) ),
                'before_widget' =>  '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  =>  '</aside>',
                'before_title'  =>  '<h3 class="widget-title">',
                'after_title'   =>  '</h3>',
            )
        );
    }
	
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
