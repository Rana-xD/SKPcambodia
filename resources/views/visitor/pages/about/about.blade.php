@extends('visitor.layouts.main')
@section('title', 'About SKP Cambodia Attorney and Law Group')
@push('meta')
<meta name="description" content="">
<meta name="keyword" content="">
<meta property="og:url" content="http://www.skpcambodia.com/about" />
<meta name="og:type" content="">
<meta name="og:title" content="About SK &amp; P Cambodia Law Group">
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
						<p id="page-title" class="h1">@lang('text.about')</p>
					</div>
				</div>
			</div>
		</section>

		<main role="main">
			<section class="section transparent">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-9">

							<img class="img-responsive visible-xs" src="../img/bg/mission.jpg" alt="" >

							@if(isset($about_content) && $about_content)
								{!! $about_content->getTranslatedAttribute('body', App::getLocale()) !!}
							@endif
						</div>

						<div class="col-xs-12 col-sm-4 col-md-3">
							@if(isset($about_sidebar) && $about_sidebar)
								@if(isset($about_sidebar->image))
								<img class="img-responsive center-block hidden-xs" src="{{ asset($about_sidebar->image) }}" alt="demo" >
								@endif
								<blockquote class="quote">
							      	{!! $about_sidebar->getTranslatedAttribute('body', App::getLocale()) !!}
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

							@foreach($quotes as $quote)
							<li class="slide">
								<div class="text">
									<p>
										{{$quote->quote}}
									</p>
								</div>

								<div class="author">
									<div class="b-table">

											<img class="circled" src="{{ $quote->profile_pic }}" height="84" width="84" alt="demo" />

											<h3 class="name">{{ $quote->fullname }}</h3>

											@foreach(json_decode($quote->position)->data as $pos)
											<h5 class="position">{{ $pos }}</h5>
											 @endforeach

									</div>
								</div>
							</li>
							@endforeach
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
