<?php get_header(); ?>
			<div class="wrap">
				<div class="about">
					<div class="services-sidebar">
					<h4>Categories</h4>
					<ul>
						<li><img src="images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
						<li><img src="images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
						<li><img src="images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
						<li><img src="images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
						<li><img src="images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
						<li><img src="images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
						<li><img src="images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
						<li><img src="images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
						<li><img src="images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
					</ul><br>
					<h4>Archives</h4>
					<ul>
						<li><img src="images/pointer.png" title="pointer" /><a href="#">Jan, 2012</a></li>
						<li><img src="images/pointer.png" title="pointer" /><a href="#">Feb, 2012</a></li>
						<li><img src="images/pointer.png" title="pointer" /><a href="#">March, 2012</a></li>
						<li><img src="images/pointer.png" title="pointer" /><a href="#">April, 2012</a></li>
					</ul>
				</div>
					<div class="bloder-content">

					<div class="blog-box1">
						<div class="blog-box-image">
							<?php the_post_thumbnail( 'thumbnail' ) ?>
						</div>
						<div class="blog-box-content">
							<h5><a href="#"><?php the_title(); ?></a></h5>
                            <p><?php the_content(); ?></p>
							<ul>
								<li><a href="#">Lorem ipsum</a></li>
								<li><a href="#">: <?php the_time(); ?></a></li>
								<li><a href="#"><span>Read more</span></a></li>
							</ul>
						</div>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			</div>
<div class="clear"> </div>
			<!-- End-content-gallery-->
			<!-- DC Pagination:C9 Start -->
			<div class="wrap">
	    		<div class="clear"> </div>
	<!-- DC Pagination:C9 End -->
		</div>
	<div class="clear"> </div>
<?php get_footer(); ?>

