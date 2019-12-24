<?php
    $title   = trim(get_sub_field('title')) ? get_sub_field('title') : '';
    $form    = get_sub_field('select_form');
    $form_id = ($form && is_array($form) && count($form) == 1) ? $form[0] : '';

	if ($title || $form_id) :
		?>
        <section class="section-form">
            <div class="container">
                <?php
                    if ($title)
                        echo '<h3 class="box-title">'.$title.'</h3>';

                    if ($form_id)
                        echo '<div class="form-wrap">'.do_shortcode('[contact-form-7 id="'.$form_id.'" title="'.esc_attr(strip_tags($title)).'"]').'</div>';
                ?>
            </div>
        </section>
		<?php
	endif;
