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
 * @package Arity
 */

get_header();
?>



	<div id="primary" class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
                    <?php get_template_part('template-parts/content', 'page-title'); ?>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
                </div>
            </div>
        </div>
	</div><!-- #primary -->

<?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
    <div id="blog-sidebar">
		<?php dynamic_sidebar('blog-sidebar'); ?>
    </div>
<?php } ?>

<?php
get_footer();
