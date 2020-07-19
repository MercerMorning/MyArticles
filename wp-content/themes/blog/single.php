<?php get_header(); ?>
			<div class="wrap">
                <?php get_sidebar();?>
					<div class="bloder-content">

					<div class="blog-box1">
						<div class="blog-box-image">
							<?php the_post_thumbnail( 'full' ) ?>
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

