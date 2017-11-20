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

							@if(isset($mission_content) && $mission_content)
								{!! $mission_content->getTranslatedAttribute('body', App::getLocale()) !!}
							@endif
						</div>

						<div class="col-xs-12 col-sm-4 col-md-3">
							@if(isset($mission_sidebar) && $mission_sidebar)
								@if(isset($mission_sidebar->image))
								<img class="img-responsive center-block hidden-xs" src="{{ asset($mission_sidebar->image) }}" alt="" >
								@endif
								<blockquote class="quote">
						      	{!! $mission_sidebar->getTranslatedAttribute('body', App::getLocale()) !!}
						    	</blockquote>
							@endif
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
