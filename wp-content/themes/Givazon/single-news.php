<?php 
get_header('sub');?>
  	<!-- hero banner section starts here -->
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
	<div class="container generic-page">
  		<?php echo apply_filters('the_content',$post->post_content ); ?>
  	</div>
<?php get_footer(); ?>