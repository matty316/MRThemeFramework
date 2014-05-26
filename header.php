<html>
  <head>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="header-img" /></a>
    <nav>

      <div class="container">

        <a data-target="#" id="menu-button"><i class="fa fa-bars"></i></a>

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
