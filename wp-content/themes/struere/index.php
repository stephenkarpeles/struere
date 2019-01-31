<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package struere
 */

get_header();
?>

  <div class="homepage__intro">
    <p><strong>Struere</strong> is an Architecture and Interiors firm based in Los Angeles. We approach each project with one purpose — to achieve excellence in design. For us Architecture is a movement for progressive change in the urban environment, for innovation and experimentation.</p>
  </div>

	<div id="slide_bg">
    <div class="active" img_src="banner3.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner3.jpg');"></div>
    <div img_src="banner5.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner5.jpg');"></div>
    <div img_src="banner2.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner2.jpg');"></div>
    <div img_src="banner1.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner1.jpg');"></div>
    <div img_src="banner4.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner4.jpg');"></div>
    <div img_src="banner6.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner6.jpg');"></div>
    <div img_src="banner7.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner7.jpg');"></div>
    <div img_src="banner8.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner8.jpg');"></div>
    <div img_src="banner9.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner9.jpg');"></div>
    <div img_src="banner10.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner10.jpg');"></div>
  </div>

  <div id="content_holder">
    <div id="content_holder_bg"></div>
    <div id="home_slider">
      <div id="home_slider_bg"></div>
      <!-- This should match the first slide info -->
      <div class="img_name">
        Building Name Placeholder
      </div>
      <!-- This should match the first slide info -->
      <div class="img_caption">
        City, State, 2018
      </div>

      <div id="home_slider_thumbs">
        <div caption="City, State, 2018" class="active" img_src="banner3.jpg" name="Building Name Placeholder" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner3.jpg');"></div>
        <div caption="City, State, 2014" img_src="banner5.jpg" name="Five Building Name" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner5.jpg');"></div>
        <div caption="City, State, 2017" img_src="banner2.jpg" name="Two Building Name" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner2.jpg');"></div>
        <div caption="City, State, 2016" img_src="banner1.jpg" name="Three Building Name" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner1.jpg');"></div>
        <div caption="City, State, 2015" img_src="banner4.jpg" name="Four Building Name" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner4.jpg');"></div>
        <div caption="City, State, 2013" img_src="banner6.jpg" name="Six Building Name" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner6.jpg');"></div>
        <div caption="City, State, 2012" img_src="banner7.jpg" name="Seven Building Name" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner7.jpg');"></div>
        <div caption="City, State, 2011" img_src="banner8.jpg" name="Eight Building Name" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner8.jpg');"></div>
        <div caption="City, State, 2010" img_src="banner9.jpg" name="Nine Building Name" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner9.jpg');"></div>
        <div caption="City, State, 2009" img_src="banner10.jpg" name="Ten Building Name" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner10.jpg');"></div>
      </div>
    </div><!-- home_slider -->
  </div><!-- content_holder -->

<?php
get_footer();
