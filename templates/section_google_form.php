<?php
    $google_form_id = trim(get_sub_field('google_form_id')) ? get_sub_field('google_form_id') : '';

	if ($google_form_id) :
		?>
        <section class="section-goo-form">
            <div class="container">
                <?php
                    if ($google_form_id)
                        echo '<div class="goo-form-wrap">'.do_shortcode('[formfacade id='.$google_form_id.']').'</div>';
                ?>
            </div>
        </section>
		<?php
	endif;
