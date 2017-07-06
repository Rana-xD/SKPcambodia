@extends('layouts.main')

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
					<p id="page-title" class="h1">Employments &amp; Internships</p>
				</div>
			</div>
		</div>
	</section>

	<main role="main">
		<section id="s-404" class="section text-center">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-md-offset-2">
						<img class="img-responsive center-block" src="../img/404.png" alt="404" />

						<p class="title">Sorry!</p>

						<p>There is no interships currently available yet.</p>

						<a class="custom-btn medium dark-color" href="/" data-text="Back to Home"><span>Back to Home</span></a>
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
