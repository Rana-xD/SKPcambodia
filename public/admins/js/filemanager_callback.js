function responsive_filemanager_callback(field_id) {
    var uploadImageModal = UIkit.modal("#fileManagerModal")
    imageUrl = "",
        imgArr = [],
        domain = "{{ URL('/') }}";
    switch (field_id) {
        case 'txtFeaturedImage':
            imageUrl = $('#' + field_id).val();
            $('#imagePreviewDiv').empty().append('' +
                '<img src="' + imageUrl + '" style="width:150px; margin-bottom:10px;">' +
                '');
            break;
        case 'txtMultiImages':
            imageUrl = $('#' + field_id).val();
            imageUrl = imageUrl.replace(domain, '');
            imgArr.push(imageUrl);
            $('#slideImagesPreviewDiv img').each(function(i, k, v) {
                var imgSrc = $(this).attr('src');
                imgArr.push(imgSrc);
            });
            $('#slideImgs').val(JSON.stringify(imgArr));
            $('#slideImagesPreviewDiv').append('' +
                '<div class="img_slide__outer">' +
                '<img src="' + imageUrl + '" style="width:150px; margin-bottom:10px;">' +
                '<span class="btnRmSlideImg">' +
                '<i class="fa fa-remove"></i>' +
                '</span>' +
                '</div>' +
                '');
            break;
        case 'sound_url':
            var playing = false,
                audioEle = $('#audioEle').bind('play', function() {
                    playing = true;
                }).bind('pause', function() {
                    playing = false;
                }).bind('ended', function() {
                    audio.pause();
                }).get(0);
            var supportsAudio = !!document.createElement('audio').canPlayType;
            if (supportsAudio) {
                $(audioEle).attr('src', $('#' + field_id).val());
            }
            break;

        case 'txtFileUpload':
            fileUrl = $('#' + field_id).val();
            file_name = fileUrl.split('\\').pop().split('/').pop();
            filename = file_name.substring(0, file_name.lastIndexOf('.'));
            $('.form-edit-add input[name="name"]').val(filename);
            break;

        default:
            return;

    }

    uploadImageModal.toggle();

}