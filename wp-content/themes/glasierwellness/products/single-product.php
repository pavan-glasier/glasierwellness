<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo site_url(); ?>">Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container mt-6">
            <div class="row product-block">
                <div class="col-md-6">
                    <div class="product-block-gallery">

                        <?php
                        $images = get_field('product_images');
                        if ($images) :
                            $a = 1;
                        ?>
                            <div class="product-previews" id="productPreviews">

                                <?php foreach ($images as $image) : ?>
                                    <a href="#" class="product-previews-item <?php if ($a == 1) { ?> active <?php } ?>" a="<?php echo $a++; ?>" data-image="<?php echo esc_url($image['url']); ?>" data-zoom-image="<?php echo esc_url($image['url']); ?>">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </a>
                                <?php endforeach; ?>

                            </div>
                            <?php endif; ?>
                            <div class="product-block-mainimage">
                                <img id="mainImage" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>" data-zoom-image="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>" />
                            </div>
                        
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="product-block-info">
                        <!-- <div class="star-rating"><span class="txt-gradient"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></span>
                            <span class="rating-text">2 customer reviews</span>
                        </div> -->
                        <h2 class="product-block-title"><?php echo get_the_title(); ?></h2>

                        <?php $prices = get_field('prices');
                        if ($prices) :
                            if (!empty($prices['sell_price'])) { ?>
                                <div class="product-block-price"><span> ₹ <?php echo $prices['regular_price']; ?> /-</span> ₹ <?php echo $prices['sell_price']; ?> /-</div>
                            <?php } else { ?>
                                <div class="product-block-price">₹ <?php echo $prices['regular_price']; ?> /-</div>
                            <?php } ?>
                        <?php endif; ?>
                        <!-- <div class="product-block-price">$46,97</div> -->

                        
                        <div class="product-block-description">
                            <div>
                                <?php echo get_the_content(); ?>
                            </div>
                        </div>
                        <div class="product-block-price-comment mt-15">
                        Category : 
                        <?php
                            global $post;
                            $postID = $post->ID;
                            $getProductCat = get_the_terms( $postID, 'product_category' );
                            foreach ( $getProductCat as $productInfo ) {
                                $category_id = $productInfo->term_id; ?>
                            <a href="<?php echo get_category_link( $category_id );?>"><?php echo $productInfo->name;?></a> 
                            <span class="saparts"> / </span>
                            <?php } ?>

                        </div>
                        
                        <div class="product-block-actions">
                            <form class="" id="" method="post" novalidate>
                                <div class="successform">
                                    <p>Your message was sent successfully!</p>
                                </div>
                                <div class="errorform">
                                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                                </div>
                                <div class="input-group">
                                    <span>
                                        <i class="icon-user"></i>
                                    </span>
                                    <input type="text" name="bookingname" class="form-control" autocomplete="off" placeholder="Your Name*" />
                                </div>
                                <div class="row row-xs-space mt-1">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span>
                                                <i class="icon-email2"></i>
                                            </span>
                                            <input type="text" name="bookingemail" class="form-control" autocomplete="off" placeholder="Your Email*" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mt-1 mt-sm-0">
                                        <div class="input-group">
                                            <span>
                                                <i class="icon-smartphone"></i>
                                            </span>
                                            <input type="text" name="bookingphone" class="form-control" autocomplete="off" placeholder="Your Phone" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-xs-space mt-1">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span>
                                                <i class="icon-birthday"></i>
                                            </span>
                                            <input type="text" name="bookingage" class="form-control" autocomplete="off" placeholder="Your age" />
                                        </div>
                                    </div>
                                </div>
                                <div class="selectWrapper input-group mt-1">
                                    <span>
                                        <i class="icon-micro"></i>
                                    </span>
                                    <select name="bookingservice" class="form-control">
                                        <option selected="selected" disabled="disabled">Select Service</option>
                                        <option value="Molecular Testing & Oncology">Molecular Testing & Oncology</option>
                                        <option value="Histology">Histology</option>
                                        <option value="General Diagnostic Tests">General Diagnostic Tests</option>
                                        <option value="Naturopathic">Naturopathic</option>
                                        <option value="Genetics Tests">Genetics Tests</option>
                                        <option value="Cytology">Cytology</option>
                                    </select>
                                </div>
                                <div class="input-group flex-nowrap mt-1">
                                    <span>
                                        <i class="icon-calendar2"></i>
                                    </span>
                                    <div class="datepicker-wrap">
                                        <input name="bookingdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
                                    </div>
                                </div>
                                <div class="input-group flex-nowrap mt-1">
                                    <span>
                                        <i class="icon-clock"></i>
                                    </span>
                                    <div class="datepicker-wrap">
                                        <input name="bookingtime" type="text" class="form-control timepicker" placeholder="Time">
                                    </div>
                                </div>
                                <textarea name="bookingmessage" class="form-control" placeholder="Your comment"></textarea>
                                <div class="text-right mt-2">
                                    <button type="submit" class="btn btn-sm btn-hover-fill">Book now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section mt-5 mb-5">
        <div class="container">
            <div class="prd-tabs-wrap">
                <!-- Nav tabs -->
                <div class="nav nav-pills" role="tablist">
                    <a class="nav-link active" data-toggle="pill" href="#tab1" role="tab">Description</a>
                    <!-- <a class="nav-link" data-toggle="pill" href="#tab2" role="tab">Reviews (2)</a> -->
                </div>
                <!-- Tab panels -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                    <?php echo get_field('long_description'); ?>
                    </div>
                    <!-- <div role="tabpanel" class="tab-pane" id="tab2">
                        <h6>Joseph C. Lane</h6>
                        <div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
                        <p>Excellent clinic which has looked after my families dental healthcare for many years. Last year I received private treatment for a tooth implant and the whole process was professionally managed and delivered.</p>
                        <div class="divider"></div>
                        <h6>Jenny M. Fischer</h6>
                        <div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
                        <p>I am so grateful for the opportunity to come to the Loma Linda School of Dentistry. The prices are more than fair and my mouth is already doing much better. Everyone is helpful</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section" style="display: none;">
        <div class="container">
            <div class="title-wrap text-center">
                <h2 class="h1">Similar Products</h2>
                <div class="h-decor"></div>
            </div>
            <div class="prd-grid prd-carousel slick-initialized slick-slider">
                <div class="prd">
                    <div class="prd-img">
                        <a href="shop-product.html"><img src="<?php echo get_template_directory_uri(); ?>/images/product/prd-5.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="prd-info">
                        <h3><a href="shop-product.html">Waterpik ADA Accepted WP-660 Aquarius Water Flosser</a></h3>
                        <div class="price">$59.98</div>
                        <div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>

                        <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                    </div>
                </div>
                <div class="prd">
                    <div class="prd-img">
                        <a href="shop-product.html"><img src="<?php echo get_template_directory_uri(); ?>/images/product/prd-2.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="prd-info">
                        <h3><a href="shop-product.html">Active Wow Teeth Whitening Charcoal Powder</a></h3>
                        <div class="price">$38.88</div>
                        <div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
                        <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                    </div>
                </div>
                <div class="prd">
                    <div class="prd-img">
                        <a href="shop-product.html"><img src="<?php echo get_template_directory_uri(); ?>/images/product/prd-7.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="prd-info">
                        <h3><a href="shop-product.html">Oral-B Glide Pro-Health Comfort Plus Mint Flavor Floss</a></h3>
                        <div class="price">$5.79</div>
                        <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                    </div>
                </div>
                <div class="prd">
                    <div class="prd-img">
                        <a href="shop-product.html"><img src="<?php echo get_template_directory_uri(); ?>/images/product/prd-8.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="prd-info">
                        <h3><a href="shop-product.html">Cool Mint Listerine Antiseptic Mouthwash</a></h3>
                        <div class="price">$5.98</div>
                        <div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>

                        <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                    </div>
                </div>
                <div class="prd">
                    <div class="prd-img">
                        <a href="shop-product.html"><img src="<?php echo get_template_directory_uri(); ?>/images/product/prd-9.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="prd-info">
                        <h3><a href="shop-product.html">5 Pack Charcoal Toothbrush</a></h3>
                        <div class="price">$11.62</div>
                        <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>