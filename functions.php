<?php

function motor_child_scripts_styles() {
    wp_enqueue_style( 'motor-parent-style', get_template_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'motor_child_scripts_styles' );