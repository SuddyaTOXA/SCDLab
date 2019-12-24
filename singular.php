<?php
get_header();

get_template_part( 'templates/section', 'banner' );

if (the_flexible_field('flexible_content')) :

	while ( the_flexible_field('flexible_content') ) :
		get_template_part( 'templates/'. get_row_layout() );
	endwhile;

else :

	get_template_part( 'templates/section', 'singular-content' );

endif;

get_footer();