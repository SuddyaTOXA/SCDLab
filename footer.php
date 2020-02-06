        </div>
        <?php
        $footer_about = get_field('about','option') ? get_field('about','option') : '';
        $footer_logo  = get_field('footer_logo','option');
        $footer_logo_id = '';

        if ($footer_logo && is_array($footer_logo) && count($footer_logo) > 0) {
	        $footer_logo_id = $footer_logo['ID'];
        }

        $current_year = date("Y");
        $copyright = '';

        if ($current_year > 2020) {
            $copyright = '© Copyright 2020 - '.$current_year. ' by <a href="#" title="Foundation for California Community Colleges">Foundation for California Community Colleges</a>';
        } else {
            $copyright = '© Copyright 2020 by <a href="#" title="Foundation for California Community Colleges">Foundation for California Community Colleges</a>';
        }
        ?>

        <footer id="footer" class="footer">
            <div class="container">
                <?php if ($footer_logo_id) { ?>
                    <a href="<?php echo home_url(); ?>" class="logo">
                        <?php echo wp_get_attachment_image($footer_logo_id, 'large', false, array('alt' => esc_attr(get_bloginfo('name')))); ?>
                    </a>
                <?php } ?>

                <?php
                    if(has_nav_menu( 'footer-menu' )) {
                        wp_nav_menu(array(
                            'theme_location'  => 'footer-menu',
                            'menu'            => 'Footer Menu',
                            'container'       => 'nav',
                            'container_class' => 'footer-nav',
                            'container_id'    => false,
                            'items_wrap'      => '<ul>%3$s</ul>',
                            'depth'           => 1
                        ));
                     }
                ?>


                <div class="content">
	                <?php
                        if ($footer_about)
                            echo $footer_about;

                        if ($copyright)
                            echo '<p class="copyright">'.$copyright.'</p>';
                    ?>
                </div>

	            <?php
                    if (has_nav_menu( 'footer-bottom-menu' )) {
	                    wp_nav_menu(array(
                            'theme_location'  => 'footer-bottom-menu',
                            'menu'            => 'Footer Bottom Menu',
                            'container'       => 'nav',
                            'container_class' => 'footer-nav bottom-nav',
                            'container_id'    => false,
                            'items_wrap'      => '<ul>%3$s</ul>',
                            'depth'           => 1
                        ));
                    }
                ?>

            </div>
        </footer>
    </div>

    <?php wp_footer(); ?>
</body>
</html>