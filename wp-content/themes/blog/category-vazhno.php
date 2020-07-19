<?php get_header(); ?>
    <div class="wrap">
        <div class="about">
            <?php dynamic_sidebar('main_side'); ?>
            <?php get_sidebar();?>
            <div class="bloder-content">
                <?php if( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="bloger-grid">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="blog-img">
                                    <?php the_post_thumbnail( 'thumbnail' ) ?>
                                </div>
                            <?php endif ;?>
                            <div class="bloger-content">
                                <p><?php the_content(); ?></p>
                                <ul>
                                    <li><a href="#"><?php the_title();?></a></li>
                                    <li><a href="#">: <?php the_time('d.m.Y');?></a></li>
                                    <li style="display: none"></li>
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
        <?php if(function_exists('wp_paginate')) {

            wp_paginate();

        } ?>

        <!--        <ul class="dc_pagination dc_paginationA dc_paginationA03">-->
        <!--            <li><a href="#" class="first">First</a></li>-->
        <!--            <li><a href="#" class="previous">Previous</a></li>-->
        <!--            <li><a href="#">1</a></li>-->
        <!--            <li><a href="#">2</a></li>-->
        <!--            <li><a href="#" class="current">3</a></li>-->
        <!--            <li><a href="#">4</a></li>-->
        <!--            <li><a href="#">5</a></li>-->
        <!--            <li><a href="#" class="next">Next</a></li>-->
        <!--            <li><a href="#" class="last">Last</a></li>-->
        <!--        </ul>-->
        <!-- DC Pagination:A3 End -->
        <div class="clear"> </div>
        <!-- DC Pagination:C9 End -->
    </div>
    <div class="clear"> </div>
<?php get_footer(); ?>