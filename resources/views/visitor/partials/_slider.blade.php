<div id="start-screen">
    <ul class="hero-slider autoplay">
    @foreach($sliders as $index => $slider)
        @if($slider->type==1)
        <li id="slide_{{++$index}}" class="@if($index==1){{ 'selected' }}@endif" style="background-image: url({{ asset('/storage/'.$slider->featured_image) }});">
            <div class="full-width">
                <div class="container">
                    <div class="s-align">
                        <div>
                            <h2>{{ $slider->getTranslatedAttribute('title', $locale) }}</h2>

                            <a class="custom-btn medium light-color" href="{{ $slider->link_url }}" data-text="{{ $slider->getTranslatedAttribute('button_text', $locale) }}"><span>{{ $slider->getTranslatedAttribute('button_text', $locale) }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        @elseif($slider->type==2)
        <li id="slide_{{++$index}}" class="@if($index==1){{ 'selected' }}@endif bg-video" style="background-image: url({{ asset('/storage/'.$slider->featured_image) }});">
            <div class="full-width">
                <div class="container">
                    <div class="s-align">
                        <div>
                            <h2>{{ $slider->getTranslatedAttribute('title', $locale) }}</h2>

                            <a class="custom-btn medium light-color" href="{{ $slider->link_url }}" data-text="{{ $slider->getTranslatedAttribute('button_text', $locale) }}"><span>{{ $slider->getTranslatedAttribute('button_text', $locale) }}</span></a>
                        </div>
                    </div>
                </div>
            </div> <!-- .cd-full-width -->

            <div class="bg-video-wrapper" data-video="@if(!empty($slider->video_url)){{ $slider->video_url }}@endif">
                <!-- video element will be loaded using jQuery -->
            </div> <!-- .cd-bg-video-wrapper -->
        </li>
        @endif
    @endforeach
    </ul>

    <div class="slider-nav">
        <nav>
            <ul class="clearfix horizontal">
            @foreach($sliders as $index => $slider)
                @if($index == 0)
                <li class="selected"><a href="#slide_{{++$index}}">{{ $index }}</a></li>
                @else
                <li><a href="#slide_{{++$index}}">{{ $index }}</a></li>
                @endif
            @endforeach
            </ul>
        </nav>
    </div>

    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>

    <style type="text/css">
        #start-screen
        {
            height: 500px;
        }

        .hero-slider li:first-of-type h2
        {
            font-size: 40px;
            font-weight: 400;
        }

        .hero-slider li:nth-of-type(2) h2
        {
            font-size: 50px;
            font-family: 'Dancing Script', cursive;
            font-weight: 400;
        }

        .hero-slider li:nth-of-type(3) h2
        {
            font-size: 50px;
            font-family: 'Dancing Script', cursive;
        }

        .slider-nav
        {
            top: 15px;
            right: 15px;
        }

        @media only screen and (min-width: 1200px)
        {
            #start-screen
            {
                margin-left: 50px;
                margin-right: 50px;
            }

            .hero-slider li:first-of-type h2
            {
                font-size: 60px;
                margin-bottom: 40px;
            }

            .hero-slider li:nth-of-type(2) h2
            {
                font-size: 100px;
            }

            .hero-slider li:nth-of-type(3) h2
            {
                font-size: 90px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1199px)
        {
            #start-screen
            {
                margin-left: 35px;
                margin-right: 35px;
            }

            .hero-slider li:first-of-type h2
            {
                font-size: 60px;
                margin-bottom: 40px;
            }
            .hero-slider li:nth-of-type(2) h2
            {
                font-size: 80px;
            }

            .hero-slider li:nth-of-type(3) h2
            {
                font-size: 75px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px)
        {
            #start-screen
            {
                margin-left: 20px;
                margin-right: 20px;
            }

            .hero-slider li:first-of-type h2
            {
                font-size: 50px;
            }

            .hero-slider li:nth-of-type(2) h2
            {
                font-size: 60px;
            }

            .hero-slider li:nth-of-type(3) h2
            {
                font-size: 60px;
            }
        }

        @media only screen and (min-width: 481px)
        {
            #start-screen
            {
                height: 600px;
            }

            .hero-slider li:nth-of-type(2)
            {
                text-align: left;
            }
        }
    </style>

    <script type="text/javascript">
        (function()
        {
            var oInterval = setInterval(function ()
            {
                if (typeof window.jQuery !== 'undefined')
                {
                    clearInterval(oInterval);

                    jQuery(document).ready(function($){
                        var slidesWrapper = $('.hero-slider');

                        //check if a .hero-slider exists in the DOM
                        if ( slidesWrapper.length > 0 ) {
                            var sliderNav = $('.slider-nav'),
                                slidesNumber = slidesWrapper.children('li').length,
                                visibleSlidePosition = 0,
                                autoPlayId,
                                autoPlayDelay = 8000;

                            //upload videos (if not on mobile devices)
                            uploadVideo(slidesWrapper);

                            //autoplay slider
                            setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);

                            //change visible slide
                            sliderNav.on('click', 'li', function(event){
                                event.preventDefault();
                                var selectedItem = $(this);
                                if(!selectedItem.hasClass('selected')) {
                                    // if it's not already selected
                                    var selectedPosition = selectedItem.index(),
                                        activePosition = slidesWrapper.find('li.selected').index();

                                    if( activePosition < selectedPosition) {
                                        nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, selectedPosition);
                                    } else {
                                        prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, selectedPosition);
                                    }

                                    //this is used for the autoplay
                                    visibleSlidePosition = selectedPosition;

                                    updateSliderNavigation(sliderNav, selectedPosition);
                                    //reset autoplay
                                    setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);
                                }
                            });
                        }

                        function nextSlide(visibleSlide, container, pagination, n){
                            visibleSlide.removeClass('selected from-left from-right').addClass('is-moving').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                                visibleSlide.removeClass('is-moving');
                            });

                            container.children('li').eq(n).addClass('selected from-right').prevAll().addClass('move-left');
                            checkVideo(visibleSlide, container, n);
                        }

                        function prevSlide(visibleSlide, container, pagination, n){
                            visibleSlide.removeClass('selected from-left from-right').addClass('is-moving').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                                visibleSlide.removeClass('is-moving');
                            });

                            container.children('li').eq(n).addClass('selected from-left').removeClass('move-left').nextAll().removeClass('move-left');
                            checkVideo(visibleSlide, container, n);
                        }

                        function updateSliderNavigation(pagination, n) {
                            var navigationDot = pagination.find('.selected');
                            navigationDot.removeClass('selected');
                            pagination.find('li').eq(n).addClass('selected');
                        }

                        function setAutoplay(wrapper, length, delay) {
                            if(wrapper.hasClass('autoplay')) {
                                clearInterval(autoPlayId);
                                autoPlayId = window.setInterval(function(){autoplaySlider(length)}, delay);
                            }
                        }

                        function autoplaySlider(length) {
                            if( visibleSlidePosition < length - 1) {
                                nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, visibleSlidePosition + 1);
                                visibleSlidePosition +=1;
                            } else {
                                prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, 0);
                                visibleSlidePosition = 0;
                            }
                            updateSliderNavigation(sliderNav, visibleSlidePosition);
                        }

                        function uploadVideo(container) {
                            container.find('.bg-video-wrapper').each(function(){
                                var videoWrapper = $(this);
                                if( videoWrapper.is(':visible') ) {
                                    // if visible - we are not on a mobile device
                                    var videoUrl = videoWrapper.data('video'),
                                        video = $('<video loop><source src="'+videoUrl+'.mp4" type="video/mp4" /><source src="'+videoUrl+'.webm" type="video/webm" /></video>');
                                    video.appendTo(videoWrapper);
                                    // play video if first slide
                                    if(videoWrapper.parent('.bg-video.selected').length > 0) video.get(0).play();
                                }
                            });
                        }

                        function checkVideo(hiddenSlide, container, n) {
                            //check if a video outside the viewport is playing - if yes, pause it
                            var hiddenVideo = hiddenSlide.find('video');
                            if( hiddenVideo.length > 0 ) hiddenVideo.get(0).pause();

                            //check if the select slide contains a video element - if yes, play the video
                            var visibleVideo = container.children('li').eq(n).find('video');
                            if( visibleVideo.length > 0 ) visibleVideo.get(0).play();
                        }
                    });
                }
            }, 500);
        })();
    </script>
</div>
