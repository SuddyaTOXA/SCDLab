<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <a class="btn btn-jump-to-content smooth-scroll" href="#main-content" title="<?php esc_attr_e('Skip Navigation', 'scd-lab'); ?>"><?php _e('Skip Navigation', 'scd-lab'); ?></a>

        <header id="header" class="header">
            <div class="container">
                <a href="<?php echo home_url(); ?>" class="logo">
                    <?php
                    if ( has_custom_logo() ) {
                        $logo_id = get_theme_mod('custom_logo');
                    } else {
                        $logo_id = 20;
                    }

                    echo wp_get_attachment_image($logo_id, 'large', false, array('alt' => esc_attr(get_bloginfo('name'))));
                    ?>
                </a>


                <?php
                if(has_nav_menu( 'main-menu' )) {
                    wp_nav_menu(array(
                        'theme_location'  => 'main-menu',
                        'menu'            => 'Main Menu',
                        'container'       => 'nav',
                        'container_class' => 'main-nav desktop',
                        'container_id'    => false,
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'depth'           => 2
                    ));
                }
                ?>

                <div class="mobile-menu-toggle">
                    <span></span>
                </div>

                <div class="mobile-menu-wrap">
                    <div class="mobile-menu-box">
                        <?php wp_nav_menu(array(
                            'theme_location'  => 'main-menu',
                            'menu'            => 'Main Menu',
                            'container'       => false,
                            'menu_class'      => 'mobile-menu',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'depth'           => 2
                        )); ?>
                    </div>
                    <div class="mobile-menu-overlay"></div>
                </div>
            </div>
        </header>

        <div id="main-content">
