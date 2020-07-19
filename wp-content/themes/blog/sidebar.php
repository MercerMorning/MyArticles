<div class="about">
    <div class="services-sidebar">
        <h4>Categories</h4>
        <?php if( $tags = get_terms( array( 'taxonomy' => 'post_tag', 'hide_empty' => false)))?>
        <ul>
            <?php foreach ( $tags as $tag ) : ?>
            <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="<?php echo get_term_link( $tag )?>"><?php echo $tag->name?></a></li>
            <?php endforeach; ?>
        </ul><br>
        <h4>Archives</h4>
        <ul>
            <li><img src="<?php echo get_stylesheet_directory_uri()?>/images/pointer.png" title="pointer" /><a href="#">Jan, 2012</a></li>
        </ul>
        <?php dynamic_sidebar( 'calendar' )?>
    </div>