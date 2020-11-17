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

?>
<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-logo">
						<a href="#">
							<?php the_custom_logo();?>
						</a>
					</div>
					<div class="footer-social">
						<ul>
							<li>
								<a href="#" class="icon-facebook"></a>
							</li>
							<li>
								<a href="#" class="icon-instagram"></a>
							</li>
							<li>
								<a href="#" class="icon-youtube"></a>
							</li>
							<li>
								<a href="#" class="icon-tiktoc"></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<h4>CONTACT INFORMATION</h4>
						<p>
							8239 Cooper Creek Blvd <br> Bradenton, FL34201 <br>
							<a class="learn-more" href="#">Get Directions <span class="icon-arrow-right"></span></a>
						</p>
						<p>
							Phone: <a class="color-body" href="tel:9413557707">941-355-7707</a>
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<h4>HOURS OF OPERATION</h4>
						<p>
							Monday - Friday: 8:30AM - 6PM <br> Saturday: 8AM - 1PM
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-contact">
						<h4>AWARDS &amp; ASSOCIATIONS</h4>
						<ul class="award-logos">
							<li>
								<img src=<?php echo get_template_directory_uri() ."/img/award-logo1.jpg"?> alt="Award">
							</li>
							<li>
								<img src=<?php echo get_template_directory_uri() ."/img/award-logo2.jpg"?> alt="Award">
							</li>
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
							<li>
								<a href="#">Site Credits</a>
							</li>
							<li>
								<a href="#">Sitemap</a>
							</li>
							<li>
								<a href="#">Privacy Policy</a>
							</li>
						</ul>
						<div class="copyright">
							Copyright © 2020. All Rights Reserved
						</div>
					</div>
					<div class="back-top">
						<a class="learn-more yellow-link" href="#">Back to Top <span class="icon-arrow-up"></span></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	 
</div><!-- #page -->


</body>
</html>
