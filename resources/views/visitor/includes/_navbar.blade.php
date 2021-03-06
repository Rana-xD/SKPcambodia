<header id="header" class="header-style-1">
  <div class="container">
    <div class="col-lg-4 col-md-4">
      <a id="header-logo" class="site-logo" href="/">
      </a>
    </div>
    <a id="menu-toggler" href="javascript:void(0);"><span></span></a>

    <div class="col-lg-8 col-md-8 inner">
      <div class="line hidden-xs">
        <div class="social-btns style-2">
          @if(Voyager::setting('site_social_fb'))
          <a class="circled fb icon-facebook" href="{{ Voyager::setting('site_social_fb') }}" target="_blank"></a>
          @endif
          @if(Voyager::setting('site_social_twitter'))
          <a class="circled tw icon-twitter" href="{{ Voyager::setting('site_social_twitter') }}" target="_blank"></a>
          @endif
          @if(Voyager::setting('site_social_gplus'))
          <a class="circled ggl icon-gplus" href="{{ Voyager::setting('site_social_gplus') }}" target="_blank"></a>
          @endif
          @if(Voyager::setting('site_social_youtube'))
          <a class="circled icon-youtube-play" style="background-color:#bb0000;" href="{{ Voyager::setting('site_social_youtube') }}" target="_blank"></a>
          @endif
          @if(Voyager::setting('site_social_linkedin'))
          <a class="circled icon-linkedin" style="background-color:#0077B5;" href="{{ Voyager::setting('site_social_linkedin') }}" target="_blank"></a>
          @endif
          @if(Voyager::setting('site_social_ig'))
          <a class="circled" style="background-color:#754F44;" href="{{ Voyager::setting('site_social_ig') }}" target="_blank">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          @endif
        </div>
        <div class="header-contact">
          <span class="language active_language"><a href="/locale/en">English</a></span>
          <span class="language"><a href="/locale/kh">ភាសាខ្មែរ</a></span>
          <span class="language"><a href="/locale/ch">中文</a></span>
        </div>
      </div>
      <div class="">
        <nav id="navigation" role="navigation">
          <ul>

            <li class="menu-item {{ Request::path() == '/' ? 'current' : '' }}">
              <a href="/">@lang('menu.home')</a>
            </li>

            <li class="menu-item {{ Request::path() == 'about' || Request::path() == 'mission' ? 'current' : '' }}">
              <a href="javascript:void(0);">@lang('menu.about_us')</a>
              <div class="submenu">
                <ul>
                  <li class="menu-item"><a href="/about">@lang('menu.about_us')</a></li>
                  <li class="menu-item"><a href="/mission">@lang('menu.mission')</a></li>
                </ul>
              </div>
            </li>

            <li class="menu-item {{ Request::path() == 'team' ? 'current' : '' }}">
              <a href="/team">@lang('menu.team')</a>
            </li>
            <li class="menu-item {{ Request::path() == 'services' ? 'current' : '' }}">
              <a href="/services">@lang('menu.services')</a>
            </li>
            <li class="menu-item {{ Request::path() == 'report' || Request::path() == 'publication' || Request::path() == 'law' ? 'current' : '' }}">
              <a href="javascript:void(0);">@lang('menu.resources')</a>
              <div class="submenu">
                <ul>
                  <li class="menu-item"><a href="/report">
                  @lang('menu.report')</a></li>
                  <li class="menu-item"><a href="/publication">@lang('menu.publication')</a></li>
                  <li class="menu-item"><a href="/law">@lang('menu.law_and_regulation')</a></li>
                </ul>
              </div>
            </li>
            <li class="menu-item {{ Request::path() == 'training' || Request::path() == 'employment_and_internship' ? 'current' : '' }}">
              <a href="javascript:void(0);">@lang('menu.news')</a>
              <div class="submenu">
                <ul>
                  <li class="menu-item"><a href="/training">@lang('menu.training')</a></li>
                  <li class="menu-item"><a href="/employment_and_internship">@lang('menu.employment')</a></li>
                </ul>
              </div>
            </li>
            <li class="menu-item {{ Request::path() == 'blog' ? 'current' : '' }}">
              <a href="/blog">@lang('menu.blog')</a>
            </li>
            <li class="menu-item {{ Request::path() == 'contacts' ? 'current' : '' }}">
              <a href="/contacts">@lang('menu.contact_us')</a>
            </li>
          </ul>
        </nav>

          <div class="line visible-xs">
            <div class="social-btns style-2">
               @if(Voyager::setting('site_social_fb'))
              <a class="circled fb icon-facebook" href="{{ Voyager::setting('site_social_fb') }}" target="_blank"></a>
              @endif
              @if(Voyager::setting('site_social_twitter'))
              <a class="circled tw icon-twitter" href="{{ Voyager::setting('site_social_twitter') }}" target="_blank"></a>
              @endif
              @if(Voyager::setting('site_social_gplus'))
              <a class="circled ggl icon-gplus" href="{{ Voyager::setting('site_social_gplus') }}" target="_blank"></a>
              @endif
              @if(Voyager::setting('site_social_youtube'))
              <a class="circled icon-youtube-play" style="background-color:#bb0000;" href="{{ Voyager::setting('site_social_youtube') }}" target="_blank"></a>
              @endif
              @if(Voyager::setting('site_social_linkedin'))
              <a class="circled icon-linkedin" style="background-color:#0077B5;" href="{{ Voyager::setting('site_social_linkedin') }}" target="_blank"></a>
              @endif
              @if(Voyager::setting('site_social_ig'))
              <a class="circled" style="background-color:#754F44;" href="{{ Voyager::setting('site_social_ig') }}" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              @endif
            </div>

            <div class="header-contact">
              <span class="language active_language"><a href="/locale/en">English</a></span>
              <span class="lauguage"><a href="/locale/kh">ភាសាខ្មែរ</a></span>
              <span class="language"><a href="/locale/ch">中文</a></span>
            </div>
          </div>
      </div>
    </div>
  </div>
</header>
