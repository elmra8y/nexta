@extends('layout')
@section('content')
    <section class="home-wallpaper-overlay section custom-circles-container section-angled bg-dark border-0 m-0"
    >
            <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation"
                  data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"
                  data-plugin-options="{'forceAnimation': true}"></span>
        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn"
              data-appear-animation-delay="200" data-plugin-options="{'forceAnimation': true}"></span>
        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn"
              data-appear-animation-delay="300" data-plugin-options="{'forceAnimation': true}"></span>
        <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation"
              data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"
              data-plugin-options="{'forceAnimation': true}"></span>
        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn"
              data-appear-animation-delay="500" data-plugin-options="{'forceAnimation': true}"></span>
        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn"
              data-appear-animation-delay="600" data-plugin-options="{'forceAnimation': true}"></span>
        <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-light"></div>
        <div class="section-angled-content h-100">
            <div class="container pt-md-5 pb-lg-4 mt-5 mb-lg-5">
                <div class="row pb-lg-5 mt-5 mb-lg-5">
                    <div class="col-lg-7 pt-5 pt-md-0 pb-lg-5 mt-5 mb-md-5">
                        <h2 class="custom-title-with-icon custom-title-with-icon-primary font-weight-normal text-color-default text-5 mb-0 appear-animation"
                            data-appear-animation="fadeInUpShorterPlus"
                            data-appear-animation-delay="600">{{ __('Welcome to the Age of Digital Transformation') }}</h2>
                        <h1 class="text-color-light font-weight-extra-bold text-10 text-md-12-13 line-height-2 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorterPlus"
                            data-appear-animation-delay="850">{{ __('Experience Design and Intelligent Marketing.') }}</h1>
                        <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                           class="btn btn-outline custom-btn-outline btn-primary rounded-0 font-weight-semibold text-color-light bg-color-hover-primary custom-btn-with-arrow text-4 btn-px-4 py-3 mt-2 appear-animation"
                           data-appear-animation="fadeInUpShorterPlus"
                           data-appear-animation-delay="1100">{{ __('Get Started') }}</a>
                    </div>
                </div>
                <div class="spacer py-5 mt-lg-5 mb-md-5"></div>
            </div>
        </div>
    </section>

    <section class="custom-cards p-relative mb-5 pb-5 z-index-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-custom-cards">
                    <div class="card border-0 bg-color-dark rounded-0 z-index-1 p-5 appear-animation"
                         data-appear-animation="maskUp" data-appear-animation-delay="100">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
                            <img src="{{asset('/assets/')}}/img/demos/digital-agency-2/icons/solution.png"
                                 alt="{{ __('Solution') }}" class="mb-5">
                            <h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">
                                {{ __('Growth Marketing') }}</h4>
                            <p class="card-text text-center custom-text-4 font-weight-lighter">{{ __('Driving sustainable growth through data-driven marketing strategies and targeted customer engagement techniques.') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-custom-cards">
                    <div class="card border-0 bg-color-primary rounded-0 z-index-1 p-5 appear-animation"
                         data-appear-animation="maskUp" data-appear-animation-delay="200">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
                            <img src="{{asset('/assets/')}}/img/demos/digital-agency-2/icons/advertising.png"
                                 alt="{{ __('Solution') }}" class="mb-5">
                            <h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">
                                {{ __('Comprehensive Web Solutions') }}
                            </h4>
                            <p class="card-text text-center custom-text-4 font-weight-lighter text-color-light">
                                {{ __('Delivering innovative web solutions to empower software houses with cutting-edge, scalable technologies.') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-custom-cards">
                    <div class="card border-0 bg-color-dark rounded-0 z-index-1 p-5 appear-animation"
                         data-appear-animation="maskUp" data-appear-animation-delay="300">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center p-0 my-3">
                            <img src="{{asset('/assets/')}}/img/demos/digital-agency-2/icons/feedback.png"
                                 alt="{{ __('Solution') }}" class="mb-5">
                            <h4 class="card-title custom-text-8 font-weight-bold text-color-light text-center mb-3">
                                {{ __('Digital Marketing') }}</h4>
                            <p class="card-text text-center custom-text-4 font-weight-lighter">{{ __('Empowering brands with innovative digital marketing strategies to drive engagement, conversion, and growth.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-approach py-5 mb-4 mb-xl-5 mt-4 mt-xl-0 p-relative z-index-1" id="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-4 d-flex flex-column justify-content-center align-items-start">
                    <h4 class="custom-text-10 mb-4 pb-2 font-weight-bold custom-title-with-icon custom-title-with-icon-primary appear-animation"
                        data-appear-animation="fadeInRightShorter"
                        data-appear-animation-delay="100">{{ __('Our Approach') }}</h4>
                    <p class="custom-font-tertiary custom-text-6 line-height-6 font-weight-medium appear-animation"
                       data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        {{ __('At Nexta, we approach every project with a commitment to innovation and close collaboration. By understanding our clients\' needs, we create solutions that are both functional and user-friendly. Our team uses cutting-edge technology and best practices to deliver high-quality, future-ready products.') }}
                    </p>
                    <p class="custom-text-3 appear-animation" data-appear-animation="fadeInRightShorter"
                       data-appear-animation-delay="400">
                        {{ __('We prioritize transparency and agility, adapting quickly to new insights and trends. This allows us to build scalable solutions that evolve with our clients\' needs. At Nexta, our goal is to empower businesses through tools that drive growth and efficiency.') }}
                    </p>
                </div>
                <div class="col-lg-4 py-4 py-lg-0">
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
                <div class="col-lg-6 col-xl-4 d-flex align-items-center mt-4 mt-lg-0">
                    <ul class="custom-list list-unstyled ms-xl-2 ps-xl-1">
                        <li class="font-weight-medium custom-text-4 mb-4 appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                            {{ __('Client-Centered Innovation') }}
                        </li>
                        <li class="font-weight-medium custom-text-4 mb-4 appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                            {{ __('Scalable, Future-Ready Solutions') }}
                        </li>
                        <li class="font-weight-medium custom-text-4 mb-4 appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                            {{ __('Agility and Transparency Focus') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="our-services p-relative py-5 my-5">
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
@endsection
