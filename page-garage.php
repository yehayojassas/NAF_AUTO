<?php
/* Template Name: Garage */
get_header();
?>
<div class="page-hero">
    <div class="container page-hero__content">
        <nav class="breadcrumb"><a href="<?php echo home_url('/');?>">Accueil</a><i class="fas fa-chevron-right"></i><span>Garage &amp; Entretien</span></nav>
        <span class="section-badge"><i class="fas fa-certificate"></i> Techniciens certifiés UPSA</span>
        <h1>Garage &amp; Entretien</h1>
        <p>De la simple révision aux réparations complexes, notre équipe de techniciens qualifiés prend soin de votre véhicule avec expertise et rigueur.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Nos prestations atelier</span>
            <h2 class="section-title">Services <span class="text-red">Garage</span></h2>
            <p class="section-subtitle">Toutes marques, tous modèles. Devis gratuit avant toute intervention.</p>
        </div>
        <div class="services__grid">
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-oil-can"></i></div><h3 class="service-card__title">Vidange &amp; Révision</h3><p class="service-card__desc">Vidange d'huile, remplacement des filtres, contrôle des niveaux. Révision complète selon carnet constructeur.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-tachometer-alt"></i></div><h3 class="service-card__title">Diagnostic électronique</h3><p class="service-card__desc">Lecture des codes d'erreurs OBD, diagnostic multi-marques avec équipement de dernière génération.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-circle-notch"></i></div><h3 class="service-card__title">Freins &amp; Suspension</h3><p class="service-card__desc">Remplacement des disques, plaquettes, amortisseurs, silent-blocs. Géométrie des trains roulants.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-cog"></i></div><h3 class="service-card__title">Courroie de distribution</h3><p class="service-card__desc">Remplacement préventif de la courroie et du kit complet pour éviter les casses moteur.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-snowflake"></i></div><h3 class="service-card__title">Climatisation</h3><p class="service-card__desc">Recharge, entretien et réparation du circuit de climatisation. Désinfection de l'habitacle.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-car-battery"></i></div><h3 class="service-card__title">Électricité &amp; Batterie</h3><p class="service-card__desc">Diagnostic électrique, remplacement de batterie, alternateur, démarreur, capteurs divers.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-wind"></i></div><h3 class="service-card__title">Échappement &amp; Catalyseur</h3><p class="service-card__desc">Réparation ou remplacement du système d'échappement. Contrôle des émissions polluantes.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-eye"></i></div><h3 class="service-card__title">Contrôle technique</h3><p class="service-card__desc">Préparation au contrôle technique et expertise pré-achat pour véhicules d'occasion.</p></div>
            <div class="service-card service-card--contact"><div class="service-card__icon"><i class="fas fa-plus-circle"></i></div><h3 class="service-card__title">Et bien plus...</h3><p class="service-card__desc">Contactez-nous pour tout autre besoin. Notre équipe vous conseille et établit un devis gratuit.</p><a href="<?php echo home_url('/contact');?>" class="service-card__link">Demander un devis <i class="fas fa-arrow-right"></i></a></div>
        </div>
    </div>
</section>
<section class="emergency-banner">
    <div class="container emergency-banner__inner">
        <div class="emergency-banner__text"><i class="fas fa-calendar-check emergency-banner__icon"></i><div><h2>Prendre rendez-vous</h2><p>Appelez-nous ou remplissez notre formulaire — nous confirmons sous 24h.</p></div></div>
        <div style="display:flex;gap:1rem;flex-wrap:wrap;align-items:center;">
            <a href="tel:+41219646471" class="btn btn--white btn--lg btn--icon"><i class="fas fa-phone-alt"></i> 021 964 64 71</a>
            <a href="<?php echo home_url('/contact');?>" class="btn btn--outline-white btn--lg">Formulaire en ligne</a>
        </div>
    </div>
</section>
<?php get_footer();?>