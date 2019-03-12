<?php
/*
 * Template Name: Portfolio
 * @package WordPress
 */

get_header();
?>

<div class="portfolio">
  <div class="portfolio__bg"></div>

  <section>
    <div class="container">
     <!--  <h1>Portfolio</h1> -->

      <div class="portfolio__filter-wrap">

        <div class="button-group filters-button-group">
          <button class="button is-checked" data-filter="*">View All</button>
          <button class="button" data-filter=".aviation">Aviation</button>
          <button class="button" data-filter=".civic">Civic</button>
          <button class="button" data-filter=".commercial">Commercial</button>
          <button class="button" data-filter=".education">Education</button>
          <button class="button" data-filter=".healthcare">Healthcare</button>
          <button class="button" data-filter=".hospitality">Hospitality</button>
          <button class="button" data-filter=".interiors">Interiors</button>
          <button class="button" data-filter=".master">Master Plan</button>
          <button class="button" data-filter=".arts">Performing Arts, Cinema</button>
          <button class="button" data-filter=".religion">Religion</button>
          <button class="button" data-filter=".residential">Residential</button>
          <button class="button" data-filter=".sports">Sports</button>
        </div>

        <div class="portfolio-grid">


          <?php
            $args = array(
              'post_type' => 'project',
              'order'     => 'ASC',
            );

            $query = new WP_Query( $args );
            if ( $query->have_posts() ) { ?>

              <?php
              while ( $query->have_posts() ) {
              $query->the_post();

              $location = get_field('location');
              ?>

                <div class="portfolio-item civic" data-category="civic">
                  <div class="portfolio-item__img-wrap">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(); ?>
                    </a>
                  </div>
                  <div class="portfolio-item__content">
                    <div class="portfolio-item__title">
                      <h3><?php the_title(); ?></h3>  
                    </div>
                    <div class="portfolio-item__caption">
                      <p><?php echo $location; ?></p>
                    </div>                      
                  </div>        
                </div>

                <?php } ?>

              <?php
              } else {
              // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
          ?>
          
        </div>

      </div>
    </div>
  </section>
  
</div>

<?php get_footer(); ?>