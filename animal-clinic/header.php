<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Animal_Clinic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="site"> 
	<div class="online-request-tablet">
		<a href="#" class="btn btn-secondary">Online Pharmacy</a>
		<a href="#" class="btn btn-warning">Request an Appointment</a>
	</div>
	<div class="logo-tablet">
		<?php the_custom_logo();?>	
	</div>
	<div class="container site-branding top-header-holder">
		
		<div class="row">
			<div class="col-2">
				<div class="logo-holder">
					<div class="logo">
						<?php the_custom_logo();?>	
					</div>
				</div>
			</div> 
			<div class="col-10">
				<div class="row">
					<div class="col">
						<div class="call-us"><span>call us today</span> <a href="tel:9413557707">941-355-7707</a></div>
						<div class="online-request">
							<a href="#" class="btn btn-secondary">Online Pharmacy</a>
							<a href="#" class="btn btn-warning">Request an Appointment</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="nav-bar-holder full-version">
							<nav id="site-navigation" class="main-navigation">
							
								<div class="call-us-tablet"><span>call us today</span> <a href="tel:9413557707">941-355-7707</a></div>
								
								<div class="header-search">
									<a href="javascript:void(0);" class="icon-search">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
									<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
									</svg>
									</a>
								</div>
								<button class="navbar-toggler collapsed menu-toggle" type="button" data-toggle="collapse" data-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon">
										<span></span>
										<span></span>
										<span></span>
									</span>
									<span class="menu-text">Menu</span>
								</button> 
								<?php 
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
								
							</nav><!-- #site-navigation -->
						</div>
						<div class="nav-bar-holder tablet-version">
							<nav id="site-navigation" class="main-navigation">
							
								<div class="call-us-tablet"><span>call us</span> <a href="tel:9413557707">941-355-7707</a></div>
								
								<div class="header-search">
									<a href="javascript:void(0);" class="icon-search">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
									<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
									</svg>
									</a>
								</div>
								<button class="navbar-toggler collapsed menu-toggle" type="button" data-toggle="collapse" data-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon">
										<span></span>
										<span></span>
										<span></span>
									</span>
									<span class="menu-text">Menu</span>
								</button> 
								<?php 
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
								
							</nav><!-- #site-navigation -->
						</div>
					</div>
				</div>
				
			</div>
		</div> 

	</div>
</div><!-- .site-branding -->

<div class="searchbar active">
	<div class="container">
		<div class="searchbar-inner">
			<input type="text" class="form-control field-control" placeholder="Search here...">
			<a class="btn search-btn icon-search">
				<svg wth="1.2em" height="1.2em"id viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
				<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
				</svg>
			</a>
		</div>
	</div>
</div>

