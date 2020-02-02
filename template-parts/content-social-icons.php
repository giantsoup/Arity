<?php if( have_rows('social_icons', 'options') ): ?>
	<div class="social-icons">
		<?php while( have_rows('social_icons', 'options') ): the_row();
			// vars
			$social_icon = get_sub_field('social_icon');
			$social_link = get_sub_field('social_link');
			?>
			<a class="social-icons__link" href="<?php echo esc_url($social_link['url']); ?>" target="<?php echo esc_attr($social_link['target'] ? $social_link['target'] : '_self'); ?>" title="<?php echo esc_html($social_link['title']); ?>">
				<img class="social-icons__image" src="<?php echo $social_icon['url']; ?>" alt="<?php echo $social_icon['alt']; ?>">
			</a>
		<?php endwhile; ?>
	</div>
<?php endif; ?>