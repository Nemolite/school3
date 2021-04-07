<?php
/**
 * Main a block 
 */
if( is_front_page() ) {
?>
<section id="hamroclass_page_block_widget-2" class="widget widget-layout2 hamroclass_page_block_widget hmc-full-widget">			<div class="about-us-wrapper" style="background-color: #f2f2f2; background-image:url();">
				<div class="hmc-container">
					<div class="row about-content-media-wrap">
                    <div class="about-media-part">
									<figure class="page-thumbnail-wrap">
									<img width="640" height="359" src="<?php echo ot_get_option( 'welcome_upload' ); ?>" class="attachment-full size-full wp-post-image" alt="" loading="lazy">										</figure>
			      				</div>
							<div class="about-content-part has-thumbnail">
									<div class="about-content-inner">
										<div class="about-block-title" id="link_news">
											<h2><?php echo ot_get_option( 'welcome_title' ); ?></h2>
										</div>
										<p>
										<?php echo ot_get_option( 'welcome_textarea' ); ?>
										</p>                  
									</div> 
								</div>
								
							</div>
				</div>
			</div>
</section>
<?php } ?>
