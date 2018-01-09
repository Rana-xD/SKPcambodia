<div class="element col-xs-12 col-sm-6 col-md-4">
    <div class="blog-item center-block">
        <div class="inner">
            <figure class="img-wrap">
                <img class="img-responsive" src="@if($post->image){{ $post->image }}@endif" alt="{{ $post->getTranslatedAttribute('title', $locale) }}" />
            </figure>

            <a href="{{ route('visitor.blog.detail', $post->slug) }}"></a>
        </div>

        <div class="description">
            <span class="date-post">POSTED {{ $post->created_at->format('M d\, Y') }} </span>

            <h3 class="title"><a href="{{ route('visitor.blog.detail', $post->slug) }}">{{ $post->getTranslatedAttribute('title', $locale) }}</a></h3>

            <div class="meta">
                <span><i class="icon-user"></i><a href="#">{{ $post->authorId->name }}</a></span>

                <span><i class="icon-comment"></i><a href="#">0 Comment</a></span>
            </div>

            <p>
                {{ $post->getTranslatedAttribute('excerpt', $locale) }}
            </p>

            <a class="custom-btn medium dark-color" href="{{ route('visitor.blog.detail', $post->slug) }}" data-text="@lang('text.continue_reading')"><span>@lang('text.continue_reading')</span></a>
        </div>
    </div>
</div>
