<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Givazon</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.8.3.js"></script>
	<style type="text/css">
        body{
            background-color: #fff;
        }  
        .render-blk{ opacity:0; }
    </style>
   <script type="text/javascript">
	    var styleSheets = ["css/app.css","style.css"];
		for (i = 0; i < styleSheets.length; i++) { 
			 var linkVal = "<?php echo get_bloginfo('template_url'); ?>/"+styleSheets[i];
			 var link = document.createElement('link')
			 link.setAttribute('rel', 'stylesheet')
			 link.setAttribute('type', 'text/css')
			 link.setAttribute('href', linkVal);
			 document.getElementsByTagName('head')[0].appendChild(link)
		}
    </script>
     <script>
			var templateUri = "<?php  echo get_bloginfo('template_url'); ?>";
			var blogUri = "<?php echo get_bloginfo('url'); ?>";
			var tmpl_url = '<?php echo TMPL_URL; ?>';
	</script>
	<noscript>
		<style type="text/css" media="screen">
			.render-blk{ opacity: 1; }	
			.intro-hero-banner{
				-webkit-transition-property:inherit;
			    -moz-transition-property: inherit;
			    -o-transition-property: inherit;
			    transition-property: inherit;
			    -webkit-transition-duration: inherit;
			    -moz-transition-duration: inherit;
			    -o-transition-duration: inherit;
			    transition-duration: inherit;
			    -webkit-transition-delay: inherit;
			    -moz-transition-delay: inherit;
			    -o-transition-delay: inherit;
			    transition-delay: inherit;
			    -webkit-transition-timing-function: inherit;
			    -moz-transition-timing-function: inherit;
			    -o-transition-timing-function: inherit;
			    transition-timing-function: inherit;
			}
			.intro-hero-banner-content{ display: block; }
		</style>
	</noscript>
</head>
<body> 
  	<div class="subpage render-blk">
  	<!-- header section starts here -->
	<header>
		<div class="container">
			<div class="menu-blk clearfix">
				<a href="<?php echo get_bloginfo('url'); ?>" class="logo">
					<img src="<?php echo get_bloginfo('template_url'); ?>/img/mobilelogo.png" alt="images" />
				</a>
				<div class="menu-toggle">
					<div class="one"></div>
					<div class="two"></div>
					<div class="three"></div>
				</div>	
				<nav>
					<ul>
						<?php 
							  $headerLinks = get_menu('mainmenu');
						if(!empty($headerLinks)) { 
							foreach ($headerLinks as $key => $headerLink) {?>
							<li <?php if (get_permalink($post->ID)==$headerLink->url) { echo ' class="active" '; }?>>
									<a href="<?php echo $headerLink->url; ?>" title="<?php echo $headerLink->title; ?>" >
										<?php echo $headerLink->title; ?>
									</a>
								</li>
					<?php }  } ?>
					</ul>
				</nav>
			</div>	
	    </div>		
	</header>
  	<!-- header section end here -->
