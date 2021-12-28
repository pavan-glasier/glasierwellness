
<?php
global $wp;
$wp->parse_request();
//echo home_url( $wp->request );
?>

<div class="col-md-4 col-lg-3 col-sm-12 column-filters d-lg-block d-none">
    <form action="<?php echo site_url();?>/product-search/" class="content-search content-search--style2 d-flex mb-3" method="post" >
        <div class="input-wrap">
            <input type="hidden" name="title" value="<?php echo home_url( $wp->request );?>" />
            <input type="text" class="form-control" name="search" value="" placeholder="Search for Products">
        </div>
        <button type="submit"><i class="icon-search"></i></button>
    </form>
    <div class="column-filters-inside">
        <div class="side-block">
            <h3 class="side-block-title">Categories</h3>
            <ul class="category-list">
                <?php
                $args = array('hide_empty=1');
                $terms = get_terms('product_category', $args);
                if (!empty($terms) && !is_wp_error($terms)) {
                    $count = count($terms);
                    $i = 0;
                    // $term_list = '<p class="my_term-archive"></p>';
                    foreach ($terms as $term) {
                        $i++;
                        $term_list .= '<li><a href="' . esc_url(get_term_link($term)) . '" alt="">' . $term->name . '</a></li>';
                    }
                    echo $term_list;
                }
                ?>
            </ul>
        </div>



    </div>
</div>