<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Arity
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				arity_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php if ( !is_singular() ) : ?>
            <?php if ( has_post_thumbnail() ) { ?>
                <div class="entry-content__image">
                    <?php arity_post_thumbnail(); ?>
                </div>
            <?php } ?>
		<?php endif; ?>

		<?php if ( is_singular() ) : ?>
        <div class="entry-content__content">
			<?php the_content( sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'arity' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) ); ?>
        </div>
		<?php else : ?>
        <div class="entry-content__excerpt">
			<?php the_excerpt(); ?>
<!--            <a href="--><?php //echo esc_url( get_permalink()); ?><!--">Read More</a>-->
        </div>
		<?php endif; ?>

		<?php
        wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'arity' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

<!--	<footer class="entry-footer">-->
<!--		--><?php //arity_entry_footer(); ?>
<!--	</footer>-->
</article><!-- #post-<?php the_ID(); ?> -->
