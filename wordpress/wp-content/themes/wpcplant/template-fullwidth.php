<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Full width
 *
 * @package wpcplant
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) :
			the_post();

			do_action( 'wpcplant_page_before' );

			get_template_part( 'content', 'page' );

			/**
			 * Functions hooked in to wpcplant_page_after action
			 *
			 * @see wpcplant_display_comments - 10
			 */
			do_action( 'wpcplant_page_after' );

		endwhile; // End of the loop.
		?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
