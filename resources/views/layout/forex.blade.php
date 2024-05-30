@extends('master.master')
@section('title',__('messages.forex'))
@section('content')

<!---------------Title Header-------------------------->
<div class="uk-section  uk-background-cover"  style="background-image: url('../img/blockit/bg-01.png');">
    <div class="uk-container ">
        <div class="uk-grid">
            <div class="uk-width-1-1" >
                <h1 class="uk-text-superlarge uk-padding uk-text-white">@lang('messages.forex')</h1>
            </div>
        </div>
    </div>
</div>
<!---------------End of Title Header-------------------------->

<!---------------Forex Description-------------------------->
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
                              <h2>@lang('messages.forex')</h2>
                        </div>
                        <p class="uk-text-justify">@lang('messages.forex_caption1')</p>
                        <p class="uk-text-justify">@lang('messages.forex_caption2')</p>
                        <p class="uk-text-justify">@lang('messages.forex_caption3')</p>
                        <p>@lang('messages.forex_caption4')</p>
                        <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                         
                            <div>
                                <ul class="uk-list in-list-check">
                                    <li> @lang('messages.forex_advantage1')</li>
                                    <li>@lang('messages.forex_advantage2')</li>
                                    <li>@lang('messages.forex_advantage3')</li>
                                    <li>@lang('messages.forex_advantage4')</li>
                                    <li>@lang('messages.forex_advantage5')</li>
                                    <li>@lang('messages.forex_advantage6')</li>
                                </ul>
                            </div>
                            <div class="in-margin-top-10@s in-margin-bottom-30@s">
                                <ul class="uk-list in-list-check">
                                    <li>@lang('messages.forex_advantage7')</li>
                                    <li>@lang('messages.forex_advantage8')</li>
                                    <li>@lang('messages.forex_advantage9')</li>
                                    <li>@lang('messages.forex_advantage10')</li>
                                    <li>@lang('messages.forex_advantage11')</li>
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</div>
<!---------------End of Forex Description-------------------------->

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

<!---------------Trading View Widget-------------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1@m uk-text-center">
                <h1>@lang('messages.forex_crossrates')</h1>
                    <!-- Center the TradingView Widget -->
                    <div class="uk-flex uk-flex-center">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright">
                                <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">
                                    <span class="uk-text-meta uk-text-small uk-text-red">@lang('messages.track_TradingView')</span>
                                </a>
                            </div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                                {
                                    "width": 900,
                                    "height": 610,
                                    "currencies": [
                                        "EUR",
                                        "USD",
                                        "JPY",
                                        "GBP",
                                        "CHF",
                                        "AUD",
                                        "CAD",
                                        "NZD"
                                    ],
                                    "isTransparent": false,
                                    "colorTheme": "light",
                                    "locale": "en"
                                }
                            </script>
                        </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------End of Trading View Widget-------------------------->

<!---------------Open Account---------------------------------->
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