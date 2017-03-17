<?php
require 'inc/customElements.php';
function motor_child_scripts_styles() {
    wp_enqueue_style( 'motor-parent-style', get_template_directory_uri(). '/style.css' );
    wp_enqueue_style('my-adaptations-to-theme',get_stylesheet_directory_uri().'/css/adaptations.css',array('motor-less'));
}
add_action( 'wp_enqueue_scripts', 'motor_child_scripts_styles' );