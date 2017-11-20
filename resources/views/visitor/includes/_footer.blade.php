<footer id="footer" class="footer-style-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="footer-item">
                           <h3 class="title">@lang('text.contact_us')</h3>
                            <address>
                                <span>{{ Voyager::setting('company_address') }}</span>
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
                                <a class="icon-gplus" href="{{ Voyager::setting('site_social_ig') }}" target="_blank"></a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="footer-item">
                            <h3 class="title">@lang('text.link')</h3>

                            <ul class="list">
                                <li><i class="icon-right"></i><a href="http://www.bakc.org.kh/">The Bar Association of the Kingdom of Cambodia</a></li>
                                <li><i class="icon-right"></i><a href="http://www.moc.gov.kh/en-us/">Ministry of Commerce, Cambodia</a></li>
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
                                <article class="recent-posts">
                                    <p><a href="#">Talking sensible advertising spacious youthful shine a discover excellent.</a></p>

                                    <span class="date-post">May 07, 2015</span>
                                </article>

                                <article class="recent-posts">
                                    <p><a href="#">With in natural bold gigantic hurry adore low-cost spacious commercial</a></p>

                                    <span class="date-post">April 01, 2015</span>
                                </article>

                                <article class="recent-posts">
                                    <p><a href="#">Advantage you extra have world's clinically extra grab rare warm.</a></p>

                                    <span class="date-post">March 16, 2015</span>
                                </article>
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
