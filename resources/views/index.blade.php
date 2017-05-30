<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>
		<title>Saul Attorneys</title>
		@include('layouts/IncludeLayout')
	</head>

	<body class="home">
		@include('layouts/HeaderLayout')
		<div id="start-screen">
			<ul class="hero-slider autoplay">
				<li class="selected" style="background-image: url(../img/slider_img/1.jpg);">
					<div class="full-width">
						<div class="container">
							<div class="v-align">
								<div>
									<h2>De jure-De facto...</h2>

									<a class="custom-btn medium light-color" href="#" data-text="Discover"><span>Discover</span></a>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="bg-video" style="background-image: url(../img/slider_img/2.jpg);">
					<div class="full-width">
						<div class="container">
							<div class="v-align">
								<div>
									<h2>Better call Saul!</h2>

									<a class="custom-btn medium light-color" href="#" data-text="CAll now!"><span>CAll now!</span></a>
								</div>
							</div>
						</div>
					</div> <!-- .cd-full-width -->

					<div class="bg-video-wrapper" data-video="assets/video/video">
						<!-- video element will be loaded using jQuery -->
					</div> <!-- .cd-bg-video-wrapper -->
				</li>

				<li style="background-image: url(../img/slider_img/3.jpg);">
					<div class="full-width">
						<div class="container">
							<div class="v-align">
								<div>
									<h2>Saul’s Attorneys</h2>

									<p>
										There are many variations of passages of Lorem Ipsum available, but the majority have<br /> suffered alteration in some form, by injected humour, or randomised words which don't look
									</p>

									<a class="custom-btn medium light-color" href="#" data-text="CAll now!"><span>CAll now!</span></a>
								</div>
							</div>
						</div>
					</div> <!-- .cd-full-width -->
				</li>
			</ul>

			<div class="slider-nav">
				<nav>
					<ul class="clearfix horizontal">
						<li class="selected"><a href="#0">1</a></li>
						<li><a href="#0">2</a></li>
						<li><a href="#0">3</a></li>
					</ul>
				</nav>
			</div>

			<link href='https://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>

			<style type="text/css">
				#start-screen
				{
					height: 500px;
				}

				.hero-slider li:first-of-type h2
				{
					font-size: 40px;
					font-weight: 400;
				}

				.hero-slider li:nth-of-type(2) h2
				{
					font-size: 50px;
					font-family: 'Dancing Script', cursive;
					font-weight: 400;
				}

				.hero-slider li:nth-of-type(3) h2
				{
					font-size: 50px;
					font-family: 'Dancing Script', cursive;
				}

				.slider-nav
				{
					top: 15px;
					right: 15px;
				}

				@media only screen and (min-width: 1200px)
				{
					#start-screen
					{
						margin-left: 50px;
						margin-right: 50px;
					}

					.hero-slider li:first-of-type h2
					{
						font-size: 60px;
						margin-bottom: 40px;
					}

					.hero-slider li:nth-of-type(2) h2
					{
						font-size: 100px;
					}

					.hero-slider li:nth-of-type(3) h2
					{
						font-size: 90px;
					}
				}

				@media only screen and (min-width: 992px) and (max-width: 1199px)
				{
					#start-screen
					{
						margin-left: 35px;
						margin-right: 35px;
					}

					.hero-slider li:first-of-type h2
					{
						font-size: 60px;
						margin-bottom: 40px;
					}
					.hero-slider li:nth-of-type(2) h2
					{
						font-size: 80px;
					}

					.hero-slider li:nth-of-type(3) h2
					{
						font-size: 75px;
					}
				}

				@media only screen and (min-width: 768px) and (max-width: 991px)
				{
					#start-screen
					{
						margin-left: 20px;
						margin-right: 20px;
					}

					.hero-slider li:first-of-type h2
					{
						font-size: 50px;
					}

					.hero-slider li:nth-of-type(2) h2
					{
						font-size: 60px;
					}

					.hero-slider li:nth-of-type(3) h2
					{
						font-size: 60px;
					}
				}

				@media only screen and (min-width: 481px)
				{
					#start-screen
					{
						height: 600px;
					}

					.hero-slider li:nth-of-type(2)
					{
						text-align: left;
					}
				}
			</style>

			<script type="text/javascript">
				(function()
				{
					var oInterval = setInterval(function ()
					{
						if (typeof window.jQuery !== 'undefined')
						{
							clearInterval(oInterval);

							jQuery(document).ready(function($){
								var slidesWrapper = $('.hero-slider');

								//check if a .hero-slider exists in the DOM
								if ( slidesWrapper.length > 0 ) {
									var sliderNav = $('.slider-nav'),
										slidesNumber = slidesWrapper.children('li').length,
										visibleSlidePosition = 0,
										autoPlayId,
										autoPlayDelay = 8000;

									//upload videos (if not on mobile devices)
									uploadVideo(slidesWrapper);

									//autoplay slider
									setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);

									//change visible slide
									sliderNav.on('click', 'li', function(event){
										event.preventDefault();
										var selectedItem = $(this);
										if(!selectedItem.hasClass('selected')) {
											// if it's not already selected
											var selectedPosition = selectedItem.index(),
												activePosition = slidesWrapper.find('li.selected').index();

											if( activePosition < selectedPosition) {
												nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, selectedPosition);
											} else {
												prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, selectedPosition);
											}

											//this is used for the autoplay
											visibleSlidePosition = selectedPosition;

											updateSliderNavigation(sliderNav, selectedPosition);
											//reset autoplay
											setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);
										}
									});
								}

								function nextSlide(visibleSlide, container, pagination, n){
									visibleSlide.removeClass('selected from-left from-right').addClass('is-moving').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
										visibleSlide.removeClass('is-moving');
									});

									container.children('li').eq(n).addClass('selected from-right').prevAll().addClass('move-left');
									checkVideo(visibleSlide, container, n);
								}

								function prevSlide(visibleSlide, container, pagination, n){
									visibleSlide.removeClass('selected from-left from-right').addClass('is-moving').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
										visibleSlide.removeClass('is-moving');
									});

									container.children('li').eq(n).addClass('selected from-left').removeClass('move-left').nextAll().removeClass('move-left');
									checkVideo(visibleSlide, container, n);
								}

								function updateSliderNavigation(pagination, n) {
									var navigationDot = pagination.find('.selected');
									navigationDot.removeClass('selected');
									pagination.find('li').eq(n).addClass('selected');
								}

								function setAutoplay(wrapper, length, delay) {
									if(wrapper.hasClass('autoplay')) {
										clearInterval(autoPlayId);
										autoPlayId = window.setInterval(function(){autoplaySlider(length)}, delay);
									}
								}

								function autoplaySlider(length) {
									if( visibleSlidePosition < length - 1) {
										nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, visibleSlidePosition + 1);
										visibleSlidePosition +=1;
									} else {
										prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, 0);
										visibleSlidePosition = 0;
									}
									updateSliderNavigation(sliderNav, visibleSlidePosition);
								}

								function uploadVideo(container) {
									container.find('.bg-video-wrapper').each(function(){
										var videoWrapper = $(this);
										if( videoWrapper.is(':visible') ) {
											// if visible - we are not on a mobile device
											var	videoUrl = videoWrapper.data('video'),
												video = $('<video loop><source src="'+videoUrl+'.mp4" type="video/mp4" /><source src="'+videoUrl+'.webm" type="video/webm" /></video>');
											video.appendTo(videoWrapper);
											// play video if first slide
											if(videoWrapper.parent('.bg-video.selected').length > 0) video.get(0).play();
										}
									});
								}

								function checkVideo(hiddenSlide, container, n) {
									//check if a video outside the viewport is playing - if yes, pause it
									var hiddenVideo = hiddenSlide.find('video');
									if( hiddenVideo.length > 0 ) hiddenVideo.get(0).pause();

									//check if the select slide contains a video element - if yes, play the video
									var visibleVideo = container.children('li').eq(n).find('video');
									if( visibleVideo.length > 0 ) visibleVideo.get(0).play();
								}
							});
						}
					}, 500);
				})();
			</script>
		</div>

		<main role="main">
			<section class="section transparent" style="padding-top:60px;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-3">
							<div class="col-md-MB-30">
								<h2>Saul’s Team Services</h2>

								<p>
									There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
								</p>

								<a class="custom-btn medium dark-color" href="#" data-text="Details"><span>Details</span></a>
							</div>
						</div>

						<div class="col-xs-12 col-md-9">
							<div class="col-md-MB-30">
								<div class="services-container services-style-4">
									<div class="services-container--inner">
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<div class="service-item center-block">
													<i class="ico ico-2"></i>

													<div class="inner">
														<h3 class="title">Justice</h3>

														<p>
															There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
														</p>
													</div>
												</div>
											</div>

											<div class="col-xs-12 col-sm-6">
												<div class="service-item center-block">
													<i class="ico ico-3"></i>

													<div class="inner">
														<h3 class="title">Legislation</h3>

														<p>
															Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it
														</p>
													</div>
												</div>
											</div>

											<div class="col-xs-12 col-sm-6">
												<div class="service-item center-block">
													<i class="ico ico-5"></i>

													<div class="inner">
														<h3 class="title">Criminal Law</h3>

														<p>
															It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using
														</p>
													</div>
												</div>
											</div>

											<div class="col-xs-12 col-sm-6">
												<div class="service-item center-block">
													<i class="ico ico-6"></i>

													<div class="inner">
														<h3 class="title">Independent Judges</h3>

														<p>
															The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de
														</p>
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
			</section>

			<section class="section transparent">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-7">
							<div class="col-md-MB-30">
								<h2>Some Fun Facts</h2>

								<p style="font-size:15px;font-family: Rufina,serif;color:#9b9b9b">
									The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also
								</p>

								<div class="counters-container counters-style-1">
									<div class="counters-container--inner">
										<div class="counter-item">
											<span class="count" data-from="0" data-to="500" data-after="+"></span>
											<h4 class="count-details">Happy Clients</h4>
										</div>

										<div class="counter-item">
											<span class="count" data-from="0" data-to="200" data-after="+"></span>
											<h4 class="count-details">Successfuly Cases</h4>
										</div>

										<div class="counter-item">
											<span class="count" data-from="0" data-to="1000" data-after="+"></span>
											<h4 class="count-details">Lawsuits</h4>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-5">
							<div class="col-md-MB-30">
								<h2>We are in Your Life</h2>

								<p>
									<strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </strong>
								</p>

								<p>
									If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="special-section matchHeight-container clearfix">
				<div class="col-xs-12 col-md-6">
					<div class="item first text matchHeight-item" data-mh="items-a">
						<div class="outer v-align">
							<div class="inner">
								<div class="feedback-bxslider-container bxslider-container">
									<ul class="bxslider" data-mode="fade" data-slidewidth="970" data-slidemargin="20" data-speed="300" data-auto="false" data-adaptiveheight="true" data-pager="false" data-prevselector="#feedback-slide-prev-3" data-nextselector="#feedback-slide-next-3">
										<li class="slide">
											<div class="text">
												<p>
													Some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet
												</p>
											</div>

											<div class="author">
												<div class="b-table">
													<div class="cell v-middle">
														<img class="circled" src="../img/users_photos/1.png" height="84" width="84" alt="demo" />
													</div>

													<div class="cell v-middle">
														<h3 class="name">Ann Gilbert</h3>

														<h5 class="position">CEO / Vice president</h5>
													</div>
												</div>
											</div>
										</li>

										<li class="slide">
											<div class="text">
												<p>
													2 Some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet to repeat predefined chunks as necessary, making this the first true generator on the Internet
												</p>
											</div>

											<div class="author">
												<div class="b-table">
													<div class="cell v-middle">
														<img class="circled" src="../img/users_photos/2.png" height="84" width="84" alt="demo" />
													</div>

													<div class="cell v-middle">
														<h3 class="name">Andrew Dowson</h3>

														<h5 class="position">Art Directoar</h5>
													</div>
												</div>
											</div>
										</li>

										<li class="slide">
											<div class="text">
												<p>
													3 Some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
												</p>
											</div>

											<div class="author">
												<div class="b-table">
													<div class="cell v-middle">
														<img class="circled" src="../img/users_photos/3.png" height="84" width="84" alt="demo" />
													</div>

													<div class="cell v-middle">
														<h3 class="name">John Smith</h3>

														<h5 class="position">Art Directoar</h5>
													</div>
												</div>
											</div>
										</li>
									</ul>

									<div class="control-wrp">
										<span id="feedback-slide-prev-3" class="control-btn control-btn-style-3 prev-btn icon-left"></span>
										<span id="feedback-slide-next-3" class="control-btn control-btn-style-3 next-btn icon-right"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-6">
					<div class="item second matchHeight-item" data-mh="items-a">
						<div class="b-about" style="background-image: url(../img/bg/1.jpg);">
							<div class="pattern"></div>

							<div class="outer v-align">
								<div class="inner">
									<p><img src="../img/logo_2.png" alt="logo" /></p>

									<a class="custom-btn medium light-color" href="#" data-text="About Us"><span>About Us</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="section transparent">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8">
							<h2>Saul’s Team Attorneys</h2>

							<div class="col-md-MB-20">
								<div class="row">
									<div class="col-xs-12 col-sm-2">
										<div class="col-md-MB-30">
											<img class="img-responsive hidden-xs center-block" src="../img/img_3.png" alt="demo" >
											<img class="img-responsive visible-xs" src="../img/img_3.png" alt="demo" >
										</div>
									</div>

									<div class="col-xs-12 col-sm-10">
										<div class="col-md-MB-30">
											<p>
												<strong>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend</strong>
											</p>

											<p>
												Here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-4">
							<div class="col-md-MB-30">
								<h2>Professionalism</h2>

								<p>
									<strong>All the Lorem Ipsum generators on the Internet tend to repeat Predefined chunks as necessary</strong>
								</p>

								<p>
									Making this the first true generator on Here are many variations of passages of Lorem Ipsum available
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="section transparent">
				<div class="container">
					<div class="team-container team-four-columns team-style-2">
						<div class="team-container--inner">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<div class="team-item center-block">
										<div class="inner">
											<figure class="img-wrap">
												<img src="../img/team_img/4_col/1.jpg" alt="demo" />
											</figure>

											<div class="description">
												<div class="description--inner">
													<p>
														If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true ge
													</p>

													<div class="social-btns style-1">
														<a class="icon-facebook" href="#" target="_blank"></a>
														<a class="icon-twitter" href="#" target="_blank"></a>
														<a class="icon-linkedin" href="#" target="_blank"></a>
														<a class="icon-youtube-play" href="#" target="_blank"></a>
													</div>
												</div>
											</div>
										</div>

										<h3 class="name"><a href="team_single.html">William Angler</a></h3>

										<h5 class="position">PARTNER / CRIMINAL LAWYER</h5>
									</div>
								</div>

								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<div class="team-item center-block">
										<div class="inner">
											<figure class="img-wrap">
												<img src="../img/team_img/4_col/2.jpg" alt="demo" />
											</figure>

											<div class="description">
												<div class="description--inner">
													<p>
														If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true ge
													</p>

													<div class="social-btns style-1">
														<a class="icon-facebook" href="#" target="_blank"></a>
														<a class="icon-twitter" href="#" target="_blank"></a>
														<a class="icon-linkedin" href="#" target="_blank"></a>
														<a class="icon-youtube-play" href="#" target="_blank"></a>
													</div>
												</div>
											</div>
										</div>

										<h3 class="name"><a href="team_single.html">Andrew Phillips</a></h3>

										<h5 class="position">Business Lawyer</h5>
									</div>
								</div>

								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<div class="team-item center-block">
										<div class="inner">
											<figure class="img-wrap">
												<img src="../img/team_img/4_col/3.jpg" alt="demo" />
											</figure>

											<div class="description">
												<div class="description--inner">
													<p>
														If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true ge
													</p>

													<div class="social-btns style-1">
														<a class="icon-facebook" href="#" target="_blank"></a>
														<a class="icon-twitter" href="#" target="_blank"></a>
														<a class="icon-linkedin" href="#" target="_blank"></a>
														<a class="icon-youtube-play" href="#" target="_blank"></a>
													</div>
												</div>
											</div>
										</div>

										<h3 class="name"><a href="team_single.html">Billy Dowson</a></h3>

										<h5 class="position">Attorney in Law</h5>
									</div>
								</div>

								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<div class="team-item center-block">
										<div class="inner">
											<figure class="img-wrap">
												<img src="../img/team_img/4_col/4.jpg" alt="demo" />
											</figure>

											<div class="description">
												<div class="description--inner">
													<p>
														If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true ge
													</p>

													<div class="social-btns style-1">
														<a class="icon-facebook" href="#" target="_blank"></a>
														<a class="icon-twitter" href="#" target="_blank"></a>
														<a class="icon-linkedin" href="#" target="_blank"></a>
														<a class="icon-youtube-play" href="#" target="_blank"></a>
													</div>
												</div>
											</div>
										</div>

										<h3 class="name"><a href="team_single.html">Jim Wagner</a></h3>

										<h5 class="position">judge high category</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="s-video">
				<div class="b-video parallax" data-stellar-background-ratio="0.35" data-stellar-vertical-offset="300" data-stellar-offset-parent="true" style="background-image: url(../img/bg/6.jpg);">
					<div class="pattern"></div>

					<div class="v-align">
						<div class="btn-play-container">
							<a class="btn-play" href="https://www.youtube.com/embed/1zG1iq9LZ2U" data-gallery="s-video"></a>

							<span>Video Presentation</span>
						</div>
					</div>
				</div>
			</section>

			<section class="section transparent">
				<div class="container">
					<div class="s-title">
						<h2>Latest News</h2>

						<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus</p>
					</div>

					<div class="blog-container">
						<div class="blog-container--inner">
							<div class="row js-isotope" data-isotope-options='{ "layoutMode": "fitRows",  "itemSelector": ".element", "transitionDuration": "0.8s", "percentPosition": "true"}'>
								<div class="element col-xs-12 col-sm-6 col-md-4">
									<div class="blog-item center-block">
										<div class="inner fixed">
											<figure class="img-wrap">
												<img class="img-responsive" src="../img/blog_img/1.jpg" alt="demo">
											</figure>

											<a href="blog_post.html"></a>
										</div>

										<div class="description">
											<span class="date-post">May 07, 2015</span>

											<h3 class="title"><a href="#">Lawyer  Year Award</a></h3>

											<div class="meta">
												<span><i class="icon-user"></i><a href="#">Admin</a></span>

												<span><i class="icon-comment"></i><a href="#">1 Comment</a></span>
											</div>

											<p>
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even
											</p>

											<a class="custom-btn medium dark-color" href="blog_post.html" data-text="Continue Reading"><span>Continue Reading</span></a>
										</div>
									</div>
								</div>

								<div class="element col-xs-12 col-sm-6 col-md-4">
									<div class="blog-item center-block">
										<div class="inner fixed">
											<figure class="img-wrap">
												<img class="img-responsive" src="../img/blog_img/2.jpg" alt="demo">
											</figure>

											<a href="blog_post.html"></a>
										</div>

										<div class="description">
											<span class="date-post">May 07, 2015</span>

											<h3 class="title"><a href="#">Duis volutpat magna</a></h3>

											<div class="meta">
												<span><i class="icon-user"></i><a href="#">Admin</a></span>

												<span><i class="icon-comment"></i><a href="#">1 Comment</a></span>
											</div>

											<p>
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even
											</p>

											<a class="custom-btn medium dark-color" href="blog_post.html" data-text="Continue Reading"><span>Continue Reading</span></a>
										</div>
									</div>
								</div>

								<div class="element col-xs-12 col-sm-6 col-md-4">
									<div class="blog-item center-block">
										<div class="inner fixed">
											<figure class="img-wrap">
												<img class="img-responsive" src="../img/blog_img/3.jpg" alt="demo">
											</figure>

											<a href="blog_post.html"></a>
										</div>

										<div class="description">
											<span class="date-post">May 07, 2015</span>

											<h3 class="title"><a href="#">Lawyers  across states</a></h3>

											<div class="meta">
												<span><i class="icon-user"></i><a href="#">Admin</a></span>

												<span><i class="icon-comment"></i><a href="#">1 Comment</a></span>
											</div>

											<p>
												There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even
											</p>

											<a class="custom-btn medium dark-color" href="blog_post.html" data-text="Continue Reading"><span>Continue Reading</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="s-partners partners-style-1">
				<div class="container">
					<div class="bxslider-container">
						<ul class="bxslider" data-slidewidth="100" data-minslides="2" data-maxslides="8" data-moveslides="2" data-slidemargin="30" data-auto="true" data-speed="500" data-pager="false" data-prevselector="#partners-slide-prev-1" data-nextselector="#partners-slide-next-1">
							<li class="slide"><img src="../img/partners_img/1.png" alt="demo" /></li>
							<li class="slide"><img src="../img/partners_img/2.png" alt="demo" /></li>
							<li class="slide"><img src="../img/partners_img/3.png" alt="demo" /></li>
							<li class="slide"><img src="../img/partners_img/4.png" alt="demo" /></li>
							<li class="slide"><img src="../img/partners_img/5.png" alt="demo" /></li>
							<li class="slide"><img src="../img/partners_img/6.png" alt="demo" /></li>
							<li class="slide"><img src="../img/partners_img/7.png" alt="demo" /></li>
							<li class="slide"><img src="../img/partners_img/8.png" alt="demo" /></li>
						</ul>

						<span id="partners-slide-prev-1" class="control-btn control-btn-style-2 prev-btn icon-left"></span>
						<span id="partners-slide-next-1" class="control-btn control-btn-style-2 next-btn icon-right"></span>
					</div>
				</div>
			</section>
		</main>

		<footer id="footer" class="footer-style-1">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="footer-item">
									<a id="footer-logo" class="site-logo" href="index.html">Sauls Attorneys</a>

									<address>
										<span>Ukraine, UA<br /> 10, First May, International st</span>
										<br />
										<span>Tel: 0385 65 98 16</span>
										<span>Mobile: +3856 459 37 98</span>
										<span>E-mail: <a href="mailto:hello@inch.com">hello@inch.com</a></span>
									</address>

									<div class="social-btns style-1">
										<a class="icon-facebook" href="#" target="_blank"></a>
										<a class="icon-twitter" href="#" target="_blank"></a>
										<a class="icon-linkedin" href="#" target="_blank"></a>
										<a class="icon-youtube-play" href="#" target="_blank"></a>
									</div>
								</div>
							</div>

							<div class="col-xs-12 col-sm-6">
								<div class="footer-item">
									<h3 class="title">Main Services</h3>

									<ul class="list">
										<li><i class="icon-right"></i><a href="#">Construction of houses</a></li>
										<li><i class="icon-right"></i><a href="#">Repair soft of roofs</a></li>
										<li><i class="icon-right"></i><a href="#">Installing the tiles</a></li>
										<li><i class="icon-right"></i><a href="#">Construction and repair</a></li>
										<li><i class="icon-right"></i><a href="#">Facade insulation</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="footer-item hidden-xs hidden-sm">
							<p class="copy">© 2015 Sauls Attorneys Theme. All rights reserved</p>
						</div>
					</div>

					<div class="col-xs-12 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="footer-item">
									<h3 class="title">Blog Posts</h3>

									<div>
										<article class="recent-posts">
											<p><a href="#">Talking sensible advertising spacious youthful shine a discover excellent.</a></p>

											<span class="date-post">May 07, 2015</span>
										</article>

										<article class="recent-posts">
											<p><a href="#">With in natural bold gigantic hurry adore low-cost spacious commercial</a></p>

											<span class="date-post">April 01, 2015</span>
										</article>

										<article class="recent-posts">
											<p><a href="#">Advantage you extra have world's clinically extra grab rare warm.</a></p>

											<span class="date-post">March 16, 2015</span>
										</article>
									</div>
								</div>
							</div>

							<div class="col-xs-12 col-sm-6">
								<div class="footer-item">
									<h3 class="title">How to Reach Us</h3>

									<form class="footer-form" action="#">
										<label class="input-wrp">
											<input type="text" placeholder="Name" />
											<span></span>
										</label>

										<label class="input-wrp">
											<input type="text" placeholder="E-mail" />
											<span></span>
										</label>

										<label class="input-wrp">
											<input type="text" placeholder="Phone" />
											<span></span>
										</label>

										<label class="input-wrp">
											<textarea placeholder="Your message"></textarea>
											<span></span>
										</label>

										<button class="custom-btn small light-color" type="submit" data-text="Send"><span>Send</span></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="footer-item visible-xs visible-sm">
					<p class="copy">© 2015 SaulsAttorneys Theme. All rights reserved</p>
				</div>
			</div>
		</footer>

		<div id="btn-to-top-wrap">
			<a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="1500"></a>
		</div>

		<script type="text/javascript" src="../js/main.min.js"></script>
	</body>
</html>
