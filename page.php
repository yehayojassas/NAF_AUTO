<?php get_header();?>
<div class="page-hero"><div class="container page-hero__content"><nav class="breadcrumb" aria-label="Fil d'Ariane"><a href="<?php echo home_url('/');?>">Accueil</a><i class="fas fa-chevron-right"></i><span><?php the_title();?></span></nav><h1><?php the_title();?></h1></div></div>
<div class="content-wrap"><div class="container"><?php while(have_posts()):the_post();?><div class="entry-content"><?php the_content();?></div><?php endwhile;?></div></div>
<?php get_footer();?>