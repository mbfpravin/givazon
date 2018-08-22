<?php  
$currentYear = date("Y");
$designYear = 2016;
$year = ($currentYear > $designYear) ? $designYear." - ".date("y") : $currentYear;
?>
<!-- footer start -->
		<footer>
			<?php 
				$facebook=get_option('facebook');?>
				<?php if ( is_home() || is_front_page()) { ?>
					<?php if ($facebook): ?>
						<a href="<?php echo $facebook; ?>" target="_blank"><img src="<?php echo get_bloginfo('template_url'); ?>/img/SMM.png" class="side-image" alt="images">
					<?php endif;?>
					</a> <?php } ?>
			<div class="container">	
				<div class="container">
					<?php $footerLinks = get_menu('footermenu');
					if(!empty($footerLinks)) { ?>
						<div class="fR">
							<ul class="privacy">
								<?php if (is_array($footerLinks) && count($footerLinks)>0) {
		                        		foreach ($footerLinks as $key => $footerLink) { ?>
									<li <?php if (get_permalink($post->ID)==$footerLink->url) { echo ' class="active" '; }?>>
										<a href="<?php echo $footerLink->url; ?>" title="<?php echo $footerLink->title; ?>" >
											<?php echo $footerLink->title; ?>
										</a>
									</li>
								<?php } }  ?>
							</ul>
						</div>
						<?php }  ?>	
					<div class="copy">&#169; <?php echo $year; ?> Givazon. All rights reserved.</div>
				</div>
			</div>
		</footer>	
		<!-- footer start -->
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
 	<script type="text/javascript">
 	//nprogress init
       NProgress.configure({ showSpinner: false }).start();
 	</script>
 	<script src="<?php echo get_bloginfo('template_url'); ?>/js/app.js"></script>
 	<script src="<?php echo get_bloginfo('template_url'); ?>/js/lib/custom.js"></script>
</body>
</html>