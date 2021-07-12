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
                <h1>Oversigt over <?php the_title();?></h1><!--Here the only thing that needs to be dynamic is the products overall name fx kød-->
                <p>Klik herunder for at se vores <?php the_title();?></p><!--Same here-->
			</div>
		

			

			<div class="subMenu">
			   
				<ul class="grid-3">
                    <li><a href="/wordpress/kod-lam/">Lam</a></li>
                    <li><a href="/wordpress/kod-gris/" class="active">Gris</a></li>
					<li><a href="/wordpress/kod-handtering/">Håndtering</a></li>
				</ul>
            </div>


			<!--Below is the section with the products specific to the picked overall products and the sub-menu.-->
            <section class="products">

			<h2>Gris</h2>
				<ul>
					<?php $gris = new WP_query('category_name=gris'); ?>
					<?php while ($gris->have_posts() ) : $gris->the_post(); ?>

					
						<li><!--Everything in this li tag needs to be dynamic. Using categories and posts it should be possible-->
							<?php the_post_thumbnail(); ?><!--this would be the featured image to the product-->
							<p class="title"><?php the_title(); ?></p><!--This would be the title of the product, using the custom fields-->
							<p class="price"><?php echo get_post_meta($post->ID, 'price', true); ?></p><!--This would be the price of the product, using the custom fields-->
						</li>
					<?php endwhile; ?>
				</ul>
			
				<a href="/wordpress/find-os" class="product-findOs-btn">
                    <h3>Klik her for at finde os</h3>
                </a>
			

			</section>

	







	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
