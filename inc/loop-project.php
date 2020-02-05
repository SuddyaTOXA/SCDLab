<?php
$title      = get_the_title();
$url        = get_permalink();
$report_url = get_field('report_link');
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
			<div class="centered-img" data-centered-img>
				<?php
					if ( $img_id ) {
						echo wp_get_attachment_image( $img_id, $img_size, false, array('class' => $img_class) );
					}
				?>
			</div>
		</div>
		<div class="content-box">
			<?php if ($title) { ?>
				<h3 class="small-title"><?php echo $title; ?></h3>
			<?php } ?>
			<div class="content">
				<?php the_content(); ?>
			</div>
			<?php if ($report_url) { ?>
				<ul class="btn-list">
					<li><a href="<?php echo esc_url($report_url); ?>" class="btn-small" target="_blank" rel="noopener nofollow" title="<?php esc_attr_e('Download the Report','scd-lab'); ?>"><span><?php _e('Download the Report','scd-lab'); ?></span></a></li>
				</ul>
			<?php } ?>
		</div>
	</div>
</li>

