<?php get_header(); ?>
<div class="page-hero"><div class="container page-hero__content"><h1><?php wp_title(''); ?></h1></div></div>
<section class="section"><div class="container">
<?php if(have_posts()): ?>
<div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem;">
<?php while(have_posts()):the_post(); ?>
<article style="border:1.5px solid rgba(0,0,0,.08);border-radius:var(--radius-lg);overflow:hidden;">
<?php if(has_post_thumbnail()):?><div style="height:200px;overflow:hidden;"><?php the_post_thumbnail('medium_large',['style'=>'width:100%;height:100%;object-fit:cover;']);?></div><?php endif;?>
<div style="padding:1.5rem;"><h2 style="font-size:1.2rem;margin-bottom:.5rem;"><a href="<?php the_permalink();?>" style="color:var(--dark);"><?php the_title();?></a></h2><p style="color:var(--gray);font-size:.9rem;"><?php the_excerpt();?></p><a href="<?php the_permalink();?>" class="btn btn--red btn--sm" style="margin-top:1rem;">Lire la suite</a></div>
</article>
<?php endwhile;?></div>
<div style="margin-top:2rem;"><?php the_posts_pagination();?></div>
<?php else:?><p style="color:var(--gray);text-align:center;padding:4rem 0;">Aucun article trouvé.</p><?php endif;?>
</div></section>
<?php get_footer();?>