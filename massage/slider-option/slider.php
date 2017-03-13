<?php 

add_action( 'admin_menu', 'srz_slide' );
add_action( 'admin_init', 'srz_slide_option' );

function srz_slide(){
		// $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function
		add_submenu_page( 'edit.php?post_type=slider', 'Настройки Слайдера', 'Настройки Слайдера', 'manage_options', 'srz-slider-option', 'srz_slider_page_cb' );
}

function srz_slider_page_cb(){
?>
	<div class="wrap">
		<h2>Настройки слайдера</h2>
		<form action="options.php" method="post">
			<?php settings_fields( 'srz_slider_gr' ); ?>
			<?php do_settings_sections( 'srz-slider-option' ); ?>
			<?php submit_button(); ?>
		</form>
	</div>
<?php }

function srz_slide_option (){
	// $option_group, $option_name, $sanitize_callback
	register_setting( 'srz_slider_gr', 'srz_slide', 'srz_sanitaze_cb' );
	// $id, $title, $callback, $page
	add_settings_section('srz_size_section', 'Размеры слайдера', '', 'srz-slider-option');
	// $id, $title, $callback, $page, $section, $args
	add_settings_field('srz_width_slide', 'Длинна картинки', 'srz_width_cb', 'srz-slider-option', 'srz_size_section', array('label_for' => 'srz_width_slide'));
	add_settings_field('srz_height_slide', 'Высота картинки', 'srz_height_cb', 'srz-slider-option', 'srz_size_section', ['label_for' => 'srz_height_slide']);
}

function srz_sanitaze_cb($option){

	$clean_option = [];
	foreach ($option as $key => $value) {
		$clean_option[$key] = strip_tags($value);
	}
	return $clean_option;
}

function srz_width_cb() { 
$option = get_option( 'srz_slide' );
 
?>
<input type="text" name="srz_slide[srz_width_slide]" value="<?php echo esc_attr($option['srz_width_slide']); ?>" class="regular-text" id="srz_width_slide">

<?php }

function srz_height_cb() { 
$option = get_option( 'srz_slide' ); 

?>
<input type="text" name="srz_slide[srz_height_slide]" class="regular-text" id="srz_height_slide" value="<?php echo esc_attr($option['srz_height_slide']); ?>" >

<?php }
