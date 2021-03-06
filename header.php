<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travelasia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'travelasia' ); ?></a>

	<header class="default-header">
		<div class="container">
			<div class="header-wrap">
				<div class="header-top d-flex justify-content-between align-items-center">
					<div class="logo">
						<a href="#home"><?php the_custom_logo();?></a>
					</div>
					<div class="main-menubar d-flex align-items-center">
						<? if (is_front_page()) : ?>
							<nav class="hide">
								<?php
								$menuParameters = array(
									'menu'            => 'fp-menu',
									'container'       => false,
									'echo'            => false,
									'items_wrap'      => '%3$s',
									'depth'           => 0,
								);
								echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
								?>
							</nav>
						<?php else : ?>
							<nav class="hide">
								<?php
								$menuParameters = array(
									'menu'            => 'posts-menu',
									'container'       => false,
									'echo'            => false,
									'items_wrap'      => '%3$s',
									'depth'           => 0,
								);
								echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
								?>
							</nav>
						<?php endif ;?>
						<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
					</div>
				</div>
			</div>
		</div>
	</header>


    <div id="content" class="site-content">    	
