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
	.table_title{
	 	background: #4F86C6;
	 	text-align: center;
	 	color: white;
	}
	.table{
		border: 2px solid #ddd;
		width:100%;
	}
	th, td{
		border: 2px solid #ddd;
		padding: 10px;
		text-align: center;
	}

</style>
@endpush
@section('content')
		<section id="headline">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-5">
						<p id="page-title" class="h1">@lang('text.service')</p>
					</div>
				</div>
			</div>
		</section>

		<main role="main">

			<section class="section transparent">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							@if(isset($top_content) && $top_content)
								{!! $top_content->body !!}
							@endif
						</div>
					</div>
				</div>
			</section>

			<section id="s-services" class="section transparent">
				<div class="container">
					<div class="s-title">
						<h2>We Are Effective In<br />Such Areas Of Practices</h2>
					</div>

					<div class="services-container services-style-1">
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
			</section>

			<!--Translation Service-->
			<section class="section transparent">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
							@if(isset($translation_service) && $translation_service)
								{!! $translation_service->body !!}
							@endif
						</div>

						<div class="col-xs-12 col-sm-4 col-md-6">
							@if(isset($translation_cost) && $translation_cost)
								{!! $translation_cost->body !!}
							@endif
						</div>
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
