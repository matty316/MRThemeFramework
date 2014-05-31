<html>
  <head>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>


    <header>
      <nav>
        <div class="container">

          <a href="<?php bloginfo( 'url' ); ?>"><img id="logo" src="<?php header_image(); ?>" alt="Matt Reed Logo" /></a>



          <?php

          $args = array(
            'menu' => 'header-menu',
            'container' => 'false',
            'menu_id' => 'nav'
          );

          wp_nav_menu( $args );

          ?>
        </div>
      </nav>

      <div id="header-text">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <p><?php bloginfo( 'description' ); ?></p>
      </div>

    </header>
