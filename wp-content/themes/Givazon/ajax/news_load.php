<?php
global $_POST;
$load_url = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
include $load_url[0].'wp-load.php';
$noOfPost = 3;
$excludePostArray = $_POST['postIdArray'];
$newsArgs = array(
    'post_type'     => 'News',
    'post__not_in' => $excludePostArray,
    'numberposts'   => $noOfPost,
    'order'         => 'ASC', 
    'orderby'       => 'menu_order',
    'post_status'   => 'post_date',
); 
$newsPages = get_posts($newsArgs);

foreach ($newsPages as $newsPage) {
    $featImage = wp_get_attachment_url(get_post_thumbnail_id($newsPage->ID) );
    echo    '<div class="col-4 news-blk" data-id="'.$newsPage->ID.'">
              <div class="news-image news-bg">
          		<img src="'.$featImage.'" alt="images">
          			<div class="news-content">
                  <div class="news-date"><h6>"'.get_the_date( 'F jS, Y', $newsPage->ID).'"</h6></div>
              				<h3>'.$newsPage->post_title.'</h3>
              				    <p> '.$newsPage->post_content.'</p>
                      <h6><a href="'. get_permalink($newsPage->ID).'" class="continue_btn">continue reading</a></h6> 
            			</div>
          		</div>
          </div>';
	 }
?>