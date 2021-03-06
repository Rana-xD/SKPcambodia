@extends('visitor.layouts.main')

@section('title', 'Publication')

@push('meta')
<meta name="description" content="">
<meta name="keyword" content="">
<meta property="og:url" content="http://www.skpcambodia.com/publication" />
<meta name="og:type" content="">
<meta name="og:title" content="Publication of SK &amp; P Cambodia Law Group">
<meta name="og:image" content="">
<meta name="og:description" content="">
@endpush
@push('styles')
<style type="text/css">
.book-img img{
	width: 100%;
	height: 370px;
	padding-bottom: 10px;
}
.book{
	overflow: hidden;
	display: block;
	box-shadow: 0 0px 4px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	padding: 15px;
	margin: 0px 15px;
	height: 480px;
	transition: box-shadow 0.3s ease-in-out;
}
</style>
@endpush
@section('content')
	<section id="headline">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-5">
					<p id="page-title" class="h1">@lang('text.publication')</p>
				</div>

			</div>
		</div>
	</section>

	<main role="main">
		<section id="s-portfolio" class="section transparent">
			<div class="container">
				@foreach ($result as $info)
					<div class="col-xs-12 col-sm-6 col-md-3 book">
						<div class="book-img">
								<a href="{{ $info->file_url }}" target="_blank"><img src="{{ $info->featured_image }}" alt="demo" /></a>
						</div>
						<div class="description">
							<h3 class="h4 title center"><a href="{{ $info->file_url }}" target="_blank">{{ $info->getTranslatedAttribute('title', App::getLocale()) }}</a></h3>
							<p> {{ $info->getTranslatedAttribute('description', App::getLocale()) }}</p>
						</div>
					</div>
				@endforeach

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
