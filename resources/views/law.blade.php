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
.file-item{
	list-style: none;
	padding: 5px;
}
.files-wrapper .accordion-body .file-item{
	position: relative;
	float: left;
	display: block;
	width: 100%;
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
	color: #4F86C6;
	font-size: 18px;
}
</style>
@endpush
@section('content')
		<section id="headline">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<p id="page-title" class="h1">Laws &amp; Regulations of Kingdom of Cambodia</p>
					</div>
				</div>
			</div>
		</section>

		<main role="main">
			<section class="section transparent">
				<div class="container">
					<div class="col-xs-12 col-md-6">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-folder-open"></i> Adoption
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/Adoption-Prakas-N0-074_Eng"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/Adoption-Prakas-N0-074_Eng.pdf" target="_blank">Adoption Prakas-N0-074_Eng.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/Announcement-078-on-Number-of-Agencies-E-091210"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/Announcement-078-on-Number-of-Agencies-E-091210.pdf" target="_blank">Announcement 078 on Number of Agencies-E 091210.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/Certificate-of-Adoption-Prakas-E-161208"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/Certificate-of-Adoption-Prakas-E-161208.pdf" target="_blank">Certificate of Adoption-Prakas-E-161208.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/HagueConv-Adoption.Kh_Unicode_"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/HagueConv-Adoption.Kh_Unicode_.pdf" target="_blank">HagueConv Adoption.Kh_Unicode_.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/Inter-country-Adaption-Law-2009-Kh"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/Inter-country-Adaption-Law-2009-Kh.pdf" target="_blank">Inter-country Adaption Law 2009-Kh.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/Inter-country-Adoption-Law-2009-Eng"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/Inter-country-Adoption-Law-2009-Eng.pdf" target="_blank">Inter-country Adoption Law-2009-Eng.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/Inter-country-Adoption-Subdecree-No-29-Eng-2001"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/Inter-country-Adoption-Subdecree-No-29-Eng-2001.pdf" target="_blank">Inter-country Adoption-Subdecree No 29-Eng 2001.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/Law-on-Accession2-HagueConv-E-220107"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/Law-on-Accession2-HagueConv-E-220107.pdf" target="_blank">Law on Accession2 HagueConv-E-220107.pdf</a>
											  </li>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-folder-open"></i> Agriculture Forest Fishery
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
											  <li class="file-item">
												  <a class="download" href="PDF/Agriculture_Forest_Fishery/Law on Fishery_2006_Kh"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Agriculture_Forest_Fishery/Law on Fishery_2006_Kh.pdf" target="_blank">Law on Fishery_2006_Kh.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Agriculture_Forest_Fishery/Law on Forestry_Kh"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Agriculture_Forest_Fishery/Law on Forestry_Kh.pdf" target="_blank">Law on Forestry_Kh.pdf</a>
											  </li>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-folder-open"></i> Alternative Care
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										 <div class="panel-body">
											 <li class="file-item">
												 <a class="download" href="PDF/Agriculture_Forest_Fishery/Law on Fishery_2006_Kh"><i class="fa fa-download"></i></a>
												 <a class="view" href="PDF/Agriculture_Forest_Fishery/Law on Fishery_2006_Kh.pdf" target="_blank">Law on Fishery_2006_Kh.pdf</a>
											 </li>

											 <li class="file-item">
												 <a class="download" href="PDF/Agriculture_Forest_Fishery/Law on Forestry_Kh"><i class="fa fa-download"></i></a>
												 <a class="view" href="PDF/Agriculture_Forest_Fishery/Law on Forestry_Kh.pdf" target="_blank">Law on Forestry_Kh.pdf</a>
											 </li>
										 </div>
                            </div>
                        </div>
                    </div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									 <div class="panel-heading" role="tab" id="headingFour">
										  <h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"><i class="fa fa-folder-open"></i> Banking &amp; Finance Institutions
												</a>
										  </h4>
									 </div>
									 <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
										  <div class="panel-body">
											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/Adoption-Prakas-N0-074_Eng"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/Adoption-Prakas-N0-074_Eng.pdf" target="_blank">Adoption Prakas-N0-074_Eng.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/Announcement-078-on-Number-of-Agencies-E-091210"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/Announcement-078-on-Number-of-Agencies-E-091210.pdf" target="_blank">Announcement 078 on Number of Agencies-E 091210.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/Certificate-of-Adoption-Prakas-E-161208"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/Certificate-of-Adoption-Prakas-E-161208.pdf" target="_blank">Certificate of Adoption-Prakas-E-161208.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/HagueConv-Adoption.Kh_Unicode_"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/HagueConv-Adoption.Kh_Unicode_.pdf" target="_blank">HagueConv Adoption.Kh_Unicode_.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/Inter-country-Adaption-Law-2009-Kh"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/Inter-country-Adaption-Law-2009-Kh.pdf" target="_blank">Inter-country Adaption Law 2009-Kh.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/Inter-country-Adoption-Law-2009-Eng"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/Inter-country-Adoption-Law-2009-Eng.pdf" target="_blank">Inter-country Adoption Law-2009-Eng.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/Inter-country-Adoption-Subdecree-No-29-Eng-2001"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/Inter-country-Adoption-Subdecree-No-29-Eng-2001.pdf" target="_blank">Inter-country Adoption-Subdecree No 29-Eng 2001.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Adoption/Law-on-Accession2-HagueConv-E-220107"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Adoption/Law-on-Accession2-HagueConv-E-220107.pdf" target="_blank">Law on Accession2 HagueConv-E-220107.pdf</a>
											  </li>
										  </div>
									 </div>
								</div>
								<div class="panel panel-default">
									 <div class="panel-heading" role="tab" id="headingFive">
										  <h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><i class="fa fa-folder-open"></i> Children and Women
												</a>
										  </h4>
									 </div>
									 <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
										  <div class="panel-body">
											  <li class="file-item">
												  <a class="download" href="PDF/Agriculture_Forest_Fishery/Law on Fishery_2006_Kh"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Agriculture_Forest_Fishery/Law on Fishery_2006_Kh.pdf" target="_blank">Law on Fishery_2006_Kh.pdf</a>
											  </li>

											  <li class="file-item">
												  <a class="download" href="PDF/Agriculture_Forest_Fishery/Law on Forestry_Kh"><i class="fa fa-download"></i></a>
												  <a class="view" href="PDF/Agriculture_Forest_Fishery/Law on Forestry_Kh.pdf" target="_blank">Law on Forestry_Kh.pdf</a>
											  </li>
										  </div>
									 </div>
								</div>
								<div class="panel panel-default">
									 <div class="panel-heading" role="tab" id="headingSix">
										  <h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><i class="fa fa-folder-open"></i> Civil &amp; Civil Procedure Law
												</a>
										  </h4>
									 </div>
									 <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
										 <div class="panel-body">
											 <li class="file-item">
												 <a class="download" href="PDF/Agriculture_Forest_Fishery/Law on Fishery_2006_Kh"><i class="fa fa-download"></i></a>
												 <a class="view" href="PDF/Agriculture_Forest_Fishery/Law on Fishery_2006_Kh.pdf" target="_blank">Law on Fishery_2006_Kh.pdf</a>
											 </li>

											 <li class="file-item">
												 <a class="download" href="PDF/Agriculture_Forest_Fishery/Law on Forestry_Kh"><i class="fa fa-download"></i></a>
												 <a class="view" href="PDF/Agriculture_Forest_Fishery/Law on Forestry_Kh.pdf" target="_blank">Law on Forestry_Kh.pdf</a>
											 </li>
										 </div>
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
