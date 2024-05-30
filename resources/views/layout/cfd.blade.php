@extends('master.master')
@section('title', __('messages.cfd'))
@section('content')

<!---------------Title Header-------------------------->
<div class="uk-section uk-background-cover" style="background-image: url('../img/blockit/bg-01.png');">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <h1 class="uk-text-superlarge uk-padding uk-text-white uk-visible@m">@lang('messages.cryptocurrency_cfd')</h1>
                <h1 class="uk-text-superlarge uk-padding uk-text-white uk-hidden@m">@lang('messages.cfd')</h1>
            </div>
        </div>
    </div>
</div>

<!---------------End of Title Header-------------------------->

<!-------------CFDs Description----------------------------->
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
                            <h2>@lang('messages.cryptocurrency_cfd')</h2>
                        </div>
                     
                        <p class="uk-text-justify uk-visible@m">@lang('messages.cfd_caption1')</p>
                        <h4 class="uk-text-justify uk-visible@m">@lang('messages.cfd_caption2')</h4>
                        <p class="uk-text-justify uk-visible@m">@lang('messages.cfd_caption3')</p>
                        <h4 class="uk-text-justify uk-visible@m">@lang('messages.cfd_caption4')</h4>
                        <p class="uk-text-justify uk-visible@m">@lang('messages.cfd_caption5')</p>
                        <p class="uk-text-justify uk-hidden@m textspace1">@lang('messages.cfd_caption1')</p>
                        <h4 class="uk-text-justify uk-hidden@m textspace1">@lang('messages.cfd_caption2')</h4>
                        <p class="uk-text-justify uk-hidden@m textspace1">@lang('messages.cfd_caption3')</p>
                        <h4 class="uk-text-justify uk-hidden@m textspace1">@lang('messages.cfd_caption4')</h4>
                        <p class="uk-text-justify uk-hidden@m textspace1">@lang('messages.cfd_caption5')</p>
                        
                        <p>@lang('messages.cfd_advantage')</p>
                        <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                         
                            <div>
                                <ul class="uk-list in-list-check">
                                    <li> @lang('messages.cfd_advantage1')</li>
                                    <li>@lang('messages.cfd_advantage2')</li>
                                    <li>@lang('messages.cfd_advantage3')</li>
                                </ul>
                            </div>
                            <div class="in-margin-top-10@s in-margin-bottom-30@s">
                                <ul class="uk-list in-list-check">
                                    <li>@lang('messages.cfd_advantage4')</li>
                                    <li>@lang('messages.cfd_advantage5')</li>
                                
                                </ul>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------End of CFDs Description---------------------->

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

<!---------------------Widget------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1@m uk-text-center">
                <h1>@lang('messages.real-time_chart')</h1>
                <div class="uk-flex uk-flex-center">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="uk-text-red">@lang('messages.track_TradingView')</span></a></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                                {
                                    "width": "900",
                                    "height": "610",
                                    "symbol": "NASDAQ:AAPL",
                                    "interval": "D",
                                    "timezone": "Etc/UTC",
                                    "theme": "light",
                                    "style": "3",
                                    "locale": "en",
                                    "enable_publishing": false,
                                    "backgroundColor": "rgba(255, 255, 255, 1)",
                                    "gridColor": "rgba(28, 69, 135, 0.06)",
                                    "allow_symbol_change": true,
                                    "support_host": "https://www.tradingview.com"
                                }
                            </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------End of Widget------------------>

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