<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gaardbutik_Dokkedal
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="page-banner">
                <!--Inside here the content needs to be dynamic-->
                <?php gaardbutik_dokkedal_post_thumbnail(); ?><!--Image, h1 and text needs to have dynamic properties to change parts of the content-->
                <h1><?php the_title();?></h1><!--Here the only thing that needs to be dynamic is the products overall name fx kød-->
			</div>
		
		
            <section class="contact-open">
                <div class="wrapper">
                    <article id="contact">
                        <h2>Kontakt</h2>
                        <h4>Hanna Færregaard Andersen</h4>
                        <a href="tel:+45 40 33 79 72"><p><i class="fas fa-phone"></i> +45 40 33 79 72</p></a>
                        <a href="mailto:falskmail@gmail.com"><p><i class="far fa-envelope"></i> falskmail@gmail.com</p></a>
                        <a href="https://www.google.com/maps/place/Vildmoselam/@56.9123014,10.2516974,17z/data=!3m1!4b1!4m5!3m4!1s0x464ec656aa7a99e1:0xb8d5da807b7b7bfa!8m2!3d56.9123014!4d10.2538861" target="_blank" class="adress"> 
                            <p><i class="fas fa-map-marker-alt"></i> Kystvej 125</p>
                            <p>Dokkedal</p>
                            <p>9280 Storvorde</p>
                        </a>
                        <p>SE 26 08 92 20</p>
                    </article>  
            

                    <article id="open">
                        <h2>Åbningstider</h2>
                        <p>Mandag: 10 - 18</p>
                        <p>Tirsdag: 10 - 18</p>
                        <p>Onsdag: Lukket</p>
                        <p>Torsdag: 10 - 18</p>
                        <p>Fredag: 10 - 18</p>
                    </article>


                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=vildmoselam&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>



                </div>

            </section>

		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
