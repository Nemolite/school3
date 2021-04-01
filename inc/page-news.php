<?php
/** 
 * Станица новостей (полный список)
 */
get_header();
/*
 * centurylib_breadcrumbs_section_template - hook
 *
 * @hooked - centurylib_breadcrumbs_section_callback - 10
 *
 * @since 1.0.0
 */
do_action( 'centurylib_breadcrumbs_section_template' );
?>
<?php
do_action( 'school3_main_block_foront_html' );
?>
<div id="primary" class="content-area main-content-area">
	<main id="main" class="site-main" role="main">
	<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;	
$args_news = array(   
    'post_type'    => 'post',
	'posts_per_page' => 5,   
	'paged' => $paged,
);

$query_news = new WP_Query( $args_news ); 
if( $query_news->have_posts() ){
	while( $query_news->have_posts() ){
		$query_news->the_post();
		?>
	<div class="news__block">
    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    <?php     
        $content_news = get_the_content();
        $trimmed_content_news = wp_trim_words( $content_news, 40, '<a href="'. get_permalink() .'"> ...Читать далее</a>' );
        echo $trimmed_content_news;
    ?>
    </div>
		<?php
			
	}
	?>	
	<div class="pagination_news">
	<?php if (function_exists("pagination")) {
                	pagination($query_news->max_num_pages);
	}
	?>				
	</div>
	<?php
	wp_reset_postdata(); 	
} 
else
	echo 'Новостей нет.';
?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_sidebar();

get_footer();