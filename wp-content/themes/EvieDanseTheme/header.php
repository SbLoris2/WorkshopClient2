<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Header -->
    <header>
        <div class="header-content">
            <a href="<?php echo home_url(); ?>" class="logo">
                <?php bloginfo('name'); ?>
            </a>
            <a href="<?php echo get_permalink(get_page_by_path('nous-connaitre')); ?>">
    Nous connaître
</a>
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => 'evidanse_fallback_menu'
                ));
                ?>
            </nav>
        </div>
    </header>