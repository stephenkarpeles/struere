<?php
/*
 * Template Name: Individual Project
 * @package WordPress
 */

get_header();
?>

<div class="project-post-wrap">
  <div class="project-post-wrap__bg"></div>

  <section class="project-post">
    <div class="container">

      <div class="project-post__content">

        <div class="project-post__col-left">   
          <!-- The images -->

          <div class="project-post__image project-details__image is-active-project-detail" data-variant-content="1">
            <?php the_post_thumbnail(); ?>
          </div>

          <?php if ( have_rows( 'gallery' ) ) : $i = 1; ?>

            <?php
            while ( have_rows( 'gallery' ) ) : the_row(); $i++;
             $image = get_sub_field( 'image' );
            ?>

              <div class="project-post__image project-details__image is-active-project-detail" data-variant-content="<?php echo $i; ?>">
                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>"?>
              </div>         

            <?php endwhile; ?> 
          <?php endif; ?>

          <!-- The buttons -->

          <!-- <button class="btn is-active-project-variant" data-variant-index="1">
             <?php the_post_thumbnail(); ?>
          </button> -->

          <!-- <?php if ( have_rows( 'gallery' ) ) : $i = 1; ?>

            <?php
            while ( have_rows( 'gallery' ) ) : the_row(); $i++;
             $image = get_sub_field( 'image' );
            ?>

              <button class="btn" data-variant-index="<?php echo $i; ?>">
                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>"?>
              </button>          

            <?php endwhile; ?> 
          <?php endif; ?> -->

        </div>

        <div class="project-post__col-right">
          <div class="project-post__title">
            <h2><?php the_title(); ?></h2>  
          </div>
          <div class="project-post__location">
            <p><?php the_field('location'); ?></p>  
          </div>
          <div class="project-post__caption">
            <p><?php the_field('description'); ?></p>
          </div>
        </div> 

      </div> 

      <div class="project-post__back-link">
        <a href="<?php echo get_site_url(); ?>/portfolio">View All Projects</a>
      </div>

    </div>
  </section>

</div>


<?php get_footer(); ?>