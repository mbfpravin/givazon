<?php
/**********
Template Name: Givazon News
**********/
get_header('sub');
global $post;
$noOfPost=3;
$newspostArugs = array(
    'post_type'     => 'News',
    'numberposts' => -1,
    'order'         => 'ASC', 
    'orderby'       => 'menu_order',
    'post_status'   => 'post_date',
); 
$newsCount = get_posts($newspostArugs);
$newsArgs = array(
    'post_type'     => 'News',
    'numberposts'   => $noOfPost,
    'order'         => 'ASC', 
    'orderby'       => 'menu_order',
    'post_status'   => 'post_date',
); 
$newsPages = get_posts($newsArgs);
?> 
		<div class="homebanner">
			<div class="container">
				<div class="breadcrumb">
					<ul>
						<?php 
						if (function_exists('bcn_display')) {
	                		bcn_display();
	            		}
	            		?>
					</ul>
				</div>
				<div class="homebanner-content">
					<h1><?php echo $post->post_title ?></h1>	
				</div>
			</div>
		</div>
<!-- news start -->
		<div class="news">
			<div class="container text-center">
				<div class="col-8 center-block intro-text">
					
					<?php echo apply_filters('the_content',$post->post_content); ?>
		      	</div>
		      	<div class="row news-card" id ="newsList">
		      		<?php foreach($newsPages as $newsPage){
                       		$featImage = wp_get_attachment_url(get_post_thumbnail_id($newsPage->ID) );
                       		$char_limit = 150;
				            $content = apply_filters('the_content',$newsPage->post_content);
                        ?> 
					<div class="col-4 news-blk" data-count="<?php echo count($countPosts); ?>"   data-id=" <?php echo $newsPage->ID; ?>">
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
					<input type="hidden" id="pst_count" value="<?php echo count($newsCount); ?>">
					
					<!-- <?php if(count($newsCount)>$noOfPost){ 
						var_dump( count($newsCount .'>'. $noOfPost));
						 ?> -->
					<div class="more-button" id="load-more-news">
			      		<a href="javascript:void(0)" class="button">more news</a>
			      	</div>
			      	<!--  <?php } ?> -->
				</div>
	      	</div>
      	</div>
<?php get_footer(); ?>