<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gaardbutik_Dokkedal
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			
		<a class="facebook" href="https://www.facebook.com/Vildmoselam-g%C3%A5rdbutik-og-staldd%C3%B8rssalg-1681342818831536/?__tn__=kC-R&eid=ARBrCUyVq4i4IdJ6EiLQGrkiTPyQzUJFI7t6xWvtRxU6yTV_HfVNOBpGJo5Vw-AoTVNr-J6A0KajK-Kv&hc_ref=ARQGEMqZroLnA4YOgy9bVsLGuAjqFFipElpgxCuTRIJOoTfsCSoIq-Kk2-GTbQbBq8w" target="_blank">
			<i class="fab fa-facebook-square fa-2x"></i>
		</a>

			<a class="kontrolrapport" href="http://www.findsmiley.dk/741278" target="_blank">
				<img src="<?php echo(get_template_directory_uri());?>/images/kontrolrapport.gif" alt="">
			</a>

			<p class="kortbetaling">OBS! Gårdbutikken tager ikke imod kortbetaling, men kontanter og mobilepay</p>

			<h4 class="copyright"><i class="far fa-copyright"></i> 2019</h4>

			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'gaardbutik-dokkedal' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="app.js"></script>

</body>
</html>
