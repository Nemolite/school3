<?php
/** 
 * Яндекс карты и банеры
 */
defined( 'ABSPATH' ) || exit;  

if( is_front_page() ) {
?>

<div class="middle-yandex">
    <div class="middle-yandex__images">
    для чндекс карты
    </div><!-- class="middle-yandex__images" -->
    <div class="middle-yandex__banners">
    <?php dynamic_sidebar( 'middle-yandex-map-banners' ); ?>
    </div><!-- class="middle-yandex__banners" -->
</div><!-- class="middle-yandex" -->

<?php } ?>    