<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Animal_Clinic
 */


 //Custom Fields Groups ---> Start
	$first_footer_section = get_field('first_footer_section'); 
	$second_footer_section = get_field('second_footer_section'); 
 //Custom Fields Groups ---> End
?>


	<!-- Footer Start -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-logo">
						<?php the_custom_logo(); ?>
					</div>
					<div class="footer-social">
						<ul>

							<?php if(!empty($first_footer_section['footer_facebook_link'])): ?>
								<li>
									<a href=<?php echo $first_footer_section['footer_facebook_link']; ?> class="icon-facebook"></a>
								</li>
							<?php endif; ?>

							<?php if(!empty($first_footer_section['footer_instagram_link'])): ?>
								<li>
									<a href=<?php echo $first_footer_section['footer_instagram_link']; ?> class="icon-instagram"></a>
								</li>
							<?php endif; ?>

							<?php if(!empty($first_footer_section['footer_youtube_link'])): ?>
								<li>
									<a href=<?php echo $first_footer_section['footer_youtube_link']; ?> class="icon-youtube"></a>
								</li>
							<?php endif; ?>

							<?php if(!empty($first_footer_section['footer_tiktok_link'])): ?>
								<li>
									<a href=<?php echo $first_footer_section['footer_tiktok_link']; ?> class="icon-tiktoc"></a>
								</li>
							<?php endif; ?>

						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<h4><?php echo $first_footer_section['footer_contact_title']; ?></h4>
						<p>
						<?php echo $first_footer_section['footer_contact_Address']; ?>
							<br />
							
							<?php if(!empty($first_footer_section['footer_contact_location_link'])): ?>
								<a class="learn-more" href=<?php echo $first_footer_section['footer_contact_location_link']['url']; ?>>
									<?php echo $first_footer_section['footer_contact_location_link']['title']; ?> <span class="icon-arrow-right"></span>
								</a>
							<?php endif;?>
						</p>

						<?php if(!empty($first_footer_section['footer_contact_phone'])): ?>
							<p>
								Phone: 
								<a class="color-body" href=<?php echo 'tel:' . $first_footer_section['footer_contact_phone']; ?>>
									<?php echo $first_footer_section['footer_contact_phone']; ?>
								</a>
							</p>
						<?php endif;?>

					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<h4><?php echo $first_footer_section['footer_hours_operation_title']; ?></h4>
						<p>
							<?php echo $first_footer_section['footer_hours_operation_text']; ?>
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<h4><?php echo $first_footer_section['footer_awards_associations_title']; ?></h4>
						<ul class="award-logos">
						
							<?php if(!empty($first_footer_section['footer_awards_associations_image_1'])): ?>
								<li>
									<img src=<?php echo $first_footer_section['footer_awards_associations_image_1']['url']; ?> alt=<?php echo $first_footer_section['footer_awards_associations_image_1']['alt']; ?> />
								</li>
							<?php else: ?>
								<li>
									<img src=<?php echo get_template_directory_uri() . "/assets/images/award-logo1.jpg" ?> alt="Award" />
								</li>
							<?php endif; ?>

							<?php if(!empty($first_footer_section['footer_awards_associations_image_2'])): ?>
								<li>
									<img src=<?php echo $first_footer_section['footer_awards_associations_image_2']['url']; ?> alt=<?php echo $first_footer_section['footer_awards_associations_image_2']['alt']; ?> />
								</li>
							<?php else: ?>
								<li>
									<img src=<?php echo get_template_directory_uri() . "/assets/images/award-logo2.jpg" ?> alt="Award" />
								</li>
							<?php endif; ?>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="bottom-wrap">
					<div class="footer-left">
						<ul class="footer-menu">

						<?php if(!empty($second_footer_section['footer_site_credits'])): ?>
								<li>
									<a href=<?php echo $second_footer_section['footer_site_credits']['url']; ?>><?php echo $second_footer_section['footer_site_credits']['title']; ?></a>
								</li>
							<?php endif; ?>

							<?php if(!empty($second_footer_section['footer_sitemap'])): ?>
								<li>
									<a href=<?php echo $second_footer_section['footer_sitemap']['url']; ?>><?php echo $second_footer_section['footer_sitemap']['title']; ?></a>
								</li>
							<?php endif; ?>

							<?php if(!empty($second_footer_section['footer_privacy_policy'])): ?>
								<li>
									<a href=<?php echo $second_footer_section['footer_privacy_policy']['url']; ?>><?php echo $second_footer_section['footer_privacy_policy']['title']; ?></a>
								</li>
							<?php endif; ?>
 
						</ul>
						<div class="copyright">
							<?php echo $second_footer_section['footer_copyright']; ?>
						</div>
					</div>
					<div class="back-top">
						<a class="learn-more yellow-link" href="#"><?php echo $second_footer_section['footer_back_top']; ?> <span class="icon-arrow-up"></span></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->


	<!-- Script -->
	<?php wp_footer();?>

</body>

</html>