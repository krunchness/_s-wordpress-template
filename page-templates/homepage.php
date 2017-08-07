<?php
/*
*Template Name: Homepage Template
*/
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<?php if ($redux_data['opt-switch']): ?>
			<?php get_template_part( 'template-parts/home', 'slider' ); ?>
		<?php endif ?>
		
		<section id="welcome-section ">
			<div class="row text-center">
				<div class="large-12 columns">
					<h2>Welcome Title</h2>
				</div>
				<div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
				</div>
			</div>
		</section>
		
	</main><!-- #main -->
</div><!-- #primary-->
<?php get_footer(); ?>