<?php

/**
 * 
 * Template Name: Product Search
 * 
 **/

get_header();
?>
<?php
$search = $_GET['search'];
// echo $search;
?>
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo site_url(); ?>">Home</a>
                    <span>Search Products : "<?php echo $search;?>"</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">

        <div class="container mt-3 mb-lg-5 mt-lg-5">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="prd-grid">
                        <?php
                        $the_query = new WP_Query(
                            array(
                                'posts_per_page' => -1,
                                's' => esc_attr($_GET['search']),
                                'post_type' => 'products'
                            )
                        );
                        if ($_GET['search'] == "") {
                            echo '<div class="text-center mb-2 mb-md-3 mb-lg-4"><h1>invalid keyword!</h1><div class="h-decor"></div></div>';

                        }
                        else if ($_GET['search'] == " ") {
                            echo '<div class="text-center mb-2 mb-md-3 mb-lg-4"><h1>Nothing Found !</h1><div class="h-decor"></div></div>';
                        } else {
                            if ($the_query->have_posts()) :
                                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <?php
                                    include('product-list.php');
                                    ?>
                        <?php endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<div class="text-center mb-2 mb-md-3 mb-lg-4"><h1>No Results Found !</h1><div class="h-decor"></div></div>';
                            endif;
                        }
                        ?>
                    </div>
                    <div class="clearfix"></div>
                    <!-- <ul class="mt-5 pagination justify-content-center">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><span class="page-link">...</span></li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>
