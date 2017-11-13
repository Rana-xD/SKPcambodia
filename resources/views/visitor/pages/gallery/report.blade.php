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

</style>
@endpush
@section('content')
		<section id="headline">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<p id="page-title" class="h1">Activities of SK &amp; P Law Firm</p>
					</div>
				</div>
			</div>
		</section>

		<main role="main">
			<section class="section transparent">
				<div class="container">
					<div class="row">

						<div class="col-xs-12 col-md-12">
							<div class="col-md-MB-30">
								@if(isset($top_content) && $top_content)
									{!! $top_content->body !!}
								@endif
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="s-portfolio" class="section transparent">
				<div class="container">

					<div class="portfolio-container portfolio-three-columns portfolio-style-2">
						<div class="portfolio-container--inner">
							<div class="row js-isotope" data-isotope-options='{ "layoutMode": "fitRows",  "itemSelector": ".element", "transitionDuration": "0.8s", "percentPosition": "true"}'>
								@foreach($results as $result)
								<div class="element category-3 col-xs-12 col-sm-6 col-md-4">
									<div class="portfolio-item center-block">
										<div class="inner">
											<figure class="img-wrap">
												<img src="storage/{{ $result->featured_image }}" alt="demo" />
											</figure>

											<a href="storage/{{ $result->featured_image }}" data-gallery="gall"></a>
										</div>

										<div class="description">
											<h3 class="h4 title"><a href="#">{{ $result->getTranslatedAttribute('title', $locale) }}</a></h3>

											<p>{{ $result->getTranslatedAttribute('description', $locale) }}</p>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>

						<div class="text-center"><a id="portfolio-more-btn" class="custom-btn medium dark-color" href="#" data-text="More Shots"><span>More Shots</span></a></div>
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
