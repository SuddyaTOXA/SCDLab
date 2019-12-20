<?php
    $title      = trim(get_sub_field('title')) ? get_sub_field('title') : '';
    $content    = trim(get_sub_field('content')) ? get_sub_field('content') : '';
    $buttons    = get_sub_field('buttons');


	if ($title || $content || $buttons) :
		?>
        <section class="section-content">
            <div class="container">
	            <?php
	            if ($title)
		            echo '<h2 class="section-title">'.$title.'</h2>';

	            if ($content)
		            echo '<div class="content">'.$content.'</div>';

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
	endif;
