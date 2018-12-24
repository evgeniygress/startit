<?php 


	function startit_setup() {

		add_theme_support( 'title-tag' );

		add_theme_support( 'custom-logo', array('height' => 64, 'width' => 78, 'flex-height' => true) );

		register_nav_menu( 'menu', 'nav-menu' );

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


?>