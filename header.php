<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php if (! is_front_page()) {echo get_the_title(); echo ' | '; };?>Henry S. Baird #174 Masonic Lodge</title>
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/hsbaird.css?ts=<?php echo $ts;?>" rel="stylesheet" type="text/css">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> <?php if (get_field('custom_class')){?>id="<?php echo get_field('custom_class');?>"<?php } ?>>

<header>
  <div class="container">
    <div class="intro">
      <div class="logo">
        <a href="/"><img src="/wp-content/themes/hsbaird/images/logo-mason-blue.gif" alt="Freemason Emblem"></a>
      </div>
      <div class="content">
        <a href="/">
        <span class="title">Sturgeon Bay Masonic Center</span>
        <span class="subtitle collapse">Masonic Lodge Sturgeon Bay</span>
        <span class="subinfo collapse">Henry S. Baird #174 Masonic Lodge</span>
        <span class="subinfo collapse">Honor Chapter #1 Order of the Eastern Star (OES)</span>
        </a>
        <p class="collapse">
          31 S Third Avenue
          PO BOX 86
          Sturgeon Bay, Wisconsin 54235
        </p>
      </div>
      <div class="logo">
        <a href="/"><img src="/wp-content/themes/hsbaird/images/logo-oes.gif" alt="Order of the Eastern Star Emblem"></a>
      </div>
    </div>
    <?php wp_nav_menu( array(
      'menu' => 'Header Menu',
      'menu_class' => 'header-nav',
      'container' => 'nav'
      )); ?>
  </div>
  <div class="nav-trigger mobile-only">
    <a href="#">MENU</a>
  </div>
</header>
