<section class="section transparent">
    <div class="container">
        <div class="s-title">
            <h2>@lang('text.latest_posts')</h2>
            <p>Get the latest information, insights, announcements, and news from SK &amp; P Cambodia Law Group experts through our blog posts.</p>
        </div>

        <div class="blog-container">
            <div class="blog-container--inner">
                <div class="row js-isotope" data-isotope-options='{ "layoutMode": "fitRows",  "itemSelector": ".element", "transitionDuration": "0.8s", "percentPosition": "true"}'>
                    @foreach($latest_blogs as $post)
                    <div class="element col-xs-12 col-sm-6 col-md-4">
                        <div class="blog-item center-block">
                            <div class="inner fixed">
                                <figure class="img-wrap">
                                    <img class="img-responsive" src="{{ asset($post->image) }}" alt="{{ $post->getTranslatedAttribute('title', $locale) }}">
                                </figure>

                                <a href="{{ route('visitor.blog.detail', $post->slug) }}"></a>
                            </div>

                            <div class="description">
                                <span class="date-post">{{ $post->created_at->format('M d\, Y') }}</span>

                                <h3 class="title"><a href="{{ route('visitor.blog.detail', $post->slug) }}">{{ $post->getTranslatedAttribute('title', $locale) }}</a></h3>

                                <div class="meta">
                                    <span><i class="icon-user"></i><a href="#">{{ $post->authorId->name }}</a></span>

                                    <!-- <span><i class="icon-comment"></i><a href="#">1 Comment</a></span> -->
                                </div>

                                <p>
                                    {{ $post->getTranslatedAttribute('excerpt', $locale) }}
                                </p>

                                <a class="custom-btn medium dark-color" href="{{ route('visitor.blog.detail', $post->slug) }}" data-text="@lang('text.continue_reading')"><span>@lang('text.continue_reading')</span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
