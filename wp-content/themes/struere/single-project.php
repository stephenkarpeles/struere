<?php
/*
 * Template Name: Individual Project
 * @package WordPress
 */

get_header();
?>

<section class="project-post">
  <div class="container">

    <div class="project-post__content">

      <div class="project-post__col-left">     
        <div class="project-post__image">
          <?php the_post_thumbnail(); ?>
        </div>
      </div>

      <div class="project-post__col-right">
        <div class="project-post__title">
          <h2><?php the_title(); ?></h2>  
        </div>
        <div class="project-post__caption">
          <p><?php the_field('description'); ?></p>
        </div>
      </div> 

    </div> 

    <div class="project-post__back-link">
      <a href="<?php echo get_site_url(); ?>/portfolio">&larr; Back to All Projects</a>
    </div>

  </div>
</section>


<?php get_footer(); ?>