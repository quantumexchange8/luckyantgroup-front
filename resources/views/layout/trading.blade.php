@extends('master.master')
@section('title', __('messages.trading_platform'))
@section('content')

<!----Description------------------>
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid" data-uk-grid>
            <div class="uk-width-3-5@m">
              <h1 class="uk-margin-small-bottom"><span class="in-highlight">@lang('messages.metatrader_tradingplatform')</span></h1>
                <p class="uk-text-lead uk-margin-remove-top uk-margin-bottom uk-text-blue">@lang('messages.oneplatform_market')</p>
                <p class="uk-text-justify uk-text-grey uk-text-default uk-visible@m">@lang('messages.metatrader_caption2')
                </p>
                <p class="uk-text-justify uk-text-grey uk-text-default textspace1 uk-hidden@m">@lang('messages.metatrader_caption2')
                </p>
                <p class="uk-text-grey">@lang('messages.feature_metatrader')</p>
                <ul class="uk-list in-list-check">
                    <li>@lang('messages.programming_language')</li>
                    <li>@lang('messages.provide_timeframe')</li>
                    <li>@lang('messages.built-in')</li>
                    <li>@lang('messages.offer_indicator')</li>
                    <li>@lang('messages.support_trading')</li>
                    <li>@lang('messages.enhance_transparency')</li>
                </ul>
            </div>
            <div class="uk-width-2-5@m" >
                <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain in-padding-large-vertical@s in-offset-bottom-80 in-profit-16"  style="background-image: url('../img/in-profit-decor-3.svg');" data-uk-img>                    
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-expand">
                            <h3 class="uk-margin-remove-bottom ">@lang('messages.diverse_order')</h3>
                            <h6 class=" uk-text-blue">@lang('messages.employ_strategy')
                            </h6>
                            <p class="uk-text-md uk-margin-small-top uk-text-justify">@lang('messages.metatrader_caption3')
                            </p>
                            <p class="uk-text-small uk-text-meta uk-text-red"><span class="uk-text-primary">*</span>@lang('messages.support_mobile')</p>

                <div class="uk-flex" data-uk-margin>
                    <a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader5&hl=en&referrer=ref_id%3D4852173143092083308%26hl%3Den%26utm_source%3Dwww.metatrader5.com%26utm_campaign%3Dinstall.metaquotes&pli=1" class="uk-button in-button-app uk-margin-small-right">
                        <i class="fab fa-google-play fa-2x"></i>
                        <span class="wrapper">@lang('messages.download')<br><span>@lang('messages.android')</span></span>
                    </a>
                    <a href="https://download.metatrader.com/cdn/web/lucky.ant.trading/mt5/luckyanttrading5setup.exe" class="uk-button in-button-app">
                        <i class="fa-brands fa-windows fa-2x"></i>
                        <span class="wrapper">@lang('messages.download')<br><span>@lang('messages.desktop')</span></span>
                    </a>
                </div>
                        </div>
                        <div class="uk-width-auto@m uk-visible@m">
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----End of Description---------->

<!--------------Metatrader Account Steps--------->
<div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-13">
    <div class="uk-container uk-margin-small-bottom">
        <div class="uk-grid-divider" data-uk-grid>
            <div class="uk-width-auto@m">
                <h2 class="uk-margin-remove-bottom uk-margin-right">@lang('messages.metatrader_account')</h2>
                <p class="uk-text-muted uk-margin-remove-top">@lang('messages.metatrader_account2')</p>
         
            </div>
            <div class="uk-width-expand@m">
                <div class="uk-grid-medium uk-child-width-1-1 uk-child-width-1-1@m uk-text-center in-client-logo-3" data-uk-grid>
                    <p class="uk-margin-top10 uk-text-justify uk-visible@m"> @lang('messages.metatrader_account_caption')</p>
                    <p class="uk-margin-top10 uk-text-justify uk-hidden@m textspace"> @lang('messages.metatrader_account_caption')</p>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-3@s uk-grid-large uk-child-width-1-3@m uk-text-center" data-uk-grid>
           
            <div>
                <span class="in-icon-wrap circle large uk-margin-auto">1</span>
                <h4 class="uk-heading-bullet uk-margin-top uk-margin-remove-bottom">@lang('messages.apply')</h4>
                <p>@lang('messages.for_trading_account')</p>
            </div>
            <div>
                <span class="in-icon-wrap circle large uk-margin-auto">2</span>
                <h4 class="uk-heading-bullet uk-margin-top uk-margin-remove-bottom">@lang('messages.fund')</h4>
                <p>@lang('messages.easily_secure')</p>
            </div>
            <div>
                <span class="in-icon-wrap circle large uk-margin-auto">3</span>
                <h4 class="uk-heading-bullet uk-margin-top uk-margin-remove-bottom">@lang('messages.trade')</h4>
                <p>@lang('messages.full_range_market')</p>
            </div>
          
        </div>
    </div>
</div>
<!-------End of Metatrader Account--------------->

<!---------------MT5 Trading Experience ---------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid-match uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m in-card-10" data-uk-grid>
          <div class="uk-width-1-1 uk-flex uk-flex-center uk-first-column">
                <div class="uk-width-4-5@m uk-text-center">
                    <h2>@lang('messages.luckyant_mt5_experience')</h2>
                
                    <p class="uk-text-default uk-text-muted uk-margin-remove">@lang('messages.engage_latest_advancement')</p>
               
                </div>
            </div>
      
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-darkblue">
                    <div class="in-icon-wrap circle uk-margin-medium-bottom">
                    <i class="fa fa-search fa-lg"></i>
                    </div>
                    <h4 class="uk-margin-top">
                        <a href="#">@lang('messages.500_market')</a>
                    </h4>
                    <hr>
                    <p class="uk-text-left">@lang('messages.500_market_caption')</p>
                </div>
            </div>
        
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-darkblue">
                  <div class="in-icon-wrap circle uk-margin-medium-bottom">
                    <i class="fa fa-line-chart fa-lg"></i>
                    </div>
                    <h4 class="uk-margin-top">
                        <a href="#">@lang('messages.charting_functionalities')</a>
                    </h4>
                    <hr>
                    <p class="uk-text-left">@lang('messages.charting_functionalities_caption')</p>
                </div>
            </div>
    
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-darkblue">
                  <div class="in-icon-wrap circle uk-margin-medium-bottom">
                    <i class="fas fa-life-ring fa-lg"></i>
                    </div>
                    <h4 class="uk-margin-top">
                        <a href="#">@lang('messages.investment_portfolio')</a>
                    </h4>
                    <hr>
                    <p class="uk-text-left">@lang('messages.investment_portfolio_caption')</p>
                </div>
            </div>
            <div class="uk-width-1-1 uk-flex uk-flex-center uk-first-column uk-margin-top30">
                <div class="uk-width-4-5@m uk-text-center">
                        <p class="uk-text-center uk-text-red">@lang('messages.trading_journey')</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------End of MT5 Trading Experience ---------------->

<!---------------Impressive Features ---------------->
{{--
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-3-5@m">
                <h2 class="uk-margin-small-bottom uk-text-center">@lang('messages.impressive_features')</h2>
            </div>
            <div class="uk-width-4-5@m uk-width-1-1@s">
                <table class="uk-table uk-table-middle uk-table-divider uk-table-responsive">
                    <tbody>
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                        <div class="in-icon-wrap circle primary-color">
                                            <i class="fas fa-users fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3>@lang('messages.expert_advisor')</h3>
                                        <p class="uk-text-justify">@lang('messages.expert_advisor_caption')
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                        <div class="in-icon-wrap circle primary-color">
                                            <i class="fas fa-users fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3>@lang('messages.fully_intergrated')</h3>
                                        <p class="uk-text-justify">@lang('messages.fully_intergrated_caption')</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                        <div class="in-icon-wrap circle primary-color">
                                            <i class="fas fa-users fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3>@lang('messages.vps_hosting')</h3>
                                        <p class="uk-text-justify">@lang('messages.vps_hosting_caption')</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
--}}
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-3-5@m">
                <h2 class="uk-margin-small-bottom uk-text-center">@lang('messages.impressive_features')</h2>
            </div>
            <div class="uk-width-4-5@m uk-width-1-1@s">
                <table class="uk-table uk-table-middle uk-table-divider uk-table-responsive">
                    <tbody>
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                   <!----web version---->
                                    <div class="uk-width-auto uk-visible@m">
                                        <div class="in-icon-wrap circle primary-color">
                                            <i class="fas fa-users fa-lg"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="uk-width-expand uk-visible@m">
                                        <h3>@lang('messages.expert_advisor')</h3>
                                        <p class="uk-text-justify">@lang('messages.expert_advisor_caption')
                                        </p>
                                    </div>
                                    <!--mobile version--->
                                    
                                    <div class="uk-width-expand uk-hidden@m">
                                        <h4>@lang('messages.expert_advisor')</h4>
                                        <p class="uk-text-justify">@lang('messages.expert_advisor_caption')
                                        </p>
                                    </div>


                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                      <!----web version---->
                                    <div class="uk-width-auto uk-visible@m">
                                        <div class="in-icon-wrap circle primary-color">
                                            <i class="fa fa-globe fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand uk-visible@m">
                                        <h3>@lang('messages.fully_intergrated')</h3>
                                        <p class="uk-text-justify">@lang('messages.fully_intergrated_caption')</p>
                                    </div>

                                    <!---mobile version---->
                                    <div class="uk-width-expand uk-hidden@m">
                                        <h4>@lang('messages.fully_intergrated')</h4>
                                        <p class="uk-text-justify">@lang('messages.fully_intergrated_caption')</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <!----web version---->
                                    <div class="uk-width-auto uk-visible@m">
                                        <div class="in-icon-wrap circle primary-color">
                                            <i class="fa-solid fa-dollar-sign fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand uk-visible@m">
                                        <h3>@lang('messages.vps_hosting')</h3>
                                        <p class="uk-text-justify">@lang('messages.vps_hosting_caption')</p>
                                    </div>

                                    <!----mobile version---->
                                    <div class="uk-width-expand uk-hidden@m">
                                        <h4>@lang('messages.vps_hosting')</h4>
                                        <p class="uk-text-justify">@lang('messages.vps_hosting_caption')</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!---------------End of Impressive Features---------->



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

<!------------------MetaTrader Account--------------->
{{--
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-3-4@m">
           <div class="uk-width-3-4@m">
              <h2>@lang('messages.tailor_metatrader')</h2>
           </div>
              <p>@lang('messages.tailor_metatrader_caption')</p>
                <div class="uk-grid-divider uk-child-width-1-1 uk-child-width-1-3@m uk-margin-medium-top uk-margin-bottom" data-uk-grid>
                    <div>
                         <h4><i class="fa-solid fa-desktop uk-text-red"></i> @lang('messages.mt5_desktop')</h4>
                        <p class="uk-text-justify">@lang('messages.mt5_desktop_caption')</p>
                       <!-- <a class="uk-button uk-button-text uk-text-primary" href="#">Download MT5 on Desktop</a> -->
                    </div>
                    <div>
                        <h4>  <i class="fas fa-mobile-alt uk-text-red"></i> @lang('messages.mt5_mobile')</h4>
                        <p class="uk-text-justify">@lang('messages.mt5_mobile_caption')</p>
                  
                    </div>
                    <div>
                        <h4><i class="fab fa-edge uk-text-red"></i> @lang('messages.mt5_web')</h4>
                        <p class="uk-text-justify"> @lang('messages.mt5_web_caption')</p>
                  
                    </div>
                </div>
                <p class="uk-text-center uk-text-red">@lang('messages.all_devices')</p>
            </div>
        </div>
    </div>
</div>
--}}


<div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-13">
    <div class="uk-container uk-margin-small-bottom">
       
            
        <div class="uk-grid uk-flex uk-flex-left">
           
                <div class="uk-width-3-5@m">
                <h2>@lang('messages.tailor_metatrader')</h2>
                </div>
                <p class="uk-margin-bottom uk-margin-top uk-text-justify">@lang('messages.tailor_metatrader_caption')</p>
            
        </div>
        <div class="uk-grid-divider" data-uk-grid>
            <div class="uk-width-1-3@m uk-width-1-1@s">
                <h3 class="uk-margin-remove-bottom uk-margin-right"><i class="fa-solid fa-desktop uk-text-red"></i> @lang('messages.mt5_desktop')</h3>
                <p class="uk-margin-top10 uk-text-justify uk-visible@m">@lang('messages.mt5_desktop_caption')</p>
                <p class="uk-margin-top10 uk-text-justify textspace1 uk-hidden@m">@lang('messages.mt5_desktop_caption')</p>
            </div>
            <div class="uk-width-1-3@m uk-width-1-1@s">
                    <h3 class="uk-margin-remove-bottom uk-margin-right"><i class="fas fa-mobile-alt uk-text-red"></i> @lang('messages.mt5_mobile')</h3>
                    <p class="uk-margin-top10 uk-text-justify uk-visible@m"> @lang('messages.mt5_mobile_caption')</p>
                    <p class="uk-margin-top10 uk-text-justify textspace1 uk-hidden@m"> @lang('messages.mt5_mobile_caption')</p>
            </div>
            <div class="uk-width-1-3@m uk-width-1-1@s">
                    <h3 class="uk-margin-remove-bottom uk-margin-right"><i class="fab fa-edge uk-text-red"></i> @lang('messages.mt5_web')</h3>
                    <p class="uk-margin-top10 uk-text-justify uk-visible@m"> @lang('messages.mt5_web_caption')</p>
                    <p class="uk-margin-top10 uk-text-justify uk-hidden@m textspace1"> @lang('messages.mt5_web_caption')</p>
            </div>
        </div>
        <div class="uk-grid uk-flex uk-flex-center">
        <p class="uk-text-center uk-text-blue uk-margin-top">@lang('messages.all_devices')</p>
        </div>
        
    </div>
</div>

<!----------End of MetaTrader Account--------------->

<!----------Open an Account----------->
<div class="uk-section">
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
</div>
<!---------End of Open an Account----->
@endsection