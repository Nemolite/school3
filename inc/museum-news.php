<?php
/**
 * Новости на странице Школьного музея
 */
?>
<div id="primary" class="content-area museum-content-area">
	<main id="main" class="site-main" role="main">
    <h2 class="museum-content-title">Новости музея</h2> 
	<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;	
$args_news = array(   
    'post_type'    => 'post',
    'category_name' => 'museum',
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