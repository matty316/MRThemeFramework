<?php get_header(); ?>
   <section class="front-widgets">
     <div class="container">
       <div class="row">
         <div class="col-4">
           <?php if ( !dynamic_sidebar( 'front-left') ) : ?>
             <i class="fa fa-heart"></i>
             <h3>Super Cute!</h3>
             <p>
               Small batch disrupt distillery artisan, Schlitz keffiyeh leggings normcore mlkshk farm-to-table.
             </p>
           <?php endif; ?>
         </div>
         <div class="col-4">
           <?php if ( !dynamic_sidebar( 'front-center') ) : ?>
             <i class="fa fa-star"></i>
             <h3>I'm a Star!</h3>
             <p>
               XOXO wolf pug, paleo McSweeney's Truffaut Pinterest American Apparel drinking vinegar forage fap Williamsburg narwhal sustainable.
             </p>
           <?php endif; ?>
         </div>
         <div class="col-4">
           <?php if ( !dynamic_sidebar( 'front-right') ) : ?>
             <i class="fa fa-code"></i>
             <h3>Lot's of Code!</h3>
             <p>
                Godard drinking vinegar tofu direct trade, chia master cleanse pickled. Trust fund 3 wolf moon direct trade PBR&amp;B Tonx, occupy Pinterest.
             </p>
           <?php endif; ?>
         </div>
       </div>
     </div>
   </section>
   <section class="front-img">
     <div>
       <h1>Macbook!</h1>
     </div>     
   </section>


<?php get_footer(); ?>
