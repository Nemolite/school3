<?php
/** 
 * Яндекс карты и банеры
 */
defined( 'ABSPATH' ) || exit;  

if( is_front_page() ) {
?>

<div class="middle-yandex">
    <div class="middle-yandex__images">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1c78756c97741624dbf94526d4e523bbb024b35c9bb3bdd27b0810b450eab7a7&amp;width=800&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
    </div><!-- class="middle-yandex__images" -->
    <div class="middle-yandex__banners">
    <?php dynamic_sidebar( 'middle-yandex-map-banners' ); ?>
    </div><!-- class="middle-yandex__banners" -->
</div><!-- class="middle-yandex" -->

<?php } ?>    