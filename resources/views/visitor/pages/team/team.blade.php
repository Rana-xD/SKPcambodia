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
						<p id="page-title" class="h1">@lang('text.meet_attorney')</p>
					</div>
				</div>
			</div>
		</section>

		<main role="main">
			<section class="section transparent">
				<div class="container">


					<div class="team-container team-four-columns team-style-2">
						<div class="team-container--inner">
							<div class="row">
								@foreach($teams as $team)
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<div class="team-item center-block">
										<div class="inner">
											<figure class="img-wrap">
												<a href="teamsingle/{{ $team->fullname }}"><img src="{{ $team->profile_pic }}" alt="demo" /></a>
											</figure>

											<!-- <div class="description">
												<div class="description--inner">
													<p>
														{{ $team->quote }}
													</p>

													<div class="social-btns style-1">
														<a class="icon-facebook" href="#" target="_blank"></a>
														<a class="icon-twitter" href="#" target="_blank"></a>
														<a class="icon-linkedin" href="#" target="_blank"></a>
														<a class="icon-youtube-play" href="#" target="_blank"></a>
													</div>
												</div>
											</div> -->
										</div>

										<h3 class="name"><a href="teamsingle/{{ $team->fullname }}">{{ $team->fullname }}</a></h3>
										@foreach(json_decode($team->getTranslatedAttribute('position', App::getLocale()))->data as $pos)
										<h5 class="position">{{ $pos }}<br/></h5>
										@endforeach
									</div>
								</div>
								@endforeach
							</div>
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
