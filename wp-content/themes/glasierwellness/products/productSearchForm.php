<?php
global $wp;
$wp->parse_request();
?>

<form action="<?php echo site_url(); ?>/product-search/" class="content-search content-search--style2 d-flex mb-3" method="post">
    <div class="input-wrap">
        <input type="hidden" name="title" value="<?php echo home_url($wp->request); ?>" />
        <input type="text" class="form-control" name="search" value="" placeholder="Search for Products">
    </div>
    <button type="submit"><i class="icon-search"></i></button>
</form>