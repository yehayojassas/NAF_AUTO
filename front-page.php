<?php get_header(); ?>

<!-- HERO -->
<section class="hero" id="home">
    <div class="hero__bg"><div class="hero__overlay"></div></div>
    <div class="container hero__content">
        <div class="hero__badge animate-fadeUp"><i class="fas fa-shield-alt"></i> Certifié UPSA — Suisse Romande</div>
        <h1 class="hero__title animate-fadeUp delay-1">Votre Garage de Confiance<br><span class="text-red">depuis plus de 30 ans</span></h1>
        <p class="hero__subtitle animate-fadeUp delay-2">Entretien, réparation, dépannage 24h/24, location et vente de véhicules.<br>Une équipe de professionnels à votre service en Suisse romande.</p>
        <div class="hero__cta animate-fadeUp delay-3">
            <a href="#services" class="btn btn--red btn--lg btn--icon scroll-link"><i class="fas fa-tools"></i> Nos Prestations</a>
            <a href="tel:+41219646471" class="btn btn--outline-white btn--lg btn--icon"><i class="fas fa-phone-alt"></i> 021 964 64 71</a>
        </div>
        <div class="hero__stats animate-fadeUp delay-4">
            <div class="hero__stat"><span class="stat-number">30+</span><span class="stat-label">Années d'expérience</span></div>
            <div class="hero__stat-divider"></div>
            <div class="hero__stat"><span class="stat-number">24/7</span><span class="stat-label">Dépannage disponible</span></div>
            <div class="hero__stat-divider"></div>
            <div class="hero__stat"><span class="stat-number">5000+</span><span class="stat-label">Clients satisfaits</span></div>
        </div>
    </div>
    <a href="#services" class="hero__scroll scroll-link" aria-label="Défiler"><i class="fas fa-chevron-down"></i></a>
</section>

<!-- SERVICES -->
<section class="services section" id="services">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Ce que nous faisons</span>
            <h2 class="section-title">Nos <span class="text-red">Prestations</span></h2>
            <p class="section-subtitle">Une gamme complète de services automobiles pour vous accompagner à chaque étape</p>
        </div>
        <div class="services__grid">
            <a href="<?php echo home_url('/garage');?>" class="service-card service-card--featured"><div class="service-card__icon"><i class="fas fa-wrench"></i></div><h3 class="service-card__title">Garage &amp; Entretien</h3><p class="service-card__desc">Révision, vidange, freins, courroie de distribution, diagnostics électroniques. Toutes marques.</p><span class="service-card__link">En savoir plus <i class="fas fa-arrow-right"></i></span></a>
            <a href="<?php echo home_url('/depannage');?>" class="service-card service-card--red"><div class="service-card__badge">24h/24</div><div class="service-card__icon"><i class="fas fa-truck-pickup"></i></div><h3 class="service-card__title">Dépannage</h3><p class="service-card__desc">Intervention rapide sur routes cantonales et autoroutes. Remorquage, batterie, pneu à plat.</p><span class="service-card__link">Appeler maintenant <i class="fas fa-arrow-right"></i></span></a>
            <a href="<?php echo home_url('/location');?>" class="service-card"><div class="service-card__icon"><i class="fas fa-car"></i></div><h3 class="service-card__title">Location</h3><p class="service-card__desc">Véhicules de courtoisie et location courte/longue durée. Flotte variée disponible rapidement.</p><span class="service-card__link">Voir les véhicules <i class="fas fa-arrow-right"></i></span></a>
            <a href="<?php echo home_url('/vente');?>" class="service-card"><div class="service-card__icon"><i class="fas fa-tag"></i></div><h3 class="service-card__title">Vente</h3><p class="service-card__desc">Véhicules d'occasion soigneusement sélectionnés et contrôlés. Financement et reprise possibles.</p><span class="service-card__link">Voir les annonces <i class="fas fa-arrow-right"></i></span></a>
            <a href="<?php echo home_url('/pneus-et-jantes');?>" class="service-card"><div class="service-card__icon"><i class="fas fa-circle-notch"></i></div><h3 class="service-card__title">Pneus &amp; Jantes</h3><p class="service-card__desc">Vente, montage et équilibrage de pneus toutes saisons. Large choix de jantes aluminium.</p><span class="service-card__link">Nos offres <i class="fas fa-arrow-right"></i></span></a>
            <a href="<?php echo home_url('/contact');?>" class="service-card service-card--contact"><div class="service-card__icon"><i class="fas fa-headset"></i></div><h3 class="service-card__title">Conseil &amp; Devis</h3><p class="service-card__desc">Besoin d'un avis d'expert? Nos techniciens vous conseillent et établissent un devis gratuit.</p><span class="service-card__link">Nous contacter <i class="fas fa-arrow-right"></i></span></a>
        </div>
    </div>
</section>

<!-- WHY US -->
<section class="why-us section section--gray">
    <div class="container why-us__inner">
        <div class="why-us__image">
            <div class="why-us__image-wrap">
                <img src="<?php echo NAF_URI;?>/assets/images/garage-placeholder.jpg" alt="Équipe NAF Automobiles" onerror="this.style.display='none';this.parentElement.classList.add('why-us__image-fallback')">
                <div class="why-us__experience-badge"><span class="badge-number">30+</span><span class="badge-text">Ans d'expertise</span></div>
            </div>
        </div>
        <div class="why-us__content">
            <span class="section-badge">Pourquoi nous choisir</span>
            <h2 class="section-title">Le garage <span class="text-red">qui fait la différence</span></h2>
            <p class="why-us__intro">Chez NAF Automobiles SA, nous combinons savoir-faire traditionnel et technologies modernes pour vous offrir un service irréprochable, à un prix juste.</p>
            <div class="why-us__features">
                <div class="feature-item"><div class="feature-item__icon"><i class="fas fa-certificate"></i></div><div class="feature-item__text"><h4>Techniciens certifiés UPSA</h4><p>Nos mécaniciens sont formés et certifiés selon les normes suisses les plus strictes.</p></div></div>
                <div class="feature-item"><div class="feature-item__icon"><i class="fas fa-bolt"></i></div><div class="feature-item__text"><h4>Diagnostic électronique multi-marques</h4><p>Équipements de pointe pour diagnostiquer et réparer tous types de véhicules.</p></div></div>
                <div class="feature-item"><div class="feature-item__icon"><i class="fas fa-hand-holding-usd"></i></div><div class="feature-item__text"><h4>Devis gratuit &amp; transparent</h4><p>Aucune surprise sur la facture. Nous vous informons avant chaque intervention.</p></div></div>
                <div class="feature-item"><div class="feature-item__icon"><i class="fas fa-car-crash"></i></div><div class="feature-item__text"><h4>Véhicule de remplacement</h4><p>Un véhicule de courtoisie disponible pour ne pas rester bloqué.</p></div></div>
            </div>
            <a href="<?php echo home_url('/histoire');?>" class="btn btn--red btn--icon"><i class="fas fa-history"></i> Notre histoire</a>
        </div>
    </div>
</section>

<!-- EMERGENCY -->
<section class="emergency-banner">
    <div class="container emergency-banner__inner">
        <div class="emergency-banner__text"><i class="fas fa-exclamation-triangle emergency-banner__icon pulse"></i><div><h2>Panne ou accident?</h2><p>Nous intervenons <strong>24h/24 – 365 jours par an</strong> sur toute la Suisse romande.</p></div></div>
        <a href="tel:+41219646471" class="btn btn--white btn--xl btn--icon"><i class="fas fa-phone-alt"></i><span><small>Appelez maintenant</small>021 964 64 71</span></a>
    </div>
</section>

<!-- PROCESS -->
<section class="process section">
    <div class="container">
        <div class="section-header"><span class="section-badge">Simple &amp; rapide</span><h2 class="section-title">Comment ça <span class="text-red">fonctionne?</span></h2></div>
        <div class="process__steps">
            <div class="process-step"><div class="process-step__number">01</div><div class="process-step__icon"><i class="fas fa-phone-alt"></i></div><h3>Appelez ou contactez-nous</h3><p>Par téléphone, email ou via notre formulaire. Réponse rapide garantie.</p></div>
            <div class="process-step__arrow"><i class="fas fa-chevron-right"></i></div>
            <div class="process-step"><div class="process-step__number">02</div><div class="process-step__icon"><i class="fas fa-calendar-check"></i></div><h3>Prise de rendez-vous</h3><p>Nous trouvons le créneau qui vous convient. Délais courts garantis.</p></div>
            <div class="process-step__arrow"><i class="fas fa-chevron-right"></i></div>
            <div class="process-step"><div class="process-step__number">03</div><div class="process-step__icon"><i class="fas fa-search"></i></div><h3>Diagnostic gratuit</h3><p>Nos experts analysent votre véhicule et vous remettent un devis sans engagement.</p></div>
            <div class="process-step__arrow"><i class="fas fa-chevron-right"></i></div>
            <div class="process-step"><div class="process-step__number">04</div><div class="process-step__icon"><i class="fas fa-check-circle"></i></div><h3>Intervention &amp; livraison</h3><p>Travail soigné, dans les délais convenus. Votre véhicule repart comme neuf.</p></div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials section section--gray">
    <div class="container">
        <div class="section-header"><span class="section-badge">Ce que disent nos clients</span><h2 class="section-title">Ils nous font <span class="text-red">confiance</span></h2></div>
        <div class="testimonials__grid">
            <div class="testimonial-card"><div class="testimonial-card__stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><p class="testimonial-card__text">« Service impeccable ! En panne sur l'autoroute un dimanche soir, l'équipe NAF est arrivée en moins de 30 minutes. Professionnels et efficaces. »</p><div class="testimonial-card__author"><div class="testimonial-card__avatar">M</div><div><strong>Marc D.</strong><span>Client fidèle depuis 2018</span></div></div></div>
            <div class="testimonial-card"><div class="testimonial-card__stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><p class="testimonial-card__text">« J'ai confié mon VW Golf pour une révision complète. Travail sérieux, prix honnête, délai respecté. Je recommande sans hésitation. »</p><div class="testimonial-card__author"><div class="testimonial-card__avatar">S</div><div><strong>Sophie L.</strong><span>Cliente depuis 2020</span></div></div></div>
            <div class="testimonial-card"><div class="testimonial-card__stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><p class="testimonial-card__text">« Achat d'un véhicule d'occasion chez NAF, tout s'est passé parfaitement. Le véhicule était impeccable. Je suis ravi. »</p><div class="testimonial-card__author"><div class="testimonial-card__avatar">T</div><div><strong>Thomas R.</strong><span>Client depuis 2022</span></div></div></div>
        </div>
        <div class="testimonials__google"><i class="fab fa-google"></i><span>Note Google : <strong>4.8/5</strong> — Basé sur 120+ avis vérifiés</span></div>
    </div>
</section>

<!-- CONTACT -->
<section class="contact-section section" id="contact">
    <div class="container">
        <div class="section-header"><span class="section-badge">Parlons-en</span><h2 class="section-title">Contactez-<span class="text-red">nous</span></h2></div>
        <div class="contact-section__inner">
            <div class="contact-info">
                <div class="contact-info__item"><div class="contact-info__icon"><i class="fas fa-phone-alt"></i></div><div><h4>Téléphone</h4><a href="tel:+41219646471">021 964 64 71</a></div></div>
                <div class="contact-info__item"><div class="contact-info__icon"><i class="fas fa-envelope"></i></div><div><h4>Email</h4><a href="mailto:info@nafautomobiles.ch">info@nafautomobiles.ch</a></div></div>
                <div class="contact-info__item"><div class="contact-info__icon"><i class="fas fa-clock"></i></div><div><h4>Horaires</h4><p>Lun–Ven : 07:30 – 18:00</p><p>Sam : 08:00 – 12:00</p></div></div>
                <div class="contact-info__item contact-info__item--emergency"><div class="contact-info__icon"><i class="fas fa-exclamation-triangle"></i></div><div><h4>Urgence / Dépannage</h4><p>Disponible <strong>24h/24 — 365j/an</strong></p><a href="tel:+41219646471" class="btn btn--red btn--sm btn--icon"><i class="fas fa-phone-alt"></i> Appeler</a></div></div>
            </div>
            <div class="contact-form-wrap">
                <form class="contact-form" id="naf-contact-form" novalidate>
                    <?php wp_nonce_field('naf_nonce','nonce');?>
                    <div class="form-row"><div class="form-group"><label for="name">Nom complet *</label><input type="text" id="name" name="name" placeholder="Jean Dupont" required></div><div class="form-group"><label for="email">Email *</label><input type="email" id="email" name="email" placeholder="jean@email.com" required></div></div>
                    <div class="form-row"><div class="form-group"><label for="phone">Téléphone</label><input type="tel" id="phone" name="phone" placeholder="079 000 00 00"></div><div class="form-group"><label for="service">Service</label><select id="service" name="service"><option value="">Choisir un service</option><option value="garage">Garage &amp; Entretien</option><option value="depannage">Dépannage</option><option value="location">Location</option><option value="vente">Vente</option><option value="pneus">Pneus &amp; Jantes</option><option value="autre">Autre</option></select></div></div>
                    <div class="form-group"><label for="message">Message *</label><textarea id="message" name="message" rows="5" placeholder="Décrivez votre besoin..." required></textarea></div>
                    <div class="form-submit"><button type="submit" class="btn btn--red btn--lg btn--icon btn--full"><i class="fas fa-paper-plane"></i> Envoyer le message</button></div>
                    <div class="form-message" id="form-message" role="alert" aria-live="polite"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>