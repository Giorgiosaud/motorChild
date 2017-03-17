<?php
function mytheme_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'footer_image' , array(
		'default'   => get_stylesheet_directory_uri().'/img/footer.jpg',
		) );
	$wp_customize->add_section( 'footer' , array(
		'title'      => __( 'Footer Customizations', 'motor-child' ),
		'priority'   => 30,
		) );
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'footer_image',
           array(
               'label'      => __( 'Upload a image to footer backgroun', 'motor-child' ),
               'section'    => 'footer',
               'settings'   => 'footer_image'
           )
       )
   );
}
add_action( 'customize_register', 'mytheme_customize_register' );