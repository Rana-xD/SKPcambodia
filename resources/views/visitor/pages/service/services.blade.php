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

	.tab-content>.tab-pane {
	    display: none
	}
	.tab-content>.active {
	    display: block
	}
	.tab-content{
	   box-shadow: 2px 2px 4px rgba(34, 34, 34, 0.12);
		margin-left: 20px;
	}

	.list-group .selected::after {
		content: "";
		position: relative;
	   display: block;
		width: 0;
		height: 0;
		top: -27px;
		right: -48px;
	   float: right;
		transform: rotate(45deg);
		border: 17.5px solid;
		border-color: transparent transparent white white;

	}
	.list-group-item {
		line-height: 1.1;
		font-size: 18px;
		font-weight: 400;
		font-family: Rufina, serif;
		background-color: #e4e4e4;
		padding: 15px 30px;
		margin-bottom: 2px;

	}
	.panel-default .title{
	   margin-top: 20px;
	}
	.title-training{
	margin-bottom: 0px;
	font-family: 'Raleway', sans-serif;
	}

	.top{
		padding-top: 50px !important;
	}
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
								{!! $top_content->getTranslatedAttribute('body', App::getLocale()) !!}
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

							<div class="row" id="nav-row">
						    	<div class="col-md-5" >
									<ul class="list-group nav" role="tablist">
			                @foreach($services as $key => $service)
			                        <a href="#article{{ $service->id }}" data-toggle="tab" aria-controls="article{{ $service->id }}" role="tab" >
												<li class="list-group-item @if($key==0){{ 'selected' }}@endif">
			      								<p class="title-training">{{ $service->getTranslatedAttribute('title', $locale) }}</p>
			                           </li>
											</a>
			                @endforeach
								</ul>
								</div>
								<div class="col-md-6 tab-content">
			            	@foreach($services as $key=> $service)
									<div role="tabpanel" class="tab-pane @if($key==0){{ 'active' }}@endif" id="article{{$service->id}}">
										<article class="panel-default">
											<div class="panel-body">
												<div class="row">
				                            <div class="textbox">
			                                  {!! $service->getTranslatedAttribute('content', $locale) !!}
			                               </div>
												</div>
					                  </div>
					                </article>
					            </div>
			               @endforeach
				            </div>
				         </div>

							{{--@foreach($services->chunk(3) as $service_content)
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
							@endforeach--}}
						</div>
					</div>
				</div>
			</section>

			<!--Translation Service-->
			<section class="section transparent top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
							@if(isset($translation_service) && $translation_service)
								{!! $translation_service->getTranslatedAttribute('body', App::getLocale()) !!}
							@endif
						</div>

						<div class="col-xs-12 col-sm-4 col-md-6">
							@if(isset($translation_cost) && $translation_cost)
								{!! $translation_cost->getTranslatedAttribute('body', App::getLocale()) !!}
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
         $('.list-group li').click(function() {
            $('.list-group li').removeClass('selected');
            $(this).addClass('selected');
         });
      });
	</script>
	@endsection
