<?php
/**
 * Средний банерный ряд
 */
?>
<?php 
defined( 'ABSPATH' ) || exit;  

if( is_front_page() ) {
?>
<div class="middle-baners">

    <div class="middle-baners-left">
    <?php dynamic_sidebar( 'middle-banners-left' ); ?>
    </div>
    <div class="middle-baners-center">
    <?php dynamic_sidebar( 'middle-banners-center' ); ?>
    </div>
    <div class="middle-baners-right">
    <?php dynamic_sidebar( 'middle-banners-right' ); ?>
    </div>
</div>
<?php } ?>