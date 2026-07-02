<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="<?= home_url('/') ?>" class="logo">Reali <span>Gomez</span></a>
        <p data-i18n="footer-desc">Transform your body. Build real strength. Change your life with personalized coaching from Reali Gomez.</p>
        <div class="footer-social">
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
          <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
        </div>
      </div>
      <div><h4 data-i18n="footer-quick">Quick Links</h4><ul><li><a href="<?= home_url('/') ?>" data-i18n="nav-home">Home</a></li><li><a href="<?= home_url('/portfolio/') ?>" data-i18n="nav-portfolio">Results</a></li><li><a href="<?= home_url('/contact/') ?>" data-i18n="nav-contact">Contact</a></li></ul></div>
      <div><h4 data-i18n="footer-contact-heading">Contact</h4><ul><li><a href="mailto:coach@realigomezfitness.com">coach@realigomezfitness.com</a></li><li><span style="color:var(--text2);font-size:14px" data-i18n="footer-address">Chicago, IL</span></li></ul></div>
      <div><h4 data-i18n="footer-legal">Legal</h4><ul><li><a href="#" data-i18n="footer-privacy">Privacy Policy</a></li><li><a href="#" data-i18n="footer-terms">Terms</a></li></ul></div>
    </div>
    <div class="footer-bottom"><p data-i18n="footer-rights">&copy; <?= date('Y') ?> Reali Gomez. All rights reserved.</p></div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
