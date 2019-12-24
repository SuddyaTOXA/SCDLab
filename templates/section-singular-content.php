<?php
	$scdl_post_ID   = get_the_ID();//This is page id or post id
	$show_hero      = get_field('show_hero', $scdl_post_ID);
	$title          = trim(get_the_title($scdl_post_ID)) ? get_the_title($scdl_post_ID) : '';
	$content_post   = get_post($scdl_post_ID);
	$content        = trim($content_post->post_content) ? $content_post->post_content : '';


if (($title && !$show_hero) || $content) :
		?>
		<section class="section-content">
			<div class="container">
				<?php
					if ($title && !$show_hero)
						echo '<h1 class="section-title">'.$title.'</h1>';

					if ($content)
						echo '<div class="content big">'.str_replace(']]>', ']]&gt;',apply_filters( 'the_content', $content )).'</div>';
				?>
			</div>
		</section>
		<?
	endif;