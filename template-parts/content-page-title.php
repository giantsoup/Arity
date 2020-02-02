<?php
$page_for_posts = get_option( 'page_for_posts' );
if ( is_home() || is_date() ) :
	$title = get_the_title( $page_for_posts );
elseif (is_category() || is_post_type_archive()):
	$title = single_cat_title('', false);
elseif (is_404()):
	$title = '404 Not Found';
else:
	$title = the_title('', '', false);
endif;
?>

<div class="heading-content">
    <h1 class="heading-content__title"><?php echo $title; ?></h1>
</div>