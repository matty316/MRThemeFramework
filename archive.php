<?php get_header(); ?>

<div class="container page-body">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

  <?php endwhile; else : ?>

    <h1>Sorry, there is no content to display!</h1>

  <?php endif; ?>
</div>

<?php get_footer(); ?>
