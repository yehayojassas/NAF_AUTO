<div class="emergency-strip">
    <div class="container emergency-strip__inner">
        <div class="emergency-strip__text">
            <i class="fas fa-exclamation-triangle"></i>
            <div><strong>Panne sur la route?</strong><span>Notre équipe intervient 24h/24 – 365 jours par an sur toute la Suisse romande</span></div>
        </div>
        <a href="tel:+41219646471" class="btn btn--white btn--lg emergency-strip__btn">
            <i class="fas fa-phone-alt"></i> 021 964 64 71 — Appeler maintenant
        </a>
    </div>
</div>

<footer class="site-footer">
    <div class="container footer__grid">
        <div class="footer__col footer__col--brand">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo">
                <span class="logo-naf">NAF</span><span class="logo-auto">AUTOMOBILES<small>SA</small></span>
            </a>
            <p class="footer__desc">Votre partenaire de confiance pour l'entretien, la réparation, le dépannage et la vente de véhicules en Suisse romande depuis plus de 30 ans.</p>
            <div class="footer__social">
                <a href="#" aria-label="Facebook" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="LinkedIn" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="footer__col">
            <h4 class="footer__title">Nos Services</h4>
            <ul class="footer__links">
                <li><a href="<?php echo home_url('/garage');?>"><i class="fas fa-chevron-right"></i> Garage &amp; Entretien</a></li>
                <li><a href="<?php echo home_url('/depannage');?>"><i class="fas fa-chevron-right"></i> Dépannage 24h/24</a></li>
                <li><a href="<?php echo home_url('/location');?>"><i class="fas fa-chevron-right"></i> Location de véhicules</a></li>
                <li><a href="<?php echo home_url('/vente');?>"><i class="fas fa-chevron-right"></i> Vente de véhicules</a></li>
                <li><a href="<?php echo home_url('/pneus-et-jantes');?>"><i class="fas fa-chevron-right"></i> Pneus &amp; Jantes</a></li>
                <li><a href="<?php echo home_url('/histoire');?>"><i class="fas fa-chevron-right"></i> Notre Histoire</a></li>
            </ul>
        </div>
        <div class="footer__col">
            <h4 class="footer__title">Contact</h4>
            <ul class="footer__contact-list">
                <li><i class="fas fa-map-marker-alt"></i><span>Suisse Romande</span></li>
                <li><i class="fas fa-phone-alt"></i><a href="tel:+41219646471">021 964 64 71</a></li>
                <li><i class="fas fa-envelope"></i><a href="mailto:info@nafautomobiles.ch">info@nafautomobiles.ch</a></li>
                <li><i class="fas fa-globe"></i><a href="https://nafautomobiles.ch" target="_blank" rel="noopener">nafautomobiles.ch</a></li>
            </ul>
        </div>
        <div class="footer__col">
            <h4 class="footer__title">Horaires</h4>
            <table class="footer__hours"><tbody>
                <tr><td>Lundi – Vendredi</td><td><strong>07:30 – 18:00</strong></td></tr>
                <tr><td>Samedi</td><td><strong>08:00 – 12:00</strong></td></tr>
                <tr><td>Dimanche</td><td><strong>Fermé</strong></td></tr>
            </tbody></table>
            <div class="footer__24h"><i class="fas fa-exclamation-triangle"></i><span>Dépannage <strong>24h/24 – 365j/an</strong></span></div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container footer__bottom-inner">
            <p>&copy; <?php echo date('Y');?> NAF Automobiles SA — Tous droits réservés</p>
            <p><a href="<?php echo home_url('/mentions-legales');?>">Mentions légales</a><span>|</span><a href="<?php echo home_url('/politique-confidentialite');?>">Confidentialité</a></p>
        </div>
    </div>
</footer>

<button class="back-to-top" id="back-to-top" aria-label="Retour en haut"><i class="fas fa-chevron-up"></i></button>

<?php wp_footer(); ?>
</body>
</html>