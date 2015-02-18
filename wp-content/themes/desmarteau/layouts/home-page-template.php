<?php
/**
 * Template Name: Home Page
 *
 * @package Portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<div class="row">
			<div class="column-half">
			
			</div>	
			<div class="column-half">
				<h1><?php the_field('portfolio_title'); ?></h1>
				<h2><?php the_field('portfolio_summary');?></h2>
			</div>
		</div>
		


		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
