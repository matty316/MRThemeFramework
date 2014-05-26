<?php get_header(); ?>

<div class="container root">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

  <?php endwhile; else : ?>

    <h1>Sorry, there is no content to display!</h1>

  <?php endif; ?>

  <div class="row">
    <div class="col-6">
      <?php if ( dynamic_sidebar( 'front-left' ) ) ?>
    </div>
    <div class="col-6">
      <?php if (dynamic_sidebar( 'front-right')); ?>
    </div>
  </div>

  <div id="root_footer"></div>
</div>

<?php get_footer(); ?>
