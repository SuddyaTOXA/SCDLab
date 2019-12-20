<?php

    $title = trim(get_sub_field('title')) ? get_sub_field('title') : '';
    $desc  = trim(get_sub_field('description')) ? get_sub_field('description') : '';
    $boxes = (get_sub_field('boxes') && is_array(get_sub_field('boxes')) && count(get_sub_field('boxes')) > 0 ) ? get_sub_field('boxes') : '';


//	$image_position = get_sub_field('image_position');
//	$content_box    = get_sub_field('content_box');
//	$img_box        = get_sub_field('img_box');
//    $img_size       = 'full';
//    $title = $content = $buttons = $img_data = $img = $img_id = $img_class = $image_overlay = '';
//
//	if ($content_box && is_array($content_box) && count($content_box) > 0) {
//        $title      = trim($content_box['title']) ? $content_box['title'] : '';
//        $content    = trim($content_box['content']) ? $content_box['content'] : '';
//        $buttons    = $content_box['buttons'] ? $content_box['buttons'] : '';
//    }

//	if ($img_box && is_array($img_box) && count($img_box) > 0) {
//	    $img_data = $img_box['image'];
//	    $img = ($img_data && is_array($img_data) && count($img_data) > 0 ) ? $img_data : '';
//		if ($img) {
//			$img_id        = trim( $img['id'] ) ? $img['id'] : '';
//			$img_class     = ( $img['width'] > $img['height'] ) ? 'wider' : 'higher';
//			$image_overlay = trim( $img_box['image_overlay'] ) ? $img_box['image_overlay'] : '';
//		}
//    }

	if ($title || $desc || $boxes) :
		?>
        <section class="section-work-with-lab">
            <div class="container">
                <?php
                    if ($title)
                        echo '<h2 class="section-title">'.$title.'</h2>';

                    if ($desc)
                        echo '<div class="section-desc"><p>'.$desc.'</p></div>';
                ?>

                <ul class="box-list">
                    <li>
                        <div class="box">
                            <h3 class="box-title">Student Participants</h3>
                            <div class="box-img-wrap">
                                <div class="centered-img">
                                    <img class="wider" src="<?php echo bloginfo('template_directory'); ?>/img/student_participants@2x.png" alt="Student Participants">
                                </div>
                            </div>
                            <a href="#" class="btn internal-link" title="Sign up as a student participant"><span>Sign up as a student participant</span></a>
                            <div class="box-desc content">
                                <p><b>Join our prospective and current student participant pool by completing the online screener.</b> If you match the profile needed for a study’s requirements, you may be contacted to participate in a study, either in-person or virtually. If selected for a study, you will be compensated for your time with a gift card.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <h3 class="box-title">Project Partners</h3>
                            <div class="box-img-wrap">
                                <div class="centered-img">
                                    <img class="wider" src="<?php echo bloginfo('template_directory'); ?>/img/project_partners@2x.png" alt="Project Partners">
                                </div>
                            </div>
                            <a href="#" class="btn internal-link"><span>Partner with us</span></a>
                            <div class="box-desc">
                                <p><b>Have a student-facing technology tool, communications campaign, or policy initiative you’d like feedback on?</b> Please complete the project in-take form so the lab team can learn more about your project’s goals.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
		<?php
	endif;
