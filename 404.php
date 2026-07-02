<?php get_header(); ?>
<section style="padding:160px 0;text-align:center">
  <div class="container">
    <div style="font-family:var(--font-head);font-size:120px;color:var(--primary);line-height:1;margin-bottom:16px">404</div>
    <h1 class="title">Page Not<br><span class="highlight">Found</span></h1>
    <p style="color:var(--text2);max-width:400px;margin:16px auto 32px">Looks like you wandered off the path. Let's get you back on track.</p>
    <a href="<?= home_url('/') ?>" class="btn btn-primary">Back Home</a>
  </div>
</section>
<?php get_footer(); ?>
