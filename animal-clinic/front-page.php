<?php get_header(); 

//Custom Fields Groups ---> Start
    $slider_section = get_field('home_slider_section');
    $welcome_section = get_field('welcome_section');
    $home_services_section = get_field('home_services_section');
    $our_team_section = get_field('our_team_section');
    $exotic_care_section = get_field('exotic_care_section');
    $fun_fact_section = get_field('fun_fact_section');
    $testimonials_and_blog_section = get_field('testimonials_and_blog_section');
//Custom Fields Groups ---> End

?>
	<!-- Home Slider Start -->
	<div class="home-slider owl-carousel owl-theme">
		<div class="item">
			<div class="slide-image">

                <?php if(!empty($slider_section['slider_img1'])): ?>
                    <img src=<?php echo $slider_section['slider_img1']['url']?> alt=<?php echo $slider_section['slider_img1']['alt']?> />
                <?php else: ?>
				    <img src=<?php echo get_template_directory_uri() . "/assets/images/slider-img1.jpg" ?> alt="Slide" />
                <?php endif; ?>

			</div>
			<div class="container">
				<div class="slide-content">

                    <?php if(!empty($slider_section['slider_title1'])): ?>
					    <h4 class="optinal-h4"><?php echo $slider_section['slider_title1'];?></h4>
                    <?php endif;?>

                    <?php if(!empty($slider_section['slider_text1'])): ?>
					    <h3><?php echo $slider_section['slider_text1']; ?></h3>
                    <?php endif;?>

                    <?php if(!empty($slider_section['slider_link1'])): ?>
					    <a href=<?php echo $slider_section['slider_link1']['url']?> class="btn btn-primary"><?php echo $slider_section['slider_link1']['title']; ?></a>
                    <?php endif;?>

				</div>
			</div>
		</div>
		<div class="item">
			<div class="slide-image">

                <?php if(!empty($slider_section['slider_img2'])): ?>
                    <img src=<?php echo $slider_section['slider_img2']['url']?> alt=<?php echo $slider_section['slider_img2']['alt']?> />
                <?php else: ?>
				    <img src=<?php echo get_template_directory_uri() . "/assets/images/slider-img2.jpg" ?> alt="Slide" />
                <?php endif; ?>

			</div>
			<div class="container">
				<div class="slide-content">

                    <?php if(!empty($slider_section['slider_title2'])): ?>
					    <h4 class="optinal-h4"><?php echo $slider_section['slider_title2'];?></h4>
                    <?php endif;?>

                    <?php if(!empty($slider_section['slider_text2'])): ?>
					    <h3><?php echo $slider_section['slider_text2']; ?></h3>
                    <?php endif;?>

                    <?php if(!empty($slider_section['slider_link2'])): ?>
					    <a href=<?php echo $slider_section['slider_link2']['url']?> class="btn btn-primary"><?php echo $slider_section['slider_link2']['title']; ?></a>
                    <?php endif;?>
                    
				</div>
			</div>
		</div>
		<div class="item">
			<div class="slide-image">

                <?php if(!empty($slider_section['slider_img3'])): ?>
                    <img src=<?php echo $slider_section['slider_img3']['url']?> alt=<?php echo $slider_section['slider_img3']['alt']?> />
                <?php else: ?>
				    <img src=<?php echo get_template_directory_uri() . "/assets/images/slider-img3.jpg" ?> alt="Slide" />
                <?php endif; ?>

			</div>
			<div class="container">
				<div class="slide-content">

                    <?php if(!empty($slider_section['slider_title3'])): ?>
					    <h4 class="optinal-h4"><?php echo $slider_section['slider_title3'];?></h4>
                    <?php endif;?>

                    <?php if(!empty($slider_section['slider_text3'])): ?>
					    <h3><?php echo $slider_section['slider_text3']; ?></h3>
                    <?php endif;?>

                    <?php if(!empty($slider_section['slider_link3'])): ?>
					    <a href=<?php echo $slider_section['slider_link3']['url']?> class="btn btn-primary"><?php echo $slider_section['slider_link3']['title']; ?></a>
                    <?php endif;?>
                    
				</div>
			</div>
		</div>
		<div class="item">
			<div class="slide-image">

                <?php if(!empty($slider_section['slider_img4'])): ?>
                    <img src=<?php echo $slider_section['slider_img4']['url']?> alt=<?php echo $slider_section['slider_img4']['alt']?> />
                <?php else: ?>
				    <img src=<?php echo get_template_directory_uri() . "/assets/images/slider-img4.jpg" ?> alt="Slide" />
                <?php endif; ?>

			</div>
			<div class="container">
				<div class="slide-content">

                    <?php if(!empty($slider_section['slider_title4'])): ?>
					    <h4 class="optinal-h4"><?php echo $slider_section['slider_title4'];?></h4>
                    <?php endif;?>

                    <?php if(!empty($slider_section['slider_text4'])): ?>
					    <h3><?php echo $slider_section['slider_text4']; ?></h3>
                    <?php endif;?>

                    <?php if(!empty($slider_section['slider_link4'])): ?>
					    <a href=<?php echo $slider_section['slider_link4']['url']?> class="btn btn-primary"><?php echo $slider_section['slider_link4']['title']; ?></a>
                    <?php endif;?>
                    
				</div>
			</div>
		</div>
	</div>
	<!-- Home Slider End -->

	<!-- Welcome Start -->
	<div class="welcome-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-4 mobile-order2">
					<div class="welcome-box team-box">
						<div class="team-image">
                            <?php if(!empty($welcome_section['welcome-img'])): ?>
                                <img src=<?php echo $welcome_section['welcome-img']['url']; ?> alt=<?php echo $welcome_section['welcome-img']['alt']; ?> />
                            <?php else: ?>
                                <img src=<?php echo get_template_directory_uri() . "/assets/images/welcome-img.jpg"; ?> alt="Welcome"  />
                            <?php endif;?>
						</div>
                        <?php if(!empty($welcome_section['welcome-img-text'])):?>
						    <div class="team-title"> <?php echo $welcome_section['welcome-img-text'];?></div>
                        <?php endif;?>
					</div>
				</div>
				<div class="col-lg-7 col-md-8">
					<div class="welcome-content">
						<h4 class="optinal-h4"> <?php echo $welcome_section['welcome-mini-title']; ?></h4>
						<h1> <?php echo $welcome_section['welcome-title']; ?></h1>
						<p><?php echo $welcome_section['welcome-text']; ?></p>

                        <?php if(!empty($welcome_section['welcome-link']['title'])): ?>
						    <a href=<?php echo $welcome_section['welcome-link']['url'];?> class="btn btn-primary"><?php echo $welcome_section['welcome-link']['title'];?></a>
                        <?php endif;?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Welcome End -->

	<!-- Home Services Start -->
	<div class="home-services line-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="service-content">
						<h4 class="optinal-h4"><?php echo $home_services_section['services_title']; ?></h4>
						<h1><?php echo $home_services_section['services_name']; ?></h1>
						<p><?php echo $home_services_section['services_text']; ?></p>
						<?php if(!empty($home_services_section['services_link'])): ?>
							<a href=<?php echo $home_services_section['services_link']['url']; ?> class="btn btn-primary"><?php echo $home_services_section['services_link']['title']; ?></a>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="d-none d-lg-block">
						<div class="service-owl owl-carousel owl-theme">
							<div class="item">
								<div class="row">
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<?php if(!empty($home_services_section['services_slide_image_1'])): ?>
													<img src=<?php echo $home_services_section['services_slide_image_1']['url']; ?> alt=<?php echo $home_services_section['services_slide_image_1']['alt']; ?> />
												<?php else: ?>
													<img src=<?php echo get_template_directory_uri() . "/assets/images/service-img1.jpg" ?> alt="Service" />
												<?php endif; ?>
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-dental"></span>
													</div>
													<div class="service-title"><?php echo $home_services_section['service_slide_title_1']; ?></div>

													<?php if(!empty($home_services_section['service_slide_link_1'])): ?>
														<a class="learn-more" href=<?php echo $home_services_section['service_slide_link_1']['url']; ?>><?php echo $home_services_section['service_slide_link_1']['title']; ?> 
														<span class="icon-arrow-right"></span></a>
													<?php endif; ?>

												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<?php if(!empty($home_services_section['services_slide_image_2'])): ?>
													<img src=<?php echo $home_services_section['services_slide_image_2']['url']; ?> alt=<?php echo $home_services_section['services_slide_image_2']['alt']; ?> />
												<?php else: ?>
													<img src=<?php echo get_template_directory_uri() . "/assets/images/service-img2.jpg" ?> alt="Service" />
												<?php endif; ?>
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-dental"></span>
													</div>
													<div class="service-title"><?php echo $home_services_section['service_slide_title_2']; ?></div>
													
													<?php if(!empty($home_services_section['service_slide_link_2'])): ?>
														<a class="learn-more" href=<?php echo $home_services_section['service_slide_link_2']['url']; ?>><?php echo $home_services_section['service_slide_link_2']['title']; ?> 
														<span class="icon-arrow-right"></span></a>
													<?php endif; ?>

												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<?php if(!empty($home_services_section['services_slide_image_3'])): ?>
													<img src=<?php echo $home_services_section['services_slide_image_3']['url']; ?> alt=<?php echo $home_services_section['services_slide_image_3']['alt']; ?> />
												<?php else: ?>
													<img src=<?php echo get_template_directory_uri() . "/assets/images/service-img3.jpg" ?> alt="Service" />
												<?php endif; ?>
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-dental"></span>
													</div>
													<div class="service-title"><?php echo $home_services_section['service_slide_title_3']; ?></div>
													
													<?php if(!empty($home_services_section['service_slide_link_3'])): ?>
														<a class="learn-more" href=<?php echo $home_services_section['service_slide_link_3']['url']; ?>><?php echo $home_services_section['service_slide_link_3']['title']; ?> 
														<span class="icon-arrow-right"></span></a>
													<?php endif; ?>

												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="service-box">
											<div class="service-image">
												<?php if(!empty($home_services_section['services_slide_image_4'])): ?>
													<img src=<?php echo $home_services_section['services_slide_image_4']['url']; ?> alt=<?php echo $home_services_section['services_slide_image_4']['alt']; ?> />
												<?php else: ?>
													<img src=<?php echo get_template_directory_uri() . "/assets/images/service-img4.jpg" ?> alt="Service" />
												<?php endif; ?>
											</div>
											<div class="service-info">
												<div class="service-inner">
													<div class="service-icon comman-icon">
														<span class="icon-dental"></span>
													</div>
													<div class="service-title"><?php echo $home_services_section['service_slide_title_4']; ?></div>
													
													<?php if(!empty($home_services_section['service_slide_link_4'])): ?>
														<a class="learn-more" href=<?php echo $home_services_section['service_slide_link_4']['url']; ?>><?php echo $home_services_section['service_slide_link_4']['title']; ?> 
														<span class="icon-arrow-right"></span></a>
													<?php endif; ?>

												</div>
											</div>
										</div>
									</div> 
								</div>
							</div>
							<?php if((!empty($home_services_section['services_slide_image_5'])) || (!empty($home_services_section['services_slide_image_6'])) || (!empty($home_services_section['services_slide_image_7'])) || (!empty($home_services_section['services_slide_image_8']))): ?>
								<div class="item">
									<div class="row">
										<?php if(!empty($home_services_section['services_slide_image_5'])): ?>
											<div class="col-md-6">
												<div class="service-box">
													<div class="service-image">
														<img src=<?php echo $home_services_section['services_slide_image_5']['url']; ?> alt=<?php echo $home_services_section['services_slide_image_5']['alt']; ?> />
													</div>
													<div class="service-info">
														<div class="service-inner">
															<div class="service-icon comman-icon">
																<span class="icon-dental"></span>
															</div>
															<div class="service-title"><?php echo $home_services_section['service_slide_title_5']; ?></div>

															<?php if(!empty($home_services_section['service_slide_link_5'])): ?>
																<a class="learn-more" href=<?php echo $home_services_section['service_slide_link_5']['url']; ?>><?php echo $home_services_section['service_slide_link_5']['title']; ?> 
																<span class="icon-arrow-right"></span></a>
															<?php endif; ?>

														</div>
													</div>
												</div>
											</div>
										<?php endif; ?>
										
										<?php if(!empty($home_services_section['services_slide_image_6'])): ?>
											<div class="col-md-6">
												<div class="service-box">
													<div class="service-image">
														<img src=<?php echo $home_services_section['services_slide_image_6']['url']; ?> alt=<?php echo $home_services_section['services_slide_image_6']['alt']; ?> />
													</div>
													<div class="service-info">
														<div class="service-inner">
															<div class="service-icon comman-icon">
																<span class="icon-dental"></span>
															</div>
															<div class="service-title"><?php echo $home_services_section['service_slide_title_6']; ?></div>

															<?php if(!empty($home_services_section['service_slide_link_6'])): ?>
																<a class="learn-more" href=<?php echo $home_services_section['service_slide_link_6']['url']; ?>><?php echo $home_services_section['service_slide_link_6']['title']; ?> 
																<span class="icon-arrow-right"></span></a>
															<?php endif; ?>

														</div>
													</div>
												</div>
											</div>
										<?php endif; ?>
										
										<?php if(!empty($home_services_section['services_slide_image_7'])): ?>
											<div class="col-md-6">
												<div class="service-box">
													<div class="service-image">
														<img src=<?php echo $home_services_section['services_slide_image_7']['url']; ?> alt=<?php echo $home_services_section['services_slide_image_7']['alt']; ?> />
													</div>
													<div class="service-info">
														<div class="service-inner">
															<div class="service-icon comman-icon">
																<span class="icon-dental"></span>
															</div>
															<div class="service-title"><?php echo $home_services_section['service_slide_title_7']; ?></div>

															<?php if(!empty($home_services_section['service_slide_link_7'])): ?>
																<a class="learn-more" href=<?php echo $home_services_section['service_slide_link_7']['url']; ?>><?php echo $home_services_section['service_slide_link_7']['title']; ?> 
																<span class="icon-arrow-right"></span></a>
															<?php endif; ?>

														</div>
													</div>
												</div>
											</div>
										<?php endif; ?>
										
										<?php if(!empty($home_services_section['services_slide_image_8'])): ?>
											<div class="col-md-6">
												<div class="service-box">
													<div class="service-image">
														<img src=<?php echo $home_services_section['services_slide_image_8']['url']; ?> alt=<?php echo $home_services_section['services_slide_image_8']['alt']; ?> />
													</div>
													<div class="service-info">
														<div class="service-inner">
															<div class="service-icon comman-icon">
																<span class="icon-dental"></span>
															</div>
															<div class="service-title"><?php echo $home_services_section['service_slide_title_8']; ?></div>

															<?php if(!empty($home_services_section['service_slide_link_8'])): ?>
																<a class="learn-more" href=<?php echo $home_services_section['service_slide_link_8']['url']; ?>><?php echo $home_services_section['service_slide_link_8']['title']; ?> 
																<span class="icon-arrow-right"></span></a>
															<?php endif; ?>

														</div>
													</div>
												</div>
											</div>
										<?php endif; ?>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="d-lg-none">
						<div class="service-owl owl-carousel owl-theme">
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src=<?php echo get_template_directory_uri() . "/assets/images/service-img1.jpg" ?> alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-dental"></span>
											</div>
											<div class="service-title">Dental Cleaning</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src=<?php echo get_template_directory_uri() . "/assets/images/service-img2.jpg" ?> alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-heart-paw"></span>
											</div>
											<div class="service-title">Wellness Plans</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src=<?php echo get_template_directory_uri() . "/assets/images/service-img3.jpg" ?> alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-vaccines"></span>
											</div>
											<div class="service-title">Vaccinations & Immunizations</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src=<?php echo get_template_directory_uri() . "/assets/images/service-img4.jpg" ?> alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-exotic-care"></span>
											</div>
											<div class="service-title">Exotic Pet Care</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src=<?php echo get_template_directory_uri() . "/assets/images/service-img1.jpg" ?> alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-dental"></span>
											</div>
											<div class="service-title">Dental Cleaning</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src=<?php echo get_template_directory_uri() . "/assets/images/service-img2.jpg" ?> alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-heart-paw"></span>
											</div>
											<div class="service-title">Wellness Plans</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src=<?php echo get_template_directory_uri() . "/assets/images/service-img3.jpg" ?> alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-vaccines"></span>
											</div>
											<div class="service-title">Vaccinations & Immunizations</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="service-box">
									<div class="service-image">
										<img src=<?php echo get_template_directory_uri() . "/assets/images/service-img4.jpg" ?> alt="Service" />
									</div>
									<div class="service-info">
										<div class="service-inner">
											<div class="service-icon comman-icon">
												<span class="icon-exotic-care"></span>
											</div>
											<div class="service-title">Exotic Pet Care</div>
											<a class="learn-more" href="#">learn more <span
													class="icon-arrow-right"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Home Services End -->
	<!-- Home Team Start -->
	<div class="home-team">
		<div class="team-banner">
			<div class="banner-image">
                <?php if(!empty($our_team_section['team_background_pic'])):?>  
                    <img src=<?php echo $our_team_section['team_background_pic']['url']; ?> alt=<?php echo $our_team_section['team_background_pic']['alt']; ?> />
                <?php else: ?>
				    <img src=<?php echo get_template_directory_uri() . "/assets/images/team-banner.jpg" ?> alt="Team" />
                <?php endif; ?>
			</div>
		</div>
		<div class="team-content">
			<div class="container">
				<div class="team-wrap">
                    
					<h4 class="optinal-h4"><?php echo $our_team_section['team_name'];?></h4>
					<h1><?php echo $our_team_section['team_title'];?></h1>

					<div class="row">
						<div class="col-md-4">
							<div class="team-box">
								<div class="team-image">
                                    
                                    <?php if(!empty($our_team_section['member_image_1'])):?> 
                                        <img src=<?php echo $our_team_section['member_image_1']['url']; ?> alt=<?php echo $our_team_section['member_image_1']['alt'];?> />
                                    <?php else:?>                                    
									    <img src=<?php echo get_template_directory_uri() . "/assets/images/team-img1.jpg" ?> alt="Team" />
                                    <?php endif; ?>

									<div class="team-hover">
										<div class="team-h-inner">
											<div class="comman-icon">
												<span class="icon-cross-paw"></span>
											</div>
											<div class="more-div">

                                                <?php if(!empty($our_team_section['member_link_1'])):?> 
												<a class="learn-more yellow-link" href=<?php echo $our_team_section['member_link_1']['url']?>><?php echo $our_team_section['member_link_1']['title'];?> <span class="icon-arrow-right"></span></a>
                                                <?php endif; ?>

											</div>
										</div>
									</div>
								</div>
								<div class="team-title">
									<?php echo $our_team_section['member_name_1']?>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="team-box">
								<div class="team-image">
                                    
                                    <?php if(!empty($our_team_section['member_image_2'])):?> 
                                        <img src=<?php echo $our_team_section['member_image_2']['url']; ?> alt=<?php echo $our_team_section['member_image_2']['alt'];?> />
                                    <?php else:?>                                    
									    <img src=<?php echo get_template_directory_uri() . "/assets/images/team-img2.jpg" ?> alt="Team" />
                                    <?php endif; ?>

									<div class="team-hover">
										<div class="team-h-inner">
											<div class="comman-icon">
												<span class="icon-cross-paw"></span>
											</div>
											<div class="more-div">

                                                <?php if(!empty($our_team_section['member_link_2'])):?> 
												<a class="learn-more yellow-link" href=<?php echo $our_team_section['member_link_2']['url']?>><?php echo $our_team_section['member_link_2']['title'];?> <span class="icon-arrow-right"></span></a>
                                                <?php endif; ?>

											</div>
										</div>
									</div>
								</div>
								<div class="team-title">
									<?php echo $our_team_section['member_name_2']?>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="team-box">
								<div class="team-image">
                                    
                                    <?php if(!empty($our_team_section['member_image_3'])):?> 
                                        <img src=<?php echo $our_team_section['member_image_3']['url']; ?> alt=<?php echo $our_team_section['member_image_3']['alt'];?> />
                                    <?php else:?>                                    
									    <img src=<?php echo get_template_directory_uri() . "/assets/images/team-img3.jpg" ?> alt="Team" />
                                    <?php endif; ?>

									<div class="team-hover">
										<div class="team-h-inner">
											<div class="comman-icon">
												<span class="icon-cross-paw"></span>
											</div>
											<div class="more-div">

                                                <?php if(!empty($our_team_section['member_link_3'])):?> 
												<a class="learn-more yellow-link" href=<?php echo $our_team_section['member_link_3']['url']?>><?php echo $our_team_section['member_link_3']['title'];?> <span class="icon-arrow-right"></span></a>
                                                <?php endif; ?>

											</div>
										</div>
									</div>
								</div>
								<div class="team-title">
									<?php echo $our_team_section['member_name_3']?>
								</div>
							</div>
						</div>
					</div>
					<div class="meet-button">
                        <?php if(!empty($our_team_section['team_link'])):?> 
						    <a href=<?php echo $our_team_section['team_link']['url']?> class="btn btn-secondary"><?php echo $our_team_section['team_link']['title']?></a>
                        <?php endif; ?>
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
						<h4 class="optinal-h4"><?php echo $exotic_care_section['exotic_name'];?></h4>
						<h1><?php echo $exotic_care_section['exotic_title'];?></h1>
						<p><?php echo $exotic_care_section['exotic_text'];?></p>
					</div>
					<div class="col-lg-5">
						<div class="exotic-images">
							<div class="exotic-image1 team-box">
								<div class="team-image">

                                    <?php if(!empty($exotic_care_section['exotic_image_1'])):?>    
									    <img src=<?php echo $exotic_care_section['exotic_image_1']['url']; ?> alt=<?php echo $exotic_care_section['exotic_image_1']['alt']; ?> />
                                    <?php else:?>                                    
									    <img src=<?php echo get_template_directory_uri() . "/assets/images/exotic-img1.jpg" ?> alt="Exotic" />
                                    <?php endif; ?>

								</div>

                                <?php if(!empty($exotic_care_section['exotic_image_text_1'])):?>    
								    <div class="team-title"><?php echo $exotic_care_section['exotic_image_text_1'];?></div>
                                <?php endif; ?>
                                
							</div>
							<div class="exotic-image2 team-box">
								<div class="team-image">

                                    <?php if(!empty($exotic_care_section['exotic_image_2'])):?>    
									    <img src=<?php echo $exotic_care_section['exotic_image_2']['url']; ?> alt=<?php echo $exotic_care_section['exotic_image_2']['alt']; ?> />
                                    <?php else:?>                                    
									    <img src=<?php echo get_template_directory_uri() . "/assets/images/exotic-img2.jpg" ?> alt="Exotic" />
                                    <?php endif; ?>
                                    
								</div>

                                <?php if(!empty($exotic_care_section['exotic_image_text_1'])):?>    
								    <div class="team-title"><?php echo $exotic_care_section['exotic_image_text_1'];?></div>
                                <?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Exotic Care End -->

	<!-- Fun Fact Start -->
	<div class="fun-fact line-bg">
		<div class="container">
			<div class="fun-friday">
			<?php echo $fun_fact_section['fun_title']; ?>
				<span class="friday-label"><?php echo $fun_fact_section['fun_title_day']; ?></span>
			</div>
			<div class="fun-fact-owl owl-carousel">
				<div class="item">
					<div class="fun-image">

						<?php if(!empty($fun_fact_section['fun_image_1'])): ?>
							<img src=<?php echo $fun_fact_section['fun_image_1']['url']; ?> alt=<?php echo $fun_fact_section['fun_image_1']['alt']; ?>>
						<?php else: ?>
							<img src=<?php echo get_template_directory_uri() . "/assets/images/video-image1.jpg" ?> alt="Video">
						<?php endif; ?>

						<a class="play-icon icon-youtube" href=<?php echo $fun_fact_section['fun_youtube_link_1']; ?>></a>
					</div>
					<div class="fun-content">
						<p><?php echo $fun_fact_section['fun_content_1']; ?></p>

						<?php if(!empty($fun_fact_section['fun_link_1'])): ?>
							<a class="btn btn-primary" href=<?php echo $fun_fact_section['fun_link_1']['url']; ?>><?php echo $fun_fact_section['fun_link_1']['title']; ?></a>
						<?php endif; ?>
					</div>
				</div>
				<div class="item">
					<div class="fun-image">

						<?php if(!empty($fun_fact_section['fun_image_2'])): ?>
							<img src=<?php echo $fun_fact_section['fun_image_2']['url']; ?> alt=<?php echo $fun_fact_section['fun_image_2']['alt']; ?>>
						<?php else: ?>
							<img src=<?php echo get_template_directory_uri() . "/assets/images/video-image2.jpg" ?> alt="Video">
						<?php endif; ?>

						<a class="play-icon icon-youtube" href=<?php echo $fun_fact_section['fun_youtube_link_2']; ?>></a>
					</div>
					<div class="fun-content">
						<p><?php echo $fun_fact_section['fun_content_2']; ?></p>

						<?php if(!empty($fun_fact_section['fun_link_2'])): ?>
							<a class="btn btn-primary" href=<?php echo $fun_fact_section['fun_link_2']['url']; ?>><?php echo $fun_fact_section['fun_link_2']['title']; ?></a>
						<?php endif; ?>
					</div>
				</div>
				<div class="item">
					<div class="fun-image">

						<?php if(!empty($fun_fact_section['fun_image_3'])): ?>
							<img src=<?php echo $fun_fact_section['fun_image_3']['url']; ?> alt=<?php echo $fun_fact_section['fun_image_3']['alt']; ?>>
						<?php else: ?>
							<img src=<?php echo get_template_directory_uri() . "/assets/images/video-image3.jpg" ?> alt="Video">
						<?php endif; ?>

						<a class="play-icon icon-youtube" href=<?php echo $fun_fact_section['fun_youtube_link_3']; ?>></a>
					</div>
					<div class="fun-content">
						<p><?php echo $fun_fact_section['fun_content_3']; ?></p>

						<?php if(!empty($fun_fact_section['fun_link_3'])): ?>
							<a class="btn btn-primary" href=<?php echo $fun_fact_section['fun_link_3']['url']; ?>><?php echo $fun_fact_section['fun_link_3']['title']; ?></a>
						<?php endif; ?>
					</div>
				</div>
				<div class="item">
					<div class="fun-image">

						<?php if(!empty($fun_fact_section['fun_image_4'])): ?>
							<img src=<?php echo $fun_fact_section['fun_image_4']['url']; ?> alt=<?php echo $fun_fact_section['fun_image_4']['alt']; ?>>
						<?php else: ?>
							<img src=<?php echo get_template_directory_uri() . "/assets/images/video-image4.jpg" ?> alt="Video">
						<?php endif; ?>

						<a class="play-icon icon-youtube" href=<?php echo $fun_fact_section['fun_youtube_link_4']; ?>></a>
					</div>
					<div class="fun-content">
						<p><?php echo $fun_fact_section['fun_content_4']; ?></p>

						<?php if(!empty($fun_fact_section['fun_link_4'])): ?>
							<a class="btn btn-primary" href=<?php echo $fun_fact_section['fun_link_4']['url']; ?>><?php echo $fun_fact_section['fun_link_4']['title']; ?></a>
						<?php endif; ?>
					</div>
				</div> 
			</div>
		</div>
	</div>
	<!-- Fun Fact End -->

	<!-- Testi and Blog Start -->
	<div class="testi-blog">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="testimonials">
						<div class="comman-icon">
							<span class="icon-quotes"></span>
						</div>

						<h1><?php echo $testimonials_and_blog_section['testimonials_title']; ?></h1>

                        <?php if(!empty($testimonials_and_blog_section['testiominals_link'])):?>
						    <a class="btn btn-primary" href=<?php echo $testimonials_and_blog_section['testiominals_link']['url']?>><?php echo $testimonials_and_blog_section['testiominals_link']['title']?></a>
                        <?php endif; ?>

						<div class="testi-owl owl-carousel">

							<?php if(!empty($testimonials_and_blog_section['testimonials_text_1'])):?>
								<div class="item">
									<p><?php echo $testimonials_and_blog_section['testimonials_text_1']?></p>
									<b><?php echo $testimonials_and_blog_section['testimonials_author_1']?></b>
								</div>
							<?php endif; ?>

							<?php if(!empty($testimonials_and_blog_section['testimonials_text_2'])):?>
								<div class="item">
									<p><?php echo $testimonials_and_blog_section['testimonials_text_2']?></p>
									<b><?php echo $testimonials_and_blog_section['testimonials_author_2']?></b>
								</div>
							<?php endif; ?>

							<?php if(!empty($testimonials_and_blog_section['testimonials_text_3'])):?>
								<div class="item">
									<p><?php echo $testimonials_and_blog_section['testimonials_text_3']?></p>
									<b><?php echo $testimonials_and_blog_section['testimonials_author_3']?></b>
								</div>
							<?php endif; ?>

						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="home-blog">
						<div class="blog-title">
							<h4 class="optinal-h4"><?php echo $testimonials_and_blog_section['blog_name']; ?></h4>
                            
                            <?php if(!empty($testimonials_and_blog_section['blog_link_all'])):?>
							    <a class="btn btn-secondary" href=<?php echo $testimonials_and_blog_section['blog_link_all']['url']?>><?php echo $testimonials_and_blog_section['blog_link_all']['title']?></a>
                            <?php endif; ?>

						</div>
						<div class="blog-main">
							<div class="blog-image">
                                <?php if(!empty($testimonials_and_blog_section['blog_image'])):?>  
                                    <img src=<?php echo $testimonials_and_blog_section['blog_image']['url']; ?> alt=<?php echo $testimonials_and_blog_section['blog_image']['alt']; ?>>
                                <?php else:?>
								    <img src=<?php echo get_template_directory_uri() . "/assets/images/blog-image.jpg" ?> alt="Blog">
                                <?php endif; ?>
							</div>
							<div class="blog-content">
								<div class="blog-inner">
									<h4><?php echo $testimonials_and_blog_section['blog_title']; ?></h4>
									<p><?php echo $testimonials_and_blog_section['blog_content']; ?></p>
                                            
                                    <?php if(!empty($testimonials_and_blog_section['blog_link'])):?>
                                        <div class="readmore">
                                            <a class="btn btn-primary" href=<?php echo $testimonials_and_blog_section['blog_link']['url']?>><?php echo $testimonials_and_blog_section['blog_link']['title']?></a>
                                        </div>
                                    <?php endif; ?>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Testi and Blog End -->
    <?php get_footer(); ?>