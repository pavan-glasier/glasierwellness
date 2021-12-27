<div class="prd">
    <div class="prd-img">
        <a href="<?php the_permalink(); ?>">
            <?php 
            if ( has_post_thumbnail() ) { ?>
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" class="img-fluid" alt="<?php echo get_the_title(); ?>">
            <?php }
            else { ?>
                <img src="<?=site_url();?>/wp-content/uploads/2021/12/no-preview.png" alt="noprivew" >
            <?php }
            ?>
        </a>
    </div>
    <div class="prd-info">
        <h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
        <a class="btn" href="#" data-toggle="modal" data-target="#product<?php echo $post->ID; ?>">
            <i class="icon-right-arrow"></i>Get Best Quote<i class="icon-right-arrow"></i>
        </a>
    </div>
</div>

<div class="modal modal-product modal-form fade " id="product<?php echo $post->ID; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <button aria-label='Close' class='close' data-dismiss='modal'>
                <i class="icon-error"></i>
            </button>
            <div class="modal-body">
                <div class="modal-form text-center">
                    <h3>Get Best Quote </h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-prd-img">
                                <?php 
                                if ( has_post_thumbnail() ) { ?>
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" class="img-fluid product-thumb" alt="<?php echo get_the_title(); ?>">
                                <?php }
                                else { ?>
                                    <img src="<?=site_url();?>/wp-content/uploads/2021/12/no-preview.png" alt="noprivew" >
                                <?php }
                                ?>
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="detail-prd-info">
                                <h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                            </div>
                            <div>
                            <?php echo do_shortcode('[contact-form-7 id="200" title="Inquiry Form" html_class="contact-form"]');?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>