<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
					<p class="grey">We're Remodeling!</p>
        <div class= "message">
						<p>A shiny new version of my portfolio is on the way!</p>
						<p>In the meantime, connect with me on social media.</p>
					</div>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
