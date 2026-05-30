<?php
/* Template Name: Contact */
get_header();
?>
<div class="page-hero">
    <div class="container page-hero__content">
        <nav class="breadcrumb"><a href="<?php echo home_url('/');?>">Accueil</a><i class="fas fa-chevron-right"></i><span>Contact</span></nav>
        <span class="section-badge"><i class="fas fa-headset"></i> Réponse rapide garantie</span>
        <h1>Contactez-nous</h1>
        <p>Pour un rendez-vous, un devis ou toute question. Pour les urgences, appelez directement le 021 964 64 71.</p>
    </div>
</div>
<section class="contact-section section">
    <div class="container">
        <div class="contact-section__inner">
            <div class="contact-info">
                <div class="contact-info__item"><div class="contact-info__icon"><i class="fas fa-phone-alt"></i></div><div><h4>Téléphone</h4><a href="tel:+41219646471" style="font-size:1.2rem;font-weight:700;color:var(--red);">021 964 64 71</a></div></div>
                <div class="contact-info__item"><div class="contact-info__icon"><i class="fas fa-envelope"></i></div><div><h4>Email</h4><a href="mailto:info@nafautomobiles.ch">info@nafautomobiles.ch</a></div></div>
                <div class="contact-info__item"><div class="contact-info__icon"><i class="fas fa-clock"></i></div><div><h4>Horaires</h4><p>Lun–Ven : 07:30 – 18:00</p><p>Sam : 08:00 – 12:00</p></div></div>
                <div class="contact-info__item contact-info__item--emergency"><div class="contact-info__icon"><i class="fas fa-exclamation-triangle"></i></div><div><h4>Urgence / Dépannage</h4><p>Disponible <strong>24h/24 — 365j/an</strong></p><a href="tel:+41219646471" class="btn btn--red btn--sm btn--icon" style="margin-top:.5rem;"><i class="fas fa-phone-alt"></i> Appeler maintenant</a></div></div>
            </div>
            <div class="contact-form-wrap">
                <h2 style="font-size:1.5rem;margin-bottom:1.5rem;">Envoyer un message</h2>
                <form class="contact-form" id="naf-contact-form" novalidate>
                    <?php wp_nonce_field('naf_nonce','nonce');?>
                    <div class="form-row"><div class="form-group"><label for="name">Nom complet *</label><input type="text" id="name" name="name" placeholder="Jean Dupont" required></div><div class="form-group"><label for="email">Email *</label><input type="email" id="email" name="email" placeholder="jean@email.com" required></div></div>
                    <div class="form-row"><div class="form-group"><label for="phone">Téléphone</label><input type="tel" id="phone" name="phone" placeholder="079 000 00 00"></div><div class="form-group"><label for="service">Service souhaité</label><select id="service" name="service"><option value="">Choisir un service</option><option value="garage">Garage &amp; Entretien</option><option value="depannage">Dépannage</option><option value="location">Location</option><option value="vente">Vente</option><option value="pneus">Pneus &amp; Jantes</option><option value="devis">Demande de devis</option><option value="autre">Autre</option></select></div></div>
                    <div class="form-group"><label for="message">Votre message *</label><textarea id="message" name="message" rows="6" placeholder="Décrivez votre besoin..." required></textarea></div>
                    <div class="form-submit"><button type="submit" class="btn btn--red btn--lg btn--icon btn--full"><i class="fas fa-paper-plane"></i> Envoyer le message</button></div>
                    <div class="form-message" id="form-message" role="alert" aria-live="polite"></div>
                </form>
            </div>
        </div>
        <div style="margin-top:4rem;border-radius:20px;overflow:hidden;height:350px;background:var(--gray-bg);display:flex;align-items:center;justify-content:center;border:1.5px solid rgba(0,0,0,.08);">
            <div style="text-align:center;color:var(--gray);"><i class="fas fa-map-marked-alt" style="font-size:3rem;color:var(--red);display:block;margin-bottom:1rem;"></i><p style="font-family:var(--font-main);font-weight:600;">Carte Google Maps</p><p style="font-size:.85rem;">Adresse à intégrer</p></div>
        </div>
    </div>
</section>
<?php get_footer();?>