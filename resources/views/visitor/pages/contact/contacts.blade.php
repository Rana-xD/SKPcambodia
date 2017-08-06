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

			<section class="s-partners partners-style-1">
				<div class="container">
					<div class="bxslider-container">
						<ul class="bxslider" data-slidewidth="100" data-minslides="2" data-maxslides="8" data-moveslides="2" data-slidemargin="30" data-auto="true" data-speed="500" data-pager="false" data-prevselector="#partners-slide-prev-1" data-nextselector="#partners-slide-next-1">
							<li class="slide"><img src="../img/partners_img/1.png" alt="demo" /></li>
							<li class="slide"><img src="../img/partners_img/2.png" alt="demo" /></li>
							<li class="slide"><img src="../img/partners_img/3.png" alt="demo" /></li>
							<li class="slide"><img src="../img/partners_img/4.png" alt="demo" /></li>
							<li class="slide"><img src="../img/partners_img/5.png" alt="demo" /></li>
							<li class="slide"><img src="../img/partners_img/6.png" alt="demo" /></li>
							<li class="slide"><img src="../img/partners_img/7.png" alt="demo" /></li>
							<li class="slide"><img src="../img/partners_img/8.png" alt="demo" /></li>
						</ul>

						<span id="partners-slide-prev-1" class="control-btn control-btn-style-2 prev-btn icon-left"></span>
						<span id="partners-slide-next-1" class="control-btn control-btn-style-2 next-btn icon-right"></span>
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
			$('#myForm').validate();
			var send = @php
				echo $send;
			@endphp;
			if(send==1)
			{
				swal("Thanks You!!!", "We will contact you soon")
			}
		});
	</script>
	@endsection