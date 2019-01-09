<?php 


	function startit_setup() {

		add_theme_support( 'title-tag' );
		register_nav_menu( 'main-menu', 'nav-menu' );
		add_theme_support('post-thumbnails');

		register_nav_menu( 'main-menu', 'nav-menu' );
		add_image_size ('small', 78, 64, true);
		add_image_size ('full-size', 1900, 900, true);
		add_image_size ('portfolio-thumb', 650, 650, true);
		add_image_size ('blog-thumb', 370, 280, true);
		add_image_size ('about-thumb', 470, 280, true);

	}

	add_action( 'after_setup_theme', 'startit_setup' );


	function startit_scripts() {

		wp_enqueue_style( 'style-css', get_stylesheet_uri() );

		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
		wp_enqueue_script('jquery.mixitup.min', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array('jquery'), '', true);
		wp_enqueue_script('jquery.fancybox.min', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), '', true);
		wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '', true);
		wp_enqueue_script('typed.min', get_template_directory_uri() . '/js/typed.min.js', array('jquery'), '', true);
		wp_enqueue_script('menu', get_template_directory_uri() . '/js/menu.js', array('jquery'), '', true);
		wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true);
	}
	add_action( 'wp_enqueue_scripts', 'startit_scripts' );



	register_nav_menus( array(
    	'menutop' => __( 'Menu Top' ),
    	'menubottom' => __( 'Menu Bottom' ),
	));

	

?>