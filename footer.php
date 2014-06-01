  <footer id="footer">
    <div class="row">
      <div class="col-4">
        <?php if ( !dynamic_sidebar( 'footer-left') ) : ?>
          <h3>About Us</h3>
          <p>
            Small batch disrupt distillery artisan, Schlitz keffiyeh leggings normcore mlkshk farm-to-table.
          </p>
        <?php endif; ?>
      </div>
      <div class="col-4">
        <?php if ( !dynamic_sidebar( 'footer-center') ) : ?>
          <h3>We got footer widgets!</h3>
          <p>
            XOXO wolf pug, paleo McSweeney's Truffaut Pinterest American Apparel drinking vinegar forage fap Williamsburg narwhal sustainable.
          </p>
        <?php endif; ?>
      </div>
      <div class="col-4">
        <?php if ( !dynamic_sidebar( 'footer-right') ) : ?>
          <h3>You could put tweets here!</h3>
          <p>
             Godard drinking vinegar tofu direct trade, chia master cleanse pickled. Trust fund 3 wolf moon direct trade PBR&amp;B Tonx, occupy Pinterest.
          </p>
        <?php endif; ?>
      </div>
    </div>
  </div>
    <div class="container">
      <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
    </div>

  </footer>
  <?php wp_footer(); ?>
  </body>
</html>
