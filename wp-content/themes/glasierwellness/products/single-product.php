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
                if ($images) : ?>
                        <div class="product-previews" id="productPreviews">
                            <a href="#" class="product-previews-item active" data-image="images/product/prd-big-1.jpg" data-zoom-image="images/product/prd-big-1.jpg">
                                <img src="images/product/prd-thumb-1.jpg" />
                            </a>
                            <a href="#" class="product-previews-item" data-image="images/product/prd-big-2.jpg" data-zoom-image="images/product/prd-big-2.jpg">
                                <img src="images/product/prd-thumb-2.jpg" />
                            </a>
                            <a href="#" class="product-previews-item" data-image="images/product/prd-big-3.jpg" data-zoom-image="images/product/prd-big-3.jpg">
                                <img src="images/product/prd-thumb-3.jpg" />
                            </a>
                        </div>
                        <?php endif; ?>

                        <div class="product-block-mainimage">
                            <img id="mainImage" src="images/product/prd-big-1.jpg" data-zoom-image="images/product/prd-big-1.jpg" />
                        </div>
                    </div>
                </div>

                
                    <ul>
                        <?php foreach ($images as $image) : ?>
                            <li>
                                <a href="<?php echo esc_url($image['url']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </a>
                                <p><?php echo esc_html($image['caption']); ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                
                <div class="col-md-6">
                    <div class="product-block-info">
                        <div class="star-rating"><span class="txt-gradient"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></span>
                            <span class="rating-text">2 customer reviews</span>
                        </div>
                        <h2 class="product-block-title">Activated Charcoal Teeth Whitening Toothpaste MINT Flavor</h2>
                        <div class="product-block-price">$46,97</div>
                        <div class="product-block-price-comment">+ Free Shipping</div>
                        <div class="product-block-description">
                            <table class="table table-striped">
                                <tr>
                                    <td><span>Location:</span></td>
                                    <td>Front, Driver Or Passenger Side</td>
                                </tr>
                                <tr>
                                    <td><span>Product Fit:</span></td>
                                    <td>Direct Fit</td>
                                </tr>
                                <tr>
                                    <td><span>Quantity Sold:</span></td>
                                    <td>Sold Individually</td>
                                </tr>
                                <tr>
                                    <td><span>Anticipated Ship Out Time:</span></td>
                                    <td>1-2 Business Days</td>
                                </tr>
                            </table>
                        </div>
                        <div class="product-block-actions">
                            <div class="qty-count">
                                <span class="count-reduce">–</span>
                                <input type="text" class="count-input" value="1" readonly>
                                <span class="count-add">+</span>
                            </div>
                            <a href="#" class="btn btn-fill btn-noanimate product-block-add-to-cart ">Add To Cart<i class="icon-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section mt-5">
        <div class="container">
            <div class="prd-tabs-wrap">
                <!-- Nav tabs -->
                <div class="nav nav-pills" role="tablist">
                    <a class="nav-link active" data-toggle="pill" href="#tab1" role="tab">Description</a>
                    <a class="nav-link" data-toggle="pill" href="#tab2" role="tab">Reviews (2)</a>
                </div>
                <!-- Tab panels -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <h5>Super Saver Tube</h5>
                        <p>Order the Dental Expert activated charcoal toothpaste and get more for less with our super-saver tube. Get maximum value for your money and whiten your teeth with total confidence. At Dental Expert, we believe in providing the highest possible value to our customers at all times.</p>
                        <h5>100% Safe & Natural</h5>
                        <p>Get whiter teeth and improved oral health today using bamboo charcoal and other all-natural ingredients whose value and benefits have been acknowledged for years. Dental Expert teeth whitening toothpaste hasno artificial colors or chemicals, and is 100% safe for use by adults.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <h6>Joseph C. Lane</h6>
                        <div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
                        <p>Excellent clinic which has looked after my families dental healthcare for many years. Last year I received private treatment for a tooth implant and the whole process was professionally managed and delivered.</p>
                        <div class="divider"></div>
                        <h6>Jenny M. Fischer</h6>
                        <div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
                        <p>I am so grateful for the opportunity to come to the Loma Linda School of Dentistry. The prices are more than fair and my mouth is already doing much better. Everyone is helpful</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section">
        <div class="container">
            <div class="title-wrap text-center">
                <h2 class="h1">Similar Products</h2>
                <div class="h-decor"></div>
            </div>
            <div class="prd-grid prd-carousel slick-initialized slick-slider">
                <div class="prd">
                    <div class="prd-img">
                        <a href="shop-product.html"><img src="images/product/prd-5.jpg" class="img-fluid" alt=""></a>
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
                        <a href="shop-product.html"><img src="images/product/prd-2.jpg" class="img-fluid" alt=""></a>
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
                        <a href="shop-product.html"><img src="images/product/prd-7.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="prd-info">
                        <h3><a href="shop-product.html">Oral-B Glide Pro-Health Comfort Plus Mint Flavor Floss</a></h3>
                        <div class="price">$5.79</div>
                        <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                    </div>
                </div>
                <div class="prd">
                    <div class="prd-img">
                        <a href="shop-product.html"><img src="images/product/prd-8.jpg" class="img-fluid" alt=""></a>
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
                        <a href="shop-product.html"><img src="images/product/prd-9.jpg" class="img-fluid" alt=""></a>
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