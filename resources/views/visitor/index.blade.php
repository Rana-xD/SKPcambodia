
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
	p{
		font-family: 'Raleway', sans-serif, Suwannaphum !important;
	}
	h2{
		font-family: Rufina, serif, Suwannaphum !important;
	}
</style>
@endpush

@section('content')

	@php
	    $locale = App::getLocale();
	@endphp

	@if(isset($sliders) && count($sliders) > 0)
		@includeIf('visitor.partials._slider', ['sliders' => $sliders])
	@endif
	<main role="main">

		<!--Service-->
		<section class="section transparent" style="padding-top:60px;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-3">
						<div class="col-md-MB-30">

							@if(isset($top_left_content) && $top_left_content)
								{!! $top_left_content->getTranslatedAttribute('body', App::getLocale()) !!}
							@endif
							<a class="custom-btn medium dark-color" href="/services" data-text="Details"><span>@lang('text.details')</span></a>
						</div>
					</div>

					<div class="col-xs-12 col-md-9">
						<div class="col-md-MB-30">
							<div class="services-container services-style-4">
								<div class="services-container--inner">
									@foreach($services->chunk(3) as $service_content)
									<div class="row">
										@foreach($service_content as $service)
										<div class="col-xs-12 col-sm-4">
											<div class="service-item center-block">
												<i class="{{ $service->icon_class ? $service->icon_class : 'ico ico-1' }}"></i>

												<div class="inner">
													<h3 class="title">
														{{ $service->getTranslatedAttribute('title', $locale) }}
													</h3>

													<p>
														{{ $service->getTranslatedAttribute('excerpt', $locale) }}
													</p>
												</div>
											</div>
										</div>
										@endforeach
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--Welcome Section-->
		<section class="section transparent">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-7">
						<div class="col-md-MB-30">
							@if(isset($welcome_content) && $welcome_content)
								{!! $welcome_content->getTranslatedAttribute('body', App::getLocale()) !!}
							@endif
							<blockquote class="quote">
						      	@if(isset($quote_content) && $quote_content)
									{!! $quote_content->getTranslatedAttribute('body', App::getLocale()) !!}
								@endif
						    </blockquote>

						</div>
					</div>
					<div class="col-xs-12 col-md-5 col-lg-4">
						<div class="col-md-MB-30">
							<h2>@lang('text.experience')</h2>
									<ul style="list-style-type:circle">
										@foreach ($experiences as $experience)
										<li><strong>{{ $experience->getTranslatedAttribute('content', $locale) }}</strong></li>
										@endforeach
									</ul>
						</div>
					</div>


				</div>
			</div>
		</section>

		<!--Quote-->
		<section class="special-section matchHeight-container clearfix">
			<div class="col-xs-12 col-md-6">
				<div class="item first text matchHeight-item" data-mh="items-a">
					<div class="outer v-align">
						<div class="inner">
							<div class="feedback-bxslider-container bxslider-container">
								<ul class="bxslider" data-mode="fade" data-slidewidth="970" data-slidemargin="20" data-speed="300" data-auto="false" data-adaptiveheight="true" data-pager="false" data-prevselector="#feedback-slide-prev-3" data-nextselector="#feedback-slide-next-3">
									@foreach($quotes as $quote)
									<li class="slide">
										<div class="text">
											<p>
												{{$quote->quote}}
											</p>
										</div>

										<div class="author">
											<div class="b-table">
												<div class="cell v-middle">
													<img class="circled" src="{{ $quote->profile_pic }}" height="84" width="84" alt="demo" />
												</div>

												<div class="cell v-middle">
													<h3 class="name">{{ $quote->fullname }}</h3>
                                                     @foreach(json_decode($quote->position)->data as $pos)
													<h5 class="position">{{ $pos }}</h5>
													 @endforeach
												</div>
											</div>
										</div>
									</li>
									@endforeach
									
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
					<div class="b-about" style="background-image: url(../img/bg/mission.jpg);">
						<div class="pattern"></div>

						<div class="outer v-align">
							<div class="inner">
								{{-- <p><img src="../img/logo_2.png" alt="logo" /></p> --}}

								<a class="custom-btn medium light-color" href="about" data-text="About Us"><span>@lang('text.contact_us')</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--Latest Blog Posts-->
		@if(isset($latest_blogs) && count($latest_blogs) > 0)
			@includeIf('visitor.components.home.latest_blog')
		@endif

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
