<?php get_header(); ?>

<section class="hero" id="home">
  <div class="container">
    <div class="hero-content">
      <div class="hero-tag"><i class="fa-solid fa-bolt"></i> <span data-i18n="hero-tag">Online Coaching</span></div>
      <h1><span data-i18n="hero-line1">Train</span> <span class="outline" data-i18n="hero-line2">Smarter.</span><br><span class="highlight"><span id="typewriterText"></span></span><span class="cursor">|</span></h1>
      <p data-i18n="hero-desc">1-on-1 coaching based on exercise science, personalized nutrition, and real accountability. No fads. No shortcuts. Just results.</p>
      <div class="btns">
        <a href="#booking" class="btn btn-primary" data-i18n="hero-cta1">Free Call</a>
        <a href="#programs" class="btn btn-outline" data-i18n="hero-cta2">View Programs</a>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-circle"></div>
      <div class="hero-circle-2"></div>
      <div class="hero-img">
        <img src="<?= get_template_directory_uri() ?>/assets/images/inspiration/Adobe%20Express%20-%20file.png" alt="Reali Gomez">
      </div>
      <div class="hero-badge">
        <strong>500+</strong>
        <span data-i18n="hero-badge">Transformations</span>
      </div>
    </div>
  </div>
</section>

<section class="strip">
  <div class="strip-inner">
    <div class="strip-item"><div class="number" data-count-to="500">0</div><div class="lbl" data-i18n="stat-clients">Clients Coached</div></div>
    <div class="strip-item"><div class="number" data-count-to="12">0</div><div class="lbl" data-i18n="stat-years">Years Experience</div></div>
    <div class="strip-item"><div class="number" data-count-to="98">0</div><div class="lbl" data-i18n="stat-success">Success Rate</div></div>
    <div class="strip-item"><div class="number" data-count-to="50">0</div><div class="lbl" data-i18n="stat-lbs">Avg Lbs Lost</div></div>
  </div>
</section>

<div class="marquee">
  <div class="marquee-track">
    <?php for ($i = 0; $i < 2; $i++): ?>
    <div class="marquee-item"><span class="dot"></span> <span data-i18n="marquee-1">Transform Your Body</span> <span class="dot"></span> <span data-i18n="marquee-2">Build Real Strength</span> <span class="dot"></span> <span data-i18n="marquee-3">Change Your Life</span> <span class="dot"></span> <span data-i18n="marquee-4">No Excuses</span> <span class="dot"></span> <span data-i18n="marquee-5">Results Driven</span></div>
    <?php endfor; ?>
  </div>
</div>

<section class="section section-alt section-deco" id="about">
  <div class="container">
    <div class="about-grid">
      <div class="about-visual reveal">
        <div class="about-frame"><img src="<?= get_template_directory_uri() ?>/assets/images/inspiration/update%20client%20image%20new%20upscaled.png" alt="Reali Gomez"></div>
        <div class="about-stats">
          <div class="about-stat"><strong>500+</strong> <span data-i18n="about-clients">Clients</span></div>
          <div class="about-stat"><strong>12</strong> <span data-i18n="about-years">Years</span></div>
          <div class="about-stat"><strong>98%</strong> <span data-i18n="about-success">Success</span></div>
        </div>
      </div>
      <div class="reveal">
        <div class="label"><i class="fa-solid fa-dumbbell"></i> <span data-i18n="about-label">About Me</span></div>
        <h2 class="title"><span data-i18n="about-title-1">Your</span><br><span data-i18n="about-title-2">Transformation</span><br><span class="highlight" data-i18n="about-title-3">Starts Here</span></h2>
        <p style="color:var(--text2);font-size:15px;line-height:1.8;max-width:480px" data-i18n="about-desc">I'm Reali Gomez — a certified strength and nutrition coach. I've helped 500+ clients transform their bodies and their lives. Every program is custom-built around your goals, your schedule, and your life.</p>
        <div style="margin-top:28px;display:flex;gap:8px;flex-wrap:wrap">
          <span class="badge badge-accent" data-i18n="about-badge1">Custom Programs</span>
          <span class="badge badge-subtle" data-i18n="about-badge2">Nutrition Coaching</span>
          <span class="badge badge-subtle" data-i18n="about-badge3">Daily Support</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="programs">
  <div class="container" style="text-align:center">
    <div style="margin-bottom:60px">
      <div class="label" style="margin:0 auto 12px"><i class="fa-solid fa-bolt"></i> <span data-i18n="programs-label">Programs</span></div>
      <h2 class="title"><span data-i18n="programs-title-1">Wild</span><br><span class="highlight" data-i18n="programs-title-2">Programs</span></h2>
      <p style="color:var(--text2);max-width:480px;margin:0 auto" data-i18n="programs-desc">Every program is built from the ground up for your body, your goals, and your lifestyle.</p>
    </div>

    <div class="program-cards">
      <div class="program-card reveal"><div class="program-info"><div class="program-num">01.</div><h3 data-i18n="prog-1-title">Online Coaching</h3><p data-i18n="prog-1-desc">Custom programming delivered through my coaching app. Workouts, macros, and direct messaging — all in one place.</p><a href="#booking" class="btn btn-primary" data-i18n="prog-1-cta">Hit It <i class="fa-solid fa-arrow-right"></i></a></div><div class="program-visual"><div class="placeholder"><i class="fa-solid fa-laptop"></i></div></div></div>

      <div class="program-card reveal"><div class="program-visual"><div class="placeholder"><i class="fa-solid fa-utensils"></i></div></div><div class="program-info"><div class="program-num">02.</div><h3 data-i18n="prog-2-title">Nutrition Design</h3><p data-i18n="prog-2-desc">Personalized meal plans and macro coaching. No restrictive diets — just sustainable nutrition that fits your life.</p><a href="#booking" class="btn btn-primary" data-i18n="prog-2-cta">Hit It <i class="fa-solid fa-arrow-right"></i></a></div></div>

      <div class="program-card reveal">
      <div class="program-info">
        <div class="program-num">03.</div>
        <h3 data-i18n="prog-3-title">12-Week Intensive</h3>
        <p data-i18n="prog-3-desc">Complete lifestyle transformation. Daily coaching, weekly video calls, full accountability. Everything you need.</p>
        <a href="#booking" class="btn btn-primary" data-i18n="prog-3-cta">Hit It <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="program-visual">
        <div class="placeholder"><i class="fa-solid fa-bolt"></i></div>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="section section-alt section-deco">
  <div class="container" style="text-align:center">
    <div class="label" style="margin:0 auto 12px"><i class="fa-solid fa-gem"></i> <span data-i18n="benefits-label">Extra Benefits</span></div>
    <h2 class="title"><span data-i18n="benefits-title-1">Why Train</span><br><span class="highlight" data-i18n="benefits-title-2">With Me</span></h2>
    <p style="color:var(--text2);max-width:480px;margin:0 auto" data-i18n="benefits-desc">Beyond the workouts, you get full support, custom plans, and a coach who actually cares.</p>
    <div class="benefits-grid stagger">
      <div class="benefit-card reveal"><div class="benefit-icon"><i class="fa-solid fa-user-gear"></i></div><h3 data-i18n="benefit-1-title">Customized For You</h3><p data-i18n="benefit-1-desc">Programs tailored to your body, your goals, your schedule, and your lifestyle.</p></div>
      <div class="benefit-card reveal"><div class="benefit-icon"><i class="fa-solid fa-headset"></i></div><h3 data-i18n="benefit-2-title">24/7 Support</h3><p data-i18n="benefit-2-desc">Direct messaging access to me. Questions answered fast, always.</p></div>
      <div class="benefit-card reveal"><div class="benefit-icon"><i class="fa-solid fa-mobile-screen"></i></div><h3 data-i18n="benefit-3-title">Any Device</h3><p data-i18n="benefit-3-desc">Follow your program on your phone, tablet, or computer — anywhere you go.</p></div>
      <div class="benefit-card reveal"><div class="benefit-icon"><i class="fa-solid fa-tag"></i></div><h3 data-i18n="benefit-4-title">Best Value</h3><p data-i18n="benefit-4-desc">Premium 1-on-1 coaching at prices that actually make sense.</p></div>
    </div>
  </div>
</section>

<section class="section" id="pricing-cards">
  <div class="container" style="text-align:center">
    <div class="label" style="margin:0 auto 12px"><i class="fa-solid fa-tag"></i> <span data-i18n="pricing-label">Pricing</span></div>
    <h2 class="title"><span data-i18n="pricing-title-1">Choose Your</span><br><span class="highlight" data-i18n="pricing-title-2">Path</span></h2>
    <p style="color:var(--text2);max-width:480px;margin:0 auto" data-i18n="pricing-desc">All plans include custom coaching and direct access to me.</p>
    <div class="pricing-grid stagger">
      <div class="pricing-card reveal">
        <div class="pricing-icon"><i class="fa-solid fa-laptop"></i></div>
        <h3 data-i18n="plan-1-name">Online</h3>
        <p class="desc" data-i18n="plan-1-desc">Full custom program via app. Macros, workouts, weekly check-ins.</p>
        <div class="price"><span class="amt">$97</span> <span class="per" data-i18n="plan-per-month">/month</span></div>
        <ul>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-1-feat-1">Custom workout plan</span></li>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-1-feat-2">Personalized macros</span></li>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-1-feat-3">Weekly check-ins</span></li>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-1-feat-4">App access</span></li>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-1-feat-5">Email support</span></li>
        </ul>
        <a href="<?= home_url('/pago/') ?>?plan=Online&price=97" class="btn btn-primary btn-block" data-i18n="plan-cta">Get Started</a>
      </div>
      <div class="pricing-card featured reveal">
        <div class="pricing-badge" data-i18n="plan-badge">Best Seller</div>
        <div class="pricing-icon"><i class="fa-solid fa-crown"></i></div>
        <h3 data-i18n="plan-2-name">Premium</h3>
        <p class="desc" data-i18n="plan-2-desc">Everything in Online plus daily chat, form checks, and meal plans.</p>
        <div class="price"><span class="amt">$197</span> <span class="per" data-i18n="plan-per-month">/month</span></div>
        <ul>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-2-feat-1">Everything in Online</span></li>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-2-feat-2">Daily chat access</span></li>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-2-feat-3">Form review</span></li>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-2-feat-4">Custom meal plans</span></li>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-2-feat-5">Priority support</span></li>
        </ul>
        <a href="<?= home_url('/pago/') ?>?plan=Premium&price=197" class="btn btn-primary btn-block" data-i18n="plan-cta">Get Started</a>
      </div>
      <div class="pricing-card reveal">
        <div class="pricing-icon"><i class="fa-solid fa-bolt"></i></div>
        <h3 data-i18n="plan-3-name">Elite</h3>
        <p class="desc" data-i18n="plan-3-desc">12-week intensive. Daily coaching, video calls, full lifestyle overhaul.</p>
        <div class="price"><span class="amt">$497</span> <span class="per" data-i18n="plan-onetime">/one-time</span></div>
        <ul>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-3-feat-1">Everything in Premium</span></li>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-3-feat-2">Weekly video calls</span></li>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-3-feat-3">Full lifestyle audit</span></li>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-3-feat-4">Supplement guide</span></li>
          <li><i class="fa-solid fa-circle-check"></i> <span data-i18n="plan-3-feat-5">24/7 direct line</span></li>
        </ul>
        <a href="<?= home_url('/pago/') ?>?plan=Elite&price=497" class="btn btn-primary btn-block" data-i18n="plan-cta">Get Started</a>
      </div>
    </div>
  </div>
</section>

<section class="section section-alt section-deco">
  <div class="container" style="text-align:center">
    <div class="label" style="margin:0 auto 12px"><i class="fa-solid fa-star"></i> <span data-i18n="testimonials-label">Testimonials</span></div>
    <h2 class="title"><span data-i18n="testimonials-title-1">What My</span><br><span class="highlight" data-i18n="testimonials-title-2">Clients Say</span></h2>
    <div class="testimonials-grid stagger">
      <div class="testimonial-card reveal">
        <div class="testimonial-stars">★★★★★</div>
        <p class="testimonial-text" data-i18n="testimonial-1">"Reali completely changed my relationship with fitness. I've never felt stronger or more confident in my life."</p>
        <div class="testimonial-author">
          <div class="testimonial-avatar"><i class="fa-solid fa-user"></i></div>
          <div><div class="testimonial-name">Mike R.</div><div class="testimonial-role" data-i18n="testimonial-1-role">Lost 32 lbs</div></div>
        </div>
      </div>
      <div class="testimonial-card reveal">
        <div class="testimonial-stars">★★★★★</div>
        <p class="testimonial-text" data-i18n="testimonial-2">"The 1-on-1 coaching is worth every penny. My strength numbers went through the roof in just 8 weeks."</p>
        <div class="testimonial-author">
          <div class="testimonial-avatar"><i class="fa-solid fa-user"></i></div>
          <div><div class="testimonial-name">Sarah K.</div><div class="testimonial-role" data-i18n="testimonial-2-role">+15 lbs muscle</div></div>
        </div>
      </div>
      <div class="testimonial-card reveal">
        <div class="testimonial-stars">★★★★★</div>
        <p class="testimonial-text" data-i18n="testimonial-3">"Finally a coach who actually listens. My program fits my schedule and the results speak for themselves."</p>
        <div class="testimonial-author">
          <div class="testimonial-avatar"><i class="fa-solid fa-user"></i></div>
          <div><div class="testimonial-name">James T.</div><div class="testimonial-role" data-i18n="testimonial-3-role">Lost 28 lbs</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="booking">
  <div class="container" style="text-align:center">
    <div class="label" style="margin:0 auto 12px"><i class="fa-solid fa-calendar"></i> <span data-i18n="booking-label">Book a Call</span></div>
    <h2 class="title"><span data-i18n="booking-title-1">Schedule Your</span><br><span class="highlight" data-i18n="booking-title-2">Free Call</span></h2>
    <p style="color:var(--text2);margin-bottom:36px" data-i18n="booking-desc">No commitment. Just a conversation about your goals and how I can help.</p>
    <div class="booking-steps">
      <div class="booking-step"><div class="num">1</div> <span data-i18n="booking-step-1">Choose Date</span></div>
      <div class="booking-step"><div class="num">2</div> <span data-i18n="booking-step-2">Choose Time</span></div>
      <div class="booking-step"><div class="num">3</div> <span data-i18n="booking-step-3">Confirm</span></div>
    </div>
    <form id="bookingForm" class="form">
      <div class="form-row">
        <div class="form-group"><label data-i18n="booking-date-label">Choose Date</label><input type="date" class="input" required></div>
        <div class="form-group"><label data-i18n="booking-time-label">Choose Time</label><select class="input" required><option value="07:00">07:00</option><option value="08:00">08:00</option><option value="09:00">09:00</option><option value="10:00">10:00</option><option value="11:00">11:00</option><option value="12:00">12:00</option><option value="13:00">13:00</option><option value="14:00">14:00</option><option value="15:00">15:00</option><option value="16:00">16:00</option><option value="17:00">17:00</option><option value="18:00">18:00</option><option value="19:00">19:00</option><option value="20:00">20:00</option></select></div>
      </div>
      <div class="form-row">
        <div class="form-group"><label data-i18n="booking-name-label">Name</label><input type="text" class="input" placeholder="Your name" required data-i18n="booking-name-placeholder"></div>
        <div class="form-group"><label data-i18n="booking-email-label">Email</label><input type="email" class="input" placeholder="your@email.com" required data-i18n="booking-email-placeholder"></div>
      </div>
      <button type="submit" class="btn btn-primary btn-block" data-i18n="booking-submit">Confirm Appointment</button>
      <div class="form-message" id="bookingMsg"></div>
    </form>
  </div>
</section>

<section class="section section-alt section-deco" id="faq">
  <div class="container" style="text-align:center">
    <div class="label" style="margin:0 auto 12px"><i class="fa-solid fa-question-circle"></i> <span data-i18n="faq-label">FAQ</span></div>
    <h2 class="title"><span data-i18n="faq-title-1">Frequently Asked</span><br><span class="highlight" data-i18n="faq-title-2">Questions</span></h2>
    <div class="faq-list">
      <div class="faq-item"><button class="faq-question"><span data-i18n="faq-q1">How long until I see results?</span> <span class="faq-icon">+</span></button><div class="faq-answer" data-i18n="faq-a1">Most clients see visible changes within 4 weeks. Real transformation happens consistently over 12 weeks. You'll feel changes in your energy and strength within the first week.</div></div>
      <div class="faq-item"><button class="faq-question"><span data-i18n="faq-q2">Do I need a gym membership?</span> <span class="faq-icon">+</span></button><div class="faq-answer" data-i18n="faq-a2">Programs work for both gym and home settings. I design around whatever equipment you have available.</div></div>
      <div class="faq-item"><button class="faq-question"><span data-i18n="faq-q3">Can I cancel anytime?</span> <span class="faq-icon">+</span></button><div class="faq-answer" data-i18n="faq-a3">Absolutely. All plans are month-to-month with no contracts or cancellation fees.</div></div>
      <div class="faq-item"><button class="faq-question"><span data-i18n="faq-q4">Is nutrition included?</span> <span class="faq-icon">+</span></button><div class="faq-answer" data-i18n="faq-a4">Yes. Every program includes custom macros and meal guidance tailored to your preferences and goals.</div></div>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container">
    <h2 class="title"><span data-i18n="cta-title-1">Your Transformation</span><br><span data-i18n="cta-title-2">Starts Today</span></h2>
    <p data-i18n="cta-desc">Book your free call. No pressure. Just a conversation about your goals.</p>
    <a href="#booking" class="btn btn-white" data-i18n="cta-btn">Book Your Free Call <i class="fa-solid fa-arrow-right"></i></a>
  </div>
</section>

<?php get_footer(); ?>
