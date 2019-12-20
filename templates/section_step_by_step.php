<?php
	$quote = trim(get_sub_field('text')) ? get_sub_field('text') : '';
	$quote_box = get_sub_field('box');
	$img_size = 'medium';
	$img_id = $img_class = $name = $position = '';

	if ($quote_box && is_array($quote_box) && count($quote_box) > 0) {
		$name = trim($quote_box['name']) ? $quote_box['name'] : '';
		$position = trim($quote_box['position']) ? $quote_box['position'] : '';
		$img_id = trim($quote_box['photo']['id']) ? $quote_box['photo']['id'] : '';
		$img_class = ($quote_box['photo']['width'] > $quote_box['photo']['height']) ? 'wider' : 'hegher';
	}

	if ($quote) :
		?>
		<section class="section-blockquote inverse">
			<div class="container">
				<div class="blockquote-wrap">
					<div class="blockquote-table">
						<div class="inner-box">
							<div class="blockquote-box">
								<div class="content">
									<?php echo $quote; ?>
								</div>
								<?php if ($name || $position) { ?>
									<div class="blockquote-author">
										<?php if ($name) { ?>
											<span class="name">– <?php echo $name; ?></span>
										<?php } ?>
										<?php if ($position) { ?>
											<span class="position"><?php echo $position; ?></span>
										<?php } ?>
									</div>
								<?php } ?>
							</div>
						</div>
						<?php if ($img_id) { ?>
							<div class="inner-box">
								<?php if ($img_id) { ?>
									<div class="blockquote-photo-img centered-img" data-centered-img>
										<?php echo wp_get_attachment_image($img_id, $img_size,false, array('class' => $img_class)); ?>
									</div>
								<?php } ?>
								<?php if ($name || $position) { ?>
									<div class="blockquote-author">
										<?php if ($name) { ?>
											<span class="name">– <?php echo $name; ?></span>
										<?php } ?>
										<?php if ($position) { ?>
											<span class="position"><?php echo $position; ?></span>
										<?php } ?>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
		<?php
	endif;
