@extends('visitor.layouts.main')

@section('title', 'Contact Information')

@push('meta')
<meta name="description" content="">
<meta name="keyword" content="">
<meta property="og:url" content="http://www.skpcambodia.com/contact" />
<meta name="og:type" content="">
<meta name="og:title" content="Contact Information">
<meta name="og:image" content="">
<meta name="og:description" content="Contact Information of SK &amp; P Cambodia Law Group">
@endpush
@push('styles')
<style type="text/css">
.red{
	background-color: red;
}
</style>
@endpush
@section('content')
		<section id="headline">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<p id="page-title" class="h1">@lang('text.Get_in_touch_with_us')</p>
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
								<h2>@lang('text.contact_information')</h2>

								<div class="contact-item_info">
									<article>
										<h4>@lang('text.Address')</h4>
										@if(App::getLocale() == 'en')
											{{ Voyager::setting('company_address_en') }}
										@endif
										@if(App::getLocale() == 'kh')
											{{ Voyager::setting('company_address_kh') }}
										@endif
										@if(App::getLocale() == 'ch')
											{{ Voyager::setting('company_address_ch') }}
										@endif
									</article>

									<article>
										<h4>@lang('text.Phone&Fax')</h4>
										<strong>{{ Voyager::setting('company_tel') }}</strong><br />
										<strong>{{ Voyager::setting('company_fax') }}</strong>
									</article>

									<article>
										<strong>@lang('text.Email'): </strong><a href="mailto:info@skpcambodia.com">{{ Voyager::setting('site_email') }}</a><br />
										<strong>@lang('text.Website'): </strong><a href="http://skpcambodia.com/">{{ Voyager::setting('site_domain') }}</a><br />
									</article>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-7 col-lg-7 col-lg-offset-1">
							<div class="contact-item">
								<h2>@lang('text.contact_us')</h2>

								<form action="mail" id="contactForm" method="post">
									{{ csrf_field() }}
									<label class="input-wrp">
										<input type="text" placeholder="@lang('text.Name')" name="name" class="require"/>
										<span class="spanStyle"></span>
									</label>

									<label class="input-wrp">
										<input type="email" placeholder="@lang('text.Email')" name="email" class="require"/>
										<span class="spanStyle"></span>
									</label>

									<label class="input-wrp">
										<input type="text" placeholder="@lang('text.Phone')" name="phone" class="require"/>
										<span class="spanStyle"></span>
									</label>

									<label class="input-wrp">
										<textarea placeholder="@lang('text.Your_message')" name="message"></textarea>
										<span class="spanStyle"></span>
									</label>

									<button class="custom-btn small dark-color submit" type="submit" data-text="Submit"><span>@lang('text.Submit')</span></button>
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
	$(document).ready(function() {
				$('.submit').click(function(event) {
					var flag = false;
					$('.require').each(function (i, el) {
						var data = $(el).val();
						// console.log(i + ': ' + data);
						var len = data.length;
						if (len<1) {
							flag = true;
							$(this).parent().find('span').addClass('red');
						}
					});
					if(flag){
						alert("Please Input Required Fields!!!");
						event.preventDefault();
						return;
					}else{
						$(this).submit();
					}

				});

				$('input').on('keyup keydown keypress change paste', function() {
				    if ($(this).val() == '') {
				        // $('.spanStyle').addClass('red');
						  $(this).parent().find('span').addClass('red');
				    } else {
				        $(this).parent().find('span').removeClass('red');
				    }
				});
			});
	</script>
	@endsection
