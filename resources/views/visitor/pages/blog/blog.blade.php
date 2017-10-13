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
						<p id="page-title" class="h1">Blog</p>
					</div>

					<div class="col-xs-12 col-md-7">
						<p id="headline-text">
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly.
						</p>
					</div>
				</div>
			</div>
		</section>

		<main role="main">
			<section id="s-blog" class="section transparent">
				<div class="container">
					<div class="blog-container">
						<div class="blog-container--inner">
							<div class="row js-isotope" data-isotope-options='{"itemSelector": ".element", "transitionDuration": "0.8s", "percentPosition": "true", "masonry": { "columnWidth": "#grid-sizer" }}'>
								<div id="grid-sizer" class="col-xs-12 col-sm-6 col-md-4" style="min-height: 0;"></div>

								@if(isset($latest_blogs) && count($latest_blogs) > 0)
									@foreach($latest_blogs as $post)
										@includeIf('visitor.components.blog.blog_grid_box', ['post' => $post])
									@endforeach
								@endif
								
							</div>
						</div>

						<!-- <div class="text-center">
							<a class="control-btn control-btn-style-1 prev-btn icon-left" href="#"></a>
							<a class="control-btn control-btn-style-1 next-btn icon-right" href="#"></a>
						</div> -->
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
