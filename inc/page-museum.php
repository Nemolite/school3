<?php
/*
Template Name: Museum
*/
?>
<?php get_header();?>
    <div class="museum-content">
        <h2 class="museum-content-title">Школьный музей</h2> 
        <div class="museum-content-info">
            <div class="museum-content-img">
                <div class="museum-content-img-wrapper"> 
                    <img src="<?php echo ot_get_option( 'museum_upload' ); ?>" alt="Школьный музей">
                    
                </div>
            </div>
            <div class="museum-content-text">
                <p><?php echo ot_get_option( 'museum_textarea' ); ?></p>
            </div>
            <div class="museum-content-news">

            <?php get_template_part( 'inc/museum','news' ); ?>
            
            </div>
        </div>
        <div class="museum-content-sidebar">
        <?php dynamic_sidebar( 'museum' ); ?>   
        </div>
    </div>

<?php get_footer(); ?>