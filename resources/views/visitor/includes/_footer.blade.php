<footer id="footer" class="footer-style-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <div class="footer-item">
                           <h3 class="title">@lang('text.contact_us')</h3>
                            <address>
                                <span>{{ Voyager::setting('company_address_kh') }} {{$locale}}</span>
                                <br />
                                <span>@lang('text.Phone'): {{ Voyager::setting('company_tel') }}</span>
                                <span>@lang('text.fax'): {{ Voyager::setting('company_fax') }}</span>
                                <span>@lang('text.Email'): <a href="mailto:{{ Voyager::setting('site_email') }}"> {{ Voyager::setting('site_email') }}</a></span>
                            </address>

                            <div class="social-btns style-1">
                                @if(Voyager::setting('site_social_fb'))
                                <a class="icon-facebook" href="{{ Voyager::setting('site_social_fb') }}" target="_blank"></a>
                                @endif
                                @if(Voyager::setting('site_social_twitter'))
                                <a class="icon-twitter" href="{{ Voyager::setting('site_social_twitter') }}" target="_blank"></a>
                                @endif
                                @if(Voyager::setting('site_social_linkedin'))
                                <a class="icon-linkedin" href="{{ Voyager::setting('site_social_linkedin') }}" target="_blank"></a>
                                @endif
                                @if(Voyager::setting('site_social_youtube'))
                                <a class="icon-youtube-play" href="{{ Voyager::setting('site_social_youtube') }}" target="_blank"></a>
                                @endif
                                @if(Voyager::setting('site_social_gplus'))
                                <a class="icon-gplus" href="{{ Voyager::setting('site_social_gplus') }}" target="_blank"></a>
                                @endif
                                @if(Voyager::setting('site_social_ig'))
                                <a class="" href="{{ Voyager::setting('site_social_ig') }}" target="_blank">
                                  <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-7">
                        <div class="footer-item">
                            <h3 class="title">@lang('text.link')</h3>

                            <ul class="list">
                              @foreach($links as $link)
                                <li><i class="icon-right"></i><a href="{{ $link->link }}" target="_blank">{{ $link->getTranslatedAttribute('title', $locale) }}</a></li>
                              @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-item hidden-xs hidden-sm">
                    <p class="copy">© 2017 SK &amp; P Cambodia Law Group. All rights reserved</p>
                </div>
            </div>

            <div class="col-xs-12 col-md-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="footer-item">
                            <h3 class="title">@lang('text.blog_post')</h3>

                            <div>
                              @foreach($footer_blogs as $f_post)
                                <article class="recent-posts">
                                    <p><a href="{{ route('visitor.blog.detail', $f_post->slug) }}">{{ $f_post->getTranslatedAttribute('title', $locale) }}</a></p>

                                    <span class="date-post">{{ $f_post->created_at->format('M d\, Y') }}</span>
                                </article>
                              @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="footer-item">
                            <h3 class="title">@lang('text.contact_us')</h3>

                            <form class="footer-form" action="mail" id="myForm" method="post">
                                {{ csrf_field() }}
                                <label class="input-wrp">
                                    <input type="text" name="name" placeholder="@lang('text.Name')" />
                                    <span></span>
                                </label>

                                <label class="input-wrp">
                                    <input type="text" name="email" placeholder="@lang('text.Email')" />
                                    <span></span>
                                </label>

                                <label class="input-wrp">
                                    <input type="text" name="phone" placeholder="@lang('text.Phone')" />
                                    <span></span>
                                </label>

                                <label class="input-wrp">
                                    <textarea name="message" placeholder="@lang('text.Your_message')"></textarea>
                                    <span></span>
                                </label>

                                <button class="custom-btn small light-color" type="submit" data-text="Send"><span>@lang('text.send')</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-item visible-xs visible-sm">
            <p class="copy">© 2017 SK &amp; P Cambodia Law Group. All rights reserved</p>
        </div>
    </div>
</footer>

<div id="btn-to-top-wrap">
    <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="1500"></a>
</div>
