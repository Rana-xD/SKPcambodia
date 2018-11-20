@extends('voyager::master')

@if(isset($dataTypeContent->id))
@section('page_title','Edit '.$dataType->display_name_singular)
@else
@section('page_title','Add '.$dataType->display_name_singular)
@endif

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/admins/css/dashboard.css') }}">
<style>
.panel .mce-panel {
    border-left-color: #fff;
    border-right-color: #fff;
}

.panel .mce-toolbar,
.panel .mce-statusbar {
    padding-left: 20px;
}

.panel .mce-edit-area,
.panel .mce-edit-area iframe,
.panel .mce-edit-area iframe html {
    padding: 0 10px;
    min-height: 350px;
}

.mce-content-body {
    color: #555;
    font-size: 14px;
}

.panel.is-fullscreen .mce-statusbar {
    position: absolute;
    bottom: 0;
    width: 100%;
    z-index: 200000;
}

.panel.is-fullscreen .mce-tinymce {
    height:100%;
}

.panel.is-fullscreen .mce-edit-area,
.panel.is-fullscreen .mce-edit-area iframe,
.panel.is-fullscreen .mce-edit-area iframe html {
    height: 100%;
    position: absolute;
    width: 99%;
    overflow-y: scroll;
    overflow-x: hidden;
    min-height: 100%;
}
.quote{
   height: 100px;
}
</style>
@stop

@section('page_header')
<h1 class="page-title">
    <i class="{{ $dataType->icon }}"></i> @if(isset($dataTypeContent->id)){{ 'Edit' }}@else{{ 'New' }}@endif {{ $dataType->display_name_singular }}
</h1>
@include('voyager::multilingual.language-selector')
@stop

@section('content')
<div class="page-content container-fluid">
    <form class="form-edit-add" id="formAddEdit" role="form" action="@if(isset($dataTypeContent->id)){{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->id) }}@else{{ route('voyager.'.$dataType->slug.'.store') }}@endif" method="POST" enctype="multipart/form-data">
        <!-- PUT Method if we are editing -->
        @if(isset($dataTypeContent->id))
        {{ method_field("PUT") }}
        @endif
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-8">

                <!-- ### CONTENT ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-book"></i> Team Bio</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen" aria-hidden="true"></a>
                        </div>
                    </div>
                    @include('voyager::multilingual.input-hidden', [
                    '_field_name'  => 'bio',
                    '_field_trans' => get_field_translations($dataTypeContent, 'bio', 'rich_text_box', true)
                    ])
                    <textarea class="form-control richTextBox" id="richtextbio" name="bio" style="border:0px;">@if(isset($dataTypeContent->bio)){{ $dataTypeContent->bio }}@endif</textarea>
                </div><!-- .panel -->

                <!-- ### QUOTE ### -->
                <!--<div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Quote</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        @include('voyager::multilingual.input-hidden', [
                        '_field_name'  => 'quote',
                        '_field_trans' => get_field_translations($dataTypeContent, 'quote')
                        ])
                        <textarea class="form-control quote" name="quote">@if(isset($dataTypeContent->quote)){{ old('quote', $dataTypeContent->quote) }}@elseif(isset($options->default)){{ old('quote', $options->default) }}@else{{ old('quote') }}@endif</textarea>
                    </div>
                </div>-->

                <!-- ### Educations ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-clipboard"></i> Education</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">

                        <input type="hidden" id="educationDataJson" name="education" value="@if(isset($dataTypeContent->education)){{ $dataTypeContent->education }}@endif">
                        <div id="educationFormDiv">


                        </div>

                        <div class="form-group">
                            <button class="btnAddForm" data-form-type="education" type="button">
                                Add More Education
                            </button>
                        </div>

                    </div>
                </div>

                <!-- ### Experiences ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-clipboard"></i> Experience</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="hidden" id="experienceDataJson" name="experience" value="@if(isset($dataTypeContent->experience)){{ $dataTypeContent->experience }}@endif">
                        <div id="experienceFormDiv">


                        </div>

                        <div class="form-group">
                            <button class="btnAddForm" data-form-type="experience" type="button">
                                Add More Experience
                            </button>
                        </div>
                    </div>
                </div>

                <!-- ### Training ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Trainings</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="hidden" id="trainingDataJson" name="training" value="@if(isset($dataTypeContent->training)){{ $dataTypeContent->training }}@endif">
                        <div id="trainingFormDiv">


                        </div>

                        <div class="form-group">
                            <button class="btnAddForm" data-form-type="training" type="button">
                                Add More Training
                            </button>
                        </div>
                    </div>
                </div>

                <!-- ### REWARD ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Awards and Achievements</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="hidden" id="awardDataJson" name="award" value="@if(isset($dataTypeContent->award)){{ $dataTypeContent->award }}@endif">
                        <div id="awardFormDiv">


                        </div>

                        <div class="form-group">
                            <button class="btnAddForm" data-form-type="award" type="button">
                                Add More Award
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <!-- ### DETAILS ### -->

                <!-- Avatar picture -->
                <div class="panel panel panel-bordered panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-clipboard"></i> Advance Options</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group ">
                            <label for="name">Firstname</label>
                            @include('voyager::multilingual.input-hidden', [
                            '_field_name'  => 'firstname',
                            '_field_trans' => get_field_translations($dataTypeContent, 'firstname')
                            ])
                            <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="@if(isset($dataTypeContent->firstname)){{ old('firstname', $dataTypeContent->firstname) }}@elseif(isset($options->default)){{ old('firstname', $options->default) }}@else{{ old('firstname') }}@endif">
                        </div>
                        <div class="form-group ">
                            <label for="name">Lastname</label>
                            @include('voyager::multilingual.input-hidden', [
                            '_field_name'  => 'lastname',
                            '_field_trans' => get_field_translations($dataTypeContent, 'lastname')
                            ])
                            <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="@if(isset($dataTypeContent->lastname)){{ old('lastname', $dataTypeContent->lastname) }}@elseif(isset($options->default)){{ old('lastname', $options->default) }}@else{{ old('lastname') }}@endif">
                        </div>
                        <div class="form-group ">
                            <label for="name">Full Name</label>
                            @include('voyager::multilingual.input-hidden', [
                            '_field_name'  => 'fullname',
                            '_field_trans' => get_field_translations($dataTypeContent, 'fullname')
                            ])
                            <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="@if(isset($dataTypeContent->fullname)){{ old('fullname', $dataTypeContent->fullname) }}@elseif(isset($options->default)){{ old('fullname', $options->default) }}@else{{ old('fullname') }}@endif">
                        </div>
                        <div class="form-group ">
                            <label for="name">Quote</label>
                            @include('voyager::multilingual.input-hidden', [
                            '_field_name'  => 'quote',
                            '_field_trans' => get_field_translations($dataTypeContent, 'quote')
                            ])
                            <textarea class="form-control" name="quote">@if(isset($dataTypeContent->quote)){{ old('quote', $dataTypeContent->quote) }}@elseif(isset($options->default)){{ old('quote', $options->default) }}@else{{ old('quote') }}@endif</textarea>
                        </div>

                        <!-- Featured image field -->
                        <div class="custom-form-group">
                            <div class="file-input-wrapper">
                                <button class="custom-upload-btn image uploadFile" data-type="image" id="uploadImage"><i class="fa fa-upload"></i> Upload Avatar</button>
                                <input value="@if(isset($dataTypeContent->profile_pic)){{ $dataTypeContent->profile_pic }}@endif" type="hidden" name="profile_pic" id="txtFeaturedImage" />
                            </div>
                            <div class="imagePreview uk-padding-small">
                                <!-- <p>Image Preview</p> -->
                                <div id="imagePreviewDiv">
                                    @if(isset($dataTypeContent->profile_pic))

                                    <img src="{{ $dataTypeContent->profile_pic }}" style="width:150px; height: auto;" />

                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Social Media -->
                <div class="panel panel panel-bordered panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-clipboard"></i> Social Media</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>If you have any personal social media accounts, please copy the url of your account and paste it in below field accordingly. Leave it blank if you don't have any.</p>
                        <input type="hidden" id="socialDataJson" value="@if(isset($dataTypeContent->social_media)){{ old('social_media', $dataTypeContent->social_media) }}@elseif(isset($options->default)){{ old('social_media', $options->default) }}@else{{ old('social_media') }}@endif" name="social_media">
                        <div id="socialFormDiv">
                            <div class="form-group">
                                <input data-key="facebook" class="inputOnWatch social_fb form-control" type="text" placeholder="Facebook">
                            </div>
                            <div class="form-group">
                                <input data-key="twitter" class="inputOnWatch social_twitter form-control" type="text" placeholder="Twitter">
                            </div>
                            <div class="form-group">
                                <input data-key="linkedin" class="inputOnWatch social_linkedin form-control" type="text" placeholder="LinkedIn">
                            </div>
                            <div class="form-group">
                                <input data-key="gplus" class="inputOnWatch social_gplus form-control" type="text" placeholder="Google plus">
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Email -->
                <div class="panel panel panel-bordered panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-clipboard"></i> Email</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <!-- <input type="hidden" data-i18n="true" name="email_i18n" id="email_i18n" value=""> -->
                            <input type="hidden" id="emailDataJson" class="form-control" name="email" placeholder="Email" value="@if(isset($dataTypeContent->email)){{ old('email', $dataTypeContent->email) }}@elseif(isset($options->default)){{ old('email', $options->default) }}@else{{ old('email') }}@endif">
                            <div id="emailFormDiv">


                            </div>

                            <div class="form-group">
                                <button class="btnAddForm" data-form-type="email" type="button">
                                    Add More Email
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Contact -->
                <div class="panel panel panel-bordered panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-clipboard"></i> Contact</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="hidden" id="contactDataJson" class="form-control" name="contact" placeholder="Contact" value="@if(isset($dataTypeContent->contact)){{ old('contact', $dataTypeContent->contact) }}@elseif(isset($options->default)){{ old('contact', $options->default) }}@else{{ old('contact') }}@endif">
                        <div id="contactFormDiv">
                            <div class="form-group">
                                <div class="input-group input-format"><span class="input-group-addon">Tel:</span><input data-key="tel" class="inputOnWatch contact_tel form-control input-format2" type="text" placeholder="Telephone number"></div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-format"><span class="input-group-addon">H/P:</span><input data-key="hp" class="inputOnWatch contact_hp form-control input-format2" type="text" placeholder="H/P number"></div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-format"><span class="input-group-addon">Fax:</span><input data-key="fax" class="inputOnWatch contact_fax form-control input-format2" type="text" placeholder="Fax number"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Position -->
                <div class="panel panel panel-bordered panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-clipboard"></i> Position</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">

                        <input type="hidden" id="positionDataJson" class="form-control" name="position" placeholder="Position" value="@if(isset($dataTypeContent->position)){{ old('position', $dataTypeContent->position) }}@elseif(isset($options->default)){{ old('position', $options->default) }}@else{{ old('position') }}@endif">
                        <div id="positionFormDiv">

                        </div>

                        <div class="form-group">
                            <button class="btnAddForm" data-form-type="position" type="button">
                                Add More Position
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <button type="submit" class="btn btn-primary pull-right">
            @if(isset($dataTypeContent->id)){{ 'Update Team' }}@else <i class="icon wb-plus-circle"></i> Create New Team @endif
        </button>
    </form>

</div>
@includeIf('admin.partials._upload_file')
@stop

@section('javascript')
<script>
    var training_html_template =
         '<div class="form-data">'+
            '<div class="form-group group-format english">' +
                '<div class="input-group input-format"><span class="input-group-addon">Title</span><input data-key="title" class="inputOnWatch training_title form-control input-format2" type="text" placeholder="Training title"></div>' +
                '<div class="input-group input-format"><span class="input-group-addon">Year</span><input data-key="year" class="inputOnWatch training_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description" class="inputOnWatch training_desc form-control input-format2"></textarea></div>' +
            '</div>'+
            '<div class="form-group group-format khmer">' +
                '<div class="input-group input-format"><span class="input-group-addon">Title</span><input data-key="title_kh" class="inputOnWatch training_title form-control input-format2" type="text" placeholder="Training title"></div>' +
                '<div class="input-group input-format"><span class="input-group-addon">Year</span><input data-key="year_kh" class="inputOnWatch training_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_kh" class="inputOnWatch training_desc form-control input-format2"></textarea></div>' +
            '</div>'+
            '<div class="form-group group-format chinese">' +
                '<div class="input-group input-format"><span class="input-group-addon">Title</span><input data-key="title_kh" class="inputOnWatch training_title form-control input-format2" type="text" placeholder="Training title"></div>' +
                '<div class="input-group input-format"><span class="input-group-addon">Year</span><input data-key="year_kh" class="inputOnWatch training_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_kh" class="inputOnWatch training_desc form-control input-format2"></textarea></div>' +
            '</div>'+
            '<div class="text-right"><button type="button" class="btn-sm btn-danger delete btnRemoveFormGroup"><i class="voyager-trash"></i> Delete</button></div>'+
         '</div>'

        var award_html_template =
        '<div class="form-data">'+
              '<div class="form-group group-format english">' +
                 '<div class="input-group input-format"><span class="input-group-addon">Title</span><input data-key="title" class="inputOnWatch award_title form-control input-format2" type="text" placeholder="Award title"></div>' +
                 '<div class="input-group input-format"><span class="input-group-addon">Year</span><input data-key="year" class="inputOnWatch award_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                 '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description" class="inputOnWatch award_desc form-control input-format2"></textarea></div>' +
             '</div>'+
             '<div class="form-group group-format khmer">' +
                 '<div class="input-group input-format"><span class="input-group-addon">Title</span><input data-key="title_kh" class="inputOnWatch award_title form-control input-format2" type="text" placeholder="Award title"></div>' +
                 '<div class="input-group input-format"><span class="input-group-addon">Year</span><input data-key="year_kh" class="inputOnWatch award_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                 '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_kh" class="inputOnWatch award_desc form-control input-format2"></textarea></div>' +
             '</div>'+
             '<div class="form-group group-format chinese">' +
                 '<div class="input-group input-format"><span class="input-group-addon">Title</span><input data-key="title_ch" class="inputOnWatch award_title form-control input-format2" type="text" placeholder="Award title"></div>' +
                 '<div class="input-group input-format"><span class="input-group-addon">Year</span><input data-key="year_ch" class="inputOnWatch award_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                 '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_ch" class="inputOnWatch award_desc form-control input-format2"></textarea></div>' +
             '</div>'+
             '<div class="text-right"><button type="button" class="btn-sm btn-danger delete btnRemoveFormGroup"><i class="voyager-trash"></i> Delete</button></div>'+
        '</div>';

        var exp_html_template =
        '<div class="form-data">'+
           '<div class="form-group group-format english">' +
               '<div class="input-group input-format"><span class="input-group-addon">Title</span><input data-key="title" class="inputOnWatch exp_title form-control input-format2" type="text" placeholder="Experience title"></div>' +
               '<div class="input-group input-format"><span class="input-group-addon">Year</span><input data-key="year" class="inputOnWatch exp_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
               '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description" class="inputOnWatch exp_desc form-control input-format2"></textarea></div>' +
           '</div>'+
           '<div class="form-group group-format khmer">' +
               '<div class="input-group input-format"><span class="input-group-addon">Title</span><input data-key="title_kh" class="inputOnWatch exp_title form-control input-format2" type="text" placeholder="Experience title"></div>' +
               '<div class="input-group input-format"><span class="input-group-addon">Year</span><input data-key="year_kh" class="inputOnWatch exp_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
               '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_kh" class="inputOnWatch exp_desc form-control input-format2"></textarea></div>' +
           '</div>'+
           '<div class="form-group group-format chinese">' +
               '<div class="input-group input-format"><span class="input-group-addon">Title</span><input data-key="title_ch" class="inputOnWatch exp_title form-control input-format2" type="text" placeholder="Experience title"></div>' +
               '<div class="input-group input-format"><span class="input-group-addon">Year</span><input data-key="year_ch" class="inputOnWatch exp_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
               '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_ch" class="inputOnWatch exp_desc form-control input-format2"></textarea></div>' +
           '</div>'+
           '<div class="text-right"><button type="button" class="btn-sm btn-danger delete btnRemoveFormGroup"><i class="voyager-trash"></i> Delete</button></div>'+
        '</div>';

        var edu_html_template =
        '<div class="form-data">'+
           '<div class="form-group group-format english">' +
               '<div class="input-group input-format"><span class="input-group-addon">Title</span><input data-key="title" class="inputOnWatch edu_title form-control input-format2" type="text" placeholder="Education title"></div>' +
               '<div class="input-group input-format"><span class="input-group-addon">Year</span><input data-key="year" class="inputOnWatch edu_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
               '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description" class="inputOnWatch edu_desc form-control input-format2"></textarea></div>' +
           '</div>'+
           '<div class="form-group group-format khmer">' +
               '<div class="input-group input-format"><span class="input-group-addon">Title</span><input data-key="title_kh" class="inputOnWatch edu_title form-control input-format2" type="text" placeholder="Education title"></div>' +
               '<div class="input-group input-format"><span class="input-group-addon">Year</span><input data-key="year_kh" class="inputOnWatch edu_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
               '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_kh" class="inputOnWatch edu_desc form-control input-format2"></textarea></div>' +

           '</div>'+
           '<div class="form-group group-format chinese">' +
               '<div class="input-group input-format"><span class="input-group-addon">Title</span><input data-key="title_ch" class="inputOnWatch edu_title form-control input-format2" type="text" placeholder="Education title"></div>' +
               '<div class="input-group input-format"><span class="input-group-addon">Year</span><input data-key="year_ch" class="inputOnWatch edu_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
               '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_ch" class="inputOnWatch edu_desc form-control input-format2"></textarea></div>' +

           '</div>'+
           '<div class="text-right"><button type="button" class="btn-sm btn-danger delete btnRemoveFormGroup"><i class="voyager-trash"></i> Delete</button></div>'+
        '</div>';

        var email_html_template =
        '<div class="form-group">' +
            '<div class="input-group"><input data-key="email" class="inputOnWatch email_input form-control input-format" type="text" placeholder="Email address">' +
            '<span class="input-group-addon btnRemoveFormGroup1" id="basic-addon2"><i class="voyager-trash"></i></span></div>'+
        '</div>';

        var position_html_template =
        '<div class="form-group">' +
            '<div class="input-group"><input data-key="position" class="inputOnWatch position_input form-control input-format" type="text" placeholder="Position">' +
            '<span class="input-group-addon btnRemoveFormGroup1" id="basic-addon2"><i class="voyager-trash"></i></span></div>'+
        '</div>';

    $('document').ready(function () {
        $('#slug').slugify();

        @if($isModelTranslatable)
        $('.side-body').multilingual({"editing": true});
        @endif

        renderJSONData();
        checkLanguage();

        $(document).on('click','.language-selector .btn',function(){
           setTimeout(function(){
               checkLanguage();
           }, 0);
           return ;
        });


        $('.btnAddForm').on('click', function(e){
            e.preventDefault();
            var formType = $(e.target).attr('data-form-type');
            switch(formType){
                case 'experience':
                    $('#experienceFormDiv').append(exp_html_template);
                    checkLanguage();
                    break;
                case 'education':
                    $('#educationFormDiv').append(edu_html_template);
                    checkLanguage();
                    break;
                case 'email':
                    $('#emailFormDiv').append(email_html_template);
                    break;
                case 'position':
                    $('#positionFormDiv').append(position_html_template);
                    break;
                case 'training':
                    $('#trainingFormDiv').append(training_html_template);
                    checkLanguage();
                    break;
                case 'award':
                    $('#awardFormDiv').append(award_html_template);
                    checkLanguage();
                    break;
                default:
                    break;
            }
        });

        $(document).on('click', '.btnRemoveFormGroup', function() {
             $(this).parents('.form-data')[0].remove();
         });
         $(document).on('click', '.btnRemoveFormGroup1', function() {
              $(this).parents('.form-group')[0].remove();
          });

        // $('.btnRemoveFormGroup1').on('click', function (e) {
        //     e.preventDefault();
        //     $(this).parents('.form-group')[0].remove();
        // });

        $('#formAddEdit').on('submit', function(e){
            e.preventDefault();

            // Set training data json
            var trainingRecordDivs = $('#trainingFormDiv .english');
            var trainingRecordDivs_kh = $('#trainingFormDiv .khmer');
            var trainingRecordDivs_ch = $('#trainingFormDiv .chinese');
            var trainingRecords = [];
            var trainingJSON = {};
            trainingRecordDivs.each(function(key, ele){
                var trainingPrepareObject = {};
                var inputs = $(ele).find('.inputOnWatch');
                inputs.each(function(k, inputEle){
                  trainingPrepareObject[$(inputEle).attr('data-key')] = $(inputEle).val();
                });
                trainingRecords.push(trainingPrepareObject);
            });
            trainingRecordDivs_kh.each(function(key, ele){
                var trainingPrepareObject = {};
                var inputs = $(ele).find('.inputOnWatch');
                inputs.each(function(k, inputEle){
                  trainingPrepareObject[$(inputEle).attr('data-key')] = $(inputEle).val();
                });
                trainingRecords.push(trainingPrepareObject);
            });
            trainingRecordDivs_ch.each(function(key, ele){
                var trainingPrepareObject = {};
                var inputs = $(ele).find('.inputOnWatch');
                inputs.each(function(k, inputEle){
                  trainingPrepareObject[$(inputEle).attr('data-key')] = $(inputEle).val();
                });
                trainingRecords.push(trainingPrepareObject);
            });
            trainingJSON.data = trainingRecords;
            $('#trainingDataJson').val(JSON.stringify(trainingJSON));

            // Set reward data json
            var awardRecordDivs = $('#awardFormDiv .english');
            var awardRecordDivs_kh = $('#awardFormDiv .khmer');
            var awardRecordDivs_ch = $('#awardFormDiv .chinese');
            var awardRecords = [];
            var awardJSON = {};
            awardRecordDivs.each(function(key, ele){
                var awardPrepareObject = {};
                var inputs = $(ele).find('.inputOnWatch');
                inputs.each(function(k, inputEle){
                    awardPrepareObject[$(inputEle).attr('data-key')] = $(inputEle).val();
                });
                awardRecords.push(awardPrepareObject);
            });
            awardRecordDivs_kh.each(function(key, ele){
                var awardPrepareObject = {};
                var inputs = $(ele).find('.inputOnWatch');
                inputs.each(function(k, inputEle){
                    awardPrepareObject[$(inputEle).attr('data-key')] = $(inputEle).val();
                });
                awardRecords.push(awardPrepareObject);
            });
            awardRecordDivs_ch.each(function(key, ele){
                var awardPrepareObject = {};
                var inputs = $(ele).find('.inputOnWatch');
                inputs.each(function(k, inputEle){
                    awardPrepareObject[$(inputEle).attr('data-key')] = $(inputEle).val();
                });
                awardRecords.push(awardPrepareObject);
            });
            awardJSON.data = awardRecords;
            $('#awardDataJson').val(JSON.stringify(awardJSON));

            // Set experiences data json
            var experienceRecordDivs = $('#experienceFormDiv .english');
            var experienceRecordDivs_kh = $('#experienceFormDiv .khmer');
            var experienceRecordDivs_ch = $('#experienceFormDiv .chinese');
            var experienceRecords = [];
            var experienceJSON = {};
            experienceRecordDivs.each(function(key, ele){
                var expPrepareObject = {};
                var inputs = $(ele).find('.inputOnWatch');
                inputs.each(function(k, inputEle){
                    expPrepareObject[$(inputEle).attr('data-key')] = $(inputEle).val();
                });
                experienceRecords.push(expPrepareObject);
            });
            experienceRecordDivs_kh.each(function(key, ele){
                var expPrepareObject = {};
                var inputs = $(ele).find('.inputOnWatch');
                inputs.each(function(k, inputEle){
                    expPrepareObject[$(inputEle).attr('data-key')] = $(inputEle).val();
                });
                experienceRecords.push(expPrepareObject);
            });
            experienceRecordDivs_ch.each(function(key, ele){
                var expPrepareObject = {};
                var inputs = $(ele).find('.inputOnWatch');
                inputs.each(function(k, inputEle){
                    expPrepareObject[$(inputEle).attr('data-key')] = $(inputEle).val();
                });
                experienceRecords.push(expPrepareObject);
            });
            experienceJSON.data = experienceRecords;
            $('#experienceDataJson').val(JSON.stringify(experienceJSON));

            // Set educations data json
            var educationRecordDivs = $('#educationFormDiv .english');
            var educationRecordDivs_kh = $('#educationFormDiv .khmer');
            var educationRecordDivs_ch = $('#educationFormDiv .chinese');
            var educationRecords = [];
            var educationJSON = {};
            educationRecordDivs.each(function(key, ele){
                var eduPrepareObject = {};
                var inputs = $(ele).find('.inputOnWatch');
                inputs.each(function(k, inputEle){
                    eduPrepareObject[$(inputEle).attr('data-key')] = $(inputEle).val();
                });
                educationRecords.push(eduPrepareObject);

            });
            educationRecordDivs_kh.each(function(key, ele){
                var eduPrepareObject = {};
                var inputs = $(ele).find('.inputOnWatch');
                inputs.each(function(k, inputEle){
                    eduPrepareObject[$(inputEle).attr('data-key')] = $(inputEle).val();
                });
                educationRecords.push(eduPrepareObject);

            });
            educationRecordDivs_ch.each(function(key, ele){
                var eduPrepareObject = {};
                var inputs = $(ele).find('.inputOnWatch');
                inputs.each(function(k, inputEle){
                    eduPrepareObject[$(inputEle).attr('data-key')] = $(inputEle).val();
                });
                educationRecords.push(eduPrepareObject);

            });
            educationJSON.data = educationRecords;
            $('#educationDataJson').val(JSON.stringify(educationJSON));

            // var educationRecordDivs_kh = $('#educationFormDiv .khmer');
            // var educationRecords_kh = [];
            // var educationJSON_kh = {};
            // educationRecordDivs_kh.each(function(key, ele){
            //     var eduPrepareObject_kh = {};
            //     var inputs_kh = $(ele).find('.inputOnWatch_kh');
            //     inputs_kh.each(function(k, inputEle){
            //         eduPrepareObject_kh[$(inputEle).attr('data-key')] = $(inputEle).val();
            //     });
            //     educationRecords_kh.push(eduPrepareObject);
            //
            // });
            // educationJSON_kh.data = educationRecords_kh;
            // $('#educationDataJson').val(JSON.stringify(educationJSON_kh));

            // Set social media data json
            var socialRecordInputs = $('#socialFormDiv .inputOnWatch');
            var socialRecords = {};
            var socialJSON = {};
            socialRecordInputs.each(function(key, ele){
                socialRecords[$(ele).attr('data-key')] = $(ele).val();
            });
            socialJSON.data = socialRecords;
            $('#socialDataJson').val(JSON.stringify(socialJSON));

            // Set email data json
            var emailRecordInputs = $('#emailFormDiv .inputOnWatch');
            var emailRecords = [];
            var emailJSON = {};
            emailRecordInputs.each(function(key, ele){
                emailRecords.push($(ele).val());
            });
            emailJSON.data = emailRecords;
            $('#emailDataJson').val(JSON.stringify(emailJSON));

            // Set contact data json
            var contactRecordInputs = $('#contactFormDiv .inputOnWatch');
            var contactRecords = {};
            var contactJSON = {};
            contactRecordInputs.each(function(key, ele){
                contactRecords[$(ele).attr('data-key')] = $(ele).val();
            });
            contactJSON.data = contactRecords;
            $('#contactDataJson').val(JSON.stringify(contactJSON));

            // Set position data json
            var positionRecordInputs = $('#positionFormDiv .inputOnWatch');
            var positionRecords = [];
            var positionJSON = {};
            positionRecordInputs.each(function(key, ele){
                positionRecords.push($(ele).val());
            });
            positionJSON.data = positionRecords;
            $('#positionDataJson').val(JSON.stringify(positionJSON));

            checkLanguage();
        });
    });

    function renderJSONData(){
        var experiencesText = $('#experienceDataJson').val(),
        educationsText = $('#educationDataJson').val(),
        socialsText = $('#socialDataJson').val(),
        emailsText = $('#emailDataJson').val(),
        contactsText = $('#contactDataJson').val(),
        positionsText = $('#positionDataJson').val(),
        trainingsText = $('#trainingDataJson').val(),
        awardsText = $('#awardDataJson').val(),

        experiencesJSON = JSON.parse(experiencesText == "" ? "{}" : experiencesText),
        educationsJSON = JSON.parse(educationsText == "" ? "{}" : educationsText),
        socialsJSON = JSON.parse(socialsText == "" ? "{}" : socialsText),
        emailsJSON = JSON.parse(emailsText == "" ? "{}" : emailsText),
        contactsJSON = JSON.parse(contactsText == "" ? "{}" : contactsText),
        positionsJSON = JSON.parse(positionsText == "" ? "{}" : positionsText)
        trainingsJSON = JSON.parse(trainingsText == "" ? "{}" : trainingsText)
        awardsJSON = JSON.parse(awardsText == "" ? "{}" : awardsText);

        // Render training
        if(trainingsJSON.hasOwnProperty("data")){
            var data = trainingsJSON.data;
            data.forEach(function(trainingRecord){
               if(trainingRecord.hasOwnProperty('title')){
                  $('#trainingFormDiv').append(
                  '<div class="form-data">'+
                     '<div class="form-group group-format english">' +
                        '<div class="input-group input-format"><span class="input-group-addon">Title</span><input value="'+ trainingRecord.title +'" data-key="title" class="inputOnWatch training_title form-control input-format2" type="text" placeholder="Training title"></div>' +
                        '<div class="input-group input-format"><span class="input-group-addon">Year</span><input value="'+ trainingRecord.year +'" data-key="year" class="inputOnWatch training_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                        '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description" class="inputOnWatch training_desc form-control input-format2">'+ trainingRecord.description +'</textarea></div>' +
                     '</div>'+
                  '</div>'
                  );
               }
               if(trainingRecord.hasOwnProperty('title_kh')){
                  $('#trainingFormDiv .form-data').each(function(){
                     if(!$(this).children().hasClass('khmer')){
                        $(this).append(
                           '<div class="form-group group-format khmer">' +
                              '<div class="input-group input-format"><span class="input-group-addon">Title</span><input value="'+ trainingRecord.title_kh +'" data-key="title_kh" class="inputOnWatch training_title form-control input-format2" type="text" placeholder="Training title"></div>' +
                              '<div class="input-group input-format"><span class="input-group-addon">Year</span><input value="'+ trainingRecord.year_kh +'" data-key="year_kh" class="inputOnWatch training_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                              '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_kh" class="inputOnWatch training_desc form-control input-format2">'+ trainingRecord.description_kh +'</textarea></div>' +
                           '</div>'
                        );
                        return false;
                     }
                  });

               }
               if(trainingRecord.hasOwnProperty('title_ch')){
                  $('#trainingFormDiv .form-data').each(function(){
                     if(!$(this).children().hasClass('chinese')){
                        $(this).append(
                           '<div class="form-group group-format chinese">' +
                              '<div class="input-group input-format"><span class="input-group-addon">Title</span><input value="'+ trainingRecord.title_ch +'" data-key="title_ch" class="inputOnWatch training_title form-control input-format2" type="text" placeholder="Training title"></div>' +
                              '<div class="input-group input-format"><span class="input-group-addon">Year</span><input value="'+ trainingRecord.year_ch +'" data-key="year_ch" class="inputOnWatch training_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                              '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_ch" class="inputOnWatch training_desc form-control input-format2">'+ trainingRecord.description_ch +'</textarea></div>' +
                           '</div>'+
                           '<div class="text-right"><button type="button" class="btn-sm btn-danger delete btnRemoveFormGroup"><i class="voyager-trash"></i> Delete</button></div>'
                        );
                        return false;
                     }
                  });
               }
            });
        }
        // else{
        //     $('#trainingFormDiv').append(training_html_template);
        // }

        // Render reward
        if(awardsJSON.hasOwnProperty("data")){
            var data = awardsJSON.data;
            data.forEach(function(awardRecord){
               if(awardRecord.hasOwnProperty('title')){
                  $('#awardFormDiv').append(
                  '<div class="form-data">'+
                     '<div class="form-group group-format english">' +
                        '<div class="input-group input-format"><span class="input-group-addon">Title</span><input value="'+ awardRecord.title +'" data-key="title" class="inputOnWatch raward_title form-control input-format2" type="text" placeholder="Award title"></div>' +
                        '<div class="input-group input-format"><span class="input-group-addon">Year</span><input value="'+ awardRecord.year +'" data-key="year" class="inputOnWatch award_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                        '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description" class="inputOnWatch award_desc form-control input-format2">'+ awardRecord.description +'</textarea></div>' +
                     '</div>'+
                  '</div>'
                  );
               }
               if(awardRecord.hasOwnProperty('title_kh')){
                  $('#awardFormDiv .form-data').each(function(){
                     if(!$(this).children().hasClass('khmer')){
                        $(this).append(
                           '<div class="form-group group-format khmer">' +
                              '<div class="input-group input-format"><span class="input-group-addon">Title</span><input value="'+ awardRecord.title_kh +'" data-key="title_kh" class="inputOnWatch raward_title form-control input-format2" type="text" placeholder="Award title"></div>' +
                              '<div class="input-group input-format"><span class="input-group-addon">Year</span><input value="'+ awardRecord.year_kh +'" data-key="year_kh" class="inputOnWatch award_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                              '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_kh" class="inputOnWatch award_desc form-control input-format2">'+ awardRecord.description_kh +'</textarea></div>' +
                           '</div>'
                        );
                        return false;
                     }
                  });

               }
               if(awardRecord.hasOwnProperty('title_ch')){
                  $('#awardFormDiv .form-data').each(function(){
                     if(!$(this).children().hasClass('chinese')){
                        $(this).append(
                           '<div class="form-group group-format chinese">' +
                              '<div class="input-group input-format"><span class="input-group-addon">Title</span><input value="'+ awardRecord.title_ch +'" data-key="title_ch" class="inputOnWatch raward_title form-control input-format2" type="text" placeholder="Award title"></div>' +
                              '<div class="input-group input-format"><span class="input-group-addon">Year</span><input value="'+ awardRecord.year_ch +'" data-key="year_ch" class="inputOnWatch award_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                              '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_ch" class="inputOnWatch award_desc form-control input-format2">'+ awardRecord.description_ch +'</textarea></div>' +
                           '</div>'+
                           '<div class="text-right"><button type="button" class="btn-sm btn-danger delete btnRemoveFormGroup"><i class="voyager-trash"></i> Delete</button></div>'
                        );
                        return false;
                     }
                  });
               }
            });
        }
        // else{
        //     $('#awardFormDiv').append(award_html_template);
        // }

        // Render experiences
        if(experiencesJSON.hasOwnProperty("data")){
            var data = experiencesJSON.data;
            data.forEach(function(expRecord){
               if(expRecord.hasOwnProperty('title')){
                  $('#experienceFormDiv').append(
                  '<div class="form-data">'+
                     '<div class="form-group group-format english">' +
                         '<div class="input-group input-format"><span class="input-group-addon">Title</span><input value="'+ expRecord.title +'" data-key="title" class="inputOnWatch exp_title form-control input-format2" type="text" placeholder="Experience title"></div>' +
                         '<div class="input-group input-format"><span class="input-group-addon">Year</span><input value="'+ expRecord.year +'" data-key="year" class="inputOnWatch exp_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                         '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description" class="inputOnWatch exp_desc form-control input-format2">'+ expRecord.description +'</textarea></div>' +
                     '</div>'+
                  '</div>'
                  );
               }
               if(expRecord.hasOwnProperty('title_kh')){
                  $('#experienceFormDiv .form-data').each(function(){
                     if(!$(this).children().hasClass('khmer')){
                        $(this).append(
                           '<div class="form-group group-format khmer">' +
                               '<div class="input-group input-format"><span class="input-group-addon">Title</span><input value="'+ expRecord.title_kh +'" data-key="title_kh" class="inputOnWatch exp_title form-control input-format2" type="text" placeholder="Experience title"></div>' +
                               '<div class="input-group input-format"><span class="input-group-addon">Year</span><input value="'+ expRecord.year_kh +'" data-key="year_kh" class="inputOnWatch exp_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                               '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_kh" class="inputOnWatch exp_desc form-control input-format2">'+ expRecord.description_kh +'</textarea></div>' +
                           '</div>'
                        );
                        return false;
                     }
                  });

               }
               if(expRecord.hasOwnProperty('title_ch')){
                  $('#experienceFormDiv .form-data').each(function(){
                     if(!$(this).children().hasClass('chinese')){
                        $(this).append(
                           '<div class="form-group group-format chinese">' +
                               '<div class="input-group input-format"><span class="input-group-addon">Title</span><input value="'+ expRecord.title_ch +'" data-key="title_ch" class="inputOnWatch exp_title form-control input-format2" type="text" placeholder="Experience title"></div>' +
                               '<div class="input-group input-format"><span class="input-group-addon">Year</span><input value="'+ expRecord.year_ch +'" data-key="year_ch" class="inputOnWatch exp_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                               '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_ch" class="inputOnWatch exp_desc form-control input-format2">'+ expRecord.description_ch +'</textarea></div>' +
                           '</div>'+
                           '<div class="text-right"><button type="button" class="btn-sm btn-danger delete btnRemoveFormGroup"><i class="voyager-trash"></i> Delete</button></div>'
                        );
                        return false;
                     }
                  });
               }

          });
        }
        // else{
        //     $('#experienceFormDiv').append(exp_html_template);
        // }

        // Render educations
        if(educationsJSON.hasOwnProperty("data")){
            var data = educationsJSON.data;
            var count = 0;
                data.forEach(function(eduRecord){
                   if(eduRecord.hasOwnProperty('title')){
                      $('#educationFormDiv').append(
                        '<div class="form-data">'+
                           '<div class="form-group group-format english">' +
                               '<div class="input-group input-format"><span class="input-group-addon">Title</span><input value="'+ eduRecord.title +'" data-key="title" class="inputOnWatch exp_title form-control input-format2" type="text" placeholder="Experience title"></div>' +
                               '<div class="input-group input-format"><span class="input-group-addon">Year</span><input value="'+ eduRecord.year +'" data-key="year" class="inputOnWatch exp_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                               '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description" class="inputOnWatch exp_desc form-control input-format2">'+ eduRecord.description +'</textarea></div>'+
                           '</div>'+
                        '</div>'

                      );
                   }
                   if(eduRecord.hasOwnProperty('title_kh')){
                      $( "#educationFormDiv .form-data" ).each(function() {
                       if(!$(this).children().hasClass('khmer')){
                             $(this).append(
                                '<div class="form-group group-format khmer">' +
                                    '<div class="input-group input-format"><span class="input-group-addon">Title</span><input value="'+ eduRecord.title_kh +'" data-key="title_kh" class="inputOnWatch exp_title form-control input-format2" type="text" placeholder="Experience title"></div>' +
                                    '<div class="input-group input-format"><span class="input-group-addon">Year</span><input value="'+ eduRecord.year_kh +'" data-key="year_kh" class="inputOnWatch exp_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                                    '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_kh" class="inputOnWatch exp_desc form-control input-format2">'+ eduRecord.description_kh +'</textarea></div>' +
                                '</div>'
                            );
                            return false;
                        }
                     });
                   }
                   if(eduRecord.hasOwnProperty('title_ch')){
                      $("#educationFormDiv .form-data").each(function(){
                        if(!$(this).children().hasClass('chinese')){
                           $(this).append(
                               '<div class="form-group group-format chinese">' +
                                   '<div class="input-group input-format"><span class="input-group-addon">Title</span><input value="'+ eduRecord.title_ch +'" data-key="title_ch" class="inputOnWatch exp_title form-control input-format2" type="text" placeholder="Experience title"></div>' +
                                   '<div class="input-group input-format"><span class="input-group-addon">Year</span><input value="'+ eduRecord.year_ch +'" data-key="year_ch" class="inputOnWatch exp_year form-control input-format2" type="text" placeholder="From year - until year"></div>' +
                                   '<div class="input-group input-format"><span class="input-group-addon">Description</span><textarea data-key="description_ch" class="inputOnWatch exp_desc form-control input-format2">'+ eduRecord.description_ch +'</textarea></div>' +
                               '</div>'+
                               '<div class="text-right"><button type="button" class="btn-sm btn-danger delete btnRemoveFormGroup"><i class="voyager-trash"></i> Delete</button></div>'
                           );
                           return false;
                        }
                     });

                   }
             });

        }

        // Render socials
        if(socialsJSON.hasOwnProperty("data")){
            var data = socialsJSON.data;
            $('#socialFormDiv .inputOnWatch').each(function(key, input){
                data[$(input).attr('data-key')] ? $(input).val(data[$(input).attr('data-key')]) : false;
            });
        }

        // Render emails
        if(emailsJSON.hasOwnProperty("data")){
            var data = emailsJSON.data;
            data.forEach(function(email){
                $('#emailFormDiv').append(
                '<div class="form-group">' +
                    '<div class="input-group"><input value="'+ email +'" data-key="email" class="inputOnWatch email_input form-control input-format" type="text" placeholder="Email address">' +
                    '<span class="input-group-addon btnRemoveFormGroup1" id="basic-addon2"><i class="voyager-trash"></i></span></div>'+
                '</div>'
                );
            });
        }else{
            $('#emailFormDiv').append(email_html_template);
        }

        // Render contact
        if(contactsJSON.hasOwnProperty("data")){
            var data = contactsJSON.data;
            $('#contactFormDiv .inputOnWatch').each(function(key, input){
                data[$(input).attr('data-key')] ? $(input).val(data[$(input).attr('data-key')]) : false;
            });
        }

        // Render position
        if(positionsJSON.hasOwnProperty("data")){
            var data = positionsJSON.data;
            data.forEach(function(position){
                $('#positionFormDiv').append(
                '<div class="form-group">' +
                    '<div class="input-group"><input value="'+ position +'" data-key="position" class="inputOnWatch position_input form-control input-format" type="text" placeholder="Position">' +
                    '<span class="input-group-addon btnRemoveFormGroup1" id="basic-addon2"><i class="voyager-trash"></i></span></div>'+
                '</div>'
                );
            });
        }else{
            $('#positionFormDiv').append(position_html_template);
        }

    }

    function checkLanguage(){
      langSelectors = $('.language-selector .active').children().attr('id');
      console.log('langSelectors: '+langSelectors);
      if(langSelectors == 'en'){
         $('.english').removeClass('hidden');
         $('.khmer').addClass('hidden');
         $('.chinese').addClass('hidden');
      }
      else if(langSelectors == 'kh'){
         $('.english').addClass('hidden');
         $('.khmer').removeClass('hidden');
         $('.chinese').addClass('hidden');
      }
      else if(langSelectors == 'ch'){
         $('.english').addClass('hidden');
         $('.khmer').addClass('hidden');
         $('.chinese').removeClass('hidden');
      }
   }
</script>
@if($isModelTranslatable)
<script src="{{ voyager_asset('js/multilingual.js') }}"></script>
@endif
<script src="{{ asset('/admins/plugins/tinymce/tinymce.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('/admins/plugins/tinymce/tinymce-config.js') }}"></script>
<script src="{{ voyager_asset('js/slugify.js') }}"></script>
<script src="{{ asset('/admins/js/filemanager_callback.js') }}"></script>
@stop
