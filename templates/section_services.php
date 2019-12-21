<?php
    $bg_color   = get_sub_field('bg_color') ? get_sub_field('bg_color') : '';
    $title      = trim(get_sub_field('title')) ? get_sub_field('title') : '';
    $subtitle   = trim(get_sub_field('subtitle')) ? get_sub_field('subtitle') : '';
    $desc       = trim(get_sub_field('description')) ? get_sub_field('description') : '';
    $buttons    = (get_sub_field('buttons') && is_array(get_sub_field('buttons')) && count(get_sub_field('buttons')) > 0) ? get_sub_field('buttons') : '';
    $row        = get_sub_field('row');
    $sc_class   = '';

    $boxes      = (get_sub_field('boxes') && is_array(get_sub_field('boxes')) && count(get_sub_field('boxes')) > 0 ) ? get_sub_field('boxes') : '';
    $img_size   = 'medium';

    if (strtolower($bg_color) === 'blue') {
	    $sc_class = 'blue-bg inverse';
    }

	if ($title || $desc || $boxes) :
		?>
        <section class="section-lab-services <?php echo $sc_class; ?>">
            <div class="container">
                <?php
                    if ($title)
                        echo '<h2 class="section-title">'.$title.'</h2>';

                    if ($desc)
                        echo '<div class="section-desc"><p>'.$desc.'</p></div>';

                    if ($subtitle)
                        echo '<h3 class="small-title">'.$subtitle.'</h3>';


                   if ($row && is_array($row) && count($row) > 0) :
                       foreach ($row as $single_row) :
                            ?>
                            <div class="inner-row">
                               <?php
                               $row_title = trim($single_row['title']) ? $single_row['title'] : '';
                               $service_img_size = 'medium';

                               if ($row_title)
                                   echo '<div class="row-title-box"><h3 class="row-title">'.$row_title.'</h3></div>';

                               if ($single_row['service'] && is_array($single_row['service']) && count($single_row['service']) > 0) :
                               ?>
                                <ul class="box-list services-list">
                                    <?php
                                       foreach ($single_row['service'] as $service) :
                                            $service_name   = trim($service['title']) ? $service['title'] : '';
                                            $service_icon   = trim($service['icon']) ? $service['icon'] : '';
                                            $service_img_id = $service_img_class = $service_img_data = '';
                                            $service_items  = ($service['items'] && is_array($service['items']) && count($service['items']) > 0) ? $service['items'] : '';

                                           if (strtolower($service_icon) === 'other') {
                                               $service_img_data = $service['image'];
                                               $service_img = ($service_img_data && is_array($service_img_data) && count($service_img_data) > 0 ) ? $service_img_data : '';
                                               if ($service_img) {
                                                   $service_img_class = ( $service_img['width'] > $service_img['height'] ) ? 'wider' : 'higher';
                                                   $service_img_id    = trim( $service_img['id'] ) ? $service_img['id'] : '';
                                               }
                                           }

                                           if ($service_name || $service_icon || $service_items) :
                                               ?>
                                               <li>
                                                   <div class="box">
                                                       <div class="box-img-wrap">
                                                           <?php
                                                           if (strtolower($service_icon) === 'other') {
                                                               echo wp_get_attachment_image( $service_img_id, $service_img_size, false, array( 'class' => $service_img_class ) );
                                                           } else {
                                                               echo '<span class="custom-icon '.$service_icon.'"></span>';
                                                           }
                                                           ?>
                                                       </div>
                                                       <div class="inner-box">
                                                           <?php
                                                                if ($service_name)
                                                                    echo '<h3 class="box-title">'.$service_name.'</h3>';

                                                                if ($service_items) {
                                                                    ?>
                                                                   <div class="box-desc">
                                                                       <ul>
                                                                        <?php
                                                                            foreach ($service_items as $single_item) {
                                                                                if (trim($single_item['text']))
                                                                                    echo '<li>'.$single_item['text'].'</li>';
                                                                            }
                                                                        ?>
                                                                       </ul>
                                                                   </div>
                                                                    <?php
                                                                }
                                                           ?>
                                                       </div>
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
                            <?php
                       endforeach;
                   endif;
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
