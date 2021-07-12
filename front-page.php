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
 * @package Gaardbutik_Dokkedal
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
        <div class="frontPage-banner">
        <?php gaardbutik_dokkedal_post_thumbnail(); ?><!--Image, h1 and text needs to have dynamic properties to change parts of the content-->
                <h1><?php the_title();?></h1><!--Here the only thing that needs to be dynamic is the products overall name fx kød-->
                <p><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<?php endif; ?></p>
        </div>

        <section class="overview-products">
                
                <h2 class="klik-produkter">Klik herunder for at se produkterne</h2>

                <a href="/wordpress/frugt-gront-vinter/" class="fruit-green">
                    <li>
                        <h2>Frugt & Grønt</h2>
                    </li>
                </a>
                <a href="/wordpress/kod-lam/" class="meat">
                    <li >
                        <h2>Kød</h2>
                    </li>
                </a>
                <a href="/wordpress/aeg/" class="egg">
                    <li >
                        <h2>Æg</h2>
                    </li>
                </a>
                <a href="/wordpress/honning/" class="honey">
                    <li >
                        <h2>Honning</h2>
                    </li>
                </a>
                <a href="/wordpress/garn/" class="yarn">
                    <li >
                        <h2>Garn</h2>
                    </li>
                </a>
                <a href="/wordpress/personlig-pleje" class="personal">
                    <li >
                        <h2>Personlig Pleje</h2>
                    </li>
                </a>

                <a href="/wordpress/garden" class="garden-btn">
                    <h3>Klik her og hør mere om gården</h3>
                </a>
            
    </section> 

		

		</main><!-- #main -->
	</div><!-- #primary -->

        <!--footer starts here-->
        <!--The footer like the header is going be the same in every page, so this needs to go in footer.php-->
<?php
get_footer();
