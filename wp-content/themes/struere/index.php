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
    <div class="active" img_src="banner1.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner1.jpg');"></div>
    <div img_src="banner2.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner2.jpg');"></div>
    <div img_src="banner3.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner3.jpg');"></div>
    <div img_src="banner4.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner4.jpg');"></div>
    <div img_src="banner5.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner5.jpg');"></div>
    <div img_src="banner6.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner6.jpg');"></div>
    <div img_src="banner7.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner7.jpg');"></div>
    <div img_src="banner8.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner8.jpg');"></div>
    <div img_src="banner9.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner9.jpg');"></div>
    <div img_src="banner10.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner10.jpg');"></div>
    <div img_src="banner11.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner11.jpg');"></div>
    <div img_src="banner12.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner12.jpg');"></div>
    <div img_src="banner13.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner13.jpg');"></div>
    <div img_src="banner14.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner14.jpg');"></div>
    <div img_src="banner15.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner15.jpg');"></div>
    <div img_src="banner16.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner16.jpg');"></div>
    <!-- <div img_src="banner17.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner17.jpg');"></div>
    <div img_src="banner18.jpg" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner18.jpg');"></div> -->
  </div>

  <div id="content_holder">
    <div id="content_holder_bg"></div>
    <div id="home_slider">
      <div id="home_slider_bg"></div>
      <!-- This should match the first slide info -->
      <div class="img_name">
        3700 Riverside Mixed Use
      </div>
      <!-- This should match the first slide info -->
      <div class="img_caption">
        Burbank, CA
      </div>

      <div id="home_slider_thumbs">
        <div caption="Burbank, CA" class="active" img_src="banner1.jpg" name="3700 Riverside Mixed Use" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner1.jpg');"></div>
        <div caption="Czech Republic" img_src="banner2.jpg" name="Praha, Prague National Library" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner2.jpg');"></div>
        <div caption="Jeddah, Saudi Arabia" img_src="banner3.jpg" name="Hilal, OIC Headquarters" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner3.jpg');"></div>
        <div caption="Yerevan, Armenia" img_src="banner4.jpg" name="Ler, Intercontinental Hotel Mixed Use Complex" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner4.jpg');"></div>
        <div caption="Yerevan, Armenia" img_src="banner5.jpg" name="Holy Translators Church" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner5.jpg');"></div>
        <div caption="Riyadh, Saudi Arabia" img_src="banner6.jpg" name="Red Crescent Hotel" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner6.jpg');"></div>
        <div caption="Riyadh, Saudi Arabia" img_src="banner7.jpg" name="Gharishe Office Tower" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner7.jpg');"></div>
        <div caption="San Jose, CA" img_src="banner8.jpg" name="Fluxform Art Museum" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner8.jpg');"></div>
        <div caption="Peterborough, England" img_src="banner9.jpg" name="Ripple Office Building" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner9.jpg');"></div>
        <div caption="El Segundo, CA" img_src="banner10.jpg" name="2221 Park Place Creative Office Building" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner10.jpg');"></div>
        <div caption="El Segundo, CA" img_src="banner11.jpg" name="321 Coral Circle Creative Office Building" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner11.jpg');"></div>
        <div caption="Los Angeles County" img_src="banner12.jpg" name="LiCCo Prefabricated Housing" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner12.jpg');"></div>
        <div caption="Santa Monica, CA" img_src="banner13.jpg" name="900 Wilshire Office Building" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner13.jpg');"></div>
        <div caption="Santa Monica, CA" img_src="banner14.jpg" name="2901 Wilshire Office Building" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner14.jpg');"></div>
        <div caption="Santa Monica, CA" img_src="banner15.jpg" name="2600 Colorado Office Building Renovation" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner15.jpg');"></div>
        <div caption="Los Angeles, CA" img_src="banner16.jpg" name="5211 Venice Mixed Use Building" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner16.jpg');"></div>
        <!-- <div caption="Pasadena Playhouse District, CA" img_src="banner17.jpg" name="Las Ventanas Mixed Use Building" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner17.jpg');"></div>
        <div caption="East of Los Angeles, CA" img_src="banner18.jpg" name="Civic Center" style="background-image:url('http://stephenkarpeles.com/staging/struere/wp-content/themes/struere/img/banners/banner18.jpg');"></div> -->
      </div>
    </div><!-- home_slider -->
  </div><!-- content_holder -->

<?php
get_footer();
