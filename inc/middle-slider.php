<?php
/** 
 * Средний слайдер
 */
defined( 'ABSPATH' ) || exit;  

if( is_front_page() ) {
?>

<div class="middle-slider">
    <div class="middle-slider__images">
    <?php echo do_shortcode('[metaslider id="50"]'); ?>
    </div><!-- class="middle-slider__images" -->
    <div class="middle-slider__banners">
    <?php dynamic_sidebar( 'middle-slider-banners' ); ?>
    </div><!-- class="middle-slider__banners" -->
</div><!-- class="middle-slider" -->

<?php } ?>    