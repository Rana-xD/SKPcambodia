@if(isset($partners) && count($partners) > 0)
<section class="s-partners partners-style-1">
    <div class="container">
        <div class="bxslider-container">
            <ul class="bxslider" data-slidewidth="100" data-minslides="2" data-maxslides="8" data-moveslides="2" data-slidemargin="30" data-auto="true" data-speed="500" data-pager="false" data-prevselector="#partners-slide-prev-1" data-nextselector="#partners-slide-next-1">
            @foreach($partners as $partner)
                <li class="slide">
                    <img src="{{ asset('/storage/'.$partner->company_logo) }}" alt="{{ $partner->getTranslatedAttribute('company_name') }}" />
                </li>
            @endforeach
            </ul>

            <span id="partners-slide-prev-1" class="control-btn control-btn-style-2 prev-btn icon-left"></span>
            <span id="partners-slide-next-1" class="control-btn control-btn-style-2 next-btn icon-right"></span>
        </div>
    </div>
</section>
@endif
