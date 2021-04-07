<?php
/**
 * The middle block
 */
defined( 'ABSPATH' ) || exit;  

if( is_front_page() ) {
?>

<section id="hamroclass_featured_posts-2" class="widget widget-layout2 hamroclass_featured_posts hmc-full-widget">            
  
                <div class="hmc-block-wrapper featured-posts hmc-clearfix">               
                    <h2 class="section-title"><span class="title-wrapper" id="link_middle_block">Наши успехи</span></h2>                    
                          <div class="hmc-featured-posts-wrapper">


<?php
$args = array(
    'post_type' =>'successes',
    'order' => 'ASC',
	'posts_per_page' => 4,
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
        $query->the_post();
?>
        <div class="hmc-single-post-wrap hmc-clearfix">
        <div class="hmc-single-post">
            <div class="hmc-post-thumb">
                <a href="<?php echo get_permalink();?>">
                    <img width="300" height="300" src=" <?php echo get_the_post_thumbnail_url(); ?>" class="attachment-hamroclass-thumb-300x300 size-hamroclass-thumb-300x300 wp-post-image" alt="" loading="lazy">                                            </a>
            </div><!-- .hmc-post-thumb -->
            <div class="hmc-post-content">
                <h3 class="hmc-post-title small-size" id="fix-hmc-post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h3>
                <div class="hmc-post-meta"></div>
                <div class="hmc-post-description">
                        <?php          
                        $mycontent = get_the_content();
                        $trimmed_content = wp_trim_words( $mycontent , 7, '<a href="'. get_permalink() .'"> [ ... ]</a>' ); 
                        echo $trimmed_content;                         
                        ?>
                </div><!-- .hamroclass-post-description -->
            </div><!-- .hmc-post-content -->
        </div> <!-- hmc-single-post -->
    </div><!-- .hmc-single-post-wrap -->
<?php
	}
} 
wp_reset_postdata();
?>
                               
            </div><!-- .hmc-featured-posts-wrapper -->
               
            </div>
</section>
<?php
}


