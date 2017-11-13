@extends('visitor.layouts.main')
@section('title', 'welcome to SKP Cambodia Attorney and Law firm')
@push('meta')
<meta name="description" content="">
<meta name="keyword" content="">
<meta name="og:type" content="">
<meta name="og:title" content="">
<meta name="og:image" content="">
<meta name="og:description" content="">
@endpush

@push('styles')
<style type="text/css">
	.circlelist{
		list-style-type: circle;
    	padding-left: 15px;
	}
</style>
@endpush
@section('content')
		<section id="headline">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<p id="page-title" class="h1">@lang('text.mission')</p>
					</div>
				</div>
			</div>
		</section>

		<main role="main">
			<section class="section transparent">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-9">
							<img class="img-responsive visible-xs" src="../img/bg/mission.jpg" alt="demo" >

							<p>
								<strong>As a unique result-oriented legal team in the Kingdom of Cambodia, the SK &amp; P Law Firm Mission is to:</strong>
							</p>

							<ul class="circlelist">
								<li>Deliver high quality legal services to all kinds of clients in and outside the Kingdom of Cambodia and strive to achieve results that exceed expectations through our commitment to our clients by finding ways to best advance to clients' cause and adding maximum value to their business and interests</li>
								<li>Adhere to the highest standards of excellence and integrity, and be thorough and effective in our work</li>
								<li>Provide the client with pragmatic legal services, explanation to relevant procedures, alternative dispute resolution options as much as possible, procedural options and consequences as appropriate</li>
								<li>To the best of our knowledge, inform the probabilities of success and failure on each alternative in a fair manner, and keep the client informed of all case developments and other progresses taken</li>
								<li>Increase the SK &amp; P Law Firm's potentiality by satisfying the needs of existing and prospective clients and anticipating their needs in the future</li>
								<li>Do our best to make our clients feel welcome, cared for and comfortable</li>
								<li>Seek and maintain the best reputation in the Kingdom of Cambodia and in the counterpart country regarding legal representation, ethics, morals, and professionalism</li>
								<li>Adhere to the Law on the Bar Association of the Kingdom of Cambodia and Professional Code of Conduct as well as international standards</li>
								<li>Protect our clients confidences from unlawful disclosure and ensure that their secrets are safe with our relevant professional only</li>
								<li>Perform legal and other works in a timely manner and with attention and ready to be accessible when our clients need us</li>
								<li>Communicate clearly in both Khmer and English languages</li>
								<li>Stay abreast of all new technology and resources as well as legal framework development that provide better services for the clients, namely Civil Code, Civil Procedure Code, Criminal Code, Criminal Procedure Code, Commercial Laws as well as other laws and regulations of the Kingdom of Cambodia</li>
								<li>Adhere to the principle that individual development through education</li>
								<li>Enhances our ability and the quality of our work</li>
								<li>Serve our clients at fair fees to both clients and SK &amp; P Law Firm, that our clients are willing and able to pay</li>
								<li>Always be proactive</li>
							</ul>
						</div>

						<div class="col-xs-12 col-sm-4 col-md-3">
							<img class="img-responsive center-block hidden-xs" src="../img/bg/mission.jpg" alt="demo" >
							<blockquote class="quote">
						      <p>Our clients' interests are paramount consideration in all our activities. This is how we exist as a legal team.</p>
						    </blockquote>
						</div>
					</div>
				</div>
			</section>

			<section id="s-feedback" class="feedback-style-1 parallax" data-stellar-background-ratio="0.35" data-stellar-vertical-offset="100" data-stellar-offset-parent="true" style="background-image: url(../img/bg/1.jpg);">
				<div class="pattern"></div>

				<div class="container">
					<div class="feedback-bxslider-container bxslider-container">
						<ul class="bxslider" data-slidewidth="970" data-slidemargin="20" data-speed="500" data-auto="false" data-adaptiveheight="true" data-pager="false" data-prevselector="#feedback-slide-prev-1" data-nextselector="#feedback-slide-next-1">
							<li class="slide">
								<div class="text">
									<p>
										Some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet
									</p>
								</div>

								<div class="author">
									<img class="circled" src="../img/users_photos/1.png" height="84" width="84" alt="demo" />

									<h3 class="name">Ann Gilbert</h3>

									<h5 class="position">CEO / Vice president</h5>
								</div>
							</li>

							<li class="slide">
								<div class="text">
									<p>
										2 Some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet
									</p>
								</div>

								<div class="author">
									<img class="circled" src="../img/users_photos/2.png" height="84" width="84" alt="demo" />

									<h3 class="name">Andrew Dowson</h3>

									<h5 class="position">Art Directoar</h5>
								</div>
							</li>

							<li class="slide">
								<div class="text">
									<p>
										3 Some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet
									</p>
								</div>

								<div class="author">
									<img class="circled" src="../img/users_photos/3.png" height="84" width="84" alt="demo" />

									<h3 class="name">John Smith</h3>

									<h5 class="position">Art Directoar</h5>
								</div>
							</li>
						</ul>

						<span id="feedback-slide-prev-1" class="control-btn control-btn-style-2 prev-btn icon-left"></span>
						<span id="feedback-slide-next-1" class="control-btn control-btn-style-2 next-btn icon-right"></span>
					</div>
				</div>
			</section>
		</main>

	@endsection

	@push('scripts')

	@endpush

	@section('scripts')
	<script>

		$(document).ready(function(){

		});
	</script>
	@endsection
