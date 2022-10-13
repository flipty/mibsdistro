<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php if (! is_front_page()) {echo get_the_title(); echo ' | '; };?>MIBS Distro</title>
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/mibs.css?ts=<?php echo $ts;?>" rel="stylesheet" type="text/css">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> <?php if (get_field('custom_class')){ ?>id="<?php echo get_field('custom_class');?>"<?php } ?>>

<header>
  <div class="inner">
    <?php wp_nav_menu( array(
      'menu' => 'Header Menu',
      'menu_class' => 'header-nav',
      'container' => 'nav'
      )); ?>    
  </div>
</header>
