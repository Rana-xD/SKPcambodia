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
	margin-bottom: 2px;

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
					<p id="page-title" class="h1">@lang('text.training')</p>
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
                @foreach($results as $key => $result)
                        <a href="#article{{ $result->id }}" data-toggle="tab" aria-controls="article{{ $result->id }}" role="tab" >
									<li class="list-group-item @if($key==0){{ 'selected' }}@endif">
      								<p class="title-training">{{ $result->getTranslatedAttribute('title', $locale) }}</p>
      								<span class="date">{{ $result->start_date }}</span>
                           </li>
								</a>
                @endforeach
					</ul>
					</div>
					<div class="col-md-7 tab-content">
            @foreach($results as $key=> $result)
						<div role="tabpanel" class="tab-pane @if($key==0){{ 'active' }}@endif" id="article{{$result->id}}">
							<article class="panel-default">
								<h2 class="title text-center">{{ $result->getTranslatedAttribute('title', $locale) }}</h2>
								<div class="panel-body">
									<div class="row">
	                            <div class="textbox">
                                  {!! $result->getTranslatedAttribute('content', $locale) !!}
                               </div>
									</div>
		                  </div>
		                </article>
		            </div>
                @endforeach
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
