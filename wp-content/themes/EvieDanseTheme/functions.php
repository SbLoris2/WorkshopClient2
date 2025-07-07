<?php
// Enregistrer les styles et scripts
function evidanse_enqueue_assets() {
    wp_enqueue_style('evidanse-style', get_stylesheet_uri());
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
    wp_enqueue_script('evidanse-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'evidanse_enqueue_assets');

function evidanse_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . home_url() . '">Accueil</a></li>';
    echo '<li><a href="#about">Nous connaître</a></li>';
    echo '<li><a href="#services">Cours de danse</a></li>';
    echo '<li><a href="#inclusive">Danse inclusive</a></li>';
    echo '<li><a href="#formations">Formations</a></li>';
    echo '<li><a href="#rse">RSE</a></li>';
    echo '<li><a href="#contact">Contact</a></li>';
    echo '</ul>';
}
function eviedanse_scripts() {
    wp_enqueue_script('eviedanse-script', get_template_directory_uri() . '/script.js', array(), '1.0', true);
}
function handle_contact_form_submission() {
    if (isset($_POST['action']) && $_POST['action'] == 'contact_form_submission') {
        // Traitement du formulaire
        $first_name = sanitize_text_field($_POST['first_name']);
        $last_name = sanitize_text_field($_POST['last_name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $message = sanitize_textarea_field($_POST['message']);
        
        // Envoi par email ou sauvegarde en base
        // Redirection après traitement
        wp_redirect(home_url('/?submitted=1'));
        exit;
    }
}
add_action('admin_post_contact_form_submission', 'handle_contact_form_submission');
add_action('admin_post_nopriv_contact_form_submission', 'handle_contact_form_submission');
add_action('wp_enqueue_scripts', 'eviedanse_scripts');
// Support des fonctionnalités WordPress
function evidanse_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    // Menus
    register_nav_menus(array(
        'primary' => 'Menu Principal',
    ));
}
add_action('after_setup_theme', 'evidanse_setup');

// Champs personnalisés pour la page d'accueil
if(function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_homepage',
        'title' => 'Contenu Page d\'accueil',
        'fields' => array(
            array(
                'key' => 'field_hero_title',
                'label' => 'Titre Principal',
                'name' => 'hero_title',
                'type' => 'text',
                'default_value' => 'Inclusion, Bien-être & Performance',
            ),
            array(
                'key' => 'field_hero_subtitle',
                'label' => 'Sous-titre',
                'name' => 'hero_subtitle',
                'type' => 'text',
                'default_value' => 'individuelle et collective',
            ),
            array(
                'key' => 'field_hero_description',
                'label' => 'Description Hero',
                'name' => 'hero_description',
                'type' => 'textarea',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'front-page.php',
                ),
            ),
        ),
    ));
}
?>