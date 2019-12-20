<?php
	$title      = trim(get_sub_field('title')) ? get_sub_field('title') : '';
	$desc       = trim(get_sub_field('description')) ? get_sub_field('description') : '';
    $steps      = (get_sub_field('steps') || is_array(get_sub_field('steps')) || count(get_sub_field('steps')) > 0) ? get_sub_field('steps') : '';
    $img_size   = 'medium';
    $name = $icon = '';

	if ($title || $desc || $steps) :
		?>
        <section class="section-design-thinking inverse">
            <div class="container">
                <?php
                    if ($title)
                        echo '<h2 class="section-thin-title">'.$title.'</h2>';

                    if ($desc)
                        echo '<div class="section-desc">'.$desc.'</div>';

                    if ($steps) :
                        echo '<ul class="development-stages-list">';
                            foreach ($steps as $steep) :
	                            $name = trim($steep['name']) ? $steep['name'] : '';
	                            $icon = trim($steep['icon']) ? $steep['icon'] : '';
	                            $img_id = $img_class = '';

	                            if (strtolower($icon) === 'other') {
		                            $img_data = $steep['image'];
		                            $img = ($img_data && is_array($img_data) && count($img_data) > 0 ) ? $img_data : '';
		                            if ($img) {
			                            $img_class = ( $img['width'] > $img['height'] ) ? 'wider' : 'higher';
			                            $img_id    = trim( $img['id'] ) ? $img['id'] : '';
		                            }
                                }

	                            if ($name || $icon) {
	                                ?>
                                    <li>
                                        <div class="stage-box">
                                            <div class="stage-icon-wrap">
                                                <?php
                                                    if (strtolower($icon) === 'other') {
	                                                    echo wp_get_attachment_image( $img_id, $img_size, false, array( 'class' => $img_class ) );
                                                    } else {
                                                        echo '<span class="custom-icon '.$icon.'"></span>';
                                                    }
                                                ?>
                                            </div>
                                            <?php
                                                if ($name)
                                                    echo '<h4 class="stage-name">'.$name.'</h4>';
                                            ?>
                                        </div>
                                    </li>
                                    <?php
                                }

                            endforeach;
                        echo '</ul>';
                    endif;
                ?>
            </div>
        </section>
		<?php
	endif;
