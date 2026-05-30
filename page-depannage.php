<?php
/* Template Name: Dépannage */
get_header();
?>
<div class="page-hero page-hero--depannage">
    <div class="container page-hero__content">
        <nav class="breadcrumb"><a href="<?php echo home_url('/');?>">Accueil</a><i class="fas fa-chevron-right"></i><span>Dépannage</span></nav>
        <span class="section-badge"><i class="fas fa-exclamation-triangle"></i> Disponible 24h/24 — 365j/an</span>
        <h1>Dépannage &amp; Remorquage</h1>
        <p>Panne, accident, pneu à plat? Notre équipe intervient rapidement sur tout le réseau routier de Suisse romande, à toute heure du jour et de la nuit.</p>
        <div style="margin-top:2rem;display:flex;gap:1rem;flex-wrap:wrap;">
            <a href="tel:+41219646471" class="btn btn--red btn--lg btn--icon"><i class="fas fa-phone-alt"></i> Appeler maintenant — 021 964 64 71</a>
        </div>
    </div>
</div>
<section class="emergency-banner">
    <div class="container emergency-banner__inner">
        <div class="emergency-banner__text"><i class="fas fa-exclamation-triangle emergency-banner__icon pulse"></i><div><h2>En ce moment en panne?</h2><p>Un technicien est disponible <strong>maintenant</strong> — intervention rapide garantie.</p></div></div>
        <a href="tel:+41219646471" class="btn btn--white btn--xl btn--icon"><i class="fas fa-phone-alt"></i><span><small>Appel d'urgence 24h/24</small>021 964 64 71</span></a>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="section-header"><span class="section-badge">Nos interventions</span><h2 class="section-title">Ce que nous <span class="text-red">gérons</span></h2><p class="section-subtitle">Quelle que soit la situation, nous avons la solution.</p></div>
        <div class="services__grid">
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-battery-empty"></i></div><h3 class="service-card__title">Batterie à plat</h3><p class="service-card__desc">Démarrage assistance, remplacement de batterie sur place ou en atelier.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-circle-notch"></i></div><h3 class="service-card__title">Pneu crevé</h3><p class="service-card__desc">Montage de la roue de secours, réparation ou remplacement du pneu.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-truck-pickup"></i></div><h3 class="service-card__title">Remorquage</h3><p class="service-card__desc">Transport de votre véhicule vers notre garage ou destination de votre choix. Toutes marques.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-gas-pump"></i></div><h3 class="service-card__title">Panne de carburant</h3><p class="service-card__desc">Livraison de carburant sur place pour vous remettre en route rapidement.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-lock-open"></i></div><h3 class="service-card__title">Ouverture de véhicule</h3><p class="service-card__desc">Clé oubliée dans le véhicule? Intervention rapide et sans dommage.</p></div>
            <div class="service-card service-card--red"><div class="service-card__icon"><i class="fas fa-road"></i></div><h3 class="service-card__title">Accident / Sinistre</h3><p class="service-card__desc">Prise en charge complète après accident. Coordination avec votre assurance si besoin.</p></div>
        </div>
    </div>
</section>
<?php get_footer();?>