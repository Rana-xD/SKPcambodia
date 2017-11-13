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
						<p id="page-title" class="h1">@lang('text.law')</p>
					</div>
				</div>
			</div>
		</section>

		<main role="main">
			<section class="section transparent">
				<div class="container">

					<div class="col-xs-12 col-md-6">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

							@foreach ($lefts as $left)
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading{{$left->id}}">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$left->id}}" aria-expanded="false" aria-controls="collapse{{ $left->id }}"><i class="fa fa-folder-open"></i> {{ $left->name }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{ $left->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $left->id }}">
										 <div class="panel-body">
											 @foreach ($left->files as $file)
											 <li class="file-item">
												 <a class="download" href="PDF/storage/{{ $file->file_url }}"><i class="fa fa-download"></i></a>
												 <a class="view" href="storage/{{ $file->file_url }}" target="_blank">{{ $file->name }}.pdf</a>
											 </li>
											 @endforeach
										 </div>
                            </div>
                        </div>
												@endforeach
                    </div>
					</div>


					<div class="col-xs-12 col-md-6">
						<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
							@foreach ($rights as $right)
								<div class="panel panel-default">
									 <div class="panel-heading" role="tab" id="heading{{ $right->id }}">
										  <h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse{{ $right->id }}" aria-expanded="false" aria-controls="collapse{{ $right->id }}"><i class="fa fa-folder-open"></i>{{ $right->name }}
												</a>
										  </h4>
									 </div>
									 <div id="collapse{{ $right->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $right->id }}">
										 <div class="panel-body">
											 @foreach ($right->files as $file)
											 <li class="file-item">
												 <a class="download" href="PDF/storage/{{ $file->file_url }}"><i class="fa fa-download"></i></a>
												 <a class="view" href="storage/{{ $file->file_url }}" target="_blank">{{ $file->name }}.pdf</a>
											 </li>
											 @endforeach
										 </div>
									 </div>
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
			$('.accordion-heading h3').on('click', function(){
				var target = $(this).attr('data-target');
				var group = $(target).attr('data-group');
				$('.accordion-body.active').not('.accordion-body.active[data-group="'+group+'"]').not(target).removeClass('active');
				$(target).toggleClass('active');
			});
		});
	</script>
	@endsection
