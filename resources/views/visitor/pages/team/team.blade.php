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
	.team_quote{
	  border-left: 10px solid #ccc;
	  margin: 1.5em 10px;
	  padding: 0.5em 10px;
	  quotes: "\201C""\201D""\2018""\2019";
	}
	.team_quote:before {
	  color: #ccc;
	  content: open-quote;
	  font-size: 4em;
	  line-height: 0.1em;
	  margin-right: 0.25em;
	  vertical-align: -0.4em;
	}
	.team_quote:after {
	  color: #ccc;
	  content: close-quote;
	  font-size: 4em;
	  line-height: 0.1em;
	  margin-right: 0.25em;
	  vertical-align: -0.4em;
	}

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
							@foreach ($teams->chunk(4) as $team_contents)
							<div class="row">
								@foreach($team_contents as $team)
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<div class="team-item center-block">
										<a href="teamsingle/{{ $team->fullname }}">
											<div class="inner">

												<figure class="img-wrap">
													<img src="{{ $team->profile_pic }}" alt="demo" />
												</figure>

												<div class="description">
													<div class="description--inner">
														<p @if($team->quote != null)
																class="team_quote"
															@endif>
															{{ $team->quote }}
														</p>
														{{-- <div class="social-btns style-1">

															@if(json_decode($team->social_media)->data->facebook)
															<a class="icon-facebook" href="{{ json_decode($team->social_media)->data->facebook }}" target="_blank"></a>
															@endif
															@if(json_decode($team->social_media)->data->twitter)
															<a class="icon-twitter" href="{{ json_decode($team->social_media)->data->twitter }}" target="_blank"></a>
															@endif
															@if(json_decode($team->social_media)->data->linkedin)
															<a class="icon-linkedin" href="{{ json_decode($team->social_media)->data->linkedin }}" target="_blank"></a>
															@endif
														</div> --}}
													</div>
												</div>
											</div>
										</a>

										<h3 class="name"><a href="teamsingle/{{ $team->fullname }}">{{ $team->getTranslatedAttribute('fullname', App::getLocale()) }}</a></h3>
										@foreach(json_decode($team->getTranslatedAttribute('position', App::getLocale()))->data as $pos)
										<h5 class="position">{{ $pos }}<br/></h5>
										@endforeach
									</div>
								</div>
								@endforeach
							</div>
							@endforeach
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
