<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themecentury
 * @subpackage hamroclass
 * @since 1.0.0
 */
?>
<?php do_action( 'school3_middle_block_section' ); ?>
<?php do_action( 'school3_middle_slider_section' ); ?>
<?php do_action( 'school3_middle_menu_section' ); ?>
<?php do_action( 'school3_middle_baners_section' ); ?>
<?php do_action( 'school3_yandex_map_section' ); ?>
</div><!-- .hmc-container -->
</div><!-- #content -->
<?php do_action( 'hamroclass_footer' ); ?>
</div><!-- #page -->
<?php

	/**
     * hamroclass_after_page hook
     *
     * @since 1.0.0
     */
	do_action( 'hamroclass_after_page' );

	wp_footer(); 
	
	?>
</body>
</html>
