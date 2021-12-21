<div class="col-lg-3 aside-left mt-5 mt-lg-0">
    <div class="side-block">
        <form action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" method="get" class="content-search d-flex">
            <div class="input-wrap">
                <input type="text" class="form-control" placeholder="Keywords" name="s">
            </div>
            <button type="submit"><i class="icon-search"></i></button>
        </form>
    </div>
    <div class="side-block">
        <h3 class="side-block-title">Categories</h3>
        <ul class="categories-list">
            <?php
            $categories = get_categories();
            foreach ($categories as $category) {
                echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
            } ?>
        </ul>
    </div>

    <div class="side-block">
        <h3 class="side-block-title">Tags</h3>
        <ul class="tags-list">
            <?php
            $posttags = get_tags();
            if ($posttags) {
                foreach ($posttags as $tag) { ?>
                    <li><a href="<?php echo esc_attr(get_tag_link($tag->term_id)); ?>"><?php echo $tag->name; ?></a></li>
            <?php }
            }
            ?>
        </ul>
    </div>
    <div class="side-block">
        <h3 class="side-block-title">Recent Posts</h3>
        <?php
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 4,
            'post_status' => 'publish'
        ));
        foreach ($recent_posts as $post_item) : ?>
            <div class="blog-post post-preview">
                <div class="post-image">
                    <a href="<?php echo get_permalink($post_item['ID']) ?>">
                        <?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>
                    </a>
                </div>
                <div>
                    <h4 class="post-title">
                        <a href="<?php echo get_permalink($post_item['ID']) ?>"><?php echo $post_item['post_title'] ?></a>
                    </h4>
                    <div class="post-meta">
                        <div class="post-meta-author text-nowrap">by <a href="#"><i>admin</i></a></div>
                        <div class="post-meta-date text-nowrap"><i class="icon icon-clock3"></i>17 Jan, 2018</div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <div class="side-block">
        <h3 class="side-block-title">Archives</h3>
        <ul class="marker-list-md">
            <?php
            $args = array(
                'type'            => 'monthly',
                'limit'           => '',
                'format'          => 'html',
                'before'          => '',
                'after'           => '',
                'show_post_count' => false,
                'echo'            => 1,
                'order'           => 'DESC'
            );
            wp_get_archives($args);
            ?>
        </ul>
    </div>
</div>