<?php
$title      = get_the_title();
$url        = get_permalink();
$btn_text  =  __('Read the project case study', 'scd-lab');
$img_size  = 'medium_large';
$img_id     = $img_data = $img_class = '';

if ( has_post_thumbnail() ) {
	$img_id = get_post_thumbnail_id();
	$img_data = wp_get_attachment_image_src( $img_id, $img_size, false );

	if ($img_data && is_array($img_data) && count($img_data) > 0) {
		$img_class = ($img_data[1] > $img_data[2]) ? 'wider' : 'higher';
	}
}



?>

<li>
	<div class="article-box">
		<div class="img-box">
			<a href="<?php echo esc_url($url); ?>" class="centered-img" title="<?php echo esc_attr($title); ?>" data-centered-img>
				<?php
					if ( $img_id ) {
						echo wp_get_attachment_image( $img_id, $img_size, false, array('class' => $img_class) );
					}
				?>
			</a>
		</div>
		<div class="content-box">
			<?php if ($title) { ?>
				<h3 class="small-title"><?php echo $title; ?></h3>
			<?php } ?>
			<div class="content">
				<?php the_excerpt(); ?>
			</div>
			<?php if ($url) { ?>
				<ul class="btn-list">
					<li><a href="<?php echo esc_url($url); ?>" class="btn-small" title="<?php echo esc_attr($btn_text); ?>"><span><?php echo $btn_text; ?></span></a></li>
				</ul>
			<?php } ?>
		</div>
	</div>
</li>