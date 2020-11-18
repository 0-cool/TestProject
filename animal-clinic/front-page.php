<?php get_header(); 

//Custom Fields Groups ---> Start
    $slider_section = get_field('home_slider_section');
    $welcome_section = get_field('welcome_section');
    $our_team_section = get_field('our_team_section');
    $exotic_care_section = get_field('exotic_care_section');
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
                        <?php if(!empty($welcome_section['welcome-mini-title'])):?>
						    <h4 class="optinal-h4"> <?php echo $welcome_section['welcome-mini-title']; ?></h4>
                        <?php endif; ?>
                        
                        <?php if(!empty($welcome_section['welcome-title'])): ?>
						    <h1> <?php echo $welcome_section['welcome-title']; ?></h1>
                        <?php endif; ?>

                        <?php if(!empty($welcome_section['welcome-paragraph1'])): ?>
                            <p><?php echo $welcome_section['welcome-paragraph1']; ?></p>   
                        <?php endif;?>
                        <?php if(!empty($welcome_section['welcome-paragraph2'])): ?>
                            <p><?php echo $welcome_section['welcome-paragraph2']; ?></p>   
                        <?php endif;?>
                        <?php if(!empty($welcome_section['welcome-paragraph3'])): ?>
                            <p><?php echo $welcome_section['welcome-paragraph3']; ?></p>   
                        <?php endif; ?>

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
						<h4 class="optinal-h4">Bradenton, FL & Sarasota, FL</h4>
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
						<a href="#" class="btn btn-primary">Explore All Services</a>
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
									<div class="col-md-6">
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
									<div class="col-md-6">
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
									<div class="col-md-6">
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
							<div class="item">
								<div class="row">
									<div class="col-md-6">
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
									<div class="col-md-6">
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
									<div class="col-md-6">
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
									<div class="col-md-6">
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
                    
                    <?php if(!empty($our_team_section['team_name'])):?>        
					    <h4 class="optinal-h4"><?php echo $our_team_section['team_name'];?></h4>
                    <?php endif;?>
                    
                    <?php if(!empty($our_team_section['team_title'])):?>   
    					<h1><?php echo $our_team_section['team_title'];?></h1>
                    <?php endif;?>

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

                                    <?php if(!empty($our_team_section['member_name_1'])):?> 
									    <?php echo $our_team_section['member_name_1']?>
                                    <?php endif; ?>

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

                                    <?php if(!empty($our_team_section['member_name_2'])):?> 
									    <?php echo $our_team_section['member_name_2']?>
                                    <?php endif; ?>

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

                                    <?php if(!empty($our_team_section['member_name_3'])):?> 
									    <?php echo $our_team_section['member_name_3']?>
                                    <?php endif; ?>

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

                        <?php if(!empty($exotic_care_section['exotic_name'])):?>
						    <h4 class="optinal-h4"><?php echo $exotic_care_section['exotic_name'];?></h4>
                        <?php endif;?>

                        <?php if(!empty($exotic_care_section['exotic_title'])):?>
						    <h1><?php echo $exotic_care_section['exotic_title'];?></h1>
                        <?php endif;?>

                        <?php if(!empty($exotic_care_section['exotic_text1'])):?>
						    <p><?php echo $exotic_care_section['exotic_text1'];?></p>
                        <?php endif;?> 
                        
                        <?php if(!empty($exotic_care_section['exotic_text2'])):?>
						    <p><?php echo $exotic_care_section['exotic_text2'];?></p>
                        <?php endif;?> 
                        
                        <?php if(!empty($exotic_care_section['exotic_link'])):?>
						    <a href=<?php echo $exotic_care_section['exotic_link']['url']?> class="btn btn-primary"><?php echo $exotic_care_section['exotic_link']['title']?></a>
                        <?php endif;?> 

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
				FUN FACT
				<span class="friday-label">FRIDAY</span>
			</div>
			<div class="fun-fact-owl owl-carousel">
				<div class="item">
					<div class="fun-image">
						<img src=<?php echo get_template_directory_uri() . "/assets/images/video-image1.jpg" ?> alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div>
				<div class="item">
					<div class="fun-image">
						<img src=<?php echo get_template_directory_uri() . "/assets/images/video-image2.jpg" ?> alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div>
				<div class="item">
					<div class="fun-image">
						<img src=<?php echo get_template_directory_uri() . "/assets/images/video-image3.jpg" ?> alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
					</div>
				</div>
				<div class="item">
					<div class="fun-image">
						<img src=<?php echo get_template_directory_uri() . "/assets/images/video-image4.jpg" ?> alt="Video">
						<a class="play-icon icon-youtube" href="javascript:void(0);"></a>
					</div>
					<div class="fun-content">
						<p>This is the first of a 2 part series on the dreaded and stinky Anal Glands! What are
							they? Why do pets have them? and what can we do to help/stop the smell? Watch this and
							our second installment to learn more!
						</p>
						<a class="btn btn-primary" href="javascript:void(0);">View Our Video Library</a>
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

                        <?php if(!empty($testimonials_and_blog_section['testimonials_title'])):?>
						    <h1><?php echo $testimonials_and_blog_section['testimonials_title']; ?></h1>
                        <?php endif; ?>

                        <?php if(!empty($testimonials_and_blog_section['testiominals_link'])):?>
						    <a class="btn btn-primary" href=<?php echo $testimonials_and_blog_section['testiominals_link']['url']?>><?php echo $testimonials_and_blog_section['testiominals_link']['title']?></a>
                        <?php endif; ?>

						<div class="testi-owl owl-carousel">
							<div class="item">
                            
                                <?php if(!empty($testimonials_and_blog_section['testimonials_text_1'])):?>
                                    <p><?php echo $testimonials_and_blog_section['testimonials_text_1']?></p>
                                <?php endif; ?>
                                
                                <?php if(!empty($testimonials_and_blog_section['testimonials_author_1'])):?>
								    <b><?php echo $testimonials_and_blog_section['testimonials_author_1']?></b>
                                <?php endif;?>

							</div>
							<div class="item">
                            
                                <?php if(!empty($testimonials_and_blog_section['testimonials_text_2'])):?>
                                    <p><?php echo $testimonials_and_blog_section['testimonials_text_2']?></p>
                                <?php endif; ?>
                                
                                <?php if(!empty($testimonials_and_blog_section['testimonials_author_2'])):?>
								    <b><?php echo $testimonials_and_blog_section['testimonials_author_2']?></b>
                                <?php endif;?>
                                
							</div>
                            <div class="item">
                            
                                <?php if(!empty($testimonials_and_blog_section['testimonials_text_3'])):?>
                                    <p><?php echo $testimonials_and_blog_section['testimonials_text_3']?></p>
                                <?php endif; ?>
                                
                                <?php if(!empty($testimonials_and_blog_section['testimonials_author_3'])):?>
								    <b><?php echo $testimonials_and_blog_section['testimonials_author_3']?></b>
                                <?php endif;?>
                                
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="home-blog">
						<div class="blog-title">

                            <?php if(!empty($testimonials_and_blog_section['blog_name'])):?>
							    <h4 class="optinal-h4"><?php echo $testimonials_and_blog_section['blog_name']; ?></h4>
                            <?php endif; ?>
                            
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
                                    
                                    <?php if(!empty($testimonials_and_blog_section['blog_title'])):?>
									    <h4><?php echo $testimonials_and_blog_section['blog_title']; ?></h4>
                                    <?php endif; ?>

                                    <?php if(!empty($testimonials_and_blog_section['blog_content'])):?>
									    <p><?php echo $testimonials_and_blog_section['blog_content']; ?></p>
                                    <?php endif; ?>
                                            
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