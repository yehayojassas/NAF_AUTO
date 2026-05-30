<?php
/* Template Name: Location */
get_header();
?>
<div class="page-hero">
    <div class="container page-hero__content">
        <nav class="breadcrumb"><a href="<?php echo home_url('/');?>">Accueil</a><i class="fas fa-chevron-right"></i><span>Location</span></nav>
        <span class="section-badge"><i class="fas fa-car"></i> Courte et longue durée</span>
        <h1>Location de Véhicules</h1>
        <p>Véhicule de remplacement ou location courte/longue durée — une flotte variée disponible rapidement. Tarifs compétitifs, véhicules entretenus par nos soins.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="section-header"><span class="section-badge">Notre flotte</span><h2 class="section-title">Véhicules <span class="text-red">disponibles</span></h2><p class="section-subtitle">Tous nos véhicules sont contrôlés et entretenus par notre équipe avant chaque location.</p></div>
        <div class="services__grid">
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-car-side"></i></div><h3 class="service-card__title">Citadine / Compacte</h3><p class="service-card__desc">Idéale pour les trajets urbains et pendulaires. Économique et facile à garer.</p><span class="service-card__link">À partir de CHF 45/jour <i class="fas fa-arrow-right"></i></span></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-car"></i></div><h3 class="service-card__title">Berline</h3><p class="service-card__desc">Confort optimal pour vos déplacements professionnels ou familiaux.</p><span class="service-card__link">À partir de CHF 65/jour <i class="fas fa-arrow-right"></i></span></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-truck"></i></div><h3 class="service-card__title">Utilitaire</h3><p class="service-card__desc">Véhicule utilitaire pour déménagement, livraison ou transport de marchandises.</p><span class="service-card__link">À partir de CHF 80/jour <i class="fas fa-arrow-right"></i></span></div>
        </div>
        <div style="background:var(--gray-bg);border-radius:20px;padding:2.5rem;margin-top:3rem;text-align:center;">
            <h3 style="margin-bottom:1rem;">Véhicule de courtoisie</h3>
            <p style="color:var(--gray);max-width:500px;margin:0 auto 1.5rem;">Votre véhicule en réparation? Nous mettons à votre disposition un véhicule de remplacement.</p>
            <a href="tel:+41219646471" class="btn btn--red btn--icon"><i class="fas fa-phone-alt"></i> Renseignements &amp; Réservation — 021 964 64 71</a>
        </div>
    </div>
</section>
<?php get_footer();?>