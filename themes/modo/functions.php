<?php
	// Vite - dev and prod
	add_action('wp_enqueue_scripts', function () {
		if (@file_get_contents("http://localhost:5174/@vite/client")) {
			echo '<style>html { visibility: hidden; }</style>';
			wp_enqueue_script('vite-client', "http://localhost:5174/@vite/client", [], null, false);
			wp_enqueue_script('modo-js', "http://localhost:5174/src/js/main.js", [], null, true);
			add_filter('script_loader_tag', function ($tag, $handle) {
				if ($handle === 'vite-client' || $handle === 'modo-js') {
					return str_replace('<script ', '<script type="module" ', $tag);
				} return $tag;
			}, 10, 2);
		} else {
			$manifest = json_decode(file_get_contents(get_theme_file_path('dist/.vite/manifest.json')), true)['src/js/main.js'] ?? null;
			if ($manifest) {
				wp_enqueue_script('modo-js', get_theme_file_uri('dist/assets/' . basename($manifest['file'])), [], null, true);
				if (!empty($manifest['css'][0])) wp_enqueue_style('modo-css', get_theme_file_uri('dist/assets/' . basename($manifest['css'][0])));
			}
		}
	});

	// Theme setup
	function modo_theme_setup() {
		add_theme_support( 'post-thumbnails' );
	}
	add_action( 'after_setup_theme', 'modo_theme_setup' );

	// Menus
	function modo_register_menus() {
    register_nav_menus([
			'primary-menu' => __('Primary Menu', 'modo'),
    ]);
	}
	add_action('init', 'modo_register_menus');

	function add_menu_link_class( $atts, $item, $args ) {
		if (property_exists($args, 'link_class')) {
			$atts['class'] = $args->link_class;
		}
		return $atts;
	}
	add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

	function wrap_menu_link_text($title, $item, $args, $depth) {
		if (property_exists($args, 'link_class')) {
			$title = '<span class="nav-text js-roll-text" data-text="' . $title . '">' . $title . '</span>';
		}
		return $title;
	}
	add_filter('nav_menu_item_title', 'wrap_menu_link_text', 10, 4);

	// Custom Post Types
	function exhibitions_post_type() {
		$args = [
			'labels' => [
				'name'          => 'Exhibitions',
				'singular_name' => 'Exhibition',
				'menu_name'     => 'Exhibitions',
				'add_new'       => 'Add New Exhibition',
				'add_new_item'  => 'Add New Exhibition',
				'new_item'      => 'New Exhibition',
				'edit_item'     => 'Edit Exhibition',
				'view_item'     => 'View Exhibition',
				'all_items'     => 'All Exhibitions'
			],
			'public' => true,
			'has_archive' => true,
			'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
			'menu_icon' => 'dashicons-tickets',
			'show_in_rest' => true,
    ];

    register_post_type( 'exhibition', $args );
	}
	add_action( 'init', 'exhibitions_post_type' );

	function collections_post_type() {
		$args = [
			'labels' => [
				'name'          => 'Collections',
				'singular_name' => 'Collection',
				'menu_name'     => 'Collections',
				'add_new'       => 'Add New Collection',
				'add_new_item'  => 'Add New Collection',
				'new_item'      => 'New Collection',
				'edit_item'     => 'Edit Collection',
				'view_item'     => 'View Collection',
				'all_items'     => 'All Collections'
			],
			'public' => true,
			'has_archive' => true,
			'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
			'menu_icon' => 'dashicons-portfolio',
			'show_in_rest' => true,
    ];

    register_post_type( 'collection', $args );
	}
	add_action( 'init', 'collections_post_type' );

	function testimonials_post_type() {
		$args = [
			'labels' => [
				'name'          => 'Testimonials',
				'singular_name' => 'Testimonial',
				'menu_name'     => 'Testimonials',
				'add_new'       => 'Add New Testimonial',
				'add_new_item'  => 'Add New Testimonial',
				'new_item'      => 'New Testimonial',
				'edit_item'     => 'Edit Testimonial',
				'view_item'     => 'View Testimonial',
				'all_items'     => 'All Testimonials'
			],
			'public' => true,
			'has_archive' => true,
			'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
			'menu_icon' => 'dashicons-testimonial',
			'show_in_rest' => true,
    ];

    register_post_type( 'testimonial', $args );
	}
	add_action( 'init', 'testimonials_post_type' );

	// AOS
	function modo_gsap_script() {
		wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js', array(), false, true );
		wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/SplitText.min.js', array('gsap-js'), false, true );
		wp_enqueue_script( 'gsap-str', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
	}
	add_action('wp_enqueue_scripts', 'modo_gsap_script');