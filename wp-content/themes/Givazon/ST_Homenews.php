<?php
/**********
Template Name: Home News
**********/
get_header();
$currentpage = get_post($postId);
$newsArgs = array(
    'post_type'     => 'News',
    'numberposts' => -1,
    'order'         => 'ASC', 
    'orderby'       => 'post_date',
    'post_status'   => 'publish',
    'meta_query' => array(
       array(
           'key' => 'show_in_home',
           'value' => 'yes'
       )                                                
   ),   
); 
$newsPages = get_posts($newsArgs);

?>
<!-- news start -->
		<div class="news">
			<div class="container text-center">
				<div class="col-8 center-block intro-text">
					<h2><?php echo $currentpage->post_title; ?></h2>
					<?php echo apply_filters('the_content',$currentpage->post_content); ?>
		      	</div>
		      	<div class="row news-card">
		      		<?php foreach($newsPages as $key => $newsPage){
                       		$featImage = wp_get_attachment_url(get_post_thumbnail_id($newsPage->ID) );
                       		if($key>=3){
				              break;
				            }
				            $char_limit = 100;
				            $content = apply_filters('the_content',$newsPage->post_content);
                        ?> 
					<div class="col-4 news-blk">
						<div class="news-image news-bg">
							<img src="<?php echo $featImage ?>" alt="images">
							<div class="news-content">
								<div class="news-date"><h6><?php echo get_the_date( 'F jS, Y', $newsPage->ID); ?></h6></div>
								<h3><?php echo $newsPage->post_title; ?> </h3>
								<p><?php echo substr(strip_tags($content), 0, $char_limit); ?></p>
								<h6><a href="<?php echo get_permalink($newsPage->ID);?>" class="continue_btn">continue reading</a></h6>	
							</div>
						</div>
					</div>
					<?php } ?>
					<div class="more-button">
			      		<a href="<?php echo get_bloginfo('url'); ?>/givazon-news/" class="button">more news</a>
			      	</div>
				</div>
	      	</div>
      	</div>