<?php
function edunexus_setup() {
    // Soporte para título dinámico
    add_theme_support('title-tag');

    // Registrar menú de navegación
    register_nav_menus(array(
        'primary' => __('Menú Principal', 'edunexus')
    ));

    // Soporte para imagen destacada (por si lo necesitas después)
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'edunexus_setup');

// Encolar estilos y scripts
function edunexus_enqueue_scripts() {
    // Carga el style.css del tema
    wp_enqueue_style('edunexus-style', get_stylesheet_uri(), array(), '1.0');

    // Font Awesome desde CDN
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0');

    // Fuente de Google (Inter)
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap', array(), null);

    // Script para el menú móvil
    wp_enqueue_script('edunexus-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'edunexus_enqueue_scripts');