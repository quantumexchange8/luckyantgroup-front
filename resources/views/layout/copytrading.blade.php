@extends('master.master')
@section('title', __('messages.copy_trading'))
@section('content')

<!-------------------Copy trading description-------------------->
<div class="uk-section uk-section-secondary uk-padding-large uk-background-cover hide-background-image uk-background-bottom-center1 in-padding-large-vertical@s in-profit-3" style="background-image: url('../img/copytrading-01.png');" data-uk-img>
    <div class="uk-container uk-margin-small-bottom">
        <div class="uk-grid-large" data-uk-grid>
            <div class="uk-width-3-5@m">
                <h2>@lang('messages.copytrading_title')</h2>
                <p class="uk-text-justify uk-text-default uk-text-white uk-visible@m">@lang('messages.copytrading_caption')</p>
                <p class="uk-text-justify uk-text-default uk-text-white uk-visible@m">@lang('messages.copytrading_caption1')</p>
                <p class="uk-text-justify text-copytrade uk-text-default uk-hidden@m">@lang('messages.copytrading_caption')</p>
                <p class="uk-text-justify text-copytrade uk-text-default uk-hidden@m">@lang('messages.copytrading_caption1')</p>
            </div>
        </div>
    </div>
</div>
<!-------------------End of Copy trading description----------->


<!-------------------Copy trading advantages-------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid-match uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m in-card-10" data-uk-grid>
            <div class="uk-width-1-1 uk-flex uk-flex-center uk-first-column">
                <div class="uk-width-1-1@m uk-text-center">
                    <h2>@lang('messages.outstanding')</h2>
                </div>
            </div>
            <!-- ... (other cards) ... -->
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-darkblue">
                    <div class="in-icon-wrap circle uk-margin-medium-bottom">
                        <i class="fas fa-funnel-dollar fa-lg"></i>
                    </div>
                    <h4 class="uk-margin-top">
                        <a href="#">@lang('messages.time_efficiency')</a>
                    </h4>
                    <hr>
                    <div class="toggle-text">
                        <p class=" uk-text-justify">
                            @lang('messages.timeefficiency_caption')
                        </p>
                        <p class="hidden uk-text-justify">@lang('messages.timeefficiency_caption2')</p>
                        <i class="fas fa-chevron-right uk-float-right" onclick="toggleVisibility(this)" title="Show more"></i>
                    </div>
                   
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-darkblue">
                    <div class="in-icon-wrap circle uk-margin-medium-bottom">
                        <ifa-lg class="fas fa-solid fa-clock fa-lg"></i>
                    </div>
                    <h4 class="uk-margin-top">
                        <a href="#">@lang('messages.flexibility') </a>
                    </h4>
                    <hr>
                    <div class="toggle-text">
                        <p class=" uk-text-justify">@lang('messages.flexibility_caption')</p>
                        <p class="hidden uk-text-justify">@lang('messages.flexibility_caption2')</p>
                        <i class="fas fa-chevron-right uk-float-right" onclick="toggleVisibility(this)" title="Show more"></i>
                    </div>
                  
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-darkblue">
                    <div class="in-icon-wrap circle uk-margin-medium-bottom">
                        <i class="fas fa-chart-bar fa-lg"></i>
                    </div>
                    <h4 class="uk-margin-top">
                        <a href="#">@lang('messages.efficient_execution') </a>
                    </h4>
                    <hr>
                    <div class="toggle-text">
                        <p class=" uk-text-justify">@lang('messages.efficientexecution_caption')</p>
                        <p class="hidden uk-text-justify">@lang('messages.efficientexecution_caption2')</p>
                        <i class="fas fa-chevron-right uk-float-right" onclick="toggleVisibility(this)"></i>
                    </div>
                  
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-darkblue">
                    <div class="in-icon-wrap circle uk-margin-medium-bottom">
                        <i class="fas fa-chalkboard-teacher fa-lg"></i>
                    </div>
                    <h4 class="uk-margin-top">
                        <a href="#">@lang('messages.high-quality') </a>
                    </h4>
                    <hr>
                    <div class="toggle-text">
                        <p class=" uk-text-justify">@lang('messages.high-quality_caption')</p>
                        <p class="hidden  uk-text-justify">@lang('messages.high-quality_caption2')</p>
                    </div>
                    <i class="fas fa-chevron-right uk-float-right" onclick="toggleVisibility(this)"></i>
                </div>
            </div>
            <div> <!--class="uk-width-1-2@m uk-flex uk-flex-center"-->
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-darkblue">
                    <div class="in-icon-wrap circle uk-margin-medium-bottom">
                        <i class="fas fa-chart-pie fa-lg"></i>
                    </div>
                    <h4 class="uk-margin-top">
                        <a href="#">@lang('messages.applicable') </a>
                    </h4>
                    <hr>
                    <div class="toggle-text">
                        <p class="uk-text-justify">@lang('messages.applicable_caption') </p>
                        <p class="hidden uk-text-justify">@lang('messages.applicable_caption2')</p>
                    </div>
                    <i class="fas fa-chevron-right uk-float-right" onclick="toggleVisibility(this)"></i>
                </div>
            </div>
    
        </div>
    </div>
</div>

<script>
    function toggleVisibility(icon) {
      const card = icon.closest('.uk-card');
      const toggleText = card.querySelector('.toggle-text');
      const hiddenParagraph = toggleText.querySelector('p:nth-child(2)');

      if (hiddenParagraph) {
        hiddenParagraph.classList.toggle('hidden');
      }

      icon.classList.toggle('fa-chevron-right');
      icon.classList.toggle('fa-chevron-left');

      const tooltipText = icon.classList.contains('fa-chevron-right') ? 'Show more' : 'Hide content';
        icon.title = tooltipText;
    }
</script>
<!------------End of Copy trading advantages-------------------->

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

<!------------------------------------Steps Copying Trades------------------------------->
<div class="uk-section uk-section-default uk-padding in-padding-vertical@s in-profit-15">
    <div class="uk-container">
        <div class="uk-card uk-card-default1 uk-card-body uk-box-shadow-small uk-border-rounded background-cover">
        <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-1-1 uk-width-5-6@m">
            <h2 class="uk-margin-small-top uk-text-center uk-text-darkblue uk-margin-medium-bottom">@lang('messages.choose_way')</h2>
            <p class="uk-text-lead uk-text-blue uk-margin-remove-bottom uk-text-center in-offset-top-10">@lang('messages.successful_follower') </p>
            <p class="uk-text-default uk-margin-remove-bottom uk-text-center in-offset-top-10 uk-margin-top uk-text-grey uk-text-justify uk-visible@m">@lang('messages.copytrades_desc')
            </p>
            <p class="uk-text-default uk-margin-remove-bottom uk-text-center in-offset-top-10 uk-margin-top uk-text-grey uk-text-justify uk-hidden@m textspace">@lang('messages.copytrades_desc')
            </p>
            <p class="uk-text-lead uk-text-blue uk-margin-remove-bottom uk-text-center in-offset-top-10 uk-margin-top">@lang('messages.steps_copying') </p>
            <p class="uk-text-meta uk-text-grey uk-margin-remove-bottom in-offset-top-10 uk-margin-top uk-text-center">@lang('messages.how_copytrades') </p>
                <div class="uk-grid-large uk-child-width-1-4@m uk-text-center uk-margin-medium-top" data-uk-grid>
                    <div>
                        <span class="in-icon-wrap circle large uk-margin-auto">1</span>
                        <p class=" uk-text-darkblue uk-margin-top">@lang('messages.open_trading_account')</p>
                        
                    </div>
                    <div>
                        <span class="in-icon-wrap circle large uk-margin-auto">2</span>
                        <p class="uk-text-darkblue uk-margin-top">@lang('messages.enter_copytrades')
                        </p>
                       
                    </div>
                    <div>
                        <span class="in-icon-wrap circle large uk-margin-auto">3</span>
                        <p class="uk-text-darkblue uk-margin-top">@lang('messages.select_tradingstrategy')
                        </p>
                   
                    </div>
                    <div>
                        <span class="in-icon-wrap without-image circle large uk-margin-auto">4</span>
                        <p class="uk-text-darkblue uk-margin-top">@lang('messages.enjoy_success')</p>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-grid uk-flex uk-flex-center uk-margin-top" data-uk-grid>
            <div class="uk-width-1-1 uk-width-5-6@m">
 
            <p class="uk-text-lead uk-text-blue uk-margin-remove-bottom uk-text-center in-offset-top10">@lang('messages.outstanding_provider') </p>
            <p class="uk-text-default uk-margin-remove-bottom uk-text-justify in-offset-top-10 uk-margin-top uk-text-grey uk-visible@m">@lang('messages.share_strategy_desc') 
            </p>
            <p class="uk-text-default uk-margin-remove-bottom uk-text-justify in-offset-top-10 uk-margin-top uk-text-grey uk-hidden@m textspace">@lang('messages.share_strategy_desc') 
            </p>
            <p class="uk-text-lead uk-text-blue uk-margin-remove-bottom uk-text-center in-offset-top-10 uk-margin-top">@lang('messages.step_sharestrategy') </p>
            <p class="uk-text-meta uk-text-grey uk-margin-remove-bottom in-offset-top-10 uk-margin-top uk-text-center">@lang('messages.how_sharing')</p>
                <div class="uk-grid-large uk-child-width-1-4@m uk-text-center uk-margin-medium-top" data-uk-grid>
                    <div>
                        <span class="in-icon-wrap circle large uk-margin-auto">1</span>
                        <p class="uk-text-darkblue uk-margin-top">@lang('messages.open_trading_account2')</p>
                        
                    </div>
                    <div>
                        <span class="in-icon-wrap circle large uk-margin-auto">2</span>
                        <p class="uk-text-darkblue uk-margin-top">@lang('messages.enter_copytrades')
                        </p>
                       
                    </div>
                    <div>
                        <span class="in-icon-wrap circle large uk-margin-auto">3</span>
                        <p class="uk-text-darkblue uk-margin-top">@lang('messages.submit_info')
                        </p>
                   
                    </div>
                    <div>
                        <span class="in-icon-wrap without-image circle large uk-margin-auto">4</span>
                        <p class="uk-text-darkblue uk-margin-top">@lang('messages.more_people')</p>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-----------------------------End of Steps Copying Trades------------------------------->

{{-- <div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-16">
    <div class="uk-container ">
        <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-3-4@m">
                <div class="in-create-account uk-text-center uk-margin-top uk-box-shadow-small">
                    <span class="uk-label uk-text-small uk-text-uppercase uk-border-rounded uk-margin-small-bottom">@lang('messages.open_your_account')</span>
                    <p class="uk-text-lead uk-text-darkblue uk-margin-remove-top uk-visible">@lang('messages.let_luckyant')
                    </p>
                    <p class="uk-text-default uk-text-red uk-margin-remove-top uk-visible">@lang('messages.create_account_now')
                    </p>
                    <a class="uk-button uk-button-secondary uk-border-rounded uk-margin-top10"  href="{{ url('https://member.luckyantfxasia.com/register') }}">@lang('messages.real_account')</a>
                    <a class="uk-button uk-button-secondary uk-border-rounded uk-margin-top10 " href="#">@lang('messages.demo_account')</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
  
@endsection

