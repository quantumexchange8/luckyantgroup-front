@extends('master.master')
@section('title', __('messages.terms_policies'))
@section('content')
<main>

<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-text-center uk-margin-medium-bottom">
                <h1><span class="in-highlight">@lang('messages.terms_policies') </span></h1>
            </div>
            <ul class="uk-list uk-list-divider">
              <li>
                <div class="uk-grid-divider uk-child-width-1-2@m uk-child-width-1-2@s" data-uk-grid>
                  <div>
                    <div class="in-icon-wrap circle primary-color">
                      <i class="fas fa-file fa-lg"></i>
                    </div>
                      <h3 class="uk-margin-top">@lang('messages.customer_agreement')</h3>
                      <p class="uk-text-justify">@lang('messages.customer_agreement_caption') </p>
                      <ul class="uk-list uk-margin-top">
                          <li><a class="uk-button uk-button-text uk-text-primary" href="{{route('customer')}}"><i class="fa fa-file-text fa-lg uk-margin-small-right"></i>@lang('messages.customer_agreement')</a></li>
                      </ul>
                  </div>
                  
                  <div>
                    <div class="in-icon-wrap circle primary-color">
                      <i class="fas fa-globe fa-lg"></i>
                    </div>
                      <h3 class="uk-margin-top">@lang('messages.privacy_policy')</h3>
                      <p class="uk-text-justify">@lang('messages.privacy_policy_caption') </p>
                      <ul class="uk-list uk-margin-top">
                          <li><a class="uk-button uk-button-text uk-text-primary" href="{{route('privacy')}}"><i class="fa fa-file-text fa-lg uk-margin-small-right"></i>@lang('messages.privacy_policy')</a></li>
                      </ul>
                  </div>
              </div>
              </li>
              <li class=" uk-margin-top20">
                <div class="uk-grid-divider uk-child-width-1-2@m uk-child-width-1-2@s" data-uk-grid>
    
                  <div>
                    <div class="in-icon-wrap circle primary-color">
                      <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                      <h3 class="uk-margin-top">@lang('messages.disclosure_riskwarning')</h3>
                      <p class="uk-text-justify">@lang('messages.disclosure_riskwarning_caption')</p>
                      <ul class="uk-list uk-margin-top">
                          <li><a class="uk-button uk-button-text uk-text-primary" href="{{route('disclosure')}}"><i class="fa fa-file-text fa-lg uk-margin-small-right"></i>@lang('messages.disclosure_riskwarning')</a></li>
                      </ul>
                  </div>
                  {{-- <div>
                    <div class="in-icon-wrap circle primary-color">
                      <i class="fas fa-shield-alt fa-lg"></i>
                    </div>
                      <h3 class="uk-margin-top">@lang('messages.ct_terms_condition')</h3>
                      <p class="uk-text-justify">@lang('messages.ct_terms_condition_caption') </p>
                      <ul class="uk-list uk-margin-top">
                          <li><a class="uk-button uk-button-text uk-text-primary" href="{{route('copytradepolicy')}}"><i class="fa fa-file-text fa-lg uk-margin-small-right"></i>@lang('messages.ct_terms_condition')</a></li>
                      </ul>
                  </div> --}}
                  <div>
                    <div class="in-icon-wrap circle primary-color">
                      <i class="fa-regular fa-sack-xmark"></i>
                    </div>
                      <h3 class="uk-margin-top">@lang('messages.anti_money_laundering')</h3>
                      <p class="uk-text-justify">@lang('messages.aml_description') </p>
                      <ul class="uk-list uk-margin-top">
                          <li>
                            <a class="uk-button uk-button-text uk-text-primary" href="{{route('pdf')}}" target="_blank" download="AML_POLICY.pdf">
                              <i class="fa fa-download fa-lg uk-margin-small-right"></i>@lang('messages.pdf_name')
                            </a>
                          </li>
                      </ul>
                  </div>
                </div>
              </li>
              {{-- <li class=" uk-margin-top20">
                <div class="uk-grid-divider uk-child-width-1-2@m uk-child-width-1-2@s" data-uk-grid>
    
                  <div>
                    <div class="in-icon-wrap circle primary-color">
                      <i class="fa-regular fa-sack-xmark"></i>
                    </div>
                      <h3 class="uk-margin-top">@lang('messages.anti_money_laundering')</h3>
                      <p class="uk-text-justify">@lang('messages.aml_description') </p>
                      <ul class="uk-list uk-margin-top">
                          <li>
                            <a class="uk-button uk-button-text uk-text-primary" href="{{route('pdf')}}" target="_blank" download="AML_POLICY.pdf">
                              <i class="fa fa-download fa-lg uk-margin-small-right"></i>@lang('messages.pdf_name')
                            </a>
                          </li>
                      </ul>
                  </div>
                </div>
              </li> --}}
          </ul>
        </div>
    </div>
</div>
@endsection