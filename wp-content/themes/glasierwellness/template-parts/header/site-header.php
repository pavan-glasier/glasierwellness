<?php

/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage glasier_wellness
 * @since Glasier Wellness 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= (true === get_theme_mod('display_title_and_tagline', true)) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu('primary') ? ' has-menu' : '';
?>
<?php //echo esc_attr( $wrapper_classes ); 
?>
<header class="header ">
    <div class="header-quickLinks js-header-quickLinks d-lg-none">
        <div class="quickLinks-top js-quickLinks-top"></div>
        <div class="js-quickLinks-wrap-m">
        </div>
    </div>
    <div class="header-topline d-none d-lg-flex">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto d-flex align-items-center">
                    <div class="header-info"><i class="icon-placeholder2"></i>1234 demo Street demo demo, CA 00000</div>
                    <div class="header-phone"><i class="icon-telephone"></i><a href="tel:0000000">0-000-000-0000</a></div>
                    <div class="header-info"><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">demo@demo.com</a></div>
                </div>
                <div class="col-auto ml-auto d-flex align-items-center">
                    <span class="header-social">
                        <a href="#" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
                        <a href="#" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
                        <a href="#" class="hovicon"><i class="icon-google-plus-circle"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="header-content">
        <div class="container">
            <div class="row align-items-lg-center">
                <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
                    <span class="icon-menu"></span>
                </button>
                <div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
                    <?php get_template_part('template-parts/header/site-branding'); ?>
                </div>
                <div class="col-lg ml-auto header-nav-wrap">
                    <div class="header-nav js-header-nav">

                        <?php get_template_part('template-parts/header/site-nav'); ?>

                    </div>
                    <div class="header-search">
                        <form method="get" class="form-inline" action="<?php echo site_url();?>/product-search/">
                            <i class="icon-search"></i>
                            <input type="text" placeholder="Search.." value="" name="search">
                            <button type="submit" value="submit"><i class="icon-search"></i></button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
