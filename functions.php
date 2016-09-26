<?php

/* Add theme setup stuff here */
if ( ! function_exists( 'stdpltf_setup' ) ) :

    function stdpltf_setup() {

        /* Modules included in this theme */
        //require_once get_template_directory() . "/modules/content.module.php";

    }

endif;
add_action( 'after_setup_theme', 'stdpltf_setup' );

/* Add scripts and styles here */
function stdpltf_scripts() {

}
add_action( 'wp_enqueue_scripts', 'stdpltf_scripts' );

/* Add body classes here */
function stdpltf_body_classes( $classes ) {

    return $classes;
}
add_filter( 'body_class', 'stdpltf_body_classes' );
