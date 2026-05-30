<?php
/* Template Name: Histoire */
get_header();
?>
<div class="page-hero">
    <div class="container page-hero__content">
        <nav class="breadcrumb"><a href="<?php echo home_url('/');?>">Accueil</a><i class="fas fa-chevron-right"></i><span>Notre Histoire</span></nav>
        <span class="section-badge"><i class="fas fa-history"></i> Plus de 30 ans d'expertise</span>
        <h1>Notre Histoire</h1>
        <p>NAF Automobiles SA : une entreprise familiale ancrée dans la tradition et tournée vers l'avenir, au service des automobilistes de Suisse romande.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="section-header"><span class="section-badge">Notre parcours</span><h2 class="section-title">30 ans de <span class="text-red">passion automobile</span></h2></div>
        <div class="timeline">
            <div class="timeline-item"><div class="timeline-item__year">1990</div><div class="timeline-item__content"><h3>La fondation</h3><p>NAF Automobiles SA ouvre ses portes en Suisse romande avec une vision simple : offrir un service de qualité, honnête et transparent.</p></div></div>
            <div class="timeline-item timeline-item--right"><div class="timeline-item__year">1998</div><div class="timeline-item__content"><h3>Expansion des services</h3><p>Création du service de dépannage 24h/24 et lancement de la section location de véhicules.</p></div></div>
            <div class="timeline-item"><div class="timeline-item__year">2005</div><div class="timeline-item__content"><h3>Certification UPSA</h3><p>Obtention de la certification UPSA (Union Professionnelle Suisse de l'Automobile). Une reconnaissance officielle de notre savoir-faire.</p></div></div>
            <div class="timeline-item timeline-item--right"><div class="timeline-item__year">2012</div><div class="timeline-item__content"><h3>Modernisation de l'atelier</h3><p>Investissement dans des équipements de diagnostic électronique de pointe. NAF s'adapte à la complexité des véhicules modernes et hybrides.</p></div></div>
            <div class="timeline-item"><div class="timeline-item__year">2020</div><div class="timeline-item__content"><h3>30 ans &amp; cap sur l'avenir</h3><p>30 ans de service, des milliers de clients fidèles et une équipe soudée. NAF continue d'innover tout en restant fidèle à ses valeurs fondatrices.</p></div></div>
        </div>
    </div>
</section>
<section class="section section--gray">
    <div class="container">
        <div class="section-header"><span class="section-badge">Ce qui nous guide</span><h2 class="section-title">Nos <span class="text-red">valeurs</span></h2></div>
        <div class="services__grid">
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-handshake"></i></div><h3 class="service-card__title">Honnêteté</h3><p class="service-card__desc">Devis transparent, pas de mauvaises surprises. Nous vous expliquons chaque intervention avant de commencer.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-medal"></i></div><h3 class="service-card__title">Qualité</h3><p class="service-card__desc">Pièces d'origine ou équivalent constructeur. Techniciens certifiés. Garantie sur les travaux effectués.</p></div>
            <div class="service-card"><div class="service-card__icon"><i class="fas fa-users"></i></div><h3 class="service-card__title">Proximité</h3><p class="service-card__desc">Une relation humaine avec nos clients. Nous prenons le temps d'écouter et de conseiller.</p></div>
        </div>
    </div>
</section>
<style>.timeline{position:relative;max-width:800px;margin:0 auto}.timeline::before{content:'';position:absolute;left:50%;top:0;bottom:0;width:2px;background:var(--gray-light);transform:translateX(-50%)}.timeline-item{display:flex;gap:2rem;align-items:flex-start;margin-bottom:3rem;padding-right:calc(50% + 2rem)}.timeline-item--right{flex-direction:row-reverse;padding-right:0;padding-left:calc(50% + 2rem)}.timeline-item__year{background:var(--red);color:var(--white);font-family:var(--font-main);font-weight:800;font-size:1.1rem;padding:.5rem 1rem;border-radius:50px;white-space:nowrap;min-width:80px;text-align:center}.timeline-item__content{background:var(--white);border:1.5px solid rgba(0,0,0,.08);border-radius:var(--radius);padding:1.5rem;flex:1}.timeline-item__content h3{margin-bottom:.5rem;font-size:1.1rem}.timeline-item__content p{color:var(--gray);font-size:.9rem;line-height:1.6}@media(max-width:640px){.timeline::before{left:1.5rem}.timeline-item,.timeline-item--right{flex-direction:column;padding:0 0 0 3.5rem;gap:1rem}}</style>
<?php get_footer();?>