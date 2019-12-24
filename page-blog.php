<?php
/**
 * Template Name: Blog
 */
get_header();

get_template_part( 'templates/section', 'banner' );

if (the_flexible_field('flexible_content')) :

	while ( the_flexible_field('flexible_content') ) :
		get_template_part( 'templates/'. get_row_layout() );
	endwhile;

else :

	get_template_part( 'templates/section', 'singular-content' );

endif;

?>
<section class="section-article-list">
    <div class="container">
    <?php
        global $wp_query;

        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'orderby'       => 'date',
            'order'         => 'DESC',
            'paged'         => $paged,
        );
        $new_query = new WP_Query( $args );

        if ( $new_query->have_posts() ) :
            ?>
            <ul class="article-list">
                <?php
                while ( $new_query->have_posts() ) : $new_query->the_post();

                    get_template_part( 'inc/loop', 'post' );

                endwhile;
                ?>
            </ul>
            <?php

	        get_template_part('inc/pagination');

        else :
	        echo "<p class='no-results'>".__('Sorry, no articles found...','scd-lab')."</p>";
        endif;

        wp_reset_query();
    ?>
    </div>
</section>
<?php

get_footer();