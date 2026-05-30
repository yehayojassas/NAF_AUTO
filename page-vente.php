<?php
/* Template Name: Vente */
get_header();
?>
<div class="page-hero">
    <div class="container page-hero__content">
        <nav class="breadcrumb"><a href="<?php echo home_url('/');?>">Accueil</a><i class="fas fa-chevron-right"></i><span>Vente</span></nav>
        <span class="section-badge"><i class="fas fa-tag"></i> Véhicules contrôlés &amp; garantis</span>
        <h1>Vente de Véhicules</h1>
        <p>Des véhicules d'occasion soigneusement sélectionnés, contrôlés par nos techniciens et proposés à des prix honnêtes. Reprise et financement possibles.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="section-header"><span class="section-badge">Notre stock</span><h2 class="section-title">Véhicules <span class="text-red">disponibles</span></h2></div>
        <div class="vehicles__grid">
<?php
$vehicles=[
['marque'=>'Volkswagen','modele'=>'Golf VII','annee'=>'2019','km'=>'48 500','prix'=>'18 900','carbu'=>'Essence','boite'=>'Automatique'],
['marque'=>'Toyota','modele'=>'Yaris Hybrid','annee'=>'2020','km'=>'32 000','prix'=>'21 500','carbu'=>'Hybride','boite'=>'Automatique'],
['marque'=>'Renault','modele'=>'Clio V','annee'=>'2021','km'=>'22 300','prix'=>'16 900','carbu'=>'Essence','boite'=>'Manuelle'],
['marque'=>'Skoda','modele'=>'Octavia','annee'=>'2018','km'=>'75 000','prix'=>'14 500','carbu'=>'Diesel','boite'=>'Manuelle'],
['marque'=>'BMW','modele'=>'320d','annee'=>'2017','km'=>'98 000','prix'=>'19 800','carbu'=>'Diesel','boite'=>'Automatique'],
['marque'=>'Peugeot','modele'=>'3008','annee'=>'2019','km'=>'55 000','prix'=>'22 500','carbu'=>'Diesel','boite'=>'Automatique'],
];
foreach($vehicles as $v):?>
<div class="vehicle-card"><div class="vehicle-card__image"><div class="vehicle-card__image-placeholder"><i class="fas fa-car"></i></div><span class="vehicle-card__badge"><?php echo $v['carbu'];?></span></div><div class="vehicle-card__content"><h3><?php echo $v['marque'].' '.$v['modele'];?></h3><div class="vehicle-card__specs"><span><i class="fas fa-calendar"></i><?php echo $v['annee'];?></span><span><i class="fas fa-tachometer-alt"></i><?php echo $v['km'];?> km</span><span><i class="fas fa-cog"></i><?php echo $v['boite'];?></span></div><div class="vehicle-card__footer"><div class="vehicle-card__price">CHF <?php echo $v['prix'];?>.—</div><a href="<?php echo home_url('/contact');?>" class="btn btn--red btn--sm">Nous contacter</a></div></div></div>
<?php endforeach;?>
        </div>
        <div style="text-align:center;margin-top:3rem;padding:2rem;background:var(--gray-bg);border-radius:20px;"><h3 style="margin-bottom:.75rem;">Vous ne trouvez pas votre bonheur?</h3><p style="color:var(--gray);margin-bottom:1.5rem;">Parlez-nous de votre projet et nous vous dénichons le véhicule idéal. Reprise possible.</p><a href="tel:+41219646471" class="btn btn--red btn--icon"><i class="fas fa-phone-alt"></i> 021 964 64 71</a></div>
    </div>
</section>
<style>.vehicles__grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}.vehicle-card{border:1.5px solid rgba(0,0,0,.08);border-radius:var(--radius-lg);overflow:hidden;transition:all var(--transition);background:var(--white)}.vehicle-card:hover{box-shadow:var(--shadow-lg);border-color:transparent;transform:translateY(-4px)}.vehicle-card__image-placeholder{height:200px;background:linear-gradient(135deg,var(--dark) 0%,var(--dark-2) 100%);display:flex;align-items:center;justify-content:center;font-size:4rem;color:rgba(255,255,255,.15)}.vehicle-card__badge{position:absolute;top:1rem;left:1rem;background:var(--red);color:var(--white);font-family:var(--font-main);font-size:.72rem;font-weight:700;padding:.25rem .75rem;border-radius:50px}.vehicle-card__image{position:relative}.vehicle-card__content{padding:1.25rem}.vehicle-card__content h3{font-size:1.05rem;margin-bottom:.75rem}.vehicle-card__specs{display:flex;gap:.75rem;flex-wrap:wrap;margin-bottom:1rem}.vehicle-card__specs span{color:var(--gray);font-size:.8rem;display:flex;align-items:center;gap:.3rem}.vehicle-card__specs i{color:var(--red);font-size:.7rem}.vehicle-card__footer{display:flex;align-items:center;justify-content:space-between}.vehicle-card__price{font-family:var(--font-main);font-size:1.2rem;font-weight:800;color:var(--red)}@media(max-width:900px){.vehicles__grid{grid-template-columns:repeat(2,1fr)}}@media(max-width:580px){.vehicles__grid{grid-template-columns:1fr}}</style>
<?php get_footer();?>