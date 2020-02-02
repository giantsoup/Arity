<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arity Child
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php the_field( 'tracking_in_head', 'options' ); ?>
</head>

<body <?php body_class(); ?>>
<?php the_field( 'tracking_in_body', 'options' ); ?>

<header id="site-header" class="site-header">
    <div class="container site-header__container">

        <div class="row site-header__row">
            <div class="col site-header__mobile-nav mobile-nav-button">
                <div class="mobile-nav-button__button-wrapper">
                    <div class="mobile-nav-button__hamburger-menu"></div>
                    <div class="mobile-nav-button__button-menu">Menu</div>
                    <div class="mobile-nav-button__button-close">Close</div>
                </div>
                <div id="mobile-nav__container">
					<?php
					$mobile_args = array(
						'theme_location'  => 'main-menu',
						'container'       => 'nav',
						'container_class' => 'mobile-nav',
						'menu_class'      => 'mobile-nav__menu',
					);
					wp_nav_menu( $mobile_args ); ?>
                </div>
            </div>

            <div class="col-auto col-lg-3 site-header__logo-container">
                <a class="site-header__logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php
					$header_logo = get_field( 'header_logo', 'options' );
					if ( ! empty( $header_logo ) ): ?>
                        <img id="header-logo" class="site-header__logo" src="<?php echo $header_logo['url']; ?>"
                             alt="<?php echo $header_logo['alt']; ?>">
					<?php endif; ?>
                </a>
            </div>


            <div class="col-lg-9 site-header__main-nav-container">
				<?php
				$main_args = array(
					'theme_location'  => 'main-menu',
					'container'       => 'nav',
					'container_class' => 'main-nav',
					'menu_class'      => 'main-nav__menu',
				);
				wp_nav_menu( $main_args ); ?>
            </div>

        </div>
    </div>
</header>

<main id="main" class="site-main">