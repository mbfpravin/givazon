<?php
/**********
Template Name: Home Process
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
$i=0;
?>
<!-- process start -->	
        <div class="process">
			<div class="container">
				<div class="col-8 center-block text-center intro-text">
					<h2><?php echo $currentpage->post_title; ?></h2>
					<?php echo apply_filters('the_content',$currentpage->post_content); ?>
				</div>
				<div class="row process-innerBlk">
				 <?php foreach ($subPages as $subPage) { 
                  $i++  
                 ?>
					<div class="col-4 process-content">
						<div class="process-number"><?php echo $i; ?></div>
						<h3><?php echo $currentpage->post_title; ?></h3>
						<?php echo apply_filters('the_content',$currentpage->post_content); ?>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- process end -->	
