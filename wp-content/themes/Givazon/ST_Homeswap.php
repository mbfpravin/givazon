<?php
/**********
Template Name: Home Swap
**********/
$postId = $subPage->ID;
$currentpage = get_post($postId);
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
<!-- swap start -->
		<div class="swap">
		    <div class="container text-center">
		    	<div class="col-8 center-block intro-text">
		      		<h2><?php echo $currentpage->post_title; ?></h2>
					<?php echo apply_filters('the_content',$currentpage->post_content); ?>
		      	</div>
		      	<div class="swap-card">
			      	<div class="row process-innerBlk">
			      		<?php foreach($subPages as $subPage){
                       		$featImage = wp_get_attachment_url(get_post_thumbnail_id($subPage->ID) );
                        ?> 
						<div class="col-4 process-content">
							<div class="swap-card-image">
								<img src="<?php echo $featImage; ?>" alt="images">
							</div>
							<h3><?php echo $subPage->post_title; ?></h3>
								<?php echo apply_filters('the_content',$subPage->post_content); ?>
						</div>
						<?php } ?>
					</div>
				</div>
		    </div>
		</div>
		<!-- swap end -->
