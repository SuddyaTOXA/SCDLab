<?php
    $title       = trim(get_sub_field('title')) ? get_sub_field('title') : '';
    $count       = get_sub_field('count') ? (int)get_sub_field('count') : '';
    $post_type   = get_sub_field('select_post_type');

//    var_dump($count);
//    var_dump($post_type);

    if ($count > 0 && $post_type) :
        global $wp_query;

        $paged     = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        $args      = array(
            'post_type'   => $post_type,
            'post_status' => 'publish',
            'orderby'     => 'date',
            'order'       => 'DESC',
            'paged'       => $paged,
            'posts_per_page' => $count
        );
        $new_query = new WP_Query( $args );

        if ( $new_query->have_posts() ) {
            ?>
            <section class="section-article-list">
                <div class="container">
                    <?php
                        if ($title)
                            echo '<h3 class="box-title">'.$title.'</h3>';
                    ?>
                    <ul class="article-list">
                    <?php
                        while ( $new_query->have_posts() ) : $new_query->the_post();

                            get_template_part( 'inc/loop', $post_type );

                        endwhile;
                    ?>
                    </ul>
                </div>
            </section>
            <?php
        }
        wp_reset_query();
    endif;
