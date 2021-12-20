<div class="prd">
    <div class="prd-img">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>" class="img-fluid" alt=""></a>
    </div>
    <div class="prd-info">
        <h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
        <div class="price">$39.97</div>

        <a class="btn" href="#" data-toggle="modal" data-target="#product<?php echo $post->ID; ?>"><i class="icon-cart"></i>Get Best Quote<i class="icon-cart"></i></a>
    </div>
</div>

<div class="modal modal-product modal-form fade " id="product<?php echo $post->ID; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <button aria-label='Close' class='close' data-dismiss='modal'>
                <i class="icon-error"></i>
            </button>
            <div class="modal-body">
                <div class="modal-form">
                    <h3>Book an Appointment</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-prd-img">
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>" class="img-fluid product-thumb" alt="<?php echo get_the_title(); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="detail-prd-info">
                                <h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                                <div class="price">$39.97</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>