<?php
/* Template Name: Pneus et Jantes */
get_header();
?>
<div class="page-hero">
    <div class="container page-hero__content">
        <nav class="breadcrumb"><a href="<?php echo home_url('/');?>">Accueil</a><i class="fas fa-chevron-right"></i><span>Pneus &amp; Jantes</span></nav>
        <span class="section-badge"><i class="fas fa-circle-notch"></i> Toutes marques</span>
        <h1>Pneus &amp; Jantes</h1>
        <p>Vente, montage, équilibrage et stockage de pneus. Large choix de marques et de gammes, au meilleur rapport qualité/prix.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="section-header"><span class="section-badge">Nos services pneumatiques</span><h2 class="section-title">Tout pour vos <span class="text-red">pneus</span></h2></div>
        <div class="services__grid">
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-circle-notch"></i></div><h3 class="service-card__title">Vente de pneus</h3><p class="service-card__desc">Large choix : été, hiver, toutes saisons. Michelin, Continental, Bridgestone, Goodyear et marques économiques.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-wrench"></i></div><h3 class="service-card__title">Montage &amp; Équilibrage</h3><p class="service-card__desc">Montage professionnel et équilibrage électronique pour une tenue de route optimale.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-exchange-alt"></i></div><h3 class="service-card__title">Permutation été/hiver</h3><p class="service-card__desc">Changement de saison rapide. Stockage de vos pneus de saison dans notre dépôt sécurisé.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-ruler-combined"></i></div><h3 class="service-card__title">Géométrie des trains</h3><p class="service-card__desc">Contrôle et réglage du parallélisme et de la géométrie pour préserver vos pneus.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-star"></i></div><h3 class="service-card__title">Jantes aluminium</h3><p class="service-card__desc">Large gamme de jantes alu pour donner du style à votre véhicule. Montage inclus.</p></div>
            <div class="service-card service-card--red"><div class="service-card__icon"><i class="fas fa-tags"></i></div><h3 class="service-card__title">Devis gratuit</h3><p class="service-card__desc">Appelez-nous avec les dimensions (ex: 205/55 R16) pour un tarif immédiat.</p><a href="tel:+41219646471" class="service-card__link">021 964 64 71 <i class="fas fa-arrow-right"></i></a></div>
        </div>
    </div>
</section>
<section class="section section--gray">
    <div class="container">
        <div class="section-header"><span class="section-badge">Nos marques partenaires</span><h2 class="section-title">Marques <span class="text-red">disponibles</span></h2></div>
        <div class="brands-grid">
<?php foreach(['Michelin','Continental','Bridgestone','Goodyear','Pirelli','Dunlop','Nokian','Hankook'] as $b):?>
<div class="brand-card"><i class="fas fa-circle-notch" style="font-size:2rem;color:var(--red);margin-bottom:.5rem;display:block;"></i><span><?php echo $b;?></span></div>
<?php endforeach;?>
        </div>
    </div>
</section>
<style>.brands-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1rem}.brand-card{background:var(--white);border:1.5px solid rgba(0,0,0,.08);border-radius:var(--radius);padding:1.5rem 1rem;text-align:center;font-family:var(--font-main);font-weight:600;font-size:.95rem;transition:all var(--transition)}.brand-card:hover{border-color:var(--red);box-shadow:var(--shadow-md)}@media(max-width:640px){.brands-grid{grid-template-columns:repeat(2,1fr)}}</style>
<?php get_footer();?>