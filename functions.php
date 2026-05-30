<?php
defined('ABSPATH') || exit;

define('NAF_VERSION', '1.0.0');
define('NAF_DIR', get_template_directory());
define('NAF_URI', get_template_directory_uri());

function naf_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', ['height'=>80,'width'=>200,'flex-height'=>true,'flex-width'=>true]);
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption']);
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    register_nav_menus(['primary'=>__('Menu principal','naf-automobiles'),'footer'=>__('Menu pied de page','naf-automobiles')]);
    load_theme_textdomain('naf-automobiles', NAF_DIR.'/languages');
}
add_action('after_setup_theme','naf_setup');

function naf_enqueue_assets() {
    wp_enqueue_style('naf-fonts','https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600&display=swap',[],null);
    wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',[],'6.5.0');
    wp_enqueue_style('naf-main',NAF_URI.'/assets/css/naf-style.css',['naf-fonts'],NAF_VERSION);
    wp_enqueue_script('naf-main',NAF_URI.'/assets/js/naf-main.js',[],NAF_VERSION,true);
    wp_localize_script('naf-main','nafData',['ajaxUrl'=>admin_url('admin-ajax.php'),'nonce'=>wp_create_nonce('naf_nonce'),'siteUrl'=>get_site_url()]);
}
add_action('wp_enqueue_scripts','naf_enqueue_assets');

function naf_widgets_init() {
    register_sidebar(['name'=>__('Pied de page 1','naf-automobiles'),'id'=>'footer-1','before_widget'=>'<div class="footer-widget">','after_widget'=>'</div>','before_title'=>'<h4 class="widget-title">','after_title'=>'</h4>']);
}
add_action('widgets_init','naf_widgets_init');

function naf_handle_contact() {
    check_ajax_referer('naf_nonce','nonce');
    $name=sanitize_text_field($_POST['name']??'');
    $email=sanitize_email($_POST['email']??'');
    $phone=sanitize_text_field($_POST['phone']??'');
    $service=sanitize_text_field($_POST['service']??'');
    $message=sanitize_textarea_field($_POST['message']??'');
    if(!$name||!$email||!$message) wp_send_json_error(['message'=>'Veuillez remplir tous les champs obligatoires.']);
    $to=get_option('admin_email');
    $subject="Nouvelle demande - NAF Automobiles - $name";
    $body="Nom: $name\nEmail: $email\nTéléphone: $phone\nService: $service\n\nMessage:\n$message";
    $headers=["Content-Type: text/plain; charset=UTF-8","From: $name <$email>"];
    $sent=wp_mail($to,$subject,$body,$headers);
    $sent?wp_send_json_success(['message'=>'Votre message a bien été envoyé.']):wp_send_json_error(['message'=>'Erreur. Appelez-nous directement.']);
}
add_action('wp_ajax_naf_contact','naf_handle_contact');
add_action('wp_ajax_nopriv_naf_contact','naf_handle_contact');

function naf_phone_link(string $label='021 964 64 71',string $class=''):string{
    return sprintf('<a href="tel:+41219646471" class="%s">%s</a>',esc_attr($class),esc_html($label));
}

add_filter('excerpt_length',fn()=>20);
add_filter('excerpt_more',fn()=>'...');
add_action('after_setup_theme',function(){show_admin_bar(current_user_can('manage_options'));});