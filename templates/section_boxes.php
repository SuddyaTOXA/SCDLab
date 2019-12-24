<?php
    $title      = trim(get_sub_field('title')) ? get_sub_field('title') : '';
    $desc       = trim(get_sub_field('description')) ? get_sub_field('description') : '';
    $boxes      = (get_sub_field('boxes') && is_array(get_sub_field('boxes')) && count(get_sub_field('boxes')) > 0 ) ? get_sub_field('boxes') : '';
    $img_size   = 'medium_large';

	if ($title || $desc || $boxes) :
		?>
        <section class="section-work-with-lab">
            <div class="container">
                <?php
                    if ($title)
                        echo '<h2 class="section-title">'.$title.'</h2>';

                    if ($desc)
                        echo '<div class="section-desc"><p>'.$desc.'</p></div>';


                    if ($boxes) :
                        ?>
                        <ul class="box-list">
                        <?php
                            foreach ($boxes as $box) :
                                $box_title = trim($box['title']) ? $box['title'] : '';
                                $box_desc  = trim($box['description']) ? $box['description'] : '';
	                            $img_data  = $box['image'];
	                            $buttons   = $box['buttons'];
	                            $img = $img_id = $img_class = '';
	                            $img = ($img_data && is_array($img_data) && count($img_data) > 0 ) ? $img_data : '';

	                            if ($img) {
		                            $img_id    = trim( $img['id'] ) ? $img['id'] : '';
		                            $img_class = ( $img['width'] > $img['height'] ) ? 'wider' : 'higher';
	                            }

                                if ($box_title || $box_desc) :
                                    ?>
                                    <li>
                                        <div class="box">
                                            <?php
                                                if ($box_title)
                                                    echo '<h3 class="box-title">'.$box_title.'</h3>';

                                                if ($img_id) {
                                                    echo '<div class="box-img-wrap"><div class="centered-img">'.wp_get_attachment_image($img_id, $img_size,false, array('class' => $img_class)).'</div></div>';
                                                }

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

                                                if ($box_desc)
                                                    echo '<div class="box-desc content">'.$box_desc.'</div>';
                                            ?>
                                        </div>
                                    </li>
                                    <?php
                                endif;
                            endforeach;
                        ?>
                        </ul>
                        <?php
                    endif;
                ?>
            </div>
        </section>
		<?php
	endif;
