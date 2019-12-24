<?php
    $title      = trim(get_sub_field('title')) ? get_sub_field('title') : '';
    $content    = trim(get_sub_field('content')) ? get_sub_field('content') : '';
    $buttons    = (get_sub_field('buttons') && is_array(get_sub_field('buttons')) && count(get_sub_field('buttons')) > 0) ? get_sub_field('buttons') : '';
    $img        = get_sub_field('image');
    $img_size   = 'medium_large';
    $img_class  = $img_id = '';

    if ($img && is_array($img) && count($img) > 0) {
        $img_id    = trim( $img['id'] ) ? $img['id'] : '';
        $img_class = ( $img['width'] > $img['height'] ) ? 'wider' : 'higher';
    }

	if ($title || $desc || $img_id || $buttons) :
		?>
        <section class="section-two-columns">
            <div class="container">
                <div class="columns-wrap">
                    <?php if ($title || $img_id) : ?>
                        <div class="column-box">
                            <div class="reverse-box">
                                <?php
                                    if ($title)
                                        echo '<div class="inner-box"><h2 class="section-title">'.$title.'</h2></div>';

                                    if ($img_id)
                                        echo '<div class="inner-box"> <div class="centered-img">'.wp_get_attachment_image($img_id, $img_size,false, array('class' => $img_class)).'</div></div>';
                                    ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($content || $buttons) : ?>
                        <div class="column-box">
                            <?php
                                if ($content)
                                    echo '<div class="content">'.$content.'</div>';

		                        if ($buttons) :
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
                    <?php endif; ?>
                </div>
            </div>
        </section>
		<?php
	endif;
