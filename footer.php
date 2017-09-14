<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after. 
 */

?>
	<section id="footer-cta">
		<div class="row">
			<div class="large-12">
				<h3>Footer Call To Action</h3>
			</div>
		</div>
	</section>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="footer-nav">
				<div class="row">
					<div class="large-3 columns">
						<h4>Column One</h4>
						<?php #dynamic_sidebar('footer'); ?>
					</div>
					<div class="large-3 columns">
						<h4>Column Two</h4>
						<?php #dynamic_sidebar('footer-two'); ?>
					</div>
					<div class="large-3 columns">
						<h4>Column Three</h4>
						<?php #dynamic_sidebar('footer-three'); ?>
					</div>
					<div class="large-3 columns">
						<h4>Column Four</h4>
						<?php #dynamic_sidebar('footer-four'); ?>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<span class="sticky-button-position show-for-large ">
	  <span data-remodal-target="remodal-enquiry" class="button">Quick Enquiry</span>
	</span>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
