<?php
	include "widg/widgets.php";

//Колбэк функция для wp_enqueue_scripts экшена
function striped_scripts() {
	// Theme stylesheet.
	// wp_enqueue_style функция для подключения файла стилей, первый параметр id файла, второй параметр путь к файлу, третий параметр опционально зависимость от других файлов
	wp_enqueue_style('grid5-core', get_template_directory_uri() . '/styles/5grid/core.css');
	wp_enqueue_style('grid5-core-desktop', get_template_directory_uri() . '/styles/5grid/core-desktop.css', array('grid5-core'));
	wp_enqueue_style('grid5-core-1200px', get_template_directory_uri() . '/styles/5grid/core-1200px.css', array('grid5-core', 'grid5-core-desktop'));
	wp_enqueue_style('grid5-core-noscript', get_template_directory_uri() . '/styles/5grid/core-noscript.css',array('grid5-core', 'grid5-core-desktop', 'grid5-core-1200px'));
	wp_enqueue_style('style', get_stylesheet_uri(), array('grid5-core', 'grid5-core-desktop', 'grid5-core-1200px', 'grid5-core-noscript'));

	// wp_enqueue_script функция для подключения файла JS скриптов, первый параметр id файла, второй параметр путь к файлу, третий параметр опционально зависимость от других файлов
	wp_enqueue_script('grid5-init', get_template_directory_uri() . '/styles/5grid/init.js?use=mobile,desktop,1200px,1000px&mobileUI=1&mobileUI.theme=none', array('jquery') );
}

//Экшен для подключения скриптов и стлией, первый параметр название экшена, второй колбэк функция
add_action('wp_enqueue_scripts', 'striped_scripts');

add_theme_support('post-thumbnails');

function striped_widgets_init() {
	register_sidebar(array(
		'name'          =>  'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets here',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<header><h2>',
		'after_title'   => '</h2></header>',
	));

	register_widget('StripedLatesProducts');
}

add_action('widgets_init', 'striped_widgets_init');

function striped_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Shop',
      'has_archive' => true,
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );
    register_post_type('product', $args);

    $labels = array(
    	'name'	=> __('Products category', 'our_language')
    );
    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	);

	register_taxonomy( 'product-category', array('product'), $args);

}
add_action( 'init', 'striped_custom_init');


register_nav_menus( 
		array(
			'main_menu' => __( 'Primary menu', 'themeloc' ),
			'foot_menu'  => __( 'Footer menu', 'themeloc' ),
		)
	 );