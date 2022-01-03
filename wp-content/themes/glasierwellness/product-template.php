<?php

/**
 * 
 * Template Name: Product Page
 * 
 **/

get_header(); ?>

<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo site_url(); ?>">Home</a>
                    <span>Products</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2 mb-md-3 mb-lg-4">
                <h1>All Products</h1>
                <div class="h-decor"></div>
            </div>
        </div>
        <div class="container mt-3 mt-lg-5">
            <div class="row">

                <?php get_template_part('products/product-cat-list'); ?>

                <div class="col-md-8 col-lg-9">

                    <div class="filters-row align-items-center d-md-none d-flex">
                        <div class="d-flex align-items-center justify-content-between filters-row-left col-md-12 p-0">
                            <?php

                            $paged = 1;
                            $products = new WP_Query(array(
                                'post_type' => 'products', 
                                'posts_per_page' => 9,
                                'order' => 'DESC',
                                'paged' => 1
                            ));
                            $a = 1;
                            $b = 1;
                            ?>
                            <div class="form-inline w-100">
                                <div class="select-wrapper">
                                    <select id="select" name="sorting">
                                        <option value="">Category</option>
                                        <?php
                                        $args = array('hide_empty=1');
                                        $terms = get_terms('product_category', $args);
                                        if (!empty($terms) && !is_wp_error($terms)) {
                                            $count = count($terms);
                                            $i = 0;
                                            // $term_list = '<p class="my_term-archive"></p>';
                                            foreach ($terms as $term) {
                                                $i++;
                                                $term_list .= '<option value="' . esc_url(get_term_link($term)) . '" >' . $term->name . '</option>';
                                            }
                                            echo $term_list;
                                        }
                                        ?>
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prd-grid" id="prd-grid">
                        <?php
                        while ($products->have_posts()) : $products->the_post(); ?>
                            <!-- PRODUCT LIST -->
                            <?php get_template_part('products/product-list'); ?>
                            <!-- // PRODUCT LIST -->
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                
                    <div class="clearfix mb-3"></div>
                    <div class="row justify-content-center mt-5 mb-5 loadMore hidden" id="loadMore">
                        <img src="<?php echo site_url()?>/wp-content/uploads/2021/12/loadmore.gif" alt="loading" />
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>