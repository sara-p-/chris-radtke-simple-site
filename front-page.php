<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="header">
      <div class="container">
        <h1 class="logo">
          <a href="<?php echo esc_url(site_url()); ?>"><strong>Chris Radtke</a>
        </h1>
        <div class="header__menu">
          <nav class="main-navigation">
            <?php 
            wp_nav_menu( array(
              'theme_location' => 'header_menu'
            ) ); 
            ?>
          </nav>
        </div>
      </div>
    </header>