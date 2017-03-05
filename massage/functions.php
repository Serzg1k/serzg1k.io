<?php 
include 'core/metabox.php';

function load_my_theme_scripts() {
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('carousel', get_template_directory_uri() . '/css/carousel.css');
	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('ie10-viewport-bug-workaround', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css');
	wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('holder.min', get_template_directory_uri() . '/js/holder.min.js');
	wp_enqueue_script('jquery.min', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
}
add_action('wp_enqueue_scripts', 'load_my_theme_scripts');

register_nav_menus( 
		array(
			'top' => __( 'top_menu', 'twentyseventeen'),
			)
	 );
add_theme_support('post-thumbnails');

function sh_pagination() {
        global $wp_query;
        ?>
        <?php if($wp_query->max_num_pages > 1): ?>
            <?php
            if(!$wp_query->query_vars['paged']) {
                $paged = 1;
            } else {
                $paged = $wp_query->query_vars['paged'];
            }
            ?>
            <div class="navi ">
                <div>Страница <?php echo $paged; ?> из <?php echo $wp_query->max_num_pages; ?></div>
                <?php the_posts_pagination( array(
                    'mid_size' => 1,
                    'prev_text' => '<',
                    'next_text' => '>',
                    'screen_reader_text' => ' '
                ) ); ?>
            </div>
        <?php endif; ?>
        <?php
    }

add_action('init', 'slider_carousel' );
function slider_carousel(){
    $args  = array(
        'public' => true,
        'menu_icon' => admin_url() . 'images/media-button-video.gif',
        'supports' => array('title', 'editor',  'thumbnail'),
        'labels'  => array(
            'name' => 'Слайд',
            'all_items' => 'Все слайды',
            'add_new' => 'Новый слайд',
            'add_new_item' => 'Добавить слайд',
            'edit_item'    => 'Редактирование слайда',
          ),
    );
    register_post_type('slider', $args );
}
