	<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;800&family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="header">
		<div class="header__box">
		<div class="header__wrap container">
			<div class="header__links ">
				<ul>
					<li><a href="#">Find a UKALA agent</a></li>
					<li><a href="#">Join UKALA</a></li>
					<li class="login">
						<a href="#" class="btn btn-white btn-login">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/lock.png'; ?>">
							<span>Log in</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="header__logo">
				<a href="#">
					<?php if ( function_exists( 'the_custom_logo' ) ):
					        the_custom_logo();
				    else: ?>
						<img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="">
					<?php endif; ?>
				</a>
			</div>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<div class="container">
				<div class="mobile-button">
					<button class="menu-toggle"><?php esc_html_e( 'Primary Menu', 'test-theme' ); ?></button>
				</div>
				<div class="main-navigation__wrap">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container'		=> ''
							)
						);
					?>
					<div class="search-box">
						<div class="search-box__input">
							<input type="text" class="search-box__input" placeholder="Search...">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/search-icon.png'; ?>" alt="">
						</div>
					</div>
				</div>			
			</div>		
		</nav>
		</div>		
	</header>
	
	<main class="main">