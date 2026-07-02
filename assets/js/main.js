(function(){
  'use strict';

  /* Header scroll */
  var header = document.getElementById('header');
  if (header) {
    window.addEventListener('scroll', function() {
      header.classList.toggle('scrolled', window.scrollY > 60);
    });
    if (window.scrollY > 60) header.classList.add('scrolled');
  }

  /* Mobile menu */
  var hamburger = document.getElementById('hamburger');
  var mobileNav = document.getElementById('mobileNav');
  if (hamburger && mobileNav) {
    hamburger.addEventListener('click', function() {
      mobileNav.classList.toggle('open');
      hamburger.classList.toggle('open');
    });
    mobileNav.querySelectorAll('a').forEach(function(a) {
      a.addEventListener('click', function() { mobileNav.classList.remove('open'); hamburger.classList.remove('open'); });
    });
  }

  /* Typewriter */
  var tw = document.getElementById('typewriterText');
  if (tw) {
    var phrases = ['Transform your body.', 'Build real muscle.', 'Lose fat today.', 'Push your limits.', 'Change your life.'];
    var idx = 0, charIdx = 0, dir = 1, tid;
    function typeCycle() {
      var p = phrases[idx];
      if (dir === 1) {
        if (charIdx < p.length) {
          tw.textContent = p.slice(0, ++charIdx);
          tid = setTimeout(typeCycle, 55);
        } else {
          dir = -1;
          tid = setTimeout(typeCycle, 2000);
        }
      } else {
        if (charIdx > 0) {
          tw.textContent = p.slice(0, --charIdx);
          tid = setTimeout(typeCycle, 30);
        } else {
          dir = 1;
          idx = (idx + 1) % phrases.length;
          tid = setTimeout(typeCycle, 300);
        }
      }
    }
    typeCycle();
  }

  /* Counters */
  var counters = document.querySelectorAll('.number[data-count-to]');
  if (counters.length) {
    var counted = false;
    function countNumbers() {
      if (counted) return;
      var rect = counters[0].closest('.strip').getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        counted = true;
        counters.forEach(function(el) {
          var target = parseInt(el.getAttribute('data-count-to'));
          var current = 0;
          var inc = Math.ceil(target / 60);
          var timer = setInterval(function() {
            current += inc;
            if (current >= target) { current = target; clearInterval(timer); }
            el.textContent = current;
          }, 25);
        });
      }
    }
    window.addEventListener('scroll', countNumbers);
    countNumbers();
  }

  /* Scroll reveal */
  function reveal() {
    document.querySelectorAll('.reveal').forEach(function(el) {
      var rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - 80) el.classList.add('visible');
    });
  }
  window.addEventListener('scroll', reveal);
  reveal();

  /* FAQ */
  document.querySelectorAll('.faq-q').forEach(function(q) {
    q.addEventListener('click', function() {
      var item = this.closest('.faq-item');
      if (item.classList.contains('active')) { item.classList.remove('active'); return; }
      document.querySelectorAll('.faq-item.active').forEach(function(a) { a.classList.remove('active'); });
      item.classList.add('active');
    });
  });

  /* Contact form */
  var contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      var btn = contactForm.querySelector('button');
      var orig = btn.textContent;
      var msg = document.getElementById('contactMsg');
      btn.disabled = true;
      btn.textContent = 'Sending...';
      setTimeout(function() {
        msg.textContent = 'Message sent! I\'ll get back to you within 24 hours.';
        msg.className = 'form-message is-success';
        msg.style.display = 'block';
        btn.textContent = orig;
        btn.disabled = false;
        contactForm.reset();
        setTimeout(function() { msg.style.display = 'none'; }, 4000);
      }, 1000);
    });
  }

  /* Booking form */
  var bookingForm = document.getElementById('bookingForm');
  if (bookingForm) {
    bookingForm.addEventListener('submit', function(e) {
      e.preventDefault();
      var btn = bookingForm.querySelector('button');
      var orig = btn.textContent;
      var msg = document.getElementById('bookingMsg');
      btn.disabled = true;
      btn.textContent = 'Sending...';
      setTimeout(function() {
        msg.textContent = 'Booking confirmed! Check your email for details.';
        msg.className = 'form-message is-success';
        msg.style.display = 'block';
        btn.textContent = orig;
        btn.disabled = false;
        bookingForm.reset();
        setTimeout(function() { msg.style.display = 'none'; }, 4000);
      }, 1000);
    });
  }
})();
