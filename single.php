<?php

/*Default WP file to display a single post*/

get_header();

?>


<section class="[ amberBorder ] copy-only-section copy-only-section--skin u-cf">
  <h2 class="u-margin-t-flush  [ page-title ]">WHAT’S ON</h2> 

  <!-- SideBar -->
  <aside class="sidebar-section u-cf">
    <?php include 'partials/loops/blog-sidebar.php'; ?>
  </aside>
  <!-- End SideBar --> 


  <!-- Single Article -->    
  <section class="blog-section">

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>    
        <article class="media-obj">
          <div class="media-obj__img-div">
            <?php the_post_thumbnail('235x235'); ?>
          </div>
          <div class="media-obj__body">
            <h3 class="u-margin-t-flush  [ page-title ] media-obj-body__title"><?php echo get_the_title(); ?></h3>
            <div>
              <?php the_content(); ?>
            </div>
            
              <a href="<?php echo get_permalink(107); ?>" class="btn btn--topSection borderDouble button-dark">Book Now</a>
              <a href="<?php echo get_permalink(104); ?>" class="btn btn--topSection button-dark btn--back-to">Back to what's on</a>
            
          </div>
          
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  
  </section>
  <!-- End Single Article -->


</section>
 







<?php get_footer(); ?>