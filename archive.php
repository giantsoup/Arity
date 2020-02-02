<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Arity
 */
get_header();
?>


    <div class="blog-main site-content">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 blog-main__content">
					<?php
					if ( have_posts() ) :

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

                <div class="col-lg-4 blog-main__sidebar">
                    <div class="blog-sidebar">
						<?php dynamic_sidebar( 'blog-sidebar' ); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>


<?php
get_footer();
