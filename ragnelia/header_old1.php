<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ragnelia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="menu">
		<div class="container">
			<div id="js-toggle" class="left-panel__menu-toggle">
				<button class="header-menu-toggle"><span>menu</span></button>
			</div>
			<div class="logo"><?php the_custom_logo(); ?></div>
			<?php dynamic_sidebar( 'phone-mobile' ); ?>
			<a class="phone-link" href="tel:+74952013021">+7 (495) 201-30-21</a>
			<div class="units left-panel">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
				<div class="callback">
					<?php dynamic_sidebar( 'phone-mobile' ); ?>
					<?php dynamic_sidebar( 'phone-mobile' ); ?>
					<div class="phone"><a href="tel:+74952013021">+7 (495) 201-30-21</a></div>
					<div class="email">info@рагнелия.рф</div>
				</div>
			</div>
		</div>
	</div>
