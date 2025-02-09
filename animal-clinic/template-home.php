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

 defined('ABSPATH') || exit;

 get_header();
?>

<!-- Welcome Start-->
<div class="welcome-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-4 mobile-order2">
					<div class="welcome-box team-box">
						<div class="team-image">
							<img src=<?php echo get_template_directory_uri() . "/img/welcome-img.jpg" ?> alt="Welcome">
						</div>
						<div class="team-title">
							highest level of care
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-8">
					<div class="welcome-content">
						<h4 class="optinal-h4">Welcome to</h4>
						<h1>University Animal Clinic</h1>
						<p>University Animal Clinic is proud to welcome you to our animal hospital! At our
							state-of-the-art
							animal
							clinic, we’re proud to serve our local Florida community, from <a href="#">Lakewood
								Ranch,</a>
							to <a href="#">Sarasota,
								Bradenton,</a>
							and beyond!</p>
						<p>We are dedicated to providing the highest level of veterinary medicine available, along
							with
							friendly,
							compassionate service that you can trust.</p>
						<p>If you have any questions about our animal hospital, our veterinarians or our wide range
							of
							veterinary
							services, please don’t hesitate to contact us today. Thank you for your interest in
							University
							Animal
							Clinic! Our veterinarians look forward to meeting both you and your pet!</p>
						<a href="#" class="btn btn-warning">Meet our Team</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Welcome End-->

<!-- Home Services Start-->
<div class="home-services line-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="service-content">
						<h4 class="optinal-h4">Bradenton, FL &amp; Sarasota, FL</h4>
						<h1>Veterinary Services</h1>
						<p>
							From dogs to rats, cats to amphibians and reptiles, University Animal Clinic serves the
							needs of
							all types of pets in Lakewood Ranch, Sarasota, Bradenton, and surrounding communities.
							Our
							animal clinics highly skilled veterinarians and trained personnel are on hand six days a
							week,
							with our animal hospital open 8:30 a.m. to 6 p.m. Monday to Friday and 8 a.m. to 1 p.m.
							on
							Saturdays. Led by a knowledgeable veterinary team, our animal hospital offers emergency
							procedures, urgent care, and a wide array of services for cats, dogs, and exotic pets.
						</p>
						<p>
							Our motto is “Caring Only Requires Love” and we have plenty of love as well as plenty of
							advanced resources, tools, and facilities to administer our veterinary care.
						</p>
						<p>
							Our services include check-ups, annual exams, and preventative medicine (wellness
							plans). We
							offer a full range of vaccinations that include rabies, distemper, kennel cough, and the
							newest
							rattlesnake vaccine.
						</p>
						<p>
							We have our on call, Board Certified, Ultra-sonographer specialist, available for your
							pet’s
							needs.
						</p>
						<p>
							Our surgical procedures include; spay, neuter, orthopedics, and internal procedures as
							well
							as
							other intricate surgeries such as (ie: ACL(Cruciate) repairs).
						</p>
						<p>
							We are not limited to dogs and cats, either. We also treat the exotic pets of Sarasota,
							Bradenton, and Lakewood Ranch.
						</p>
						<a href="#" class="btn btn-warning">Explore All Services</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="d-none d-lg-block">
						<div class="service-owl owl-carousel owl-theme owl-loaded owl-drag">
							
							
						<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1322px, 0px, 0px); transition: all 0.25s ease 0s; width: 3966px;"><div class="owl-item cloned" style="width: 645px; margin-right: 16px;"><div class="item">
								<div class="row">
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img1.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-dental"></span>
													</div>
													<div class="service-title">Dental Cleaning</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img2.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-heart-paw"></span>
													</div>
													<div class="service-title">Wellness Plans</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img3.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-vaccines"></span>
													</div>
													<div class="service-title">Vaccinations &amp; Immunizations</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img4.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-exotic-care"></span>
													</div>
													<div class="service-title">Exotic Pet Care</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item cloned" style="width: 645px; margin-right: 16px;"><div class="item">
								<div class="row">
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img1.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-dental"></span>
													</div>
													<div class="service-title">Dental Cleaning</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img2.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-heart-paw"></span>
													</div>
													<div class="service-title">Wellness Plans</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img3.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-vaccines"></span>
													</div>
													<div class="service-title">Vaccinations &amp; Immunizations</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img4.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-exotic-care"></span>
													</div>
													<div class="service-title">Exotic Pet Care</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item active" style="width: 645px; margin-right: 16px;"><div class="item">
								<div class="row">
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img1.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-dental"></span>
													</div>
													<div class="service-title">Dental Cleaning</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img2.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-heart-paw"></span>
													</div>
													<div class="service-title">Wellness Plans</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img3.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-vaccines"></span>
													</div>
													<div class="service-title">Vaccinations &amp; Immunizations</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img4.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-exotic-care"></span>
													</div>
													<div class="service-title">Exotic Pet Care</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item" style="width: 645px; margin-right: 16px;"><div class="item">
								<div class="row">
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img1.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-dental"></span>
													</div>
													<div class="service-title">Dental Cleaning</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img2.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-heart-paw"></span>
													</div>
													<div class="service-title">Wellness Plans</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img3.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-vaccines"></span>
													</div>
													<div class="service-title">Vaccinations &amp; Immunizations</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img4.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-exotic-care"></span>
													</div>
													<div class="service-title">Exotic Pet Care</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item cloned" style="width: 645px; margin-right: 16px;"><div class="item">
								<div class="row">
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img1.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-dental"></span>
													</div>
													<div class="service-title">Dental Cleaning</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img2.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-heart-paw"></span>
													</div>
													<div class="service-title">Wellness Plans</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img3.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-vaccines"></span>
													</div>
													<div class="service-title">Vaccinations &amp; Immunizations</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img4.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-exotic-care"></span>
													</div>
													<div class="service-title">Exotic Pet Care</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item cloned" style="width: 645px; margin-right: 16px;"><div class="item">
								<div class="row">
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img1.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-dental"></span>
													</div>
													<div class="service-title">Dental Cleaning</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img2.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-heart-paw"></span>
													</div>
													<div class="service-title">Wellness Plans</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img3.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-vaccines"></span>
													</div>
													<div class="service-title">Vaccinations &amp; Immunizations</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img4.jpg" ?> alt="Service">
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-exotic-care"></span>
													</div>
													<div class="service-title">Exotic Pet Care</div>
													<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
					</div>
					<div class="d-lg-none">
						<div class="service-owl owl-carousel owl-theme owl-loaded owl-drag owl-hidden">
							
							
							
							
							
							
							
							
						<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1056px, 0px, 0px); transition: all 0s ease 0s; width: 4296px; padding-left: 36px; padding-right: 36px;"><div class="owl-item cloned" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img1.jpg" ?> alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-dental"></span>
											</div>
											<div class="service-title">Dental Cleaning</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item cloned" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img2.jpg" ?> alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-heart-paw"></span>
											</div>
											<div class="service-title">Wellness Plans</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item cloned" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img3.jpg" ?> alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-vaccines"></span>
											</div>
											<div class="service-title">Vaccinations &amp; Immunizations</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item cloned" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
												<img src=<?php echo get_template_directory_uri() . "/img/service-img4.jpg" ?> alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-exotic-care"></span>
											</div>
											<div class="service-title">Exotic Pet Care</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item active" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
                                            <img src=<?php echo get_template_directory_uri() . "/img/service-img1.jpg" ?> alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-dental"></span>
											</div>
											<div class="service-title">Dental Cleaning</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
                                            <img src=<?php echo get_template_directory_uri() . "/img/service-img2.jpg" ?> alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-heart-paw"></span>
											</div>
											<div class="service-title">Wellness Plans</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
                                            <img src=<?php echo get_template_directory_uri() . "/img/service-img3.jpg" ?> alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-vaccines"></span>
											</div>
											<div class="service-title">Vaccinations &amp; Immunizations</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
                                            <img src=<?php echo get_template_directory_uri() . "/img/service-img4.jpg" ?> alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-exotic-care"></span>
											</div>
											<div class="service-title">Exotic Pet Care</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="assets/images/service-img1.jpg" alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-dental"></span>
											</div>
											<div class="service-title">Dental Cleaning</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="assets/images/service-img2.jpg" alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-heart-paw"></span>
											</div>
											<div class="service-title">Wellness Plans</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="assets/images/service-img3.jpg" alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-vaccines"></span>
											</div>
											<div class="service-title">Vaccinations &amp; Immunizations</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="assets/images/service-img4.jpg" alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-exotic-care"></span>
											</div>
											<div class="service-title">Exotic Pet Care</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item cloned" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="assets/images/service-img1.jpg" alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-dental"></span>
											</div>
											<div class="service-title">Dental Cleaning</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item cloned" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="assets/images/service-img2.jpg" alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-heart-paw"></span>
											</div>
											<div class="service-title">Wellness Plans</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item cloned" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="assets/images/service-img3.jpg" alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-vaccines"></span>
											</div>
											<div class="service-title">Vaccinations &amp; Immunizations</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div><div class="owl-item cloned" style="width: 248px; margin-right: 16px;"><div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src="assets/images/service-img4.jpg" alt="Service">
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-exotic-care"></span>
											</div>
											<div class="service-title">Exotic Pet Care</div>
											<a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Home Services End-->

<!-- Home Team Start -->
<div class="home-team">
		<div class="team-banner">
			<div class="banner-image">
				<img src=<?php echo get_template_directory_uri() . "/img/team-banner.jpg" ?> alt="Team">
			</div>
		</div>
		<div class="team-content">
			<div class="container">
				<div class="team-wrap">
					<h4 class="optinal-h4">OUR TEAM</h4>
					<h1>Meet Our Friendly Doctors</h1>
					<div class="row">
						<div class="col-md-4">
							<div class="team-box">
								<div class="team-image">
				                    <img src=<?php echo get_template_directory_uri() . "/img/team-img1.jpg" ?> alt="Team">
									<div class="team-hover">
										<div class="team-h-inner">
											<div class="comman-icon">
												<span class="icon-cross-paw"></span>
											</div>
											<div class="more-div">
												<a class="learn-more yellow-link" href="#">learn more <span class="icon-arrow-right"></span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="team-title">
									Dr. Leigh Samanowitz
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="team-box">
								<div class="team-image">
									<img src=<?php echo get_template_directory_uri() . "/img/team-img2.jpg" ?> alt="Team">
									<div class="team-hover">
										<div class="team-h-inner">
											<div class="comman-icon">
												<span class="icon-cross-paw"></span>
											</div>
											<div class="more-div">
												<a class="learn-more yellow-link" href="#">learn more <span class="icon-arrow-right"></span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="team-title">
									Dr. Sara Simonson
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="team-box">
								<div class="team-image">
									<img src=<?php echo get_template_directory_uri() . "/img/team-img3.jpg" ?> alt="Team">
									<div class="team-hover">
										<div class="team-h-inner">
											<div class="comman-icon">
												<span class="icon-cross-paw"></span>
											</div>
											<div class="more-div">
												<a class="learn-more yellow-link" href="#">learn more <span class="icon-arrow-right"></span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="team-title">
									Dr. Jenny Dakin
								</div>
							</div>
						</div>
					</div>
					<div class="meet-button">
						<a href="#" class="btn btn-secondary">Meet the Whole Team</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Home Team End -->

<!-- Exotic Care Start -->
<div class="exotic-care">
		<div class="container">
			<div class="exotic-wrap">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<h4 class="optinal-h4">LAKE WOOD RANCH</h4>
						<h1>Exotic Pet Care</h1>
						<p>Every pet is special to us at University Animal Clinic. We also know exotic pets are
							unique
							and
							therefore require special care. Our highly qualified exotic veterinarians near you serve
							the
							needs of exotic pets in University Park, Bradenton, Sarasota and Lakewood Ranch. Whether
							a
							bird
							has a crop infection, a snake or other reptile is not eating or has a lack of appetite,
							or
							rats,
							guinea pigs, rabbits, ferrets or other rodents suffer from respiratory infections, we
							are
							here
							to serve the needs of our all exotic pets and their owners. In addition to treating
							exotic
							pet
							ailments, we offer tips and guidance on the proper diet, vitamins, lighting and housing
							for
							these unique creatures that visit our exotic pet clinic.
						</p>
						<p>
							Although all reptiles share the similar traits of being cold-blooded and covered in
							scales,
							they
							do not follow a one-size fits all outline for proper care. Some snakes and other
							reptiles
							need a
							hot, dry environment while other snakes and reptiles require a humid and mossy
							enclosure.
							They
							also vary in requirements for lighting, diet, vitamins and housing.</p>
						<a href="#" class="btn btn-warning">Learn More About Exotic Pet Care</a>
					</div>
					<div class="col-lg-5">
						<div class="exotic-images">
							<div class="exotic-image1 team-box">
								<div class="team-image">
									<img src=<?php echo get_template_directory_uri() . "/img/exotic-img1.jpg" ?> alt="Exotic">
								</div>
								<div class="team-title">turtle</div>
							</div>
							<div class="exotic-image2 team-box">
								<div class="team-image">
									<img src=<?php echo get_template_directory_uri() . "/img/exotic-img2.jpg" ?> alt="Exotic">
								</div>
								<div class="team-title">bearded dragon</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Exotic Care End -->

<!-- Fun Fact Start 
<div class="fun-fact line-bg">
		<div class="container">
			<div class="fun-friday">
				FUN FACT
				<span class="friday-label">FRIDAY</span>
			</div>
			<div class="fun-fact-owl owl-carousel owl-loaded owl-drag">
				
				
				
				
			<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1750px, 0px, 0px); transition: all 0s ease 0s; width: 7002px;"><div class="owl-item slidenumber3 cloned" style="width: 875.2px;"><div class="item">
					<div class="fun-image">
						<img src=<?php echo get_template_directory_uri() . "/img/video-image3.jpg" ?> alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div></div><div class="owl-item slidenumber4 cloned" style="width: 875.2px;"><div class="item">
					<div class="fun-image">
						<img src=<?php echo get_template_directory_uri() . "/img/video-image4.jpg" ?> alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div></div><div class="owl-item slidenumber1 active" style="width: 875.2px;"><div class="item">
					<div class="fun-image">
						<img src=<?php echo get_template_directory_uri() . "/img/video-image1.jpg" ?> alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div></div><div class="owl-item slidenumber2" style="width: 875.2px;"><div class="item">
					<div class="fun-image">
						<img src=<?php echo get_template_directory_uri() . "/img/video-image2.jpg" ?> alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div></div><div class="owl-item slidenumber3" style="width: 875.2px;"><div class="item">
					<div class="fun-image">
						<img src=<?php echo get_template_directory_uri() . "/img/video-image3.jpg" ?> alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div></div><div class="owl-item slidenumber4" style="width: 875.2px;"><div class="item">
					<div class="fun-image">
						<img src=<?php echo get_template_directory_uri() . "/img/video-image4.jpg" ?> alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div></div><div class="owl-item slidenumber1 cloned" style="width: 875.2px;"><div class="item">
					<div class="fun-image">
						<img src=<?php echo get_template_directory_uri() . "/img/video-image1.jpg" ?> alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div></div><div class="owl-item slidenumber2 cloned" style="width: 875.2px;"><div class="item">
					<div class="fun-image">
						<img src=<?php echo get_template_directory_uri() . "/img/video-image2.jpg" ?> alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot dotnumber1 active" data-info="1" style="background-image: url(&quot;../img/video-image1.jpg&quot;);"><span></span></button><button role="button" class="owl-dot dotnumber2" data-info="2" style="background-image: url(&quot;../img/video-image2.jpg&quot;);"><span></span></button><button role="button" class="owl-dot dotnumber3" data-info="3" style="background-image: url(&quot;../img/video-image3.jpg&quot;);"><span></span></button><button role="button" class="owl-dot dotnumber4" data-info="4" style="background-image: url(&quot;../img/video-image4.jpg&quot;);"><span></span></button></div></div>
		</div>
	</div>
Fun Fact End -->

<!-- Testi and Blog Start -->
<div class="testi-blog">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="testimonials">
						<div class="comman-icon">
							<span class="icon-quotes"></span>
						</div>
						<h1>What Our Clients Have to Say</h1>
						<a class="btn btn-primary" href="javascript:void(0);">View All Testimonials</a>
						<div class="testi-owl owl-carousel owl-loaded owl-drag">
							
							
						<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-800px, 0px, 0px); transition: all 0s ease 0s; width: 2400px;"><div class="owl-item cloned" style="width: 400px;"><div class="item">
								<p>“The entire staff was friendly and professional. Dr. Sam was extremely knowledgeable,
									kind, and eased my anxiety. Even though I was worried they comforted me, answered
									all of
									my questions, and took great care of my fur baby.” <br>
								</p>
								<b>- Zach Gennette</b>
							</div></div><div class="owl-item cloned" style="width: 400px;"><div class="item">
								<p>“The entire staff was friendly and professional. Dr. Sam was extremely knowledgeable,
									kind, and eased my anxiety. Even though I was worried they comforted me, answered
									all of
									my questions, and took great care of my fur baby.” <br>
								</p>
								<b>- Zach Gennette</b>
							</div></div><div class="owl-item active" style="width: 400px;"><div class="item">
								<p>“The entire staff was friendly and professional. Dr. Sam was extremely knowledgeable,
									kind, and eased my anxiety. Even though I was worried they comforted me, answered
									all of
									my questions, and took great care of my fur baby.” <br>
								</p>
								<b>- Zach Gennette</b>
							</div></div><div class="owl-item" style="width: 400px;"><div class="item">
								<p>“The entire staff was friendly and professional. Dr. Sam was extremely knowledgeable,
									kind, and eased my anxiety. Even though I was worried they comforted me, answered
									all of
									my questions, and took great care of my fur baby.” <br>
								</p>
								<b>- Zach Gennette</b>
							</div></div><div class="owl-item cloned" style="width: 400px;"><div class="item">
								<p>“The entire staff was friendly and professional. Dr. Sam was extremely knowledgeable,
									kind, and eased my anxiety. Even though I was worried they comforted me, answered
									all of
									my questions, and took great care of my fur baby.” <br>
								</p>
								<b>- Zach Gennette</b>
							</div></div><div class="owl-item cloned" style="width: 400px;"><div class="item">
								<p>“The entire staff was friendly and professional. Dr. Sam was extremely knowledgeable,
									kind, and eased my anxiety. Even though I was worried they comforted me, answered
									all of
									my questions, and took great care of my fur baby.” <br>
								</p>
								<b>- Zach Gennette</b>
							</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="home-blog">
						<div class="blog-title">
							<h4 class="optinal-h4">OUR BLOG</h4>
							<a class="btn btn-secondary" href="javascript:void(0);">View All Posts</a>
						</div>
						<div class="blog-main">
							<div class="blog-image">
								<img src=<?php echo get_template_directory_uri() . '/img/blog-image.jpg'?> alt="Blog">
							</div>
							<div class="blog-content">
								<div class="blog-inner">
									<h4>RAW PET FOODS: WHAT YOU NEED TO KNOW</h4>
									<p>One of the new trends in pet foods is feeding a raw diet. For some, this diet is
										based on
										that of wild species related to dogs. […]</p>
									<div class="readmore">
										<a class="btn btn-primary" href="javascript:void(0);">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Testi and Blog End -->
<?php
get_footer();

