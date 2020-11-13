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
						<div class="online-request">
							<span>call us today</span> 
							<a class="tel-number" href="tel:9413557707">941-355-7707</a>
							<a href="#" class="btn btn-secondary">Online Pharmacy</a>
							<a href="#" class="btn btn-warning">Request an Appointment</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="nav-bar-holder">
								<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'animal-clinic' ); ?></button>
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
								</nav><!-- #site-navigation -->
								<i class="fa fa-facebook"></i>
						</div>
					</div>
				</div>
				
			</div>
		</div> 

	</div>
</div><!-- .site-branding -->
	
