<html>
  <head>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div class="header-img">
      <img src="<?php background_image(); ?>" alt="" />
    </div>

    <?php get_search_form(); ?>
    <a data-target="#" id="menu-button"><i class="fa fa-bars"></i></a>

    <?php

    $args = array(
      'menu' => 'header-menu',
      'container' => 'false',
      'menu_id' => 'side-nav'
    );

    wp_nav_menu( $args );

    ?>
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
