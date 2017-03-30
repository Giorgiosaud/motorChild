<?php
require 'inc/customElements.php';
add_filter('show_admin_bar', '__return_false');
function motor_child_scripts_styles()
{
    wp_enqueue_style('motor-parent-style', get_template_directory_uri(). '/style.css');
    wp_enqueue_style('my-adaptations-to-theme', get_stylesheet_directory_uri().'/css/adaptations.css', array('motor-less'));
}
add_action('wp_enqueue_scripts', 'motor_child_scripts_styles');
add_action('after_setup_theme', 'motor_child_setup');
add_filter( 'get_custom_logo', 'change_logo_class' );


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'img-responsive', $html );
    //$html = str_replace( 'custom-logo-link', 'your-custom-class', $html );

    return $html;
}
function motor_child_setup()
{
    add_theme_support('custom-logo',
        array(
            'header-text' => array(
                'Expo Miami Autoparts',
                ' Comercializadora y distribuidora de autopartes desde EEUU hacia toda Latinoamérica'
            ),
        )
    );
}
