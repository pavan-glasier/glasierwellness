<?php

/**
 * 
 * Template Name: Product Page
 * 
 **/

get_header();
?>



<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo site_url();?>">Home</a>
                    <span>Products</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2  mb-md-3 mb-lg-4">
                <h1>All Products</h1>
                <div class="h-decor"></div>
            </div>
        </div>
        <div class="container mt-3 mt-lg-5">
            <div class="row">
                
                <?php get_template_part('products/product-cat-list'); ?>
                <div class="col-md-8 col-lg-9">
                    <div class="filters-row align-items-center" style="display: none;">
                        <div class="filters-row-left">
                            <?php
                            ?>
                            <span>Showing 1-9 of 18 results</span>

                            <div class="form-inline">
                                <div class="select-wrapper">
                                    <select id="select" name="sorting">
                                        <option value="">Default Sorting</option>
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
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $('#select').change(function() {
                                                location.href = $(this).val();
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="filters-row-right d-flex align-items-center">
                            <span>Pages:</span>
                            <ul class="pagination justify-content-center pl-1">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="prd-grid">
                        <?php $products = new WP_Query(array('post_type' => 'products', 'order' => 'DESC'));
                        $a = 1;
                        $b = 1;
                        while ($products->have_posts()) : $products->the_post(); ?>
                            
                            <?php get_template_part('products/product-list'); ?>

                        <?php endwhile; ?>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="mt-5 pagination justify-content-center">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><span class="page-link">...</span></li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>