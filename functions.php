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

add_action('init', 'school3_welcome');
function school3_welcome(){
	$labels = array(
		'name'               => 'Приветствие', 
		'singular_name'      => 'Приветствие', 
		'add_new'            => 'Добавить приветствие',
		'add_new_item'       => 'Добавить новое приветствие',
		'edit_item'          => 'Редактировать приветствие',
		'new_item'           => 'Новое приветствие',
		'view_item'          => 'Посмотреть приветствие',
		'search_items'       => 'Найти приветствие',
		'not_found'          => 'Приветствие не найдено',
		'not_found_in_trash' => 'В корзине приветствий не найдено',
		'parent_item_colon'  => '',
		'menu_name'          => 'Приветствие'
	  );
	 
	  $args = array(
		'labels' => $labels,
		'public' => true, 
		'show_ui' => true, 
		'has_archive' => true, 
		'menu_icon' => 'dashicons-media-document', 
		'menu_position' => 20, 
		'supports' => array( 'title', 'editor')
	);	
	register_post_type('welcome', $args  );
}




add_action('hamroclass_main_header_section','school3_main_block_foront_html', 20);
function school3_main_block_foront_html() {
	get_template_part( 'inc/main', 'block' ); 
	//get_template_part( 'inc/welcome', 'block' ); 
}

/**
 * Новости 
 */
add_action('school3_news_discription_html','news_discription_html', 20);
function news_discription_html() {
?>	
<h2 class="section-title-doc"><span class="title-wrapper" id="link_news">Новости</span></h2> 
<?php
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
/**	
 * Банеры рядом со слайдером
 */

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

	register_nav_menu( 'middele_menu_11', 'Middle Menu 11' );
	register_nav_menu( 'middele_menu_21', 'Middle Menu 21' );
	register_nav_menu( 'middele_menu_31', 'Middle Menu 31' );

	register_nav_menu( 'global_menu', 'Global Menu' );
	register_nav_menu( 'after_global_menu', 'After Global Menu' );

	register_nav_menu( 'museum', 'Museum' );
}

/**
 * Блок средних банеров
 */
add_action('school3_middle_baners_section','middle_baners_section', 10);
function middle_baners_section() {
	get_template_part( 'inc/middle','baners' ); 
}
/**	
 * Банеры внизу документов и выше яндекс карт
 */

function school3_register_middle_baners_left_widgets(){
	register_sidebar( array(
		'name' => 'Middle baners left',
		'id' => 'middle-banners-left',
		'description' => 'Банеры внизу документов и выше яндекс карт',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="widget-title"><span class="title-wrapper">',
		'after_title' => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'school3_register_middle_baners_left_widgets' );


function school3_register_middle_baners_center_widgets(){
	register_sidebar( array(
		'name' => 'Middle baners center',
		'id' => 'middle-banners-center',
		'description' => 'Банеры внизу документов и выше яндекс карт',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="widget-title"><span class="title-wrapper">',
		'after_title' => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'school3_register_middle_baners_center_widgets' );

function school3_register_middle_baners_right_widgets(){
	register_sidebar( array(
		'name' => 'Middle baners right',
		'id' => 'middle-banners-right',
		'description' => 'Банеры внизу документов и выше яндекс карт',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="widget-title"><span class="title-wrapper">',
		'after_title' => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'school3_register_middle_baners_right_widgets' );



/**
 * Блок яндекс карты 
 */
add_action('school3_yandex_map_section','yandex_map_section', 10);
function yandex_map_section() {
	get_template_part( 'inc/middle','yandex' ); 
}
/**	
 * Банеры рядом с блоком яндекс карты
 */

function school3_register_yandex_map_widgets(){
	register_sidebar( array(
		'name' => 'Yandex Map baners',
		'id' => 'middle-yandex-map-banners',
		'description' => 'Банеры рядом с блоком яндекс карты',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="widget-title"><span class="title-wrapper">',
		'after_title' => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'school3_register_yandex_map_widgets' );

/**	
 * Страница новостей, полный список
 */

add_filter( 'template_include', 'page_news' );
function page_news( $template ) {
	if( is_page('page-news') ){
		if ( $new_template = locate_template( array( 'inc/page-news.php' ) ) )
			return $new_template ;
	}
	return $template;
}

/**
 * Пагинация
 */
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Страниц ".$paged." из ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

/**	
 * Футер (Ссылки на сайт разрабочика)
 */
function school3_link_web_developer_site(){	
	get_template_part( 'inc/footer','link' ); 
}
add_action( 'hamroclass_after_page', 'school3_link_web_developer_site' );

/**	
 * Сайтбар для школьного музея
 */

function school3_register_museum_widgets(){
	register_sidebar( array(
		'name' => 'Museum',
		'id' => 'museum',
		'description' => 'Сайтбар для музея',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="widget-title"><span class="title-wrapper">',
		'after_title' => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'school3_register_museum_widgets' );

?>
