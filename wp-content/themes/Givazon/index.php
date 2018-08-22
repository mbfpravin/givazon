<?php
/**********
Template Name: Home page
**********/
get_header();

$bannerArgs = array(
    'post_type'     => 'banners',
    'numberposts' => -1,
    'order'         => 'ASC', 
    'orderby'       => 'menu_order',
    'post_status'   => 'publish',   
); 
$banners = get_posts($bannerArgs);
?>

<!-- banner start -->	
<?php 
if(is_array($banners) && count($banners) > 0){ ?>
<?php 
	foreach($banners as $banner){
        $featImage = wp_get_attachment_url(get_post_thumbnail_id($banner->ID) );
        $playstore = get_option('googleapp'); 
        $appstore  = get_option('appstore'); 
        ?> 
		<div class="homebanner">
			<div class="container">
				<div class="homebanner-content">
					<h1><?php echo $banner->post_title; ?></h1>
					<div class="app-section">
						<?php echo apply_filters('the_content',$banner->post_content); ?>
						<ul>
							<?php if ($playstore): ?>
							<li><a href="<?php echo $playstore; ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/img/google-play.png" alt="images"></a></li>
							<?php endif;?>
							<?php if ($appstore): ?>
							<li><a href="<?php echo $appstore ; ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/img/app-store.png" alt="images"></a></li>
							<?php endif;?>
						</ul>
					</div>
				</div>
			</div>
			<div class="homebanner-bottom">
				<img class="hero-image" src="<?php echo $featImage; ?>" alt="images">
			</div>
			<div class="learn-more text-center">
				<div class="container" id="main">
					<h6><?php echo $banner->post_excerpt; ?></h6>
					<img src="<?php echo get_bloginfo('template_url'); ?>/img/learn-more.gif" alt="images">
				</div>
			</div>
		</div>
		<?php } ?>
		<?php } ?>
		<!-- banner end -->	
		<!--  -->
		<?php
	$subPageArgs = array( 
	   'post_parent'   => $post->ID,
	   'post_type'     => 'page', 
	   'order'         => 'ASC', 
	   'orderby'       => 'menu_order',
	   'post_status'   => 'publish',
	   'numberposts'=>-1 
	); 
	$subPages = get_posts($subPageArgs);
	if (is_array($subPages) && count($subPages)>0) { 
	   	foreach ($subPages as $subPage) {
		   $postId = $subPage->ID;
		   $pageTemplate = get_post_meta($postId, '_wp_page_template', true);
		   $getTempPath = TEMPLATEPATH .'/'. $pageTemplate;
		   include TEMPLATEPATH .'/'. $pageTemplate;
	   	}
	} 
?>
<?php get_footer(); ?>