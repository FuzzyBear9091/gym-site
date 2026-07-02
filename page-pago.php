<?php get_header(); ?>
<section class="page-header">
  <div class="container">
    <div class="label" style="margin:0 auto 12px"><i class="fa-solid fa-credit-card"></i> Checkout</div>
    <h1 class="title">Complete Your<br><span class="highlight">Purchase</span></h1>
    <p style="color:var(--text2);max-width:450px;margin:0 auto">Secure payment. Start your transformation today.</p>
  </div>
</section>

<section class="section" style="padding-top:0">
  <div class="container" style="max-width:560px">
    <div class="form">
      <h3 style="font-size:20px;font-weight:700;margin-bottom:24px">Order Summary</h3>
      <div id="orderSummary" style="padding:20px;background:var(--bg3);border-radius:var(--radius);margin-bottom:32px;font-size:14px;color:var(--text2)">
        Loading...
      </div>
      <div class="form-group"><label>Full Name</label><input type="text" class="input" placeholder="Your full name" required></div>
      <div class="form-group"><label>Email</label><input type="email" class="input" placeholder="your@email.com" required></div>
      <button class="btn btn-primary btn-block" style="margin-top:16px">Pay Securely <i class="fa-solid fa-lock"></i></button>
      <p style="text-align:center;font-size:12px;color:var(--text3);margin-top:16px">You will be redirected to complete payment.</p>
    </div>
  </div>
</section>
<script>
const urlParams = new URLSearchParams(window.location.search);
const plan = urlParams.get('plan') || 'Online';
const price = urlParams.get('price') || '97';
document.getElementById('orderSummary').innerHTML = '<div style="display:flex;justify-content:space-between;align-items:center"><span>' + plan + ' Plan</span><span style="font-family:var(--font-head);font-size:24px;color:var(--primary);font-weight:700">$' + price + '</span></div>';
</script>
<?php get_footer(); ?>
