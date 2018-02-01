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
				<div class="col-xs-12 col-md-5">
					<p id="page-title" class="h1">@lang('text.blog_post')</p>
				</div>
			</div>
		</div>
	</section>

	<main role="main">
		<section id="s-single-post" class="section transparent">
			<div class="pattern hidden-xs hidden-sm"></div>

			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-lg-9">
						<div id="single-post--container">
							<img class="img-responsive" src="@if($post->image){{ $post->image }}@endif" alt="{{ $post->getTranslatedAttribute('title', $locale) }}">

							<div class="row">
								<div class="col-xs-12 col-md-11">
									<span class="date-post">POSTED {{ $post->created_at->format('M d\, Y') }} </span>

									<h3 class="title">{{ $post->getTranslatedAttribute('title', $locale) }}</h3>

									<div class="meta">
										<span><i class="icon-user"></i><a href="#">{{ $post->authorId->name }}</a></span>

										<span><i class="icon-comment"></i><a href="#">0 Comment</a></span>
									</div>

									<div class="post-entry">
										{!! $post->getTranslatedAttribute('body', $locale) !!}
									</div>

									<span class="sep"></span>

									<div id="share"></div>

									{{-- <h4 class="h2">@lang('text.Your_message')</h4>

									<form action="#">
										<div class="row">
											<div class="col-xs-12 col-md-11 col-lg-9">
												<div class="row">
													<div class="col-xs-12 col-sm-6">
														<label class="input-wrp">
															<input type="text" placeholder="@lang('text.Name')">
															<span></span>
														</label>
													</div>

													<div class="col-xs-12 col-sm-6">
														<label class="input-wrp">
															<input type="text" placeholder="@lang('text.Email')">
															<span></span>
														</label>
													</div>
												</div>

												<label class="input-wrp">
													<textarea placeholder="@lang('text.comments')"></textarea>
													<span></span>
												</label>

												<button class="custom-btn small dark-color fl-r" type="submit" data-text="Submit"><span>@lang('text.send')</span></button>
											</div>
										</div>
									</form> --}}
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-md-4 col-lg-3">
						<aside id="sidebar">
							<!-- <div class="widget widget-search">
								<form method="get" action="#">
									<label class="input-wrp">
										<input name="s" type="text" placeholder="Search">
										<span></span>
										<i class="icon-search"></i>
									</label>
								</form>
							</div> -->

							<div class="widget widget-categories">
								<h4 class="widget-title h3">@lang('text.post_categories')</h4>

								<ul>
								@foreach($categories as $category)
									<li class="active">
										<a href="#{{ $category->slug }}">
											<i class="circled icon-right"></i>{{ $category->getTranslatedAttribute('name', $locale) }}
										</a>
									</li>
								@endforeach
								</ul>
							</div>

							<span class="sep"></span>

							<div class="widget widget-posts">
								<h4 class="widget-title h3">@lang('text.latest_posts')</h4>

								<div>
								@foreach($related_posts as $related_post)
									<article class="clearfix">
										<a class="link" href="{{ route('visitor.blog.detail', $related_post->slug) }}">
											<img src="@if($related_post->image){{ $related_post->image }}@endif" alt="{{ $related_post->getTranslatedAttribute('title', $locale) }}" />
										</a>

										<div class="inner">
											<h5 class="title">
												<a href="{{ route('visitor.blog.detail', $related_post->slug) }}">
													{{ $related_post->getTranslatedAttribute('title', $locale) }}
												</a>
											</h5>

											<span class="date-post">POSTED {{ $related_post->created_at->format('M d\, Y') }}</span>
										</div>
									</article>
								@endforeach
								</div>
							</div>

							<!-- <span class="sep"></span>

							<div class="widget widget-practices">
								<div class="practices-container practices-four-columns practices-style-1">
									<div class="practices-container--inner">
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-md-12">
												<div class="practices-item center-block">
													<div class="inner">
														<figure class="img-wrap">
															<img src="../img/practice_img/4_col_1/6.jpg" alt="demo" />
														</figure>

														<a href="#"
															><div>
																<ul class="b-table">
																	<li class="cell v-middle text-left first"><h3 class="title">Mortgage</h3></li>

																	<li class="cell v-middle text-right second"><span class="control-btn next-btn icon-right"></span></li>
																</ul>
															</div>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<span class="sep"></span>

							<div class="widget widget-tags">
								<ul>
									<li><a class="custom-btn small dark-color" href="#" data-text="Attorneys"><span>Attorneys</span></a></li>
									<li><a class="custom-btn small dark-color" href="#" data-text="Law Practice"><span>Law Practice</span></a></li>
									<li><a class="custom-btn small dark-color" href="#" data-text="Law"><span>Law</span></a></li>
									<li><a class="custom-btn small dark-color" href="#" data-text="Judges"><span>Judges</span></a></li>
									<li><a class="custom-btn small dark-color" href="#" data-text="Justice"><span>Justice</span></a></li>
									<li><a class="custom-btn small dark-color" href="#" data-text="Insurance"><span>Insurance</span></a></li>
									<li><a class="custom-btn small dark-color" href="#" data-text="banking crime"><span>banking crime</span></a></li>
								</ul>
							</div> -->

							<!-- <div class="widget widget-team">
								<h4 class="widget-title h3">Attorneys</h4>

								<div class="team-container team-three-columns team-style-1">
									<div class="team-container--inner">
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-md-12">
												<div class="team-item center-block">
													<div class="inner">
														<figure class="img-wrap">
															<img src="../img/team_img/3_col/5.jpg" alt="demo" />
														</figure>

														<div class="description">
															<div class="description--inner">
																<h3 class="name">John Johnson</h3>

																<h5 class="position">judge high category</h5>

																<p>
																	There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour
																</p>

																<div class="social-btns style-1">
																	<a class="icon-facebook" href="#" target="_blank"></a>
																	<a class="icon-twitter" href="#" target="_blank"></a>
																	<a class="icon-linkedin" href="#" target="_blank"></a>
																	<a class="icon-youtube-play" href="#" target="_blank"></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->
						</aside>
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
	$("#share").jsSocials({
				shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
		  });

	$(document).ready(function(){
	});
</script>
@endsection
