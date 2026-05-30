<?php get_header();?>
<div class="page-hero"><div class="container page-hero__content"><nav class="breadcrumb"><a href="<?php echo home_url('/');?>">Accueil</a><i class="fas fa-chevron-right"></i><span><?php the_title();?></span></nav><h1><?php the_title();?></h1></div></div>
<section class="content-wrap"><div class="container" style="max-width:800px;"><?php while(have_posts()):the_post();?><div class="entry-content"><?php the_content();?></div><?php endwhile;?></div></section>
<?php get_footer();?>