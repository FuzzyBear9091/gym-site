<?php get_header(); ?>
<section class="page-header" id="contact-page">
  <div class="container">
    <div class="label" style="margin:0 auto 12px"><i class="fa-solid fa-envelope"></i> <span data-i18n="contact-label">Contact</span></div>
    <h1 class="title"><span data-i18n="contact-title-1">Let's</span><br><span class="highlight" data-i18n="contact-title-2">Talk</span></h1>
    <p style="color:var(--text2);max-width:400px;margin:0 auto" data-i18n="contact-desc">Ready to transform? Reach out and I'll get back to you within 24 hours.</p>
  </div>
</section>

<section class="section" style="padding-top:0">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-info">
        <div class="contact-item reveal"><div class="contact-icon"><i class="fa-solid fa-envelope"></i></div><div><h4 data-i18n="contact-email-label">Email</h4><p>coach@realigomezfitness.com</p></div></div>
        <div class="contact-item reveal"><div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div><div><h4 data-i18n="contact-location-label">Location</h4><p data-i18n="contact-location">Chicago, Illinois</p></div></div>
        <div class="contact-item reveal"><div class="contact-icon"><i class="fa-solid fa-phone"></i></div><div><h4 data-i18n="contact-phone-label">Phone</h4><p>+1 (312) 555-0123</p></div></div>
        <div class="contact-item reveal"><div class="contact-icon"><i class="fa-solid fa-clock"></i></div><div><h4 data-i18n="contact-response-label">Response</h4><p data-i18n="contact-response">Within 24 hours — usually same day</p></div></div>
        <div class="contact-item reveal"><div class="contact-icon"><i class="fa-solid fa-calendar-check"></i></div><div><h4 data-i18n="contact-freecall-label">Free Call</h4><p data-i18n="contact-freecall">Book a 15-min discovery call</p></div></div>
        <div style="margin-top:20px">
          <h4 style="font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;margin-bottom:12px;color:var(--text3)" data-i18n="contact-social">Follow Me</h4>
          <div class="footer-social">
            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
          </div>
        </div>
      </div>
      <div>
        <form id="contactForm" class="form">
          <div style="margin-bottom:20px"><h3 style="font-size:20px;font-weight:700" data-i18n="contact-form-title">Send a Message</h3><p style="color:var(--text2);font-size:14px;margin-top:4px" data-i18n="contact-form-desc">Tell me about your goals.</p></div>
          <div class="form-group"><label data-i18n="contact-name-label">Name</label><input type="text" class="input" name="name" placeholder="Your name" required data-i18n="contact-name-placeholder"></div>
          <div class="form-group"><label data-i18n="contact-email-label-form">Email</label><input type="email" class="input" name="email" placeholder="your@email.com" required data-i18n="contact-email-placeholder"></div>
          <div class="form-row">
            <div class="form-group"><label data-i18n="contact-goal-label">Goal</label><select class="input" name="goal"><option data-i18n="goal-1">Weight Loss</option><option data-i18n="goal-2">Muscle Building</option><option data-i18n="goal-3">Strength</option><option data-i18n="goal-4">General Fitness</option></select></div>
            <div class="form-group"><label data-i18n="contact-exp-label">Experience</label><select class="input" name="experience"><option data-i18n="exp-1">Beginner</option><option data-i18n="exp-2">Intermediate</option><option data-i18n="exp-3">Advanced</option></select></div>
          </div>
          <div class="form-group"><label data-i18n="contact-msg-label">Message</label><textarea class="input" name="message" placeholder="Tell me about your goals..." required data-i18n="contact-msg-placeholder"></textarea></div>
          <button type="submit" class="btn btn-primary btn-block" data-i18n="contact-submit">Send Message</button>
          <div class="form-message" id="contactMsg"></div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
