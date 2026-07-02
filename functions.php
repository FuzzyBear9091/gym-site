<?php
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  load_theme_textdomain('rg-elite', get_template_directory() . '/languages');
  register_nav_menus(['primary' => 'Primary Menu']);
});

add_action('wp_enqueue_scripts', function () {
  $v = '2.1';
  wp_enqueue_style('rg-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@700;800&display=swap', [], $v);
  wp_enqueue_style('rg-icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', [], $v);
  wp_enqueue_style('rg-style', get_stylesheet_uri(), [], $v);
  wp_enqueue_script('rg-main', get_template_directory_uri() . '/assets/js/main.js', [], $v, true);
  wp_localize_script('rg-main', 'rg_ajax', ['url' => admin_url('admin-ajax.php')]);
});

add_action('wp_ajax_nopriv_rg_send_contact', 'rg_handle_send_contact');
add_action('wp_ajax_rg_send_contact', 'rg_handle_send_contact');
add_action('wp_ajax_nopriv_rg_send_booking', 'rg_handle_send_booking');
add_action('wp_ajax_rg_send_booking', 'rg_handle_send_booking');
add_action('wp_ajax_nopriv_rg_subscribe', 'rg_handle_subscribe');
add_action('wp_ajax_rg_subscribe', 'rg_handle_subscribe');

function rg_handle_send_contact() {
  $name = sanitize_text_field($_POST['name'] ?? '');
  $email = sanitize_email($_POST['email'] ?? '');
  $msg = sanitize_textarea_field($_POST['message'] ?? '');
  if (!$name || !$email || !$msg) wp_send_json_error(['msg' => 'Please fill all fields.']);
  $to = 'coach@realigomezfitness.com';
  $subject = 'New Contact from ' . $name;
  $body = "Name: $name\nEmail: $email\n\n$msg";
  wp_mail($to, $subject, $body);
  wp_send_json_success(['msg' => 'Message sent! I\'ll get back to you within 24 hours.']);
}

function rg_handle_send_booking() {
  $name = sanitize_text_field($_POST['name'] ?? '');
  $email = sanitize_email($_POST['email'] ?? '');
  $date = sanitize_text_field($_POST['date'] ?? '');
  $time = sanitize_text_field($_POST['time'] ?? '');
  if (!$name || !$email || !$date || !$time) wp_send_json_error(['msg' => 'Please fill all fields.']);
  $to = 'coach@realigomezfitness.com';
  $subject = 'Booking Request from ' . $name;
  $body = "Name: $name\nEmail: $email\nDate: $date\nTime: $time";
  wp_mail($to, $subject, $body);
  wp_send_json_success(['msg' => 'Booking confirmed! Check your email for details.']);
}

function rg_handle_subscribe() {
  $email = sanitize_email($_POST['email'] ?? '');
  if (!$email) wp_send_json_error(['msg' => 'Please enter your email.']);
  wp_send_json_success(['msg' => 'Subscribed! Welcome to the community.']);
}

add_action('phpmailer_init', function ($phpmailer) {
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.hostinger.com';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 587;
  $phpmailer->Username = 'coach@realigomezfitness.com';
  $phpmailer->Password = defined('SMTP_PASS') ? SMTP_PASS : '';
  $phpmailer->SMTPSecure = 'tls';
  $phpmailer->From = 'coach@realigomezfitness.com';
  $phpmailer->FromName = 'Reali Gomez Fitness';
});

add_filter('template_include', function ($template) {
  if (is_page('pago')) {
    $new = locate_template('page-pago.php');
    if ($new) return $new;
  }
  return $template;
});