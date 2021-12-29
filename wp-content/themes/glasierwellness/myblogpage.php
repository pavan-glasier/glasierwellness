<?php
/**
 * 
 * Template Name: my blog Page
 * 
 **/
 get_header(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="entry-content">
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => '2',
        'paged' => 1,
    );
    $blog_posts = new WP_Query( $args );
    ?>
 
    <?php if ( $blog_posts->have_posts() ) : ?>
        <div class="blog-posts">
            <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <h2 style="height: 500px;"><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
            <?php endwhile; ?>
        </div>
        <button class="loadmore">Load More</button>
    <?php endif; ?>
</div>

<script>
    var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' );?>'
    var page = 2
$(window).scroll(function() {
    // alert($(document).height());
    if ($(window).scrollTop() == $(document).height() - $(window).height()) {
        var data = {
            'action': 'load_posts_by_ajax',
            'page': page,
            'security': '<?php echo wp_create_nonce( 'load_more_posts' );?>'
        };
 
        $.post(ajaxurl, data, function(response) {
            if($.trim(response) != '') {
                $('.blog-posts').append(response);
                page++;
            } else {
                $('.loadmore').hide();
            }
        });
    }
});
</script>

<script>
//     var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' );?>'
//     var page = 2;
//     $(function() {
//     $('body').on('click', '.loadmore', function() {
//         var data = {
//             'action': 'load_posts_by_ajax',
//             'page': page,
//             'security': '<?php echo wp_create_nonce( 'load_more_posts' );?>'
//         };
 
//         $.post(ajaxurl, data, function(response) {
//             if($.trim(response) != '') {
//                 $('.blog-posts').append(response);
//                 page++;
//             } else {
//                 $('.loadmore').hide();
//             }
//         });
//     });
// });
</script>

<?php get_footer(); ?>