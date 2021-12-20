

<div class="col-md-4 col-lg-3 column-filters">
    <div class="column-filters-inside">
        <div class="side-block">
            <h3 class="side-block-title">Categories</h3>
            <ul class="category-list">
                <?php 
                $args = array( 'hide_empty=1' );
                $terms = get_terms( 'product_category', $args );
                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                    $count = count( $terms );
                    $i = 0;
                    // $term_list = '<p class="my_term-archive"></p>';
                    foreach ( $terms as $term ) {
                        $i++;
                        $term_list .= '<li><a href="' . esc_url( get_term_link( $term ) ) . '" alt="">' . $term->name . '</a></li>';
                    }
                    echo $term_list;
                }
                ?>
            </ul>
        </div>
        


    </div>
</div>
