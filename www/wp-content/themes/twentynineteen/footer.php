<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<div class="site-info ">
		
			<div class = "row">
				<div class = "col-xs-6">
					Nous rejoindre :
				</div>
				<div class = "col-xs-6">
					Nous contacter :
				</div>
			</div>
			<div class = "row">
				<div class = "col-md-2 col-sm-2 col-xs-6">
					<span class="fab fa-twitter"></span><br/>
					Twitter association
				</div>
				<div class = "col-md-2 col-sm-2 col-xs-6">
					<span class="fab fa-facebook"></span><br/>
					Facebook association
				</div>
				<div class = "col-md-2 col-sm-2 col-xs-6">
					<span class="fas fa-user-graduate"></span><br/>
					IUT Figeac
				</div>
				<div class = "col-md-2 col-sm-2 col-xs-6">
					<span class="fas fa-envelope"></span><br/>
					Mail association
				</div>
				<div class = "col-md-2 col-sm-2 col-xs-6">
					<span class="fa fa-phone"></span><br/>
					0651567415
				</div>
				<div class = "col-md-2 col-sm-2 col-xs-6">
					<span class="fas fa-home"></span><br/>
					Adresse Association
				</div>
			</div>
		
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->
</div>
<?php wp_footer(); ?>

</body>
</html>
