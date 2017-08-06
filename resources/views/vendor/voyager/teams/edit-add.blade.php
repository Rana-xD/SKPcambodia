@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@if(isset($dataTypeContent->id))
    @section('page_title','Edit '.$dataType->display_name_singular)
@else
    @section('page_title','Add '.$dataType->display_name_singular)
@endif

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> @if(isset($dataTypeContent->id)){{ 'Edit' }}@else{{ 'New' }}@endif {{ $dataType->display_name_singular }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">

                    <div class="panel-heading">
                        <h3 class="panel-title">@if(isset($dataTypeContent->id)){{ 'Edit' }}@else{{ 'Add New' }}@endif {{ $dataType->display_name_singular }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form"
                            class="form-edit-add"
                            action="@if(isset($dataTypeContent->id)){{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->id) }}@else{{ route('voyager.'.$dataType->slug.'.store') }}@endif"
                            method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        @if(isset($dataTypeContent->id))
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- If we are editing -->
                            @if(isset($dataTypeContent->id))
                                <?php $dataTypeRows = $dataType->editRows; ?>
                            @else
                                <?php $dataTypeRows = $dataType->addRows; ?>
                            @endif

                            <!-- @foreach($dataTypeRows as $row)
                                <div class="form-group @if($row->type == 'hidden') hidden @endif">
                                    <label for="name">{{ $row->display_name }}</label>
                                    @include('voyager::multilingual.input-hidden-bread-edit-add')
                                    {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}

                                    @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                                        {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                                    @endforeach
                                </div>
                            @endforeach -->


                            <!-- If we are editing -->

                            <div class="form-group ">
                                <label for="name">Firstname</label>
                                <!-- @include('voyager::multilingual.input-hidden-bread-edit-add', ['dataTypeContent'=>$dataTypeContent,'']) -->
                                <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="@if(isset($dataTypeContent->firstname)){{ old('firstname', $dataTypeContent->firstname) }}@elseif(isset($options->default)){{ old('firstname', $options->default) }}@else{{ old('firstname') }}@endif">
                            </div>
                            <div class="form-group ">
                                <label for="name">Lastname</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="@if(isset($dataTypeContent->lastname)){{ old('lastname', $dataTypeContent->lastname) }}@elseif(isset($options->default)){{ old('lastname', $options->default) }}@else{{ old('lastname') }}@endif">
                            </div>
                            <div class="form-group ">
                                <label for="name">Fullname</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="@if(isset($dataTypeContent->fullname)){{ old('fullname', $dataTypeContent->fullname) }}@elseif(isset($options->default)){{ old('fullname', $options->default) }}@else{{ old('fullname') }}@endif">
                            </div>
                            <div class="form-group ">
                                <label for="name">Position</label>
                                <input type="text" class="form-control" name="position" placeholder="Position" value="@if(isset($dataTypeContent->position)){{ old('position', $dataTypeContent->position) }}@elseif(isset($options->default)){{ old('position', $options->default) }}@else{{ old('position') }}@endif">
                            </div>
                            <div class="form-group ">
                                <label for="name">Contact</label>
                                <input type="text" class="form-control" name="contact" placeholder="Contact" value="@if(isset($dataTypeContent->contact)){{ old('contact', $dataTypeContent->contact) }}@elseif(isset($options->default)){{ old('contact', $options->default) }}@else{{ old('contact') }}@endif">
                            </div>
                            <div class="form-group ">
                                <label for="name">Email</label>
                                <input type="hidden" data-i18n="true" name="email_i18n" id="email_i18n" value="">
                                <input type="text" class="form-control" name="email" placeholder="Email" value="@if(isset($dataTypeContent->position)){{ old('position', $dataTypeContent->position) }}@elseif(isset($options->default)){{ old('position', $options->default) }}@else{{ old('position') }}@endif">
                            </div>
                            <div class="form-group ">
                                <label for="name">Social Media</label>
                                <textarea class="form-control" name="social_media"></textarea>
                            </div>
                            <div class="form-group ">
                                <label for="name">Education</label>
                                <textarea class="form-control" name="education"></textarea>
                            </div>
                            <div class="form-group ">
                                <label for="name">Experience</label>
                                <textarea class="form-control" name="experience"></textarea>
                            </div>
                            <div class="form-group ">
                                <label for="name">Profile Pic</label>
                                <input type="file" name="profile_pic">
                            </div>
                            <div class="form-group ">
                                <label for="name">Bio</label>
                                <textarea class="form-control" name="bio"></textarea>
                            </div>
                            <div class="form-group ">
                                <label for="name">Quote</label>
                                <textarea class="form-control" name="quote"></textarea>
                            </div>

                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary save">@if(isset($dataTypeContent->id)){{ 'Update' }}@else {{ 'Save' }} @endif</button>
                        </div>
                    </form>

                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
                            enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        <input name="image" id="upload_file" type="file"
                                 onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-danger" id="confirm_delete_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="voyager-warning"></i> Are You Sure</h4>
                </div>

                <div class="modal-body">
                    <h4>Are you sure you want to delete '<span class="confirm_delete_name"></span>'</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete">Yes, Delete it!
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete File Modal -->
@stop

@section('javascript')
    <script>
        var params = {}
        var $image

        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            //Init datepicker for date fields if data-datepicker attribute defined
            //or if browser does not handle date inputs
            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.type != 'date' || elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                }
            });

            @if ($isModelTranslatable)
                $('.side-body').multilingual({"editing": true});
            @endif

            $('.side-body input[data-slug-origin]').each(function(i, el) {
                $(el).slugify();
            });

            $('.form-group').on('click', '.remove-multi-image', function (e) {
                $image = $(this).siblings('img');

                params = {
                    slug:   '{{ $dataTypeContent->getTable() }}',
                    image:  $image.data('image'),
                    id:     $image.data('id'),
                    field:  $image.parent().data('field-name'),
                    _token: '{{ csrf_token() }}'
                }

                $('.confirm_delete_name').text($image.data('image'));
                $('#confirm_delete_modal').modal('show');
            });

            $('#confirm_delete').on('click', function(){
                $.post('{{ route('voyager.media.remove') }}', params, function (response) {
                    if ( response
                        && response.data
                        && response.data.status
                        && response.data.status == 200 ) {

                        toastr.success(response.data.message);
                        $image.parent().fadeOut(300, function() { $(this).remove(); })
                    } else {
                        toastr.error("Error removing image.");
                    }
                });

                $('#confirm_delete_modal').modal('hide');
            });
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    @if($isModelTranslatable)
        <script src="{{ voyager_asset('js/multilingual.js') }}"></script>
    @endif
    <script src="{{ voyager_asset('lib/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ voyager_asset('js/voyager_tinymce.js') }}"></script>
    <script src="{{ voyager_asset('lib/js/ace/ace.js') }}"></script>
    <script src="{{ voyager_asset('js/voyager_ace_editor.js') }}"></script>
    <script src="{{ voyager_asset('js/slugify.js') }}"></script>
@stop
