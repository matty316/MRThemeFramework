<?php get_header(); ?>

<div class="container page-body">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="excerpt">
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <p class="meta">
        By: <?php the_author(); ?> on <?php echo the_time( 'F, jS, Y' ); ?>
        <a href="<?php comments_link(); ?>" class="right"><?php comments_number(); ?></a>
      </p>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="btn right">Read More</a>
    </article>

  <?php endwhile; else : ?>

    <h1>Sorry, there is no content to display!</h1>

  <?php endif; ?>
</div>

<?php get_footer(); ?>
