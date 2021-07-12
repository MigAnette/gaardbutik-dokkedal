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
                <p>Klik herunder for at se vores dyrarter</p><!--Same here-->
			</div>
		
		<div id="vueApp">

			

			<div class="subMenu">
			   
				<ul class="grid-4">
                    <li><a href="/wordpress/garden/">Historien</a></li>
                    <li><a href="/wordpress/garden-far/">Fårene</a></li>
                    <li><a href="/wordpress/garden-grise/">Grisene</a></li>
                    <li><a href="/wordpress/garden-hons/" class="active">Hønsene</a></li>
					
				</ul>
            </div>


			<!--Below is the section with the handling specific to the picked overall products and the sub-menu.-->
         

			<section class="handling">
                <div class="handtering-content">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                    endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                
                </div>

                <a href="/wordpress/find-os" class="findOs-btn">
                        <h3>Klik her for at finde os</h3>
                </a>

             </section>

		</div>







	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
