<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Navigation -->
<nav id="navbar">
  <div class="nav-inner">
    <a href="#hero" class="nav-logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/GBCA logo large.png" alt="Green Building Council of Australia"></a>
    <button class="hamburger" onclick="document.querySelector('.nav-links').classList.toggle('open')" aria-label="Toggle menu">
      <span></span><span></span><span></span>
    </button>
    <ul class="nav-links">
      <li><a href="#hero">Home</a></li>
      <li><a href="#policy">Context</a></li>
      <li><a href="#response">Challenge &amp; Response</a></li>
      <li><a href="#roadmap">Roadmap</a></li>
      <li><a href="#actions">Actions</a></li>
      <li><a href="#detail">Details</a></li>
      <li><a href="#enablers">Enablers</a></li>
      <li><a href="#greenstar">Green Star</a></li>
      <li><a href="#tnfd">TNFD</a></li>
      <li><a href="#action">Take Action</a></li>
    </ul>
  </div>
</nav>
<div class="progress-bar" id="progressBar"></div>
