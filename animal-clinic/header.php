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
<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<!-- SEO Metatag -->
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<link rel="shortcut icon" href=<?php echo get_template_directory_uri() . '/assets/images/favicon.ico';?>>

	<!-- Responsive Metatag -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>University Animal Clinic</title>
	
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

	<?php wp_head();?>

</head>

<body>
	<?php
	//Custom Fields Groups ---> Start
		$covic_section = get_field('covic_section');	
		$header_section = get_field('header_section');						
	//Custom Fields Groups ---> End
	
	?>
	<!-- Header Start -->
	<?php if(!empty($covic_section['covic_text'])):?>								
	<div class="covid-message">
		<div class="container">
			<div class="covid-text"><?php echo $covic_section['covic_text'];?></div>
			<div class="covid-link">
				<?php if(!empty($covic_section['covic_link'])):?>								
					<a class="learn-more" href=<?php echo $covic_section['covic_link']['url']?>><?php echo $covic_section['covic_link']['title']?> <span class="icon-arrow-right"></span></a>
				<?php endif; ?>
			</div>
			<a href="javascript:void(0);" class="icon-close removeit"></a>
		</div>
	</div>
	<?php endif; ?>
	<header class="header">
		<div class="container">
			<div class="header-wrap">
				<div class="header-logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="header-right">
					<div class="header-content">
						<div class="call-us">
							<span><?php echo $header_section['header_call_us_title']; ?></span> 
							<a href=<?php echo 'tel:' . $header_section['header_call_us_phone']; ?>><?php echo $header_section['header_call_us_phone']; ?></a>
						</div>
						<div class="online-request">

						<?php if(!empty($header_section['header_boton_link_1'])): ?>
								<a href=<?php echo $header_section['header_boton_link_1']['url']; ?> class="btn btn-secondary">
									<?php echo $header_section['header_boton_link_1']['title']; ?>
								</a>
							<?php endif; ?>
							
							<?php if(!empty($header_section['header_boton_link_2'])): ?>
								<a href=<?php echo $header_section['header_boton_link_2']['url']; ?> class="btn btn-primary">
									<?php echo $header_section['header_boton_link_2']['title']; ?>
								</a>
							<?php endif; ?>

						</div>
					</div>
					<div class="header-bottom">
						<nav class="navbar navbar-expand-lg navbar-light">
							<button class="navbar-toggler" type="button" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon">
									<span></span>
									<span></span>
									<span></span>
								</span>
								<span class="menu-text">Menu</span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<?php wp_nav_menu(array('theme_location' => 'menu-1','menu_id'        => 'primary-menu',)); ?>
							</div>
							
						</nav>
						<div class="header-search">
							<a href="javascript:void(0);" class="icon-search"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="searchbar">
			<div class="container">
				<div class="searchbar-inner">
					<input type="text" class="form-control" placeholder="Search here..." />
					<button type="submit" class="btn search-btn icon-search"></button>
				</div>
			</div>
		</div>

		<div class="mobile-bottom-header">
			<div class="call-us">
				<span>call us </span>
				<a href="tel:9413557707">941-355-7707</a>
			</div>
		</div>
	</header>
	<!-- Header End -->
 
	
 