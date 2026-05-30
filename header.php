<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NAF Automobiles SA - Garage, dépannage 24h/24, location et vente de véhicules en Suisse. Appelez le 021 964 64 71.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="topbar">
    <div class="container topbar__inner">
        <div class="topbar__left">
            <span><i class="fas fa-clock"></i> Lun–Ven 07:30–18:00 | Sam 08:00–12:00</span>
            <span class="topbar__divider">|</span>
            <span><i class="fas fa-map-marker-alt"></i> Suisse Romande</span>
        </div>
        <div class="topbar__right">
            <span class="topbar__emergency"><i class="fas fa-exclamation-triangle"></i> Dépannage 24h/24 &amp; 365j/an</span>
            <?php echo naf_phone_link('021 964 64 71', 'topbar__phone'); ?>
        </div>
    </div>
</div>

<header class="site-header" id="site-header">
    <div class="container header__inner">
        <div class="header__logo">
            <?php if(has_custom_logo()): ?>
                <?php the_custom_logo(); ?>
            <?php else: ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo-text">
                    <span class="logo-naf">NAF</span>
                    <span class="logo-auto">AUTOMOBILES<small>SA</small></span>
                </a>
            <?php endif; ?>
        </div>
        <nav class="header__nav" aria-label="Navigation principale">
            <?php wp_nav_menu(['theme_location'=>'primary','container'=>false,'menu_class'=>'nav__list','fallback_cb'=>'naf_fallback_menu']); ?>
        </nav>
        <div class="header__actions">
            <?php echo naf_phone_link('021 964 64 71','btn btn--red header__phone'); ?>
            <button class="burger" id="burger" aria-label="Ouvrir le menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>

<div class="mobile-overlay" id="mobile-overlay" aria-hidden="true">
    <button class="mobile-overlay__close" id="mobile-close" aria-label="Fermer"><i class="fas fa-times"></i></button>
    <div class="mobile-overlay__logo">
        <span class="logo-naf">NAF</span>
        <span class="logo-auto">AUTOMOBILES<small>SA</small></span>
    </div>
    <?php wp_nav_menu(['theme_location'=>'primary','container'=>false,'menu_class'=>'mobile-nav','fallback_cb'=>'naf_fallback_mobile_menu']); ?>
    <div class="mobile-overlay__contact">
        <a href="tel:+41219646471" class="btn btn--red btn--lg btn--full"><i class="fas fa-phone"></i> 021 964 64 71</a>
        <p><i class="fas fa-clock"></i> Dépannage 24h/24 – 365j/an</p>
    </div>
</div>

<?php
function naf_fallback_menu(){
    echo '<ul class="nav__list">
    <li><a href="'.home_url('/').'">Accueil</a></li>
    <li><a href="'.home_url('/histoire').'">Histoire</a></li>
    <li class="has-dropdown"><a href="'.home_url('/garage').'">Garage <i class="fas fa-chevron-down"></i></a>
        <ul class="dropdown">
            <li><a href="'.home_url('/garage').'">Entretien &amp; Réparation</a></li>
            <li><a href="'.home_url('/pneus-et-jantes').'">Pneus &amp; Jantes</a></li>
        </ul>
    </li>
    <li><a href="'.home_url('/depannage').'">Dépannage</a></li>
    <li><a href="'.home_url('/location').'">Location</a></li>
    <li><a href="'.home_url('/vente').'">Vente</a></li>
    <li><a href="'.home_url('/contact').'">Contact</a></li>
    </ul>';
}
function naf_fallback_mobile_menu(){
    echo '<ul class="mobile-nav">
    <li><a href="'.home_url('/').'">Accueil</a></li>
    <li><a href="'.home_url('/histoire').'">Histoire</a></li>
    <li><a href="'.home_url('/garage').'">Garage</a></li>
    <li><a href="'.home_url('/depannage').'">Dépannage</a></li>
    <li><a href="'.home_url('/location').'">Location</a></li>
    <li><a href="'.home_url('/vente').'">Vente</a></li>
    <li><a href="'.home_url('/pneus-et-jantes').'">Pneus &amp; Jantes</a></li>
    <li><a href="'.home_url('/contact').'">Contact</a></li>
    </ul>';
}
?>