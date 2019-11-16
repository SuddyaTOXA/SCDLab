<?php get_header(); ?>

    <section class="section section-content">
		<div class="container">
			<div class="content">

				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();

			    		the_content();
			    		
			    	endwhile; else: endif; 
			    ?>

			</div>
		</div>
    </section>

<?php get_footer(); ?>