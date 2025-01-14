@extends('layout')
@section('content')
    <section class="page-header page-header-modern page-header-background bg-color-dark p-relative z-index-1 lazyload"
             style="background-image:url('{{asset('/assets/')}}/img/demos/digital-agency-2/bg/page-header-bg.jpg') "
             data-bg-src="{{asset('/assets/')}}/img/demos/digital-agency-2/bg/page-header-bg.jpg">
        <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation"
              data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn"
              data-appear-animation-delay="500"></span>
        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn"
              data-appear-animation-delay="600"></span>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <ul class="breadcrumb breadcrumb-light custom-title-with-icon-primary d-block">
                        <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                        <li class="active">{{ __('Our Services') }}</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">{{ __('UX Design') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-3 mt-xl-0 py-5 p-relative z-index-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 our-services">
                    <h4 class="text-color- custom-text-8 font-weight-bold custom-title-with-icon custom-title-with-icon-primary mb-4 pb-3">
                        {{ __('We Can Help You With:') }}
                    </h4>
                    <div class="row flex-column pb-lg-5">
                        <div class="col">
                            <a href="{{ route('our-services-details', ['type' => 'ux']) }}"
                               class="text-decoration-none">
                                <div class="service-card ps-5 py-4 mb-4  w-100 font-weight-semibold custom-text-4 line-height-6 p-relative {{ request()->route('type') == 'ux' ? 'active bg-color-primary text-color-light' : 'bg-color-tertiary bg-color-hover-primary' }}">
                                    {{ __('UX Design') }}
                                </div>
                            </a>
                        </div>

                        <div class="col">
                            <a href="{{ route('our-services-details', ['type' => 'web-development']) }}"
                               class="text-decoration-none">
                                <div class="service-card ps-5 py-4 mb-4  w-100 font-weight-semibold custom-text-4 line-height-6 text-color-light p-relative {{ request()->route('type') == 'web-development' ? 'active bg-color-primary text-color-light' : 'bg-color-dark bg-color-hover-primary' }}">
                                    {{ __('Web Development') }}
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('our-services-details', ['type' => 'b2b-software']) }}"
                               class="text-decoration-none">
                                <div class="service-card ps-5 py-4 mb-4  text-color-hover-light w-100 font-weight-semibold custom-text-4 line-height-6 text-color-dark p-relative {{ request()->route('type') == 'b2b-software' ? 'active bg-color-primary text-color-light' : 'bg-color-tertiary bg-color-hover-primary' }}">
                                    {{ __('B2B Software') }}
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('our-services-details', ['type' => 'content-marketing']) }}"
                               class="text-decoration-none">
                                <div class="service-card ps-5 py-4 mb-4  w-100 font-weight-semibold custom-text-4 line-height-6 text-color-light p-relative {{ request()->route('type') == 'content-marketing' ? 'active bg-color-primary text-color-light' : 'bg-color-dark bg-color-hover-primary' }}">
                                    {{ __('Content Marketing') }}
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('our-services-details', ['type' => 'email-marketing']) }}"
                               class="text-decoration-none">
                                <div class="service-card ps-5 py-4 mb-4  text-color-hover-light w-100 font-weight-semibold custom-text-4 line-height-6 text-color-dark p-relative {{ request()->route('type') == 'email-marketing' ? 'active bg-color-primary text-color-light' : 'bg-color-tertiary bg-color-hover-primary' }}">
                                    {{ __('Email Marketing') }}
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('our-services-details', ['type' => 'seo']) }}"
                               class="text-decoration-none">
                                <div class="service-card ps-5 py-4 mb-4  w-100 font-weight-semibold custom-text-4 line-height-6 text-color-light p-relative {{ request()->route('type') == 'seo' ? 'active bg-color-primary text-color-light' : 'bg-color-dark bg-color-hover-primary' }}">
                                    {{ __('Search Engine Optimize') }}
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('our-services-details', ['type' => 'social-media-ads']) }}"
                               class="text-decoration-none">
                                <div class="service-card ps-5 py-4 mb-4  text-color-hover-light w-100 font-weight-semibold custom-text-4 line-height-6 text-color-dark p-relative {{ request()->route('type') == 'social-media-ads' ? 'active bg-color-primary text-color-light' : 'bg-color-tertiary bg-color-hover-primary' }}">
                                    {{ __('Social Media Ads') }}
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('our-services-details', ['type' => 'brand-identity']) }}"
                               class="text-decoration-none">
                                <div class="service-card ps-5 py-4 mb-4  w-100 font-weight-semibold custom-text-4 line-height-6 text-color-light p-relative {{ request()->route('type') == 'brand-identity' ? 'active bg-color-primary text-color-light' : 'bg-color-dark bg-color-hover-primary' }}">
                                    {{ __('Brand and Identity') }}
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('our-services-details', ['type' => 'content-strategy']) }}"
                               class="text-decoration-none">
                                <div class="service-card ps-5 py-4 mb-4  text-color-hover-light w-100 font-weight-semibold custom-text-4 line-height-6 text-color-dark p-relative {{ request()->route('type') == 'content-strategy' ? 'active bg-color-primary text-color-light' : 'bg-color-tertiary bg-color-hover-primary' }}">
                                    {{ __('Content Strategy') }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 mt-lg-5 mt-xl-0">
                    <p class="custom-font-tertiary line-height-6 custom-text-7 mb-4 appear-animation"
                       data-appear-animation="fadeIn" data-appear-animation-delay="200">
                        {{__($content['paragraph1'])}}
                    </p>
                    <p class="custom-text-4 mb-4 appear-animation" data-appear-animation="fadeIn"
                       data-appear-animation-delay="400">
                        {{$content['paragraph2']}}
                    </p>
                    <p class="custom-text-4 mb-5 appear-animation" data-appear-animation="fadeIn"
                       data-appear-animation-delay="600">
                        {{$content['paragraph3']}}
                    </p>
                    <div class="pb-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                        <img src="{{asset('/assets/')}}/img/demos/digital-agency-2/our-services/our-services-detail-1.jpg"
                             class="img-fluid">
                    </div>

                    <p class="custom-text-4 mb-4" data-appear-animation="fadeIn" data-appear-animation-delay="1000">
                        {{$content['paragraph4']}}
                    </p>
                    <div class="accordion custom-accordion mb-4 appear-animation" id="accordion"
                         data-appear-animation="fadeIn" data-appear-animation-delay="1000">
                        <div class="card card-default custom-card-default rounded-0">
                            <div class="card-header m-0 bg-color-tertiary">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle px-0 py-3" data-bs-toggle="collapse"
                                       data-bs-parent="#accordion" href="#collapse1One">
                                        Project Brainstorm
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1One" class="collapse custom-card-body-collapse show">
                                <div class="card-body">
                                    {{$content['ProjectBrainstorm']}}
                                </div>
                            </div>
                        </div>
                        <div class="card card-default custom-card-default rounded-0">
                            <div class="card-header m-0 bg-color-tertiary">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle px-0 py-3" data-bs-toggle="collapse"
                                       data-bs-parent="#accordion" href="#collapse2Two">
                                        Project Developement
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2Two" class="collapse custom-card-body-collapse">
                                <div class="card-body">
                                    {{$content['ProjectDevelopment']}}
                                </div>
                            </div>
                        </div>
                        <div class="card card-default custom-card-default rounded-0">
                            <div class="card-header m-0 bg-color-tertiary">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle px-0 py-3" data-bs-toggle="collapse"
                                       data-bs-parent="#accordion" href="#collapse3Three">
                                        Project Delivery
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3Three" class="collapse custom-card-body-collapse">
                                <div class="card-body">
                                    {{$content['ProjectDelivery']}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
