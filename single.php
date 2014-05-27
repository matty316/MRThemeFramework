<?php get_header(); ?>

<div class="container root">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_post_thumbnail(); ?>
    <h1><?php the_title(); ?></h1>
    <p class="meta">
      By: <?php the_author(); ?> on <?php echo the_time( 'F, jS, Y' ); ?>
      <a href="<?php comments_link(); ?>" class="right"><?php comments_number(); ?></a>
    </p>
    <?php the_content(); ?>
    <p>
      Filed Under: <?php the_category( ', ' ); ?>
    </p>

  <?php endwhile; else : ?>

    <h1>Sorry, there is no content to display!</h1>

  <?php endif; ?>
  <?php comments_template(); ?>
  <div id="root_footer"></div>
</div>

<?php get_footer(); ?>
