<?php 
/**
 * The single post template. Used when a single post is queried. For this and all other query templates, index.php is used if the query template is not present
 */
?>

<?php get_header(); ?>

      <main id="main" role="main">

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
			?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php 

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

				// End of the loop.
			endwhile;
			?>


      </main>

<?php get_footer(); ?>
