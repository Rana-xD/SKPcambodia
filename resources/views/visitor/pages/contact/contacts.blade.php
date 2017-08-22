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
						<p id="page-title" class="h1">Get in touch with us</p>
					</div>
				</div>
			</div>
		</section>

		<main role="main">
			<section id="s-contact" class="section transparent">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-5 col-lg-4">
							<div class="contact-item">
								<h2>Contact Information</h2>

								<div class="contact-item_info">
									<article>
										<h4>Address</h4>
										House C38, Street Cheerfullness, Khan Sensok, Phnom Penh Capital (Canadia City, Ratana Plaza area, Off Russian Blvd 50 meters)<br />
									</article>

									<article>
										<h4>Phone & Fax</h4>
										<strong>H/P: +(855) 023 883 885</strong><br />
										<strong>Fax: +(855) 023 883 885</strong>
									</article>

									<article>
										<strong>Email: </strong><a href="mailto:info@skpcambodia.com">info@skpcambodia.com</a><br />
										<strong>Website: </strong><a href="http://skpcambodia.com/">www.skpcambodia.com</a><br />
									</article>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-7 col-lg-7 col-lg-offset-1">
							<div class="contact-item">
								<h2>Contact Us</h2>

								<form action="mail" id="myForm" method="post">
									{{ csrf_field() }}
									<label class="input-wrp">
										<input type="text" placeholder="Name" name="name"/>
										<span></span>
									</label>

									<label class="input-wrp">
										<input type="email" placeholder="E-mail" name="email"/>
										<span></span>
									</label>

									<label class="input-wrp">
										<input type="text" placeholder="Phone" name="phone"/>
										<span></span>
									</label>

									<label class="input-wrp">
										<textarea placeholder="Your message" name="message"></textarea>
										<span></span>
									</label>

									<button class="custom-btn small dark-color" type="submit" data-text="Submit"><span>Submit</span></button>
								</form>
							</div>
						</div>
					</div>

					<iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJEc400QpRCTEROTerQE7JFF0&key=AIzaSyD11aEIKVbapCNk0zA5GXUyQpWH3XW8ax0" width="100%" height="450" frameborder="0" style="border:0"></iframe>
				</div>
			</section>
		</main>

	@endsection

	@push('scripts')

	@endpush

	@section('scripts')
	<script>
		
	</script>
	@endsection
