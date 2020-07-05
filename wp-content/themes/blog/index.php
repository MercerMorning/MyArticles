<?php get_header(); ?>
    <div class="wrap">
        <div class="about">
            <?php dynamic_sidebar('main_side'); ?>
            <div class="services-sidebar">
                <h4>Categories</h4>
                <ul>
                    <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="#">Lorem ipsum dolor sit amet</a></li>
                </ul><br>
                <h4>Archives</h4>
                <ul>
                    <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="#">Jan, 2012</a></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="#">Feb, 2012</a></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="#">March, 2012</a></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="#">April, 2012</a></li>
                </ul>
            </div>
            <div class="bloder-content">
                <?php if( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="bloger-grid">
                            <div class="blog-img">
                                <?php the_post_thumbnail( 'mysize' ) ?>
                            </div>
                            <div class="bloger-content">
                                <h5><a href="single.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</a></h5>
                                <p><?php the_excerpt(); ?></p>
                                <ul>
                                    <li><a href="#"><?php the_title();?></a></li>
                                    <li><a href="#">: <?php the_time('d.m.Y');?></a></li>
                                    <li><a href="<?php the_permalink();?>"><span>подробнее</span></a></li>
                                </ul>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="clear"> </div>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
    <div class="clear"> </div>
    <!-- End-content-gallery-->
    <!-- DC Pagination:C9 Start -->
    <div class="wrap">
        <!-- DC Pagination:A3 Start -->
        <ul class="dc_pagination dc_paginationA dc_paginationA03">
            <li><a href="#" class="first">First</a></li>
            <li><a href="#" class="previous">Previous</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#" class="current">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" class="next">Next</a></li>
            <li><a href="#" class="last">Last</a></li>
        </ul>
        <!-- DC Pagination:A3 End -->
        <div class="clear"> </div>
        <!-- DC Pagination:C9 End -->
    </div>
    <div class="clear"> </div>
<?php get_footer(); ?>