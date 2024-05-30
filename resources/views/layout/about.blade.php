@extends('master.master')
@section('title', __('messages.about_us'))
@section('content')


<!-------------------------Company Overview--------------------------->
<div class="uk-section">
    <div class="uk-container uk-padding">
        <div class="uk-grid" data-uk-grid>
            <div class="uk-width-3-5@m">
                <p class="uk-text-muted in-offset-bottom-10">@lang('messages.company_overview')</p>
              <h1 class="uk-margin-small-bottom"><span class="in-highlight"> @lang('messages.aboutus_title')</span></h1>
                <p class="uk-text-default uk-text-grey uk-margin-top uk-margin-bottom uk-text-justify uk-visible@m">@lang('messages.aboutus_caption')
                </p>  
                <p class="uk-text-default uk-text-grey uk-margin-top uk-margin-bottom uk-text-justify textspace uk-hidden@m">@lang('messages.aboutus_caption')
                </p>


            </div>
            <div class="uk-width-2-5@m">
                <div class="uk-card uk-card-default uk-card-body uk-border-rounded">                    
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-expand@m uk-width-1-1@s">
                            <h3 class="uk-margin-remove-bottom uk-text-center uk-visible@m"> <i class="fas fa-users"></i> @lang('messages.your_partner')</h3>
                            <h3 class="uk-margin-remove-bottom uk-text-center uk-hidden@m"> <i class="fas fa-users" style="display:none"></i> @lang('messages.your_partner')</h3>
                            <p class="uk-margin-small-top uk-text-center uk-margin-bottom">@lang('messages.your_partner_caption')</p>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------------------End of Company Overview-------------------->

<!-------------------------Development Milestone--------------------------->
{{--
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-flex uk-flex-center">
                <div class="uk-width-2-4@m uk-margin-medium-bottom">
                    <h2 class="text-align-center">@lang('messages.development_milestones')</h2>
                </div>
            </div>
            <div class="uk-width-1-1 in-timeline-1">
                <hr>
                <div class="uk-grid uk-child-width-1-1 uk-child-width-1-4@m">
                    <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                              <div class="in-icon-wrap circle primary-color">
                                <i class="fa-solid fa-handshake fa-lg"></i>
                              </div>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-margin-remove-bottom uk-text-darkblue ">2017</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-box-shadow-small uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                               <p class="uk-text-justify uk-text-darkblue">@lang('messages.2017_caption')</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                              <div class="in-icon-wrap circle primary-color">
                                <i class="fas fa-cog fa-lg"></i>
                              </div>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-text-justify uk-margin-remove-bottom">2021</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-box-shadow-small uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                <p class="uk-text-justify uk-text-darkblue">@lang('messages.2021_caption')</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                              <div class="in-icon-wrap circle primary-color">
                                <i class="fas fa-flask fa-lg"></i>
                              </div>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-margin-remove-bottom">2023</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-box-shadow-small uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                         <p class="uk-text-justify uk-text-darkblue">@lang('messages.2023_caption')</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                              <div class="in-icon-wrap circle primary-color">
                                <i class="fas fa-flask fa-lg"></i>
                              </div>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-margin-remove-bottom">2024</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-box-shadow-small uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                <p class="uk-text-justify uk-text-darkblue">@lang('messages.2024_caption')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
--}}

<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-flex uk-flex-center">
                <div class="uk-width-2-4@m uk-margin-medium-bottom">
                    <h2 class="text-align-center">@lang('messages.development_milestones')</h2>
                </div>
            </div>
            <div class="uk-width-1-1 in-timeline-1">
                <hr>
                <div class="uk-grid uk-child-width-1-1 uk-child-width-1-4@m" style="place-content: center;">
                    <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                              <div class="in-icon-wrap circle primary-color">
                                <i class="fa-solid fa-handshake fa-lg"></i>
                              </div>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-margin-remove-bottom uk-text-darkblue ">2017</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-box-shadow-small uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                               <p class="uk-text-center uk-text-darkblue">@lang('messages.2017_caption')</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                              <div class="in-icon-wrap circle primary-color">
                                <i class="fas fa-cog fa-lg"></i>
                              </div>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-text-justify uk-margin-remove-bottom">2021</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-box-shadow-small uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                <p class="uk-text-center uk-text-darkblue">@lang('messages.2021_caption')</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                              <div class="in-icon-wrap circle primary-color">
                                <i class="fas fa-flask fa-lg"></i>
                              </div>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-margin-remove-bottom">2023</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-box-shadow-small uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                         <p class="uk-text-center uk-text-darkblue">@lang('messages.2023_caption')</p>
                            </div>
                        </div>
                    </div> --}}
                    <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                              <div class="in-icon-wrap circle primary-color">
                                <i class="fas fa-flask fa-lg"></i>
                              </div>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-margin-remove-bottom">2024</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-box-shadow-small uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                <p class="uk-text-center uk-text-darkblue">@lang('messages.2024_caption')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-------------------------End of Development Milestone-------------------->

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

<!-------------------------Core Value-------------------------------------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-width-1-1@m">
                <h2 class="uk-margin-small-bottom text-align-center">@lang('messages.core_value')</h2>
                </div>
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
                                        <h4>@lang('messages.innovation_leadership')</h4>
                                    </div>
                                </div>
                            </td>
                            <td><p>@lang('messages.innovation_leadership_caption')</p></td>
                      
                        </tr>
                        <tr>
                            <td class="uk-width-1-3@m uk-width-1-1@s">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                        <div class="in-icon-wrap circle primary-color">
                                            <i class="fa-solid fa-magnifying-glass-chart fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4>@lang('messages.transparency')</h4>
                                    </div>
                                </div>
                            </td>
                            <td>
                              <p>  @lang('messages.transparency_caption')</p>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                      <div class="in-icon-wrap circle primary-color">
                                        <i class="fa-solid fa-shield fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4> @lang('messages.security')</h4>
                                    </div>
                                </div>
                            </td>
                            <td><p>@lang('messages.security_caption')</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                      <div class="in-icon-wrap circle primary-color">
                                        <i class="fa-solid fa-ranking-star fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4>@lang('messages.quality') </h4>
                                    </div>
                                </div>
                            </td>
                            <td><p> @lang('messages.quality_caption')</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                      <div class="in-icon-wrap circle primary-color">
                                        <i class="fa-solid fa-vault fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4>@lang('messages.fund_security')</h4>
                                    </div>
                                </div>
                            </td>
                            <td><p> @lang('messages.fundsecurity_caption')</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!------------------------End of Core Value-------------------------------->

<!--------------------------Open An Account---------------------------------->
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
<!--------------------------End of Open An Account-------------------------->
@endsection

