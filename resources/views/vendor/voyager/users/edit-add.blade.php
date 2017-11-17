@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admins/css/dashboard.css') }}">
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> @if(isset($dataTypeContent->id)){{ 'Edit' }}@else{{ 'New' }}@endif {{ $dataType->display_name_singular }}
    </h1>
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
                    <form class="form-edit-add" role="form"
                          action="@if(isset($dataTypeContent->id)){{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->id) }}@else{{ route('voyager.'.$dataType->slug.'.store') }}@endif"
                          method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        @if(isset($dataTypeContent->id))
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" class="form-control" name="firstname"
                                    placeholder="Firstname" id="firstname"
                                    value="@if(isset($dataTypeContent->firstname)){{ old('firstname', $dataTypeContent->firstname) }}@else{{old('firstname')}}@endif">
                            </div>

                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" class="form-control" name="lastname"
                                    placeholder="Lastname" id="lastname"
                                    value="@if(isset($dataTypeContent->lastname)){{ old('lastname', $dataTypeContent->lastname) }}@else{{old('lastname')}}@endif">
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Name" id="name"
                                    value="@if(isset($dataTypeContent->name)){{ old('name', $dataTypeContent->name) }}@else{{old('name')}}@endif">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email"
                                       placeholder="Email" id="email"
                                       value="@if(isset($dataTypeContent->email)){{ old('email', $dataTypeContent->email) }}@else{{old('email')}}@endif">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                @if(isset($dataTypeContent->password))
                                    <br>
                                    <small>Leave empty to keep the same</small>
                                @endif
                                <input type="password" class="form-control" name="password"
                                       placeholder="Password" id="password"
                                       value="">
                            </div>

                            <div class="form-group">
                                <label for="phonenumber">Phonenumber</label>
                                <input type="text" class="form-control" name="phonenumber"
                                       placeholder="Phonenumber" id="phonenumber"
                                       value="@if(isset($dataTypeContent->phonenumber)){{ old('phonenumber', $dataTypeContent->phonenumber) }}@else{{old('phonenumber')}}@endif">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address"
                                       placeholder="Address" id="address"
                                       value="@if(isset($dataTypeContent->address)){{ old('address', $dataTypeContent->address) }}@else{{old('address')}}@endif">
                            </div>

                            <div class="form-group">
                                <label for="career">Career</label>
                                <input type="text" class="form-control" name="career"
                                       placeholder="Career" id="career"
                                       value="@if(isset($dataTypeContent->career)){{ old('career', $dataTypeContent->career) }}@else{{old('career')}}@endif">
                            </div>

                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <textarea class="form-control" name="bio"
                                        id="bio">@if(isset($dataTypeContent->bio)){{ old('bio', $dataTypeContent->bio) }}@else{{old('bio')}}@endif</textarea>
                            </div>

                            <!-- <div class="form-group">
                                <label for="password">Avatar</label>
                                @if(isset($dataTypeContent->avatar))
                                    <img src="{{ Voyager::image( $dataTypeContent->avatar ) }}"
                                         style="width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                @endif
                                <input type="file" name="avatar">
                            </div> -->

                            <!-- Featured image field -->
                            <div class="custom-form-group">
                                <div class="file-input-wrapper">
                                    <button class="custom-upload-btn image uploadFile" data-type="image" id="uploadImage"><i class="fa fa-upload"></i> Upload Avatar</button>
                                    <input value="@if(isset($dataTypeContent->avatar)){{ $dataTypeContent->avatar }}@endif" type="hidden" name="avatar" id="txtFeaturedImage" />
                                </div>
                                <div class="imagePreview">
                                    <!-- <p>Image Preview</p> -->
                                    <div id="imagePreviewDiv">
                                        @if(isset($dataTypeContent->avatar))
                                        <img src="{{ $dataTypeContent->avatar }}" style="width:150px; height: auto; margin-bottom: 15px;" />
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="role">User Role</label>
                                <select name="role_id" id="role" class="form-control">
                                    <?php $roles = TCG\Voyager\Models\Role::all(); ?>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}" @if(isset($dataTypeContent) && $dataTypeContent->role_id == $role->id) selected @endif>{{$role->display_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                @if(isset($dataTypeContent) && $dataTypeContent->is_active == 1)
                                    <input type="checkbox" name="is_active" class="toggleswitch" data-on="Active" checked="checked" data-off="Deactive">
                                @else
                                    <input type="checkbox" name="is_active" class="toggleswitch" data-on="Active" data-off="Deactive">
                                @endif
                            </div>  



                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                    <!-- <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
                          enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        <input name="image" id="upload_file" type="file"
                               onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                        {{ csrf_field() }}
                    </form> -->

                </div>
            </div>
        </div>
    </div>
    @includeIf('admin.partials._upload_file')
@stop

@section('javascript')
    <script>
        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();
        });
    </script>
    <script src="{{ asset('/admins/plugins/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/admins/plugins/tinymce/tinymce-config.js') }}"></script>
    <script type="text/javascript">
        function responsive_filemanager_callback(field_id){
            var uploadImageModal = UIkit.modal("#fileManagerModal")
                imageUrl="",
                imgArr = [],
                domain = "{{ URL('/') }}";
            switch(field_id){
                case 'txtFeaturedImage':
                    imageUrl = $('#'+field_id).val();
                    $('#imagePreviewDiv').empty().append(''+
                        '<img src="'+imageUrl+'" style="width:150px; margin-bottom:10px;">'+
                    '');
                    break;
                case 'txtMultiImages':
                    imageUrl = $('#'+field_id).val();
                    imageUrl = imageUrl.replace(domain,'');
                    imgArr.push(imageUrl);
                    $('#slideImagesPreviewDiv img').each(function(i,k,v){
                        var imgSrc = $(this).attr('src');
                        imgArr.push(imgSrc);
                    });
                    $('#slideImgs').val(JSON.stringify(imgArr));
                    $('#slideImagesPreviewDiv').append(''+
                        '<div class="img_slide__outer">'+
                            '<img src="'+imageUrl+'" style="width:150px; margin-bottom:10px;">'+
                            '<span class="btnRmSlideImg">'+
                                '<i class="fa fa-remove"></i>'+
                            '</span>'+
                        '</div>'+
                    '');
                    break;
                case 'sound_url':
                    var playing = false,
                        audioEle = $('#audioEle').bind('play', function () {
                                    playing = true;
                                }).bind('pause', function () {
                                    playing = false;
                                }).bind('ended', function () {
                                    audio.pause();
                                }).get(0);
                    var supportsAudio = !!document.createElement('audio').canPlayType;
                    if (supportsAudio){
                        $(audioEle).attr('src', $('#'+field_id).val());
                    }
                    break;

                default:
                    return;

            }

            uploadImageModal.toggle();

        }
    </script>
@stop
