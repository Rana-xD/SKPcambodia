<header id="header" class="header-style-1">
  <div class="container">
    <div class="col-lg-4 col-md-4">
      <a id="header-logo" class="site-logo" href="/"></a>
    </div>
    <a id="menu-toggler" href="javascript:void(0);"><span></span></a>

    <div class="col-lg-8 col-md-8 inner">
      <div class="line hidden-xs">
        <div class="social-btns style-2">
          <a class="circled fb icon-facebook" href="#" target="_blank"></a>
          <a class="circled tw icon-twitter" href="#" target="_blank"></a>
          <a class="circled ggl icon-gplus" href="#" target="_blank"></a>
        </div>
        <div class="header-contact">
          <span class="phone"><a href="locale/en">English</a></span>
          <span class="mail"><a href="locale/kh">ភាសាខ្មែរ</a></span>
          <span class="mail"><a href="locale/ch">中文</a></span>
        </div>
      </div>
      <div class="">
        <nav id="navigation" role="navigation">
          <ul>
            <li class="menu-item current">
              <a href="/">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->home): strip_tags ($Menu->home) }}}</a>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->about_us): strip_tags ($Menu->about_us) }}}</a>
              <div class="submenu">
                <ul>
                  <li class="menu-item"><a href="about">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->about_us): strip_tags ($Menu->about_us) }}}</a></li>
                  <li class="menu-item"><a href="mission">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->mission): strip_tags ($Menu->mission) }}}</a></li>
                </ul>
              </div>
            </li>
            <li class="menu-item">
              <a href="team">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->team): strip_tags ($Menu->team) }}}</a>
            </li>
            <li class="menu-item">
              <a href="services">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->services): strip_tags ($Menu->services) }}}</a>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->resources): strip_tags ($Menu->resources) }}}</a>
              <div class="submenu">
                <ul>
                  <li class="menu-item"><a href="report">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->report): strip_tags ($Menu->report) }}}</a></li>
                  <li class="menu-item"><a href="publication">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->publication): strip_tags ($Menu->publication) }}}</a></li>
                  <li class="menu-item"><a href="law">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->law): strip_tags ($Menu->law) }}}</a></li>
                </ul>
              </div>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->news): strip_tags ($Menu->news) }}}</a>
              <div class="submenu">
                <ul>
                  <li class="menu-item"><a href="training">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->training): strip_tags ($Menu->training) }}}</a></li>
                  <li class="menu-item"><a href="announcement">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->announment): strip_tags ($Menu->announment) }}}</a></li>
                  <li class="menu-item"><a href="employment&internship">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->employment): strip_tags ($Menu->employment) }}}</a></li>
                </ul>
              </div>
            </li>
            <li class="menu-item">
              <a href="blog">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->blog): strip_tags ($Menu->blog) }}}</a>
            </li>
            <li class="menu-item">
              <a href="contacts">{{{ $Menu->translation(Lang::locale())->first() ? strip_tags ($Menu->translation(Lang::locale())->first()->contact_us): strip_tags ($Menu->contact_us) }}}</a>
            </li>
          </ul>
        </nav>

          <div class="line visible-xs">
            <div class="social-btns style-2">
              <a class="circled fb icon-facebook" href="#" target="_blank"></a>
              <a class="circled tw icon-twitter" href="#" target="_blank"></a>
              <a class="circled ggl icon-gplus" href="#" target="_blank"></a>
            </div>

            <div class="header-contact">
              <span class="phone"><a href="locale/en">English</a></span>
              <span class="mail"><a href="locale/kh">ភាសាខ្មែរ</a></span>
              <span class="mail"><a href="locale/ch">中文</a></span>
            </div>
          </div>
      </div>
    </div>
  </div>
</header>
