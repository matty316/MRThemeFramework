<html>
  <head>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <?php

    $args = array(
      'menu' => 'header-menu',
      'container' => 'div',
      'container_class' => 'nav',
      'menu_class' => 'container'
    );

    wp_nav_menu( $args );

    ?>
