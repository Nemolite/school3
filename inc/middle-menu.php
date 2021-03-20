<?php
/** 
 * Среднее меню
 */
defined( 'ABSPATH' ) || exit;  

if( is_front_page() ) {

$hamroclass_footer_widget_option = get_theme_mod( 'hamroclass_footer_widget_option', 'show' );

if( $hamroclass_footer_widget_option == 'hide' ) {
    return;
}

if( !is_active_sidebar( 'middle_menu_1' ) &&
	!is_active_sidebar( 'middle_menu_2' ) &&
    !is_active_sidebar( 'middle_menu_3' ) &&
    !is_active_sidebar( 'middle_menu_4' ) ) {
	   return;
}
$hamroclass_footer_layout = get_theme_mod( 'footer_widget_layout', 'column_three' );
$footer_widget_area_class = '';
if($hamroclass_footer_layout=='column_three' || $hamroclass_footer_layout=='column_four' ){
    $footer_widget_area_class = 'footer-sidebar-area';
}
?>
<div id="mid-footer" class="hamroclass-main-footer footer-widgets-wrapper footer_<?php echo esc_attr( $hamroclass_footer_layout ); ?> hmc-clearfix">
    <div class="hmc-container">
        <div class="footer-widgets-area hmc-clearfix">
            <div class="hmc-footer-widget-wrapper hmc-column-wrapper hmc-clearfix">
          		<div class="hmc-footer-widget widget-area wow fadeInLeft <?php echo esc_attr($footer_widget_area_class); ?>" data-wow-duration="0.5s">
          			<?php dynamic_sidebar( 'middle_menu_1' ); ?>
          		</div>
      		    <?php if( $hamroclass_footer_layout != 'column_one' ){ ?>
                <div class="hmc-footer-widget widget-area wow fadeInLeft <?php echo esc_attr($footer_widget_area_class); ?>" data-wow-duration="1s">
          		    <?php dynamic_sidebar( 'middle_menu_2' ); ?>
          		</div>
                <?php } ?>
                <?php if( $hamroclass_footer_layout == 'column_three' || $hamroclass_footer_layout == 'column_four' ){ ?>
                <div class="hmc-footer-widget widget-area wow fadeInLeft <?php echo esc_attr($footer_widget_area_class); ?>" data-wow-duration="1.5s">
                    <?php dynamic_sidebar( 'middle_menu_3' ); ?>
                </div>
                <?php } ?>
                <?php if( $hamroclass_footer_layout == 'column_four' ){ ?>
                <div class="hmc-footer-widget widget-area wow fadeInLeft <?php echo esc_attr($footer_widget_area_class); ?>" data-wow-duration="2s">
                    <?php dynamic_sidebar( 'middle_menu_4' ); ?>
                </div>
                <?php } ?>
            </div><!-- .hmc-footer-widget-wrapper -->
        </div><!-- .footer-widgets-area -->
    </div><!-- .hmc-container -->
</div><!-- .footer-widgets-wrapper -->
<?php } ?>