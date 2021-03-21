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
 * Подключение OptionTree
 */

 //add_filter( 'ot_theme_mode', '__return_true' );
 add_filter( 'ot_show_pages', '__return_true' );

 require 'option-tree/ot-loader.php';
 require 'inc/meta-boxes.php';
 require 'inc/theme-options.php';
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
		<p>МУНИЦИПАЛЬНОЕ БЮДЖЕТНОЕ ОБЩЕОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ "СРЕДНЯЯ ОБЩЕОБРАЗОВАТЕЛЬНАЯ ШКОЛА №3" ГОРОДА ШУМЕРЛИ ЧУВАШСКОЙ РЕСПУБЛИКИ</p>	
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
/**
 * Блок наши успехи (протизвольные типы записей)
 */

add_action('init', 'school3_our_successes');
function school3_our_successes(){
	$labels = array(
		'name'               => 'Успехи', 
		'singular_name'      => 'Успех', 
		'add_new'            => 'Добавить новую',
		'add_new_item'       => 'Добавить новый успех',
		'edit_item'          => 'Редактировать успех',
		'new_item'           => 'Новая успех',
		'view_item'          => 'Посмотреть успех',
		'search_items'       => 'Найти успех',
		'not_found'          => 'Успехов не найдено',
		'not_found_in_trash' => 'В корзине успехов не найдено',
		'parent_item_colon'  => '',
		'menu_name'          => 'Успехи'
	  );
	 
	  $args = array(
		'labels' => $labels,
		'public' => true, // 
		'show_ui' => true, 
		'has_archive' => true, 
		'menu_icon' => 'dashicons-buddicons-groups', 
		'menu_position' => 20, 
		'supports' => array( 'title', 'editor', 'thumbnail')
	);	
	register_post_type('successes', $args  );
}

/**
 * Средний слайдер  
 */
add_action('school3_middle_slider_section','middle_slider_section', 10);
function middle_slider_section() {
	get_template_part( 'inc/middle','slider' ); 
}

function school3_register_middle_slider_widgets(){
	register_sidebar( array(
		'name' => 'Slider baners',
		'id' => 'middle-slider-banners',
		'description' => 'Банеры рядом со слайдером',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="widget-title"><span class="title-wrapper">',
		'after_title' => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'school3_register_middle_slider_widgets' );





/**
 * Среднее меню
 */
add_action('school3_middle_menu_section','middle_menu_foront_html', 10);
function middle_menu_foront_html() {
	get_template_part( 'inc/middle','menu' ); 
}

/**
 * Регистрация виджетов для среднего меню
 */
function school3_register_middle_menu_widgets_one(){
	register_sidebar( array(
		'name' => 'Среднее меню, раздел 1',
		'id' => 'middle_menu_1',
		'description' => 'Для первого информационного меню',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="widget-title"><span class="title-wrapper">',
		'after_title' => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'school3_register_middle_menu_widgets_one' );

function school3_register_middle_menu_widgets_two(){
	register_sidebar( array(
		'name' => 'Среднее меню, раздел 2',
		'id' => 'middle_menu_2',
		'description' => 'Для второго информационного меню',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="widget-title"><span class="title-wrapper">',
		'after_title' => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'school3_register_middle_menu_widgets_two' );

function school3_register_middle_menu_widgets_three(){
	register_sidebar( array(
		'name' => 'Среднее меню, раздел 3',
		'id' => 'middle_menu_3',
		'description' => 'Для третьего информационного меню',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="widget-title"><span class="title-wrapper">',
		'after_title' => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'school3_register_middle_menu_widgets_three' );

function school3_register_middle_menu_widgets_four(){
	register_sidebar( array(
		'name' => 'Среднее меню, раздел 4',
		'id' => 'middle_menu_4',
		'description' => 'Для четвертого информационного меню',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="widget-title"><span class="title-wrapper">',
		'after_title' => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'school3_register_middle_menu_widgets_four' );

/**
 * Регистрируем для раздела меню
 */

add_action( 'after_setup_theme', 'school3_register_nav_menu' );
function school3_register_nav_menu() {
	register_nav_menu( 'middele_menu_1', 'Middle Menu 1' );
	register_nav_menu( 'middele_menu_2', 'Middle Menu 2' );
	register_nav_menu( 'middele_menu_3', 'Middle Menu 3' );
	register_nav_menu( 'middele_menu_4', 'Middle Menu 4' );
}
?>
