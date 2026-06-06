<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <!-- Las fuentes e iconos se encolan desde functions.php, así que no las pongas aquí -->
</head>
<body <?php body_class(); ?>>
    <!-- Navegación -->
    <nav class="navbar">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <i class="fas fa-graduation-cap"></i> <?php bloginfo('name'); ?>
            </a>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ));
            ?>
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- Aquí termina el header; el contenido principal lo pondrás en la plantilla de página -->