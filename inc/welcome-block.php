<?php
/**
 * Welocme a block 
 */
if( is_front_page() ) {
?>
<section id="hamroclass_page_block_widget-2" class="widget widget-layout2 hamroclass_page_block_widget hmc-full-widget">			<div class="about-us-wrapper" style="background-color: #f2f2f2; background-image:url();">
	<div class="hmc-container">
		<div class="row about-content-media-wrap">
        <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;	
        $args_info = array(   
            'post_type'    => 'welcome',    
	        'posts_per_page' => 1,   
	
        );
        $query_info = new WP_Query( $args_info ); 
        if( $query_info->have_posts() ){
	        while( $query_info->have_posts() ){
		        $query_info->the_post();
    ?>

    <?php the_content(); ?>   
 				
    <?php
	    }
	        wp_reset_postdata(); 	
    } 
    ?>
		</div>
	</div>
</section>
<?php get_template_part( 'inc/block', 'announcement' );  ?>
<?php } ?>
