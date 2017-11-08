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

</style>
@endpush
@section('content')
		<section id="headline">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-5">
						<p id="page-title" class="h1">Services</p>
					</div>
				</div>
			</div>
		</section>

		<main role="main">

			<section class="section transparent">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<p>
								<strong>We have built our reputation by providing clients with exceptional creative thinking, and a deep commitment to solving their problems. We are committed to providing exceptional service to our clients in a cost-effective manner.</strong>
							</p>

							<p>
								We have a team of experts, include attorneys, professors, researchers and translators/ interpreters on top of our advisers and support staff. We are the experts that are committed to provide legal, research and other services of international standards in the Kingdom of Cambodia. Our attorneys have experience in government, UN agencies and legal NGOs. SK & P Cambodia Law Firm's team works in a democratic and friendly environment. The firm's major decisions are made by consensus, and all attorneys are encouraged to participate in firm governance.
							</p>
						</div>
					</div>
				</div>
			</section>

			<section id="s-services" class="section transparent">
				<div class="container">
					<div class="s-title">
						<h2>We Are Effective In<br />Such Areas Of Practices</h2>

						<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus</p>
					</div>

					<div class="services-container services-style-1">
						<div class="services-container--inner">
							@foreach($services->chunk(3) as $service_content)
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
							@endforeach
						</div>
					</div>
				</div>
			</section>

			<!--Translation Service-->
			<section class="section transparent">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
							<h2>Translation and Interpretation Service</h2>

							<img class="img-responsive visible-xs" src="../img/img_1.png" alt="demo" >

							<p>
								<strong>SK &amp; P Cambodia Law Firm provides the following translation/interpretation services:</strong>
							</p>

							<p>
								<i class="fa fa-check"></i> Translation of all kinds of documents relating to political, social, economic and cultural matters; human rights,; education; law; and etc. from English to Khmer and vice versa<br/>
								<i class="fa fa-check"></i> Simultaneous/consecutive translation for workshop/conference/meeting relating to political, social, economic and cultural matters; human rights; education; law; and etc. from English to Khmer and vice versa<br/>
							</p>
							<p><strong>Note:</strong> One page is 300 word counts in English or 1,500 Khmer characters without space</p>
						</div>

						<div class="col-xs-12 col-sm-4 col-md-6">
							<h3 style="text-align:center">Document Translation</h3>
							<table class="table table-bordered">
								<tr>
									<th colspan="3" class="table_title">English - Khmer / Khmer - English</th>
								</tr>

								<tr>
									<th>1 - 10 Pages</th>
									<th>11 - 50 Pages</th>
									<th>50+ Pages</th>
								</tr>
								<tr>
									<td>12 USD</td>
									<td>11 USD</td>
									<td>10 USD</td>
								</tr>
							</table>

							<h3 style="text-align:center">Interpretation</h3>
							<table class="table table-bordered">
								<tr>
									<th colspan="2" class="table_title">Simultaneous</th>
									<th colspan="2" class="table_title">Consecutive</th>
								</tr>
								<tr>
									<th>1/2 Day</th>
									<th>Full Day</th>
									<th>1/2 Day</th>
									<th>Full Day</th>
								</tr>
								<tr>
									<td>150 USD</td>
									<td>250 USD</td>
									<td>120 USD</td>
									<td>200 USD</td>
								</tr>
							</table>
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
