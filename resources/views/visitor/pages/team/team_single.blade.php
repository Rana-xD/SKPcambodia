@extends('visitor.layouts.main')

@section('title', 'SK & P Cambodia Attorney')

@push('meta')
<meta name="description" content="">
<meta name="keyword" content="">
<meta property="og:url" content="http://www.skpcambodia.com/teamsingle/{{ Request::path() }}" />
<meta name="og:type" content="">
<meta name="og:title" content="{{ $teamsingle->getTranslatedAttribute('fullname', App::getLocale()) }}'s Profile Background">
<meta name="og:image" content="">
<meta name="og:description" content="{!! $teamsingle->getTranslatedAttribute('bio', App::getLocale()) !!}">
@endpush
@push('styles')
<style type="text/css">

</style>
@endpush
@section('content')
		<section id="headline">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-5">
						<p id="page-title" class="h1">{{ $teamsingle->getTranslatedAttribute('fullname', App::getLocale()) }}</p>
					</div>
				</div>
			</div>
		</section>

		<main role="main">
			<section id="s-single-post" class="section transparent">
				<div class="container">
					<div id="single-post--container">
						<div class="team-intro">
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<div class="col-MB-30">
										<img class="img-responsive" src="{{ $teamsingle->profile_pic }}" alt="demo" />
									</div>
								</div>

								<div class="col-xs-12 col-md-6">
									<div class="col-MB-30">
										<div class="col-MB-30">
											<h2 class="name">{{ $teamsingle->getTranslatedAttribute('fullname', App::getLocale()) }}</h2>
											@foreach(json_decode($teamsingle->getTranslatedAttribute('position', App::getLocale()))->data as $pos)
											<h5 class="position">{{ $pos }}<br/></h5>
											@endforeach
										</div>

										<div class="row">
											<div class="col-xs-12 col-md-6">
												<div class="col-md-MB-20">
													<h4>@lang('text.contact_information')</h4>

													{{--  N0: 220 Eo, Street 156, Sangkat Tuklaak II, Khan Toulkok, Phnom Penh<br />  --}}
													@if(json_decode($teamsingle->contact)->data->tel)
													<strong>Tel: {{ json_decode($teamsingle->contact)->data->tel }}</strong><br />
													@endif
													@if(json_decode($teamsingle->contact)->data->hp)
													<strong>H/P: {{ json_decode($teamsingle->contact)->data->hp }}</strong><br />
													@endif
													@if(json_decode($teamsingle->contact)->data->fax)
													<strong>Fax: {{ json_decode($teamsingle->contact)->data->fax }}</strong>
													@endif
												</div>
											</div>

											<div class="col-xs-12 col-md-6">
												<div class="col-md-MB-20">
													<h4>@lang('text.Email')</h4>
													@foreach(json_decode($teamsingle->email)->data as $email)
													<strong><a href="mailto:{{ $email }}">{{ $email }}</a></strong><br />
													@endforeach
												</div>
											</div>
										</div>

										<div class="social-btns style-1">
											@if(json_decode($teamsingle->social_media)->data->facebook)
											<a class="fa social fa-facebook" href="{{ json_decode($teamsingle->social_media)->data->facebook }}" target="_blank"></a>
											@endif
											@if(json_decode($teamsingle->social_media)->data->twitter)
											<a class="fa social fa-twitter" href="{{ json_decode($teamsingle->social_media)->data->twitter }}" target="_blank"></a>
											@endif
											@if(json_decode($teamsingle->social_media)->data->linkedin)
											<a class="fa social fa-linkedin" href="{{ json_decode($teamsingle->social_media)->data->linkedin }}" target="_blank"></a>
											@endif
											@if(json_decode($teamsingle->social_media)->data->gplus)
											<a class="fa social fa-google" href="{{ json_decode($teamsingle->social_media)->data->gplus }}" target="_blank"></a>
											@endif
										</div>
										<div>
											<p>{!! $teamsingle->getTranslatedAttribute('bio', App::getLocale()) !!}</p>
										</div>

									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-md-6">
							    @if(json_decode($teamsingle->education)->data)
								<div class="col-md-MB-30">
									<div class="timeline">
										<h4 class="h2">@lang('text.educations')</h4>
                                        @foreach(json_decode($teamsingle->getTranslatedAttribute('education', App::getLocale()))->data as $education)
										<div class="item">
											<i class="circled"></i>

											<div class="inner">
												<h4 class="title">{{ $education->title }}</h4>

												<span class="date">{{ $education->year }}</span>

												<p>{!! $education->description !!}</p>
											</div>
										</div>
                                        @endforeach
									</div>
								</div>
								@endif
								@if(json_decode($teamsingle->training)->data)
								<div class="col-md-MB-30">
									<div class="timeline">
										<h4 class="h2">@lang('text.trainings')</h4>
                                        @foreach(json_decode($teamsingle->getTranslatedAttribute('training', App::getLocale()))->data as $training)
										<div class="item">
											<i class="circled"></i>

											<div class="inner">
												<h4 class="title">{{ $training->title }}</h4>

												<span class="date">{{ $training->year }}</span>

												<p>{!! $training->description !!}</p>
											</div>
										</div>
                                        @endforeach
									</div>
								</div>
								@endif
							</div>

							<div class="col-xs-12 col-md-6">
								@if(json_decode($teamsingle->experience)->data)
								<div class="col-md-MB-30">
									<div class="timeline">
										<h4 class="h2">@lang('text.professional_experiences')</h4>

											<div class="panel-group" id="accordion_reg" role="tablist" aria-multiselectable="true">
												@foreach(json_decode($teamsingle->getTranslatedAttribute('experience', App::getLocale()))->data as $experience)
												<input type="hidden" name="{{ $i++ }}">
												{{--  {{ i++ }}  --}}
												<div class="item">
													<i class="circled"></i>
													<div class="panel panel-default">
								                	<div class="panel-heading" role="tab" id="heading{{ $i }}_reg">
								                  	<h4 class="panel-title">
								                    		<a role="button" data-toggle="collapse" data-parent="#accordion_reg" href="#collapse{{ $i }}_reg" aria-expanded="false" aria-controls="collapse{{ $i }}_reg">
																	<h4 class="title">{{$experience->title}}</h4>
	  		 														<span class="date">{{$experience->year}}@if ($experience->description)<i class="fa fa-chevron-down pull-right"></i>@endif</span>
								                    		</a>
								                  	</h4>
								                	</div>
														@if ($experience->description)
															<div id="collapse{{ $i }}_reg" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $i }}_reg">
									                  	<div class="panel-body pre-line">
															{!! $experience->description !!}
									                  	</div>
									                	</div>
														@endif

								              	</div>
												</div>
												@endforeach
												</div>
							            </div>
									</div>
									@endif
									@if(json_decode($teamsingle->award)->data)
									<div class="col-md-MB-30">
										<div class="timeline">
											<h4 class="h2">@lang('text.awards_achievements')</h4>
	                                        @foreach(json_decode($teamsingle->getTranslatedAttribute('award', App::getLocale()))->data as $award)
											<div class="item">
												<i class="circled"></i>

												<div class="inner">
													<h4 class="title">{{ $award->title }}</h4>

													<span class="date">{{ $award->year }}</span>

													<p>{{ $award->description }}</p>
												</div>
											</div>
	                                        @endforeach
										</div>
									</div>
								@endif
								</div>
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
