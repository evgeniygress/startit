<?php 

	
	function startit_setup() {

		add_theme_support( 'title-tag' );
		register_nav_menu( 'main-menu', 'nav-menu', 'extra-menu' );
		add_theme_support('post-thumbnails');
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
		) );

		register_nav_menu( 'main-menu', 'nav-menu' );
		add_image_size ('small', 78, 64, true);
		add_image_size ('full-size', 1900, 900, true);
		add_image_size ('portfolio-thumb', 650, 650, true);
		add_image_size ('blog-thumb', 370, 280, true);
		add_image_size ('about-thumb', 470, 280, true);
		add_filter('excerpt_more', function($more) {
			return '...';
		});

	}
	add_action( 'after_setup_theme', 'startit_setup' );

//register menus
	add_action('after_setup_theme', function(){
		register_nav_menus( array(
			'menutop' => 'menutop',
			'extra-menu' => 'extra-menu'
		) );
	});

// add style and script
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



// add new post type 
	add_action( 'init', 'create_post_types' );
		function create_post_types(){
			register_post_type('services', array(
				'label'  => null,
				'labels' => array(
					'name'               => 'services', // основное название для типа записи
					'singular_name'      => 'services', // название для одной записи этого типа
					'add_new'            => 'add new', // для добавления новой записи
					'add_new_item'       => 'add new item', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'edit item', // для редактирования типа записи
					'new_item'           => 'new item', // текст новой записи
					'view_item'          => 'view item', // для просмотра записи этого типа.
				),
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => null, // зависит от public
				'exclude_from_search' => null, // зависит от public
				'show_ui'             => null, // зависит от public
				'show_in_menu'        => null, // показывать ли в меню адмнки
				'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
				'show_in_nav_menus'   => null, // зависит от public
				'show_in_rest'        => null, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => null,
				'menu_icon'           => 'dashicons-hammer',
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => false,
				'supports'            => array('title','editor','excerpt', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => array(),
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			) );

			register_post_type('portfolio', array(
				'label'  => null,
				'labels' => array(
					'name'               => 'portfolio', // основное название для типа записи
					'singular_name'      => 'portfolio', // название для одной записи этого типа
					'add_new'            => 'add new', // для добавления новой записи
					'add_new_item'       => 'add new item', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'edit item', // для редактирования типа записи
					'new_item'           => 'new item', // текст новой записи
					'view_item'          => 'view item', // для просмотра записи этого типа.
				),
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => true, // зависит от public
				'exclude_from_search' => true, // зависит от public
				'show_ui'             => true, // зависит от public
				'show_in_menu'        => null, // показывать ли в меню адмнки
				'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
				'show_in_nav_menus'   => true, // зависит от public
				'show_in_rest'        => null, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => null,
				'menu_icon'           => 'dashicons-format-gallery', 
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => false,
				'supports'            => array('title','editor','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => array('portfolio'),
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			) );
			register_post_type('article', array(
				'label'  => null,
				'labels' => array(
					'name'               => 'article', // основное название для типа записи
					'singular_name'      => 'article', // название для одной записи этого типа
					'add_new'            => 'add new', // для добавления новой записи
					'add_new_item'       => 'add new item', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'edit item', // для редактирования типа записи
					'new_item'           => 'new item', // текст новой записи
					'view_item'          => 'view item', // для просмотра записи этого типа.
				),
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => true, // зависит от public
				'exclude_from_search' => true, // зависит от public
				'show_ui'             => true, // зависит от public
				'show_in_menu'        => null, // показывать ли в меню адмнки
				'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
				'show_in_nav_menus'   => true, // зависит от public
				'show_in_rest'        => null, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => null,
				'menu_icon'           => 'dashicons-welcome-write-blog', 
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => false,
				'supports'            => array('title','editor','thumbnail','author','excerpt' ), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => array('article'),
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			) );
			register_post_type('testimonial', array(
				'label'  => null,
				'labels' => array(
					'name'               => 'testimonial', // основное название для типа записи
					'singular_name'      => 'testimonial', // название для одной записи этого типа
					'add_new'            => 'add new', // для добавления новой записи
					'add_new_item'       => 'add new item', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'edit item', // для редактирования типа записи
					'new_item'           => 'new item', // текст новой записи
					'view_item'          => 'view item', // для просмотра записи этого типа.
				),
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => true, // зависит от public
				'exclude_from_search' => true, // зависит от public
				'show_ui'             => true, // зависит от public
				'show_in_menu'        => null, // показывать ли в меню адмнки
				'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
				'show_in_nav_menus'   => true, // зависит от public
				'show_in_rest'        => null, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => null,
				'menu_icon'           => 'dashicons-welcome-write-blog', 
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => false,
				'supports'            => array('title','editor','thumbnail','author','excerpt' ), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => array('testimonial'),
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			) );
		}

		// хук для регистрации
		add_action('init', 'create_taxonomy');
		function create_taxonomy(){
			register_taxonomy('portfolio', array('portfolio'), array(
				'label'                 => '', // определяется параметром $labels->name
				'labels'                => array(
					'name'              => 'Portfolio Category',
					'singular_name'     => 'category',
					'search_items'      => 'Search categories',
					'all_items'         => 'All categories',
					'view_item '        => 'View category',
					'parent_item'       => 'Parent category',
					'parent_item_colon' => 'Parent category:',
					'edit_item'         => 'Edit category',
					'update_item'       => 'Update category',
					'add_new_item'      => 'Add New category',
					'new_item_name'     => 'New category Name',
					'menu_name'         => 'category',
				),
				'description'           => '', // описание таксономии
				'public'                => true,
				'publicly_queryable'    => null, // равен аргументу public
				'hierarchical'          => false,
				'rewrite'               => true,
			) );
			register_taxonomy('article', array('article'), array(
				'label'                 => '', // определяется параметром $labels->name
				'labels'                => array(
					'name'              => 'article Category',
					'singular_name'     => 'category',
					'search_items'      => 'Search categories',
					'all_items'         => 'All categories',
					'view_item '        => 'View category',
					'parent_item'       => 'Parent category',
					'parent_item_colon' => 'Parent category:',
					'edit_item'         => 'Edit category',
					'update_item'       => 'Update category',
					'add_new_item'      => 'Add New category',
					'new_item_name'     => 'New category Name',
					'menu_name'         => 'category',
				),
				'description'           => '', // описание таксономии
				'public'                => true,
				'publicly_queryable'    => null, // равен аргументу public
				'hierarchical'          => false,
				'rewrite'               => true,
			) );
			register_taxonomy('testimonial', array('testimonial'), array(
				'label'                 => '', // определяется параметром $labels->name
				'labels'                => array(
				'name'              => 'testimonial feedback',
				'singular_name'     => 'feedback',
					'search_items'      => 'Search categories',
					'all_items'         => 'All categories',
					'view_item '        => 'View category',
					'parent_item'       => 'Parent category',
					'parent_item_colon' => 'Parent category:',
					'edit_item'         => 'Edit category',
					'update_item'       => 'Update category',
					'add_new_item'      => 'Add New category',
					'new_item_name'     => 'New category Name',
					'menu_name'         => 'feedback',
				),
				'description'           => '', // описание таксономии
				'public'                => true,
				'publicly_queryable'    => null, // равен аргументу public
				'hierarchical'          => false,
				'rewrite'               => true,
			) );
		}

	// add options page
	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'options site',
			'menu_title'	=> 'options themes',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'settings header',
			'menu_title'	=> 'header',
			'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'settings footer',
			'menu_title'	=> 'footer',
			'parent_slug'	=> 'theme-general-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'settings main',
			'menu_title'	=> 'main',
			'parent_slug'	=> 'theme-general-settings',
		));
		
	}

	
?>