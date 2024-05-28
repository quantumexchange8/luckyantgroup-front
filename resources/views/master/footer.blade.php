
<footer>
    <div class="uk-section uk-section-secondary uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-flex uk-margin-small-top" data-uk-grid="">
                
                <div class="uk-flex-first d-flex flex-column">
                    <div class="footer-logo">
                        <img class=" uk-display-block" src="{{asset('img/Logo/logo-white-01.svg')}}" alt="footer-logo" width="130" height="36" data-uk-img="">
                    </div>
                    <ul class="uk-list uk-link-text uk-margin-remove-top">
                        <li>
                            <div><i class="fa fa-registered uk-margin-small-right"></i>@lang('messages.registration_number') </div>
                            <div>
                               
                                <ul class="footer">
                                    <li>  2024 - 00244</li>
                                </ul>
                              </div> 
                                 
                 
                        </li>
                        <li>
                            <div><i class="fas fa-envelope uk-margin-small-right"></i>@lang('messages.email'):  </div>
                            <div> <a href="mailto:support@luckyantfxgroup.com">support@luckyantfxgroup.com</a> </div>
                        </li>
                        <li>
                            <div><i class="fa-regular fa-map-location-dot uk-margin-small-right"></i>@lang('messages.address') </div>
                            <div>
                                <ul class="footer">
                                    <li>F-3a-01, Level 3, KL Gateway Corporate Office Suite, N0 2, Jalan Kerinchi, Gerbang Kerinchi Lestari, 59200, Kuala Lumpur.</li>
                                </ul>
                              </div>
                        </li>
                        <li>
                            <div><i class="fas fa-map-marker-alt uk-margin-small-right"></i>@lang('messages.register_address') </div>
                            <div>
                                <ul class="footer">
                                    <li>Top Floor Rodney , Court Building , Rodney Bay , Gros Islet Saint Lucia</li>
                                </ul>
                              </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="uk-heading-bullet">@lang('messages.overview')</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{route('index')}}">@lang('messages.home')</a></li>
                        <li><a href="{{route('about')}}">@lang('messages.about_us')</a></li>
                        <li><a href="{{route('contact')}}">@lang('messages.contact_us')</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="uk-heading-bullet">@lang('messages.market')</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{route('forex')}}">@lang('messages.forex')</a></li>
                        <li><a href="{{route('stock')}}">@lang('messages.stock')</a></li>
                        <li><a href="{{route('cfd')}}">@lang('messages.cfd')</a></li>
                        <li><a href="{{route('indices')}}">@lang('messages.indices')</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="uk-heading-bullet">@lang('messages.trading')</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{route('trading')}}">@lang('messages.trading_platform')</a></li>
                        {{-- <li><a href="{{route('copytrading')}}">@lang('messages.copy_trading')</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="uk-grid uk-flex uk-flex-center uk-margin-large-top uk-margin-small-bottom" data-uk-grid="">
                <div class="uk-width-1-1@xl uk-margin-bottom uk-text-left uk-text-center@m">
                    <p class="uk-text-small">@lang('messages.luckyant_copyright')
                    </p>
                </div>
                <div class="uk-width-5-6@m uk-margin-bottom">
                    <div class="footer-warning in-margin-top-20@s">
                        <h5 class="uk-text-small uk-text-uppercase"><span>@lang('messages.risk_warning_title')</span></h5>
                        <p class="uk-text-small">@lang('messages.risk_warning') 
                        </p>
                        <p class="uk-text-small">
                            @lang('messages.risk_warning2') 
                        </p>
                        <p class="uk-text-small">
                            @lang('messages.risk_warning3') 
                        </p>
                    </div>
                </div>
                <div class="uk-width-1-2@m custom-small-screen">
                    <p class="copyright-text">© Lucky Ant 2024</p>
                </div>
                <div class="uk-width-1-2@m uk-flex uk-flex-right@m custom-small-screen">
                    <a class="uk-text-small" href="{{route('terms')}}">
                        @lang('messages.terms_policies')  </a>
                </div>
              
         
            <div class="uk-width-1-1@m  uk-flex uk-flex-right@m custom-small-screen uk-margin-remove-top">
                <!-- social media begin -->
                <div class="uk-flex social-media-list">
                            <div><a href="https://www.facebook.com/profile.php?id=61556727627539&mibextid=YMEMSu" class="color-facebook text-decoration-none"><i class="fab fa-facebook-square"></i> Facebook</a></div>
                            <div><a href="https://x.com/luckyantfx?s=21&t=8BuuVl1tsG5vZE8dbYeRyQ" class="color-twitter text-decoration-none"><i class="fab fa-twitter"></i> Twitter</a></div>
                            <div><a href="https://www.instagram.com/luckyantfx?igsh=aThnMGxpMjdicmx1&utm_source=qr" class="color-instagram text-decoration-none"><i class="fab fa-instagram"></i> Instagram</a></div>
                            <div><a href="https://www.youtube.com/channel/UC5z2xs8G7PNWgbvFaufKxqQ" class="color-youtube text-decoration-none"><i class="fab fa-youtube"></i> Youtube</a></div>
                </div>
                <!-- social media end -->
            </div>
            
            </div>
        
           
        </div>        
    </div>
</footer>
