        </div>
        <?php
        $footer_about = get_field('about','option') ? get_field('about','option') : '';
//        $partners     = get_field('partners','option');

        $current_year = date("Y");
        $copyright = '';

        if ($current_year > 2019) {
            $copyright = '© Copyright 2019 - '.$current_year. __('by Foundation for', 'scd-lab') . 'California Community Colleges';
        } else {
            $copyright = '© Copyright 2019 '. __('by Foundation for', 'scd-lab') . 'California Community Colleges';
        }
        ?>

        <footer id="footer" class="footer">
            <div class="container">
                <div class="row-table">
                    <div class="column">
                        <?php if ($copyright) { ?>
                            <div class="content"><p><?php echo $footer_about; ?></p></div>
                        <?php } ?>

                        <?php if ($copyright) { ?>
                            <p class="copyright"><?php echo $copyright; ?></p>
                        <?php } ?>

                        <?php
                        if(has_nav_menu( 'footer-bottom-menu' )) {
                            wp_nav_menu(array(
                                'theme_location'  => 'footer-bottom-menu',
                                'menu'            => 'Footer Bottom Menu',
                                'container'       => 'nav',
                                'container_class' => 'footer-bottom-nav',
                                'container_id'    => false,
                                'items_wrap'      => '<ul>%3$s</ul>',
                                'depth'           => 1
                            ));
                        }
                        ?>
                    </div>
                    <?php /*if ($partners && is_array($partners) && count($partners) > 0) { ?>
                        <div class="column partners">
                            <ul class="partners-list">
                                <?php
                                    foreach ($partners as $partner) {
                                        $partner_name = trim($partner['name']) ? $partner['name'] : '';
                                        $partner_logo = $partner['logo']['ID'] ? $partner['logo']['ID'] : '';
                                        $partner_url  = trim($partner['address']) ? $partner['address'] : '';

                                        $partner_box = wp_get_attachment_image($partner_logo, 'medium', false, array('alt' => $partner_name));

                                        if ($partner_url) {
                                            $partner_box = '<a href="'.esc_url($partner_url).'" title="'.__('Visit ','scd-lab').esc_attr($partner_name).'" rel="nofollow noopener" target="_blank">'.$partner_box.'</a>';
                                        }

                                        if ($partner_box) {
                                            echo '<li>'.$partner_box.'</li>';
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                    <?php } */?>
                </div>
            </div>
        </footer>
    </div>

    <?php wp_footer(); ?>
</body>
</html>