<?php
/**
 * Дочерняя тема для темы hamroclass 
 * 
 */

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
?>
