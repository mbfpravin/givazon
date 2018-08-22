<?php
/**********
Template Name: Home Toys
**********/
$postId = $subPage->ID;
$subPageArgs = array( 
                        'post_parent'  => $postId, 
                        'post_type'     => 'page', 
                        'order'         => 'ASC', 
                        'orderby'       => 'menu_order',
                        'post_status'   => 'publish', 
                        'numberposts'  => -1
                ); 
$subPages = get_posts($subPageArgs);
?>
<!-- toys start -->
		<div class="toys">
			<div class="container toys-block">
				<?php foreach($subPages as $subPage){
                       $featImage = wp_get_attachment_url(get_post_thumbnail_id($subPage->ID) );
                        ?> 
				<div class="toys-block clearfix">
					<div class="toys-image">
						<img src="<?php echo $featImage; ?>" alt="images">
					</div>
					<div class="toys-content">
						<div class="mobile-accordion">
							<h6><?php echo $subPage->post_excerpt; ?></h6>
							<h2><?php echo $subPage->post_title; ?></h2>
						</div>
						<div class="mobile-accordion-content">
							<?php echo apply_filters('the_content',$subPage->post_content); ?>
						</div>
						
					</div>
		    	</div>
		    	<?php } ?>
			</div>
		</div>
		<!-- toys end -->
