<?php
	$content_box    = get_sub_field('content_box');
	$img_box        = get_sub_field('img_box');
    $img_size       = 'large';
    $title = $content = $buttons = $img_data = $img = $img_id = $img_class = '';

	if ($content_box && is_array($content_box) && count($content_box) > 0) {
        $title      = trim($content_box['title']) ? $content_box['title'] : '';
        $content    = trim($content_box['content']) ? $content_box['content'] : '';
        $buttons    = $content_box['buttons'] ? $content_box['buttons'] : '';
    }

	if ($img_box && is_array($img_box) && count($img_box) > 0) {
	    $img_data = $img_box['image'];

		if ($img_data && is_array($img_data) && count($img_data) > 0 ) {
			$img_id        = trim( $img_data['id'] ) ? $img_data['id'] : '';
			$img_class     = ( $img_data['width'] > $img_data['height'] ) ? 'wider' : 'higher';
		}
    }

	if ($title || $content) :
		?>
        <section class="section-content section-about">
            <div class="container">
                <div class="content-box">
                    <?php
                        if ($title)
                            echo '<h2 class="section-title">'.$title.'</h2>';

                        if ($img_id)
	                        echo '<div class="content-img-box">'.wp_get_attachment_image($img_id, $img_size,false, array('class' => $img_class)).'</div>';

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
            </div>
        </section>
		<?php
	endif;
