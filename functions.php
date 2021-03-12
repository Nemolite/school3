<?php
/**
 * Дочерняя тема для темы hamroclass 
 * 
 */

defined( 'ABSPATH' ) || exit;

/**
 * Helper
 */
function show($param){
	echo "<pre>";
	print_r($param);
	echo "</per>";
}

/**
 * Extension scipts and styles
 */ 
function school3_scripts_style() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'school3-style', get_stylesheet_directory_uri() .'/assets/css/school3.css' );
	wp_enqueue_script( 'school3-script', get_stylesheet_directory_uri() . '/assets/js/school3.js', array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'school3_scripts_style' );


/**
 * Bottom footer side info - modified
 *
 * @since 1.0.0
 */
function hamroclass_footer_site_info_section() {
?>
		<div class="site-info">		 
		<p>Официальный сайт </p>	
		</div><!-- .site-info -->
<?php }

/**
 * Main a block
 */
add_action('hamroclass_main_header_section','school3_main_block_foront_html', 20);
function school3_main_block_foront_html() {
	get_template_part( 'inc/main', 'block' ); 
}

/**
 * The middle block 
 */
add_action('school3_middle_block_section','middle_block_foront_html', 10);
function middle_block_foront_html() {
	get_template_part( 'inc/middle', 'block' ); 
}

/**
 * Baners
 */
require 'inc/baners.php';
?>
