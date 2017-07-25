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
