<section class="section transparent">
    <div class="container">
        <div class="s-title">
            <h2>Latest Blog Posts</h2>
            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus</p>
        </div>

        <div class="blog-container">
            <div class="blog-container--inner">
                <div class="row js-isotope" data-isotope-options='{ "layoutMode": "fitRows",  "itemSelector": ".element", "transitionDuration": "0.8s", "percentPosition": "true"}'>
                    @foreach($latest_blogs as $post)
                    <div class="element col-xs-12 col-sm-6 col-md-4">
                        <div class="blog-item center-block">
                            <div class="inner fixed">
                                <figure class="img-wrap">
                                    <img class="img-responsive" src="{{ asset('/storage/'.$post->image) }}" alt="{{ $post->getTranslatedAttribute('title', $locale) }}">
                                </figure>

                                <a href="{{ route('visitor.blog.detail', $post->slug) }}"></a>
                            </div>

                            <div class="description">
                                <span class="date-post">{{ $post->created_at->format('M d\, Y') }}</span>

                                <h3 class="title"><a href="#">{{ $post->getTranslatedAttribute('title', $locale) }}</a></h3>

                                <div class="meta">
                                    <span><i class="icon-user"></i><a href="#">{{ $post->authorId->name }}</a></span>

                                    <!-- <span><i class="icon-comment"></i><a href="#">1 Comment</a></span> -->
                                </div>

                                <p>
                                    {{ $post->getTranslatedAttribute('excerpt', $locale) }}
                                </p>

                                <a class="custom-btn medium dark-color" href="{{ route('visitor.blog.detail', $post->slug) }}" data-text="Continue Reading"><span>Continue Reading</span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
