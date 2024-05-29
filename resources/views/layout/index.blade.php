@extends('master.master')

@section('title',__('messages.home') )
@section('content')
<main>


<!-----------------------Main Header------------------------------->

<div class="uk-section uk-padding-remove-vertical">
    <div class="in-slideshow uk-visible-toggle" data-uk-slideshow>
        <ul class="uk-slideshow-items">
            <li>          
                <div class="uk-container">
                    <div class="uk-grid" data-uk-grid>
                        @php
                            $language = app()->getLocale();
                            $ukWidthClass = ($language === 'cn') ? 'uk-width-3-5@m' : 'uk-width-4-5@m';
                        @endphp
                        <div class="{{ $ukWidthClass }}">
                            <div class="uk-overlay">
                                <h1 class="uk-text-darkblue">@lang('messages.leading_digital')</h1>
                                <p class="uk-text-darkblue uk-text-meta1 uk-text-justify">@lang('messages.leading_description')</p>
                                <div class="in-slideshow-button  {{ app()->getLocale() === 'en' ? 'hide-button' : '' }}">
                                    <a href="{{ url('https://member.luckyantfxasia.com/register') }}" class="uk-button uk-button-primary uk-border-rounded">@lang('messages.real_account')</a>
                                    <a href="#" class="uk-button uk-button-first uk-border-rounded ">@lang('messages.demo_account')</a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-position-center">
                            <img class="uk-animation-slide-top-small" src="{{asset('img/bg3-03.png')}}" alt="slideshow-image" width="862" height="540" data-uk-img>
                        </div>
                    </div>
                </div>
            </li> 
            {{-- <li>

                <div class="uk-container">
                    <div class="uk-grid" data-uk-grid>
                  
                        <div class="uk-width-3-5@m">
                            <div class="uk-overlay">
                                <h1 >@lang('messages.one_click')</h1>
                                <p class="uk-text-darkblue uk-text-meta1 uk-visible uk-text-justify">@lang('messages.oneclick_desc')</p>
                                <div class="in-slideshow-button  {{ app()->getLocale() === 'en' ? 'hide-button' : '' }}">
                                    <a href="{{ url('https://member.luckyantfxasia.com/register') }}" class="uk-button uk-button-primary uk-border-rounded">@lang('messages.real_account')</a>
                                    <a href="#" class="uk-button uk-button-first uk-border-rounded ">@lang('messages.demo_account')</a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-position-center">
                            <img class="uk-animation-slide-top-small  image-opacity" src="{{asset('img/image11-01-01.png')}}" alt="slideshow-image" width="500" height="550" data-uk-img>
                        </div>
                    </div>
                </div>
              
            </li> --}}
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
    </div>
</div>

{{--
<div class="uk-section uk-padding-remove-vertical ">
        <div class="in-slideshow uk-visible-toggle" data-uk-slideshow>
                <ul class="uk-slideshow-items">
                
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-1-1 uk-width-3-5@l uk-width-4-5@m">
                                    <div class="uk-overlay">
                                        <h1 class="uk-text-darkblue uk-hidden@m">@lang('messages.leading_digital')</h1>
                                        <h1 class="uk-visible@m">@lang('messages.leading_digital')</h1>
                                        <p class="uk-text-darkblue uk-text-meta1 uk-text-justify uk-visible@m">@lang('messages.leading_description')</p>
                                        <div class="in-slideshow-button uk-margin-top uk-visible@m">
                                            <a href="#" class="uk-button uk-button-primary uk-border-rounded">@lang('messages.real_account')</a>
                                            <a href="#" class="uk-button uk-button-first uk-border-rounded">@lang('messages.demo_account')</a>
                                        </div>
                                        <p class="uk-text-darkblue uk-text-meta1 uk-text-justify uk-hidden@m">@lang('messages.leading_description')</p>
                                        <div class="in-slideshow-button uk-margin-top uk-width-1-1@s uk-hidden@m">
                                            <a href="#" class="uk-button uk-button-primary uk-border-rounded">@lang('messages.real_account')</a>
                                            <a href="#" class="uk-button uk-button-first uk-border-rounded">@lang('messages.demo_account')</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-position-center">
                                    <img class="uk-animation-slide-top-small " src="{{asset('img/in-slideshow-image-5-01.png')}}" alt="slideshow-image" width="862" height="550" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li> 
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-1-1 uk-width-3-5@m">
                                    <div class="uk-overlay">
                                        <h1 class="uk-hidden@m uk-text-darkblue">@lang('messages.one_click')</h1>
                                        <h1 class="uk-visible@m">@lang('messages.one_click')</h1>
                                        
                                        <p class="uk-text-darkblue uk-text-meta1 uk-visible uk-text-justify uk-visible@m">@lang('messages.oneclick_desc')</p>
                                        <p class="uk-text-darkblue uk-text-meta1 uk-visible uk-text-justify uk-hidden@m">@lang('messages.oneclick_desc')</p>
                                        <div class="in-slideshow-button uk-margin-top uk-visible@m">
                                            <a href="#" class="uk-button uk-button-primary uk-border-rounded">@lang('messages.real_account') </a>
                                            <a href="#" class="uk-button uk-button-first uk-border-rounded">@lang('messages.demo_account')</a>
                                        </div>
                                        <div class="in-slideshow-button uk-margin-top uk-hidden@m uk-text-center uk-width-1-1@s">
                                            <a href="#" class="uk-button uk-button-primary uk-border-rounded">@lang('messages.real_account') </a>
                                            <a href="#" class="uk-button uk-button-first uk-border-rounded">@lang('messages.demo_account')</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-position-center">
                                    <img class="uk-animation-slide-top-small" src="{{asset('img/image11-01.png')}}" alt="slideshow-image" width="500" height="550" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
    
        </div>
</div>
--}}


<!-----------------------End of Main Header----------------------->

<!-----------------------4 tools------------------------------->
<div class="uk-section uk-padding-remove-vertical">
    <div class="in-slideshow uk-visible-toggle" data-uk-slideshow>
        <div class="uk-section uk-section-secondary in-padding-large-vertical@s in-profit-9">
            <div class="uk-container">
                <div class="uk-grid-divider" data-uk-grid>
                    <div class="uk-width-1-1@m">
                        <div class="uk-child-width-1-2 uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center uk-margin-top" data-uk-grid>
                            <div>
                                <div class="in-icon-wrap circle uk-box-shadow-small uk-margin-auto">
                                    <i class="fas fa-drafting-compass"></i>
                                </div>
                                <p class="uk-text-bold uk-margin-small-top">@lang('messages.trading_tools')</p>
                            </div>
                            <div>
                                <div class="in-icon-wrap circle uk-box-shadow-small uk-margin-auto">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <p class="uk-text-bold uk-margin-small-top">@lang('messages.swift_executiontools')</p>
                            </div>
                            <div>
                                <div class="in-icon-wrap circle uk-box-shadow-small uk-margin-auto">
                                    <i class="fas fa-chart-area"></i>
                                </div>
                                <p class="uk-text-bold uk-margin-small-top">@lang('messages.ultra_low') </p>
                            </div>
                            <div>
                                <div class="in-icon-wrap circle uk-box-shadow-small uk-margin-auto">
                                    <i class="fas fa-percentage"></i>
                                </div>
                                <p class="uk-text-bold uk-margin-small-top">@lang('messages.commission_rebates')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-----------------------End of 4 tools----------------------->

<!-----------------------Preferred Partner------------------------------->

<div class="uk-section uk-padding-large uk-background-contain uk-background-bottom-center in-padding-large-vertical@s in-offset-top-40 in-profit-14" style="background-image: url('../img/in-section-profit-14.jpg');">
    <div class="uk-container uk-margin-bottom">
        <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center uk-margin-top10" data-uk-grid style="place-content: center;">
            <div class="uk-width-1-1">
                <h2>@lang('messages.preferred_partner')</h2>
                <p class="uk-text-grey">@lang('messages.preferred_caption')</p>
            </div>
          
            <div>
                <img src="{{asset('img/in-profit-icon-2.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">@lang('messages.diverse_tools')</h4>
            </div>
            <div>
                <img src="{{asset('img/in-profit-icon-8.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">@lang('messages.unparalleled_trading')</h4>
            </div>
            {{-- <div>
                <img src="{{asset('img/in-profit-icon-10.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">@lang('messages.globally_licensed')</h4>
            </div> --}}
            <div>
                <img src="{{asset('img/in-profit-icon-9.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">@lang('messages.forex_education')</h4>
            </div>
        </div>
    </div>
</div>
<!-----------------------End of Preferred Partner------------------------>

<!----------------------Download apps-------------------------------------->
<div class="uk-section in-padding-vertical@s in-profit-12 uk-visible@m">
    <div class="uk-container">
            <div class="uk-grid-large uk-flex uk-flex-center" data-uk-grid>
                <div class="uk-width-1-2@m uk-text-center">
                    <div class="uk-card uk-card-default uk-border-rounded uk-box-shadow-medium">
                        <div class="uk-card-body">
                            <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="uk-text-red">@lang('messages.track_TradingView')</span></a></div>
                                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                                {
                                                    "colorTheme": "light",
                                                    "dateRange": "12M",
                                                    "showChart": true,
                                                    "locale": "en",
                                                    "width": "100%",
                                                    "height": "500",
                                                    "largeChartUrl": "",
                                                    "isTransparent": false,
                                                    "showSymbolLogo": true,
                                                    "showFloatingTooltip": false,
                                                    "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                                    "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                                    "gridLineColor": "rgba(240, 243, 250, 0)",
                                                    "scaleFontColor": "rgba(106, 109, 120, 1)",
                                                    "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                                    "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                                    "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                                    "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                                    "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                                    "tabs": [
                                                    {
                                                        "title": "Indices",
                                                        "symbols": [
                                                        {
                                                            "s": "FOREXCOM:SPXUSD",
                                                            "d": "S&P 500"
                                                        },
                                                        {
                                                            "s": "FOREXCOM:NSXUSD",
                                                            "d": "US 100"
                                                        },
                                                        {
                                                            "s": "FOREXCOM:DJI",
                                                            "d": "Dow 30"
                                                        },
                                                        {
                                                            "s": "INDEX:NKY",
                                                            "d": "Nikkei 225"
                                                        },
                                                        {
                                                            "s": "INDEX:DEU40",
                                                            "d": "DAX Index"
                                                        },
                                                        {
                                                            "s": "FOREXCOM:UKXGBP",
                                                            "d": "UK 100"
                                                        }
                                                        ],
                                                        "originalTitle": "Indices"
                                                    },
                                                    {
                                                        "title": "Futures",
                                                        "symbols": [
                                                        {
                                                            "s": "CME_MINI:ES1!",
                                                            "d": "S&P 500"
                                                        },
                                                        {
                                                            "s": "CME:6E1!",
                                                            "d": "Euro"
                                                        },
                                                        {
                                                            "s": "COMEX:GC1!",
                                                            "d": "Gold"
                                                        },
                                                        {
                                                            "s": "NYMEX:CL1!",
                                                            "d": "WTI Crude Oil"
                                                        },
                                                        {
                                                            "s": "NYMEX:NG1!",
                                                            "d": "Gas"
                                                        },
                                                        {
                                                            "s": "CBOT:ZC1!",
                                                            "d": "Corn"
                                                        }
                                                        ],
                                                        "originalTitle": "Futures"
                                                    },
                                                    {
                                                        "title": "Bonds",
                                                        "symbols": [
                                                        {
                                                            "s": "CBOT:ZB1!",
                                                            "d": "T-Bond"
                                                        },
                                                        {
                                                            "s": "CBOT:UB1!",
                                                            "d": "Ultra T-Bond"
                                                        },
                                                        {
                                                            "s": "EUREX:FGBL1!",
                                                            "d": "Euro Bund"
                                                        },
                                                        {
                                                            "s": "EUREX:FBTP1!",
                                                            "d": "Euro BTP"
                                                        },
                                                        {
                                                            "s": "EUREX:FGBM1!",
                                                            "d": "Euro BOBL"
                                                        }
                                                        ],
                                                        "originalTitle": "Bonds"
                                                    },
                                                    {
                                                        "title": "Forex",
                                                        "symbols": [
                                                        {
                                                            "s": "FX:EURUSD",
                                                            "d": "EUR to USD"
                                                        },
                                                        {
                                                            "s": "FX:GBPUSD",
                                                            "d": "GBP to USD"
                                                        },
                                                        {
                                                            "s": "FX:USDJPY",
                                                            "d": "USD to JPY"
                                                        },
                                                        {
                                                            "s": "FX:USDCHF",
                                                            "d": "USD to CHF"
                                                        },
                                                        {
                                                            "s": "FX:AUDUSD",
                                                            "d": "AUD to USD"
                                                        },
                                                        {
                                                            "s": "FX:USDCAD",
                                                            "d": "USD to CAD"
                                                        }
                                                        ],
                                                        "originalTitle": "Forex"
                                                    }
                                                    ]
                                                }
                                            </script>
                                </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>  
                </div>
                <div class="uk-width-1-2@m uk-width-1-1@s uk-margin-remove-bottom" >
                    <h2>@lang('messages.metatrader_title')</h2>
                    <p class="uk-text-justify uk-text-meta uk-text-grey">@lang('messages.metatrader_caption')
                    </p>
                    <div class="uk-flex" data-uk-margin>
                        <a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader5&hl=en&referrer=ref_id%3D4852173143092083308%26hl%3Den%26utm_source%3Dwww.metatrader5.com%26utm_campaign%3Dinstall.metaquotes&pli=1" class="uk-button in-button-app uk-margin-small-right">
                            <i class="fab fa-google-play fa-2x"></i>
                            <span class="wrapper">@lang('messages.download') <br><span>@lang('messages.android')</span></span>
                        </a>
                        <a href="https://download.metatrader.com/cdn/web/lucky.ant.trading/mt5/luckyanttrading5setup.exe" class="uk-button in-button-app">
                            <i class="fa-brands fa-windows fa-2x"></i>
                            <span class="wrapper">@lang('messages.download') <br><span>@lang('messages.desktop')</span></span>
                        </a>
                    </div>
                </div>
            </div>
    </div>
</div>


<div class="uk-section uk-hidden@m">
    <div class="uk-container ">
        <div class="uk-grid-large" data-uk-grid>
            <div class="uk-width-1-1@s uk-text-center">
                <div class="uk-card uk-card-default uk-border-rounded uk-box-shadow-medium">
                    <div class="uk-card-body">
                        <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="uk-text-red">@lang('messages.track_TradingView')</span></a></div>
                                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                            {
                                                "colorTheme": "light",
                                                "dateRange": "12M",
                                                "showChart": true,
                                                "locale": "en",
                                                "width": "100%",
                                                "height": "500",
                                                "largeChartUrl": "",
                                                "isTransparent": false,
                                                "showSymbolLogo": true,
                                                "showFloatingTooltip": false,
                                                "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                                "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                                "gridLineColor": "rgba(240, 243, 250, 0)",
                                                "scaleFontColor": "rgba(106, 109, 120, 1)",
                                                "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                                "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                                "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                                "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                                "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                                "tabs": [
                                                {
                                                    "title": "Indices",
                                                    "symbols": [
                                                    {
                                                        "s": "FOREXCOM:SPXUSD",
                                                        "d": "S&P 500"
                                                    },
                                                    {
                                                        "s": "FOREXCOM:NSXUSD",
                                                        "d": "US 100"
                                                    },
                                                    {
                                                        "s": "FOREXCOM:DJI",
                                                        "d": "Dow 30"
                                                    },
                                                    {
                                                        "s": "INDEX:NKY",
                                                        "d": "Nikkei 225"
                                                    },
                                                    {
                                                        "s": "INDEX:DEU40",
                                                        "d": "DAX Index"
                                                    },
                                                    {
                                                        "s": "FOREXCOM:UKXGBP",
                                                        "d": "UK 100"
                                                    }
                                                    ],
                                                    "originalTitle": "Indices"
                                                },
                                                {
                                                    "title": "Futures",
                                                    "symbols": [
                                                    {
                                                        "s": "CME_MINI:ES1!",
                                                        "d": "S&P 500"
                                                    },
                                                    {
                                                        "s": "CME:6E1!",
                                                        "d": "Euro"
                                                    },
                                                    {
                                                        "s": "COMEX:GC1!",
                                                        "d": "Gold"
                                                    },
                                                    {
                                                        "s": "NYMEX:CL1!",
                                                        "d": "WTI Crude Oil"
                                                    },
                                                    {
                                                        "s": "NYMEX:NG1!",
                                                        "d": "Gas"
                                                    },
                                                    {
                                                        "s": "CBOT:ZC1!",
                                                        "d": "Corn"
                                                    }
                                                    ],
                                                    "originalTitle": "Futures"
                                                },
                                                {
                                                    "title": "Bonds",
                                                    "symbols": [
                                                    {
                                                        "s": "CBOT:ZB1!",
                                                        "d": "T-Bond"
                                                    },
                                                    {
                                                        "s": "CBOT:UB1!",
                                                        "d": "Ultra T-Bond"
                                                    },
                                                    {
                                                        "s": "EUREX:FGBL1!",
                                                        "d": "Euro Bund"
                                                    },
                                                    {
                                                        "s": "EUREX:FBTP1!",
                                                        "d": "Euro BTP"
                                                    },
                                                    {
                                                        "s": "EUREX:FGBM1!",
                                                        "d": "Euro BOBL"
                                                    }
                                                    ],
                                                    "originalTitle": "Bonds"
                                                },
                                                {
                                                    "title": "Forex",
                                                    "symbols": [
                                                    {
                                                        "s": "FX:EURUSD",
                                                        "d": "EUR to USD"
                                                    },
                                                    {
                                                        "s": "FX:GBPUSD",
                                                        "d": "GBP to USD"
                                                    },
                                                    {
                                                        "s": "FX:USDJPY",
                                                        "d": "USD to JPY"
                                                    },
                                                    {
                                                        "s": "FX:USDCHF",
                                                        "d": "USD to CHF"
                                                    },
                                                    {
                                                        "s": "FX:AUDUSD",
                                                        "d": "AUD to USD"
                                                    },
                                                    {
                                                        "s": "FX:USDCAD",
                                                        "d": "USD to CAD"
                                                    }
                                                    ],
                                                    "originalTitle": "Forex"
                                                }
                                                ]
                                            }
                                        </script>
                            </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>  
            </div>
            <div class="uk-width-1-1@s uk-text-center">
                <h2>@lang('messages.metatrader_title')</h2>
                <p class="uk-text-justify uk-text-meta uk-text-grey">@lang('messages.metatrader_caption')
                </p>
                <div class="uk-flex">
                    <a href="#" class="uk-button in-button-app uk-margin-small-right">
                        <i class="fab fa-google-play fa-2x"></i>
                        <span class="wrapper">@lang('messages.download') <br><span>@lang('messages.android')</span></span>
                    </a>
                    <a href="#" class="uk-button in-button-app">
                        <i class="fa-brands fa-windows fa-2x"></i>
                        <span class="wrapper">@lang('messages.download') <br><span>@lang('messages.desktop')</span></span>
                    </a>
                </div>
              
            </div>
        </div>
    </div>
</div>

<!----------------------End of Download apps------------------------------->

<div class="uk-section">
    <div class="uk-container ">
        <div class="uk-grid" data-uk-grid>
            <div class="uk-width-1-1 in-offset-bottom-20">
                <h2 class="uk-margin-medium-bottom text-align-center">@lang('messages.choose_us')</h2>
            </div>
        </div>
        <div class="uk-grid-large uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-1-2@s uk-width-1-3@m">
                <img src="{{asset('img/in-profit-icon-5.svg')}}" alt="profit-icon" width="86" height="86">
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue ">@lang('messages.swift_execution')</h4>
                <p class="uk-text-grey uk-text-justify">@lang('messages.swiftexecution_caption')</p>
            </div>
            <div class="uk-width-1-2@s uk-width-1-3@m">
                <img src="{{asset('img/in-profit-icon-6.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">@lang('messages.diverse_payment') </h4>
                <p class="uk-text-grey uk-text-justify">@lang('messages.diversepayment_caption')</p>
            </div>
            <div class="uk-width-1-2@s uk-width-1-3@m">
                <img src="{{asset('img/in-profit-icon-3.svg')}}"alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">@lang('messages.industry_leading')</h4>
                <p class="uk-text-grey uk-text-justify">@lang('messages.industry_caption')</p>
            </div>
            {{-- <div class="uk-width-1-2@s uk-width-1-3@m">
                <img src="{{asset('img/in-profit-icon-2.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">@lang('messages.copy_trading')</h4>
                <p class="uk-text-grey uk-text-justify">@lang('messages.copytrading_desc')</p>
            </div> --}}
            <div class="uk-width-1-2@s uk-width-1-3@m">
                <img src="{{asset('img/in-profit-icon-1.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">@lang('messages.24/7_cs')</h4>
                <p class="uk-text-grey uk-text-justify">@lang('messages.24/7cs_caption')</p>
            </div>
            <div class="uk-width-1-2@s uk-width-1-3@m">
                <img src="{{asset('img/in-profit-icon-4.svg')}}" alt="profit-icon" width="86" height="86" data-uk-img>
                <h4 class="uk-heading-bullet uk-margin-top uk-text-blue">@lang('messages.trading_mode')</h4>
                <p class="uk-text-grey uk-text-justify">@lang('messages.tradingmode_caption')</p>
            </div>
        </div>
    </div>
</div>

<!---------------Contact Us---------------------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 in-card-16">
                <div class="uk-card uk-card-default1 uk-card-body uk-box-shadow-medium uk-border-rounded background-cover" style="background-image: url('../img/in-profit-decor-3.svg'); background-size: cover; background-position: center;">
                    <div class="uk-grid uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-1 uk-width-expand@m">
                            <h3 class="uk-text-blue">@lang('messages.turn_your_dream')</h3>
                        </div>
                        <div class="uk-width-auto">
                            <a class="uk-button uk-button-primary uk-border-rounded" href="{{route('contact')}}">@lang('messages.contact_us')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------------End of Contact Us-------------------------->

</main>
@endsection