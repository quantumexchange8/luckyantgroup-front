@extends('master.master')
@section('title', __('messages.indices'))
@section('content')


<!---------------Title Header-------------------------->
<div class="uk-section  uk-background-cover"  style="background-image: url('../img/blockit/bg-01.png');">
    <div class="uk-container ">
        <div class="uk-grid">
            <div class="uk-width-1-1" >
                <h1 class="uk-text-superlarge uk-padding uk-text-white">@lang('messages.indices')</h1>
            </div>
        </div>
    </div>
</div>
<!---------------End of Title Header-------------------------->

<!-----------------Indices Description----------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1@m">
                <div class="uk-grid uk-grid-small" data-uk-grid>
                  
                    <div class="uk-width-expand">
                        <div class="uk-flex-col">
                            <div class="in-icon-wrap circle primary-color uk-margin-right uk-visible@m">
                                <i class="fas fa-money-bill-wave fa-2x"></i>    
                            </div>     
                            <h2>@lang('messages.indices')</h2>
                        </div>
                     
                        <p class="uk-text-justify">@lang('messages.indices_caption')</p>
                         
                        <p>@lang('messages.advantage_index')</p>
                        <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                         
                            <div>
                                <ul class="uk-list in-list-check">
                                    <li>@lang('messages.advantage_index1')</li>
                                    <li>@lang('messages.advantage_index2')</li>
                                </ul>
                            </div>
                            <div>
                                <ul class="uk-list in-list-check">
                                    <li>@lang('messages.advantage_index3')</li>
                                    <li>@lang('messages.advantage_index4')</li>
                                </ul>
                            </div>

                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-----------------End of Indices Description---------------->


<!-------------------------Contact Us-------------------------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 in-card-16">
                <div class="uk-card uk-card-default1 uk-box-shadow-medium uk-card-body uk-border-rounded background-cover" style="background-image: url('../img/in-profit-decor-3.svg'); background-size: cover; background-position: center;">
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
<!--------------------------End of Open Contact Us------------------------->

<!----------------Widget-------------------------------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1@m uk-text-center">
                <h1>@lang('messages.market_overview')</h1>

                <div class="uk-flex uk-flex-center">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="uk-text-small uk-text-meta uk-text-red">@lang('messages.track_TradingView')</span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                                "colorTheme": "light",
                                "dateRange": "12M",
                                "showChart": true,
                                "locale": "en",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "showSymbolLogo": true,
                                "showFloatingTooltip": false,
                                "width": "900",
                                "height": "660",
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
    </div>
</div>
<!---------------End of Widget------------------------------------->

<!---------------Open Account-------------------------->
{{-- <div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-primary uk-box-shadow-large uk-border-rounded uk-background-cover" style="background-image: url('../img/blockit/in-card-background-03.png');">
                    <div class="uk-card-body">
                        <div class="uk-grid uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-1 uk-width-expand@m">
                                <h2 class="uk-text-blue">@lang('messages.open_your_account')</h2>
                            </div>
                            <div class="uk-width-auto">
                                <a class="uk-button uk-button-primary uk-border-rounded uk-margin-top10 uk-margin-right" href="{{ url('https://member.luckyantfxasia.com/register') }}">@lang('messages.real_account')</a>
                                <a class="uk-button uk-button-primary uk-border-rounded uk-margin-top10 " href="#">@lang('messages.demo_account')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!---------------End of Open Account-------------------------->
@endsection