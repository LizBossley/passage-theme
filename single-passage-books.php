<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Passage
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="columns small-12 large-8">
				<hr>
				<?php
				while ( have_posts() ) : the_post();

					the_title('<h2>', '</h2>'); 
					the_content(); 

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
				
			</div>
			<div class="columns small-12 large-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php
get_footer();

