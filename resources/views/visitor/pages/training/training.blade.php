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
.tab-content>.tab-pane {
    display: none
}
.tab-content>.active {
    display: block
}
.tab-content{
   box-shadow: 2px 2px 4px rgba(34, 34, 34, 0.12);
}

.list-group .selected::after {
	content: "";
	position: relative;
   display: block;
	width: 0;
	height: 0;
	top: -20px;
	right: -40px;
   float: right;
	transform: rotate(45deg);
	border: 20px solid;
	border-color: transparent transparent white white;

}
.list-group-item {
	line-height: 1.1;
	font-size: 18px;
	font-weight: 400;
	font-family: Rufina, serif;
	background-color: #e4e4e4;
	padding: 10px 20px;
	margin-bottom: .1em;

}
.panel-default .title{
   margin-top: 20px;
}
.title-training{
margin-bottom: 0px;
font-family: 'Raleway', sans-serif;
}

.date{
	font-size: 11px;
	font-family: 'Raleway', sans-serif;
}

.test{
   position: absolute;
}
.circlelist{
   list-style-type: circle;
   padding-left: 15px;
}

</style>
@endpush
@section('content')
	<section id="headline">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<p id="page-title" class="h1">Trainings &amp; Consultations</p>
				</div>
			</div>
		</div>
	</section>

	<main role="main">
		<section class="section transparent">
			<div class="container">
				<div class="row" id="nav-row">
			    	<div class="col-md-5" >
						<ul class="list-group nav" role="tablist">

                        <a href="#article1" data-toggle="tab" aria-controls="article1" role="tab" >
									<li class="list-group-item selected">
      								<p class="title-training">Training on Tobacco Control</p>
      								<span class="date">04 June, 2012 - at SK&amp;P Cambodia Law Group Office</span>
                           </li>
								</a>

                        <a href="#article2" data-toggle="tab" aria-controls="article2" role="tab" >
									<li class="list-group-item">
      								<p class="title-training">Adoption Consultation Announcement</p>
      								<span class="date">27 April, 2012</span>
                           </li>
								</a>

                        <a href="#article3" data-toggle="tab" aria-controls="article3" role="tab" >
									<li class="list-group-item">
      								<p class="title-training">Training on Inter-Country Adoption</p>
      								<span class="date">August, 2011</span>
                           </li>
								</a>

						</ul>
					</div>
					<div class="col-md-7 tab-content">
						<div role="tabpanel" class="tab-pane active" id="article1">
							<article class="panel-default">
								<h2 class="title text-center">Training on Tobacco Control</h2>
								<div class="panel-body">
									<div class="row">
	                            <div class="textbox">
	                                 <p>The SKP CLG conducted a half day sensitization training on tobacco control in the Kingdom of Cambodia and relevant legal framework including progress in relation to the development of legislative framework. The training also covered briefing on the Country Report of the 2011 National Adult Tobacco Survey of Cambodia (NATSC, 2011). There are 10 participants including attorneys and legal assistants working for legal NGOs, UN agency and one law student.</p>
                                    <p>Status and legal framework concerning tobacco control:</p>
                                    <ul class="circlelist">
                								<li>Framework Convention on Tobacco Control (FCTC): Cambodia ratified on 15/11/2005</li>
                								<li>Constitutional Provision: The health of the people shall be guaranteed. The State shall give full consideration to
                                          disease prevention and medical treatment. Poor citizens shall receive free medical consultation in public
                                          hospitals, infirmaries and maternities (Article 72)</li>
                								<li>Draft Law on Tobacco Control : at the Council of Ministers</li>
                                       <li>Sub-decree # 35 of 24/02/2010 on Measures for the Banning of Tobacco Product Advertising</li>
                								<li>Draft sub-decree on Smoke-Free Environment  was initiated in 1st quarter 2012</li>
                                       <li>Other regulations re; Smoke Free were issued by 11 competent Ministries and Institutions : Ministry of Information</li>
             							   </ul>
                                    <p>(2010), Ministry of Agriculture (2010), Ministry of Interior (2009), MoEF (2007), MoEnvironment (2007),
                                       MoIndustry(2006), MoWA(2001), MoCult(2000), MoEYS(2000), CoM (1994) and Cambodian Red Cross</p>
                                    <strong class="pull-right">Author: Keo Sokea</strong></br>
                                    <strong class="pull-right">Friday, 21 October 2011 21:17</strong>
                               </div>
									</div>
		                  </div>
		                </article>
		            </div>

						<div role="tabpanel" class="tab-pane " id="article2">
                     <article class="panel-default">
   							<h2 class="title text-center">Adoption Consultation Announcement</h2>
   							<div class="panel-body">
   								<div class="row">
                               <div class="textbox">
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, corrupti, ullam, voluptatum provident deserunt natus reprehenderit inventore tempore aut neque cupiditate aspernatur. Nihil, sit, quibusdam, aliquid dolor a culpa officiis quisquam rerum fugiat magnam voluptatum ducimus expedita vel molestias unde ipsum atque ipsam optio consequatur incidunt animi corrupti sed aut!
                               </div>
   								</div>
   	                  </div>
   	               </article>
			         </div>
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
         $('.list-group li').click(function() {
            $('.list-group li').removeClass('selected');
            $(this).addClass('selected');
         });
      });
	</script>
	@endsection
