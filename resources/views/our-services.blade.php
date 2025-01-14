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
                        <li><a href="#">{{ __('Home') }}</a></li>
                        <li class="active">{{ __('Our Services') }}</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">{{ __('Our Services') }} </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-3 mt-xl-0 py-5 p-relative z-index-2">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h4 class="d-block w-100 text-color-dark custom-text-10 font-weight-bold text-center mb-4 pb-3 appear-animation"
                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">We Collaborate With
                    Brands<span class="text-color-primary">.</span></h4>
                <p class="custom-font-tertiary custom-text-7 line-height-6 mb-4 text-center appear-animation"
                   data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    {{ __('we_collaborate_with_brands_1') }}
                </p>
                <p class="custom-text-4 mb-4 text-center appear-animation" data-appear-animation="fadeInRightShorter"
                   data-appear-animation-delay="600">
                    {{ __('we_collaborate_with_brands_2') }}
                </p>
            </div>
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-md-7 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                <div class="approach-img bg-color-dark">
                    <div class="custom-circle custom-circle-1"></div>
                    <div class="custom-circle custom-circle-2 bg-color-dark"></div>
                    <span class="custom-circle custom-circle-our-approach-deco-1 bg-color-tertiary p-absolute d-block appear-animation"
                          data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                    <span class="custom-circle custom-circle-our-approach-deco-2 bg-color-tertiary p-absolute d-block appear-animation"
                          data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                    <span class="custom-circle custom-circle-our-approach-deco-3 bg-color-tertiary p-absolute d-block appear-animation"
                          data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                </div>
            </div>
        </div>
    </div>

    <section class="our-services p-relative pt-0 pb-5 mb-4">
            <span class="custom-circle custom-circle-2 bg-color-quaternary appear-animation"
                  data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
        <div class="container">
            <div class="row justify-content-center">
                <h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-4 appear-animation"
                    data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">{{ __('We Can Help You With:') }}</h4>
            </div>
            <div class="row">
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="200">
                    <a href="{{ route('our-services-details', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                            {{ __('UX Design') }}
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="300">
                    <a href="{{ route('our-services-details', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
                            {{ __('Web Development') }}
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="400">
                    <a href="{{ route('our-services-details', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                            {{ __('B2B Software') }}
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="500">
                    <a href="{{ route('our-services-details', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
                            {{ __('Content Marketing') }}
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="600">
                    <a href="{{ route('our-services-details', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                            {{ __('Email Marketing') }}
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="700">
                    <a href="{{ route('our-services-details', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
                            {{ __('Search Engine Optimize') }}
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="800">
                    <a href="{{ route('our-services-details', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                            {{ __('Social Media Ads') }}
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="900">
                    <a href="{{ route('our-services-details', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
                            {{ __('Brand and Identity') }}
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="1000">
                    <a href="{{ route('our-services-details', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                            {{ __('Content Strategy') }}
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <p class="custom-text-4 mt-4 mb-0 text-center appear-animation"
                       data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        {{ __('At Nexta, our goal is to provide comprehensive, reliable support tailored to your unique business needs. We’re more than just a service provider; we’re a partner invested in your success. From the initial planning stages through to implementation and ongoing maintenance, we ensure each solution is crafted with precision and scalability in mind. Our experienced team leverages the latest technologies and best practices to help you stay competitive, grow your brand, and achieve long-term results. Trust us to deliver solutions that drive innovation and empower your business to thrive in today’s digital landscape.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="p-relative pt-0 pb-5 mb-xl-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="text-color23-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        {{__('our_clients')}}
                    </h4>
                </div>
            </div>
            <div class="row flex-row align-items-center justify-content-center mb-lg-5">
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center mb-5 mb-lg-0 appear-animation"
                     data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">
                    <img src="{{ asset('assets/img/clients/1.jpg') }}" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center mb-5 mb-lg-0 appear-animation"
                     data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <img src="{{ asset('assets/img/clients/2.jpg') }}" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center mb-5 mb-lg-0 appear-animation"
                     data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                    <img src="{{ asset('assets/img/clients/3.jpg') }}" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center mb-5 mb-lg-0 appear-animation"
                     data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <img src="{{ asset('assets/img/clients/4.jpg') }}" class="img-fluid">
                </div>
            </div>
            <div class="row flex-row align-items-center justify-content-center">
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center mb-5 mb-lg-0 appear-animation"
                     data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                    <img src="{{ asset('assets/img/clients/5.jpg') }}" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center mb-5 mb-lg-0 appear-animation"
                     data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                    <img src="{{ asset('assets/img/clients/6.jpg') }}" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center mb-5 mb-lg-0 appear-animation"
                     data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
                    <img src="{{ asset('assets/img/clients/7.jpg') }}" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center appear-animation"
                     data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                    <img src="{{ asset('assets/img/clients/8.jpg') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

@endsection
