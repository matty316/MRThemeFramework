<html>
  <head>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>

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
