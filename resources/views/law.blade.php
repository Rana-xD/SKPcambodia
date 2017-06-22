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
.files-wrapper{
	position: relative;
	width: 100%;
}
.files-wrapper .inner{
	position: relative;
	width: 100%;
}
.files-wrapper .accordion{
	position: relative;
	width: 50%;
	float: left;
	margin-bottom: 20px;
	padding: 20px;

}

.files-wrapper .accordion-heading{
	display: block;
	position: relative;
	width: 100%;
	text-align: left;
	background: #2b90d9;
	-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
	box-shadow: 0 1px 1px rgba(0, 0, 0, .05);

}

.files-wrapper .accordion-heading h3{
	padding: 15px 25px;
	display: block;
	margin: 0;
	font-size: 18px;
	color: #fff;
	cursor: pointer;
}

.files-wrapper .accordion-heading i{
	margin-right: 7px;
	font-size: 2.1rem;
	vertical-align: bottom;
}

.files-wrapper .accordion-body{
	position: relative;
	width: 100%;
	float: left;
	height: 0;
	overflow: hidden;
	padding: 0px;
	background: #f1f1f1;
	transition: height 0.45s linear;
	-webkit-transition: height 0.45s linear;
	-moz-transition: height 0.45s linear;
	-ms-transition: height 0.45s linear;
	-o-transition: height 0.45s linear;
}

.files-wrapper .accordion-body.active{
	height: auto;
	border-top: 1px solid #d3d3d3;

}


.files-wrapper .accordion-body .file-item{
	position: relative;
	float: left;
	display: block;
	width: 100%;
	padding: 12px 30px;
	transition: all 0.27s ease;
	-webkit-transition: all 0.27s ease;
	-moz-transition: all 0.27s ease;
	-ms-transition: all 0.27s ease;
	-o-transition: all 0.27s ease;

}

.file-item a{
	text-decoration: none;
	color: #534847;
	display: inline-block;
	font-size: 16px;
	font-weight: 500;
}

.file-item .download{
	transition: transform 0.25s ease;
	-webkit-transition: transform 0.25s ease;
	-moz-transition: transform 0.25s ease;
	-ms-transition: transform 0.25s ease;
	-o-transition: transform 0.25s ease;
}
.file-item .view{
	transition: all 0.33s ease;
	-webkit-transition: all 0.33s ease;
	-moz-transition: all 0.33s ease;
	-ms-transition: all 0.33s ease;
	-o-transition: all 0.33s ease;
}
.file-item .download:hover i{
	transform: scale(1.1, 1.1);
	-webkit-transform: scale(1.1, 1.1);
	-moz-transform: scale(1.1, 1.1);
	-ms-transform: scale(1.1, 1.1);
	-o-transform: scale(1.1, 1.1);
}
.file-item .view:hover{
	text-decoration: underline;
}
.file-item:hover{
	background: #F0E5DE;
}

.file-item i{
	margin-right: 15px;
	color: #60c5ba;
	font-size: 18px;
}
</style>
@endpush
@section('content')
		<section id="headline">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-5">
						<p id="page-title" class="h1">Practices</p>
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
			<section class="section transparent">
				<div class="container">
					<div class="hidden-xs col-MB-20"><h2>Practice Area</h2></div>

					<div class="visible-xs col-md-MB-20"><h2 class="text-center">Practice Area</h2></div>

					<div class="files-wrapper clearfix">
						<div class="inner clearfix">

							<div class="accordion clearfix">
								<div class="accordion-heading">
									<h3 data-target="#filecontainer1"><i class="fa fa-folder-open"></i> Adoption</h3>
								</div>
								<div id="filecontainer1" data-group="group1" class="accordion-body clearfix">

									<li class="file-item">
										<a class="download" href="PDF/Adoption/Adoption-Prakas-N0-074_Eng"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/Adoption-Prakas-N0-074_Eng.pdf" target="_blank">Adoption Prakas-N0-074_Eng</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Adoption/Announcement-078-on-Number-of-Agencies-E-091210"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/Announcement-078-on-Number-of-Agencies-E-091210.pdf" target="_blank">Announcement 078 on Number of Agencies-E 091210</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Adoption/Certificate-of-Adoption-Prakas-E-161208"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/Certificate-of-Adoption-Prakas-E-161208.pdf" target="_blank">Certificate of Adoption-Prakas-E-161208</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Adoption/HagueConv-Adoption.Kh_Unicode_"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/HagueConv-Adoption.Kh_Unicode_.pdf" target="_blank">HagueConv Adoption.Kh_Unicode_</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Adoption/Inter-country-Adaption-Law-2009-Kh"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/Inter-country-Adaption-Law-2009-Kh.pdf" target="_blank">Inter-country Adaption Law 2009-Kh</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Adoption/Inter-country-Adoption-Law-2009-Eng"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/Inter-country-Adoption-Law-2009-Eng.pdf" target="_blank">Inter-country Adoption Law-2009-Eng</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Adoption/Inter-country-Adoption-Subdecree-No-29-Eng-2001"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/Inter-country-Adoption-Subdecree-No-29-Eng-2001.pdf" target="_blank">Inter-country Adoption-Subdecree No 29-Eng 2001</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Adoption/Law-on-Accession2-HagueConv-E-220107"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/Law-on-Accession2-HagueConv-E-220107.pdf" target="_blank">Law on Accession2 HagueConv-E-220107</a>
									</li>

								</div>
							</div>

							<div class="accordion clearfix">
								<div class="accordion-heading">
									<h3 data-target="#filecontainer2"><i class="fa fa-folder-open"></i> Agriculture_Forest_Fishery</h3>
								</div>
								<div id="filecontainer2" data-group="group1" class="accordion-body clearfix">
									<li class="file-item">
										<a class="download" href="PDF/Agriculture_Forest_Fishery/Law on Fishery_2006_Kh"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Agriculture_Forest_Fishery/Law on Fishery_2006_Kh.pdf" target="_blank">Law on Fishery_2006_Kh</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Agriculture_Forest_Fishery/Law on Forestry_Kh"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Agriculture_Forest_Fishery/Law on Forestry_Kh.pdf" target="_blank">Law on Forestry_Kh</a>
									</li>


								</div>
							</div>

						</div>
					</div>
					<div class="files-wrapper clearfix">
						<div class="inner clearfix">

							<div class="accordion clearfix">
								<div class="accordion-heading">
									<h3 data-target="#filecontainer3"><i class="fa fa-folder-open"></i> Adoption</h3>
								</div>
								<div id="filecontainer3" data-group="group2" class="accordion-body clearfix">

									<li class="file-item">
										<a class="download" href="PDF/Adoption/Adoption-Prakas-N0-074_Eng"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/Adoption-Prakas-N0-074_Eng.pdf" target="_blank">Adoption Prakas-N0-074_Eng</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Adoption/Announcement-078-on-Number-of-Agencies-E-091210"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/Announcement-078-on-Number-of-Agencies-E-091210.pdf" target="_blank">Announcement 078 on Number of Agencies-E 091210</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Adoption/Certificate-of-Adoption-Prakas-E-161208"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/Certificate-of-Adoption-Prakas-E-161208.pdf" target="_blank">Certificate of Adoption-Prakas-E-161208</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Adoption/HagueConv-Adoption.Kh_Unicode_"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/HagueConv-Adoption.Kh_Unicode_.pdf" target="_blank">HagueConv Adoption.Kh_Unicode_</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Adoption/Inter-country-Adaption-Law-2009-Kh"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/Inter-country-Adaption-Law-2009-Kh.pdf" target="_blank">Inter-country Adaption Law 2009-Kh</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Adoption/Inter-country-Adoption-Law-2009-Eng"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/Inter-country-Adoption-Law-2009-Eng.pdf" target="_blank">Inter-country Adoption Law-2009-Eng</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Adoption/Inter-country-Adoption-Subdecree-No-29-Eng-2001"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/Inter-country-Adoption-Subdecree-No-29-Eng-2001.pdf" target="_blank">Inter-country Adoption-Subdecree No 29-Eng 2001</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Adoption/Law-on-Accession2-HagueConv-E-220107"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Adoption/Law-on-Accession2-HagueConv-E-220107.pdf" target="_blank">Law on Accession2 HagueConv-E-220107</a>
									</li>

								</div>
							</div>

							<div class="accordion clearfix">
								<div class="accordion-heading">
									<h3 data-target="#filecontainer4"><i class="fa fa-folder-open"></i> Agriculture_Forest_Fishery</h3>
								</div>
								<div id="filecontainer4" data-group="group2" class="accordion-body clearfix">
									<li class="file-item">
										<a class="download" href="PDF/Agriculture_Forest_Fishery/Law on Fishery_2006_Kh"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Agriculture_Forest_Fishery/Law on Fishery_2006_Kh.pdf" target="_blank">Law on Fishery_2006_Kh</a>
									</li>

									<li class="file-item">
										<a class="download" href="PDF/Agriculture_Forest_Fishery/Law on Forestry_Kh"><i class="fa fa-download"></i></a>
										<a class="view" href="PDF/Agriculture_Forest_Fishery/Law on Forestry_Kh.pdf" target="_blank">Law on Forestry_Kh</a>
									</li>


								</div>
							</div>

						</div>
					</div>

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
			$('.accordion-heading h3').on('click', function(){
				var target = $(this).attr('data-target');
				var group = $(target).attr('data-group');
				$('.accordion-body.active').not('.accordion-body.active[data-group="'+group+'"]').not(target).removeClass('active');
				$(target).toggleClass('active');
			});
		});
	</script>
	@endsection
