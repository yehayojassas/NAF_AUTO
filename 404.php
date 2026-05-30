<?php get_header();?>
<section class="section" style="text-align:center;padding:8rem 0;">
<div class="container">
<div style="font-size:8rem;font-weight:900;color:var(--red);opacity:.15;font-family:var(--font-main);line-height:1;">404</div>
<h1 style="margin-top:-1rem;margin-bottom:1rem;">Page introuvable</h1>
<p style="color:var(--gray);max-width:400px;margin:0 auto 2rem;">La page que vous cherchez n'existe pas ou a été déplacée.</p>
<div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
<a href="<?php echo home_url('/');?>" class="btn btn--red btn--icon"><i class="fas fa-home"></i> Retour à l'accueil</a>
<a href="<?php echo home_url('/contact');?>" class="btn btn--icon" style="color:var(--dark);border:2px solid var(--gray-light);border-radius:50px;padding:.75rem 1.75rem;"><i class="fas fa-envelope"></i> Nous contacter</a>
</div>
</div></section>
<?php get_footer();?>