<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">
<header class="header" id="header">
  <div class="container header-inner">
    <a href="<?= home_url('/') ?>" class="logo">Reali <span>Gomez</span></a>
    <nav class="nav">
      <a href="<?= home_url('/') ?>" class="<?= is_front_page() ? 'active' : '' ?>" data-i18n="nav-home">Home</a>
      <a href="<?= home_url('/portfolio/') ?>" class="<?= is_page('portfolio') ? 'active' : '' ?>" data-i18n="nav-portfolio">Results</a>
      <a href="<?= home_url('/contact/') ?>" class="<?= is_page('contact') ? 'active' : '' ?>" data-i18n="nav-contact">Contact</a>
      <a href="#" id="langSwitch" style="font-size:12px;font-weight:600;color:var(--text3)">ES</a>
      <a href="<?= home_url('/#booking') ?>" class="btn btn-primary" style="padding:10px 24px;font-size:12px" data-i18n="nav-join">Join Now</a>
    </nav>
    <button class="hamburger" id="hamburger" aria-label="Menu"><span></span><span></span><span></span></button>
  </div>
</header>
<div class="mobile-nav" id="mobileNav">
  <a href="<?= home_url('/') ?>" data-i18n="nav-home">Home</a>
  <a href="<?= home_url('/portfolio/') ?>" data-i18n="nav-portfolio">Results</a>
  <a href="<?= home_url('/contact/') ?>" data-i18n="nav-contact">Contact</a>
  <a href="#" id="langSwitchMobile" style="font-size:14px;font-weight:600;color:var(--text3)">ES</a>
  <a href="<?= home_url('/#booking') ?>" class="btn btn-primary" style="padding:12px 28px;font-size:13px" data-i18n="nav-join">Join Now</a>
</div>
