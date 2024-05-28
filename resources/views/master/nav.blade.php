<header>
    <div class="uk-section uk-padding-small in-profit-ticker">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div>
                        <div class="uk-inline">
                            <span class="uk-text-blue" type="button" uk-toggle="target: #language-dropdown">
                               <a href="#"><i class="fas fa-angle-down"></i></a>  <i class="fa-solid fa-language"  style="margin-left: 10px;"></i>
                                
                                @if (App::getLocale() === 'en')
                                    <span> English </span>
                                @elseif (App::getLocale() === 'cn')
                                    <span>简体中文 </span>
                                @elseif (App::getLocale() === 'indo')
                                    <span>Indonesia</span>
                                @elseif (App::getLocale() === 'japan')
                                    <span>Japan</span>
                                @elseif (App::getLocale() === 'korea')
                                    <span>Korea</span>
                                @elseif (App::getLocale() === 'taiwan')
                                    <span>繁体中文</span>
                                @elseif (App::getLocale() === 'thai')
                                    <span>Thailand</span>
                                @elseif (App::getLocale() === 'viet')
                                    <span>Vietnam</span>
                                @endif
                            </span>
                            <div id="language-dropdown" uk-dropdown="mode: click; boundary: !.uk-button-group; boundary-align: true;" style="background-color:white;">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="{{ url('localization/en') }}"><img class="mr-2" src="{{ asset('img/Logo/en.png') }}" alt="English">English</a></li>
                                    <li><a href="{{ url('localization/cn') }}"><img class="mr-2" src="{{ asset('img/Logo/cn.png') }}" alt="简体中文">简体中文</a></li>
                                    <li><a href="{{ url('localization/indo') }}"><img class="mr-2" src="{{ asset('img/Logo/indo.png') }}" alt="Indonesia">Indonesia</a></li>
                                    <li><a href="{{ url('localization/japan') }}"><img class="mr-2" src="{{ asset('img/Logo/japan.png') }}" alt="Japanese">Japanese</a></li>
                                    <li><a href="{{ url('localization/korea') }}"><img class="mr-2" src="{{ asset('img/Logo/korea.png') }}" alt="Korea">Korea</a></li>
                                    <li><a href="{{ url('localization/taiwan') }}"><img class="mr-2" src="{{ asset('img/Logo/taiwan.png') }}" alt="繁体中文">繁体中文</a></li>
                                    <li><a href="{{ url('localization/thai') }}"><img class="mr-2" src="{{ asset('img/Logo/thailand.png') }}" alt="Thailand">Thailand</a></li>
                                    <li><a href="{{ url('localization/viet') }}"><img class="mr-2" src="{{ asset('img/Logo/vietnam.png') }}" alt="Vietnam">Vietnam</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section uk-padding-remove-vertical">
        <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
        
                <div class="uk-navbar-left uk-width-expand uk-flex uk-flex-between uk-flex-nowrap">
                    <a class="uk-navbar-item uk-logo" style="padding:0px" href="{{route('index')}}">
                        <img src="{{asset('img/Logo/logo.svg')}}"alt="logo" width="130" height="36" data-uk-img>
                    </a>
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li class="{{ request()->is('/') ? 'uk-active' : '' }}"><a href="{{ route('index') }}">@lang('messages.home')</a>
                        </li>
                        <li class="{{ request()->is('about-us') ? 'uk-active' : '' }}"><a href="{{ route('about') }}">@lang('messages.about_us')</a>
                        </li>
                        <li class="{{ request()->is('market/*') ? 'uk-active' : '' }}"><a href="#">@lang('messages.market')<span data-uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="{{ request()->is('forex') ? 'uk-active' : '' }}"><a href="{{ route('forex') }}">@lang('messages.forex')</a></li>
                                    <li class="{{ request()->is('stock') ? 'uk-active' : '' }}"><a href="{{ route('stock') }}">@lang('messages.stock')</a></li>
                                    <li class="{{ request()->is('cfd') ? 'uk-active' : '' }}"><a href="{{ route('cfd') }}">@lang('messages.cryptocurrency_cfd')</a></li>
                                    <li class="{{ request()->is('indices') ? 'uk-active' : '' }}"><a href="{{ route('indices') }}">@lang('messages.indices')</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="{{ request()->is('trading-platform') ? 'uk-active' : '' }}"><a href="{{ route('trading') }}">@lang('messages.trading_platform')</a>
                        </li>
                        {{-- <li class="{{ request()->is('copy-trading') ? 'uk-active' : '' }}"><a href="{{ route('copytrading') }}">@lang('messages.copy_trading')</a> --}}
                        <li class="{{ request()->is('contact') ? 'uk-active' : '' }}"><a href="{{ route('contact') }}">@lang('messages.contact_us')</a>
                        </li>
                    </ul>
             
                </div>
                <div class="uk-navbar-right uk-width-auto">
                    <div class="uk-navbar-item uk-visible@m in-optional-nav" style="margin-left: 0px">
                        <div>
                            <a href="{{ url('https://member.luckyantfxasia.com/login') }}" class="uk-button uk-button-link">@lang('messages.login')</a>
                            <a href="{{ url('https://member.luckyantfxasia.com/register') }}" class="uk-button uk-button-link">@lang('messages.signup')</a>
                        
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
  
  
    
</header>