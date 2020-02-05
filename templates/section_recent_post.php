<?php
    $title       = trim(get_sub_field('title')) ? get_sub_field('title') : '';
    $count       = get_sub_field('count') ? (int)get_sub_field('count') : '';
    $post_type   = get_sub_field('select_post_type');
    $buttons     = (get_sub_field('buttons') && is_array(get_sub_field('buttons')) && count(get_sub_field('buttons')) > 0) ? get_sub_field('buttons') : '';

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
                            echo '<h3 class="section-title">'.$title.'</h3>';
                    ?>
                    <ul class="article-list">
                    <?php
                        while ( $new_query->have_posts() ) : $new_query->the_post();

                            get_template_part( 'inc/loop', $post_type );

                        endwhile;
                    ?>
                    </ul>
                    <?php
                        if ($buttons && is_array($buttons) && count($buttons) > 0) :
                            echo '<ul class="btn-list">';
                            foreach ($buttons as $button) :
                                if ($button['button'] && is_array($button['button']) && count($button['button']) > 0):
                                    $btn        = $button['button'];
                                    $label      = trim($btn['label']) ? $btn['label'] : '';
                                    $link_type  = $btn['link_type'] ? $btn['link_type'] : '';
                                    $target     = $btn['target'] ? 'target="_blank"' : '';
                                    $btn_style  = $link = '';

                                    if (strtolower($btn['button_style']) === 'underlined') {
                                        $btn_style = 'btn-small';
                                    } elseif (strtolower($btn['button_style']) === 'classic_arrow') {
                                        $btn_style = 'btn internal-link';
                                    } else {
                                        $btn_style = 'btn';
                                    }

                                    if ($link_type == 'internal') {
                                        $link = $btn['internal_link'] ? $btn['internal_link'] : '';
                                    } elseif ($link_type == 'external') {
                                        $link = $btn['external_link'] ? $btn['external_link'] : '';
                                    } elseif ($link_type == 'scrolling') {
                                        $link = '#main-content';
                                    } else {
                                        $link = '';
                                    }

                                    if ($label && $link) {
                                        echo '<li><a href="' . $link . '" class="'.$btn_style.'" title="' . esc_attr($label) . '" ' . $target . '><span>' . $label . '</span></a></li>';
                                    }
                                endif;
                            endforeach;
                            echo '</ul>';
                        endif;
                    ?>
                </div>
            </section>
            <?php
        }
        wp_reset_query();
    endif;
