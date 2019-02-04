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
      <h1>Portfolio</h1>

      <div class="portfolio__filter-wrap">

        <div class="button-group filters-button-group">
          <button class="button is-checked" data-filter="*">View All</button>
          <!-- <button class="button" data-filter=".aviation">Aviation</button> -->
          <button class="button" data-filter=".civic">Civic</button>
          <button class="button" data-filter=".commercial">Commercial</button>
          <!-- <button class="button" data-filter=".education">Education</button> -->
          <!-- <button class="button" data-filter=".healthcare">Healthcare</button> -->
          <button class="button" data-filter=".hospitality">Hospitality</button>
          <!-- <button class="button" data-filter=".interiors">Interiors</button> -->
          <!-- <button class="button" data-filter=".master">Master Plan</button> -->
          <button class="button" data-filter=".arts">Performing Arts, Theatre, Cinema</button>
          <button class="button" data-filter=".religion">Religion</button>
          <button class="button" data-filter=".residential">Residential</button>
          <!-- <button class="button" data-filter=".sports">Sports</button> -->
        </div>

        <div class="portfolio-grid">

          <div class="portfolio-item civic" data-category="civic">
            <div class="portfolio-item__img-wrap">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/civic/el-monte/1.jpg" alt="El Monte">
            </div>
            <div class="portfolio-item__content">
              <div class="portfolio-item__title">
                <h3>City of South El Monte Civic Center Masterplan</h3>  
              </div>
              <div class="portfolio-item__caption">
                <p>South El Monte, CA</p>
              </div>
              <div class="portfolio-item__cta">
                <a href="" class="btn">View Project</a>
              </div>    
            </div>        
          </div><!-- /.portfolio-item -->

          <div class="portfolio-item commercial" data-category="commercial">
            <div class="portfolio-item__img-wrap">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/commercial/coral-circle/1.jpg" alt="Coral Circle">
            </div>
            <div class="portfolio-item__content">
              <div class="portfolio-item__title">
                <h3>321 Coral Circle</h3>  
              </div>
              <div class="portfolio-item__caption">
                <p>El Segundo, CA</p>
              </div>
              <div class="portfolio-item__cta">
                <a href="" class="btn">View Project</a>
              </div>    
            </div>        
          </div><!-- /.portfolio-item -->

          <div class="portfolio-item hospitality" data-category="hospitality">
            <div class="portfolio-item__img-wrap">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/hospitality/pico-boulevard/1.png" alt="Pico Boulevard">
            </div>
            <div class="portfolio-item__content">
              <div class="portfolio-item__title">
                <h3>9570 Pico Boulevard</h3>  
              </div>
              <div class="portfolio-item__caption">
                <p>Beverly Hills, CA</p>
              </div>
              <div class="portfolio-item__cta">
                <a href="" class="btn">View Project</a>
              </div>    
            </div>        
          </div><!-- /.portfolio-item -->

          <div class="portfolio-item arts" data-category="arts">
            <div class="portfolio-item__img-wrap">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/arts/soundsculpture/1.jpg" alt="Soundsculpture">
            </div>
            <div class="portfolio-item__content">
              <div class="portfolio-item__title">
                <h3>Soundsculpture – Theater and Concert Hall Complex</h3>  
              </div>
              <div class="portfolio-item__caption">
                <p>Taipei, Taiwan</p>
              </div>
              <div class="portfolio-item__cta">
                <a href="" class="btn">View Project</a>
              </div>    
            </div>        
          </div><!-- /.portfolio-item -->

          <div class="portfolio-item religion" data-category="religion">
            <div class="portfolio-item__img-wrap">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/religion/obsidian-church/2.jpg" alt="Obsidian Church">
            </div>
            <div class="portfolio-item__content">
              <div class="portfolio-item__title">
                <h3>Obsidian Church</h3>  
              </div>
              <div class="portfolio-item__caption">
                <p>Yerevan, Armenia</p>
              </div>
              <div class="portfolio-item__cta">
                <a href="" class="btn">View Project</a>
              </div>    
            </div>        
          </div><!-- /.portfolio-item -->

          <div class="portfolio-item residential" data-category="residential">
            <div class="portfolio-item__img-wrap">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/residential/127-madison/1.png" alt="127 Madison">
            </div>
            <div class="portfolio-item__content">
              <div class="portfolio-item__title">
                <h3>127 Madison, Pasadena, CA</h3>  
              </div>
              <div class="portfolio-item__caption">
                <p>Pasadena, CA</p>
              </div>
              <div class="portfolio-item__cta">
                <a href="" class="btn">View Project</a>
              </div>    
            </div>        
          </div><!-- /.portfolio-item -->
          
        </div>

      </div>
    </div>
  </section>
  
</div>

<?php get_footer(); ?>