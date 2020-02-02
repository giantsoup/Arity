<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Arity
 */

get_header();
?>

    <div class="blog-single site-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 blog-single__content">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

//						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
//						if ( comments_open() || get_comments_number() ) :
//							comments_template();
//						endif;

					endwhile; // End of the loop.
					?>
                </div>
                <div class="col-lg-4 blog-single__sidebar">
                    <div class="blog-sidebar">
			            <?php dynamic_sidebar( 'blog-sidebar' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
