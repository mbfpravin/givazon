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
  	<!-- hero banner section end here -->
  	<!-- generic container starts here -->
  	<div class="container generic-page">
  		<?php echo apply_filters('the_content',$post->post_content ); ?>
  		<!-- <figure class="content-image">
			<img src="<?php echo get_bloginfo('template_url'); ?>/img/toyfigure1.png" alt="images">
			<figcaption>Dolores et quas molestias excepturi sint occaecati cupiditate non provident. </figcaption>
		</figure>
		<figure class="content-image">
			<div class="videoImage">
				<img src="<?php echo get_bloginfo('template_url'); ?>/img/toyfigure2.png" alt="images">
				<div class="videoContent">
					<a href="https://vimeo.com/234287479" data-group="1" data-effect="mfp-fade" class="galleryItem  play-track">
						<i class="fa fa-play" aria-hidden="true"></i>
					</a>
					<h2>how Givazon works</h2>
				</div>
			</div>
			<figcaption>Dolores et quas molestias excepturi sint occaecati cupiditate non provident.</figcaption>
		</figure>
		<div class="row double-column">
	  		<div class="col-8 left-panel">
	  			<h2>H2 Setup that's easy-peasy!</h2>
	  			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
	  			<p>Impedit quo minus id quod maxime placeat facere possimus, omnis voluptas <a href="#">consequatur out perferendis</a> doloribus asperiores repellat officiis debitis.</p>
	  			<h3>h3 Register an account with the help of a parent or guardian</h3>
				<p>Impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et out officiis debitis out rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae</p>
				<p>Itaque earum rerum hic tenetur a sapiente delectus, ut out reiciendis voluptatibus maiores alias consequatur out perferendis doloribus asperiores repellat officiis debitis.</p>
				<h3>h3 Register an account with the help of a parent or guardian</h3>
				<p> Impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et out officiis debitis out rerum necessitatibus saepe.</p>
				<h4>h4 Problem 1: Too much choice</h4>
				<p>Itaque earum rerum hic tenetur a sapiente delectus, ut out reiciendis voluptatibus maiores alias consequatur out perferendis doloribus asperiores repellat officiis debitis. </p>
				<h4>h4 Problem 1: Too much choice</h4>
				<p> Itaque earum rerum hic tenetur a sapiente delectus, ut out reiciendis voluptatibus maiores alias consequatur out perferendis doloribus asperiores repellat officiis debitis.</p>
				<div class="generic-list">
					<h4>Some solutions</h4>
					<ul>
						<li>At vero eos et accusamus et iusto odio dignissimos.</li>
						<li>Ducimus qui blanditiis praesentium voluptatum delenit.</li>
						<li>Atque corrupti quos dolores et quas molestias.</li>
						<li>Excepturi sint occaecati cupiditate.</li>
						<li>Non provident, similiqu e sunt in culpa qui officio deserunt.</li>
						<li>Mollitia animi, id est laborum et dolorum fuga.</li>
					</ul>
				</div>
				<figure class="content-image">
					<img src="<?php echo get_bloginfo('template_url'); ?>/img/toyfigure1.png" alt="images">
					<figcaption>Dolores et quas molestias excepturi sint occaecati cupiditate non provident. </figcaption>
				</figure>
	  		</div>
			<div class="col-4 right-panel">
				<div class="sub-sections">
					<h3>h3 Register an account with the help of a parent</h3>
					<p>Impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et out officiis debitis out rerum necessitatibus. dolor repellendus. Temporibus autem, omnis.</p>
					<h4>Sub sections</h4>
					<ul>
						<li><a href="#">Atque corrupti quos</a></li>
						<li><a href="#">Excepturi sint occaecati cupidiate</a></li>
						<li><a href="#">Non provident, similiqu e sunt in</a></li>
						<li><a href="#">Mollitia animi, id est laborum et</a></li>
						<li><a href="#">Dolorum fuga</a></li>
					</ul>
  				</div>
  			</div>
  		</div> -->
  	</div>
  	<!-- generic container end here -->
<?php get_footer(); ?>