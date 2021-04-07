<?php
/**
 * Блок объявления
 */
?>
<?php
if ( 
    (!empty ( ot_get_option( 'annonce_title' ) ) )&&    
    (!empty ( ot_get_option( 'annonce_textarea' ) ) )  
   ) {
 ?>
<div class="annouce-section">
    <div class="annouce-content">
	<h2 class="section-title-doc"><span class="title-wrapper"><?php echo ot_get_option( 'annonce_title' ); ?></span></h2>
    <p><?php echo ot_get_option( 'annonce_textarea' ); ?></p>
    </div>
</div>
<?php } ?>