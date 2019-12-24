<?php
$show_hero  = get_field('show_hero');
$banner     = $show_hero ? get_field('banner') : '';
$page_type  = 'other';
$img_size   = '2048x2048';
$title = $description = $hero_type = $image = $first_image = $second_image = $img_id = $img_class = $first_id = $first_class = $second_id = $second_class = '';

if ($banner && is_array($banner) && count($banner) > 0) :
	$title          = trim($banner['title']) ? $banner['title'] : get_the_title();
	$description    = trim($banner['description']) ? $banner['description'] : '';
	$hero_type      = (isset($banner['hero_type']) && $banner['hero_type']) ? $banner['hero_type'] : '';

	if ($hero_type) {
		$img_data = $banner['image'];

		if ($img_data && is_array($img_data) && count($img_data) > 0) {
			$img_id    = trim( $img_data['id'] ) ? $img_data['id'] : '';
			$img_class = ( $img_data['width'] > $img_data['height'] ) ? 'wider' : 'higher';
		}

		if (strtolower($hero_type) === 'type_bg') {
//			$img_size = 'full';
			$page_type = 'inverse';
		} else {
//			$img_size = 'full';
			$page_type = 'hero';
			$img_class .= ' hero-other-img';
		}


	} else {
		$page_type = 'hero hero-main';
		$first_image = $banner['first_image'];
		$second_image = $banner['second_image'];

		if ($first_image && is_array($first_image) && count($first_image) > 0) {
			$first_id    = trim( $first_image['id'] ) ? $first_image['id'] : '';
			$first_class = ( $first_image['width'] > $first_image['height'] ) ? 'wider' : 'higher';
			$first_class .= ' hero-img';
		}

		if ($second_image && is_array($second_image) && count($second_image) > 0) {
			$second_id    = trim( $second_image['id'] ) ? $second_image['id'] : '';
			$second_class = ( $second_image['width'] > $second_image['height'] ) ? 'wider' : 'higher';
			$second_class .= ' hero-isometric-img';
		}
	}


	if ($img_id || $first_id || $second_id || $title || $description) :
		?>
		<section class="section-banner <?php echo $page_type; ?>">
			<div class="container">
				<?php
					if (($img_id && strtolower($hero_type) === 'type_img') || $first_id || $second_id) {
						?>
						<div class="img-box">
							<?php
								if ($img_id && strtolower($hero_type) === 'type_img')
									echo wp_get_attachment_image($img_id, $img_size,false, array('class' => $img_class));

								if ($first_id)
									echo wp_get_attachment_image($first_id, $img_size,false, array('class' => $first_class));


								if ($second_id)
									echo wp_get_attachment_image($second_id, $img_size,false, array('class' => $second_class));

							?>
						</div>
						<?php
					}
				?>
				<div class="content-box">
                    <div class="inner-box">
                        <?php
                            if ($title)
                                echo '<h1 class="hero-title">'.$title.'</h1>';

                            if ($description)
                                echo '<div class="content big">'.$description.'</div>';
                        ?>
                    </div>
				</div>
				<?php
				if (strtolower($hero_type) === 'type_bg') {
					if ($img_id) {
						echo '<div class="centered-img">' . wp_get_attachment_image( $img_id, $img_size, false, array( 'class' => $img_class ) ) . '</div>';
					}
				}
				?>
			</div>
		</section>
		<?php
	endif;
endif;
?>


