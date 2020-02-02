<?php
$text_format       = get_field( 'text_or_counter' );
$include_bg        = get_field( 'background_image_check' );
$page_banner_class = 'page-hero';
$page_text_class   = 'page-hero__text';
if ( $include_bg ) {
	$text_color        = get_field( 'banner_text_color' );
	$page_banner_class .= ' page-hero__background-image page-hero__background-image--' . $text_color;
	$page_text_class   .= ' page-hero__text--' . $text_color;
}

if ( get_field( 'banner_image' ) || get_field( 'static_text' ) || have_rows( 'dynamic_text' ) ) :?>
    <section id="page-hero" class="<?php echo $page_banner_class; ?>"<?php if ( $include_bg ) { ?> style="background-image:url(<?php the_field( 'banner_image' ); ?>);"<?php } ?>>
        <div class="container">
            <div class="row page-hero__row">
                <div class="col page-hero__col">
                    <div class="page-hero__content-wrapper">
						<?php if ( $text_format == 'text' ): ?>
                            <div class="page-hero__static-text <?php echo $page_text_class; ?>"><?php the_field( 'static_text' ); ?></div>
						<?php endif; ?>
						<?php if ( $text_format == 'counter' ): ?>
							<?php if ( have_rows( 'dynamic_text' ) ): ?>
								<?php while ( have_rows( 'dynamic_text' ) ): the_row();
									// vars
									$number = get_sub_field( 'number' );
									$text   = get_sub_field( 'text' );
									?>
                                    <div class="page-hero__dynamic-text-wrapper">
                                        <div class="<?php echo $page_text_class; ?>">
                                            <span class="page-hero__number"><?php echo $number; ?></span>
                                            <span class="page-hero__dynamic-text"><?php echo $text; ?></span>
                                        </div>
                                    </div>
								<?php endwhile; ?>
							<?php endif; ?>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>