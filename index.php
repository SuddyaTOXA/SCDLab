<?php
get_header();

    get_template_part( 'templates/section', 'banner' );

    while ( the_flexible_field('flexible_content') ) :
        get_template_part( 'templates/'. get_row_layout() );
    endwhile;

get_footer();
