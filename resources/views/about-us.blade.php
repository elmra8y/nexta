@extends('layout')
@section('content')
    <section class="page-header page-header-modern page-header-background bg-color-dark p-relative z-index-1 lazyload"
             data-bg-src="{{asset('/assets/')}}/img/demos/digital-agency-2/bg/page-header-bg.jpg"
             style="background-image:url('{{asset('/assets/')}}/img/demos/digital-agency-2/bg/page-header-bg.jpg') ">
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
                        <li class="active">{{ __('About Us') }}</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">{{ __('About Us') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container p-relative z-index-2 mt-0 mt-lg-3 mt-xl-0 pt-0 pt-md-4 pt-lg-5 pb-xl-5 appear-animation"
         data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
        <div class="row">
            <div class="col-xl-7 py-4 py-xl-0">
                <img class="img-fluid" src="{{asset('/assets/')}}/img/demos/digital-agency-2/about-us/about-us-1.jpg"
                     alt="{{ __('About Us 1') }}">
            </div>
        </div>
        <div class="row justify-content-end p-relative">
            <div class="col-xl-7 position-relative">
                <div class="about-us-featured-block w-100 bg-color-primary p-5 text-end custom-title-with-icon custom-title-with-icon-right custom-title-with-icon-light">
                    <p class="custom-text-7 text-color-light opacity-7">{{ __('Welcome to the Age of Digital Transformation') }}</p>
                    <h4 class="custom-text-11 text-color-light">{{ __('Experience Design and') }}
                        <br/>{{ __('Intelligent Marketing.') }}</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-between mt-5 mt-xl-0 mb-lg-4">
            <div class="col-xl-4 d-flex flex-column justify-content-end">
                <p class="custom-font-tertiary custom-text-7 mb-4">
                    {{ __('At our software company, we innovate comprehensive technical solutions that combine creativity in design with intelligence in marketing.Our vision is to empower our clients to achieve their goals through advanced technical tools and exceptional user experiences.') }}
                </p>
                <p class="custom-text-4 mb-4 appear-animation" data-appear-animation="fadeInRightShorter"
                   data-appear-animation-delay="400">
                    {{ __('We offer design and user experience services that highlight the brands identity,supported by marketing solutions driven by data and intelligent analysis. Our vision is to lead our clients toward digital success.') }}
                </p>

            </div>
            <div class="col-xl-7 py-4 py-xl-0">
                <img class="img-fluid" src="{{asset('/assets/')}}/img/demos/digital-agency-2/about-us/about-us-2.jpg"
                     alt="{{ __('About Us 2') }}">
            </div>
        </div>
    </div>

    <section class="bg-color-dark mb-5 mt-lg-5">
        <div class="container py-5">
            <div class="row counters py-5">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter counter-light" data-appear-animation="fadeInRightShorter"
                         data-appear-animation-delay="200">
                        <strong data-to="35" data-append="+" class="mb-3">0</strong>
                        <label class="custom-font-tertiary text-color-light custom-text-8 opacity-7 font-weight-normal">{{ __('Business Year') }}</label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter counter-light" data-appear-animation="fadeInRightShorter"
                         data-appear-animation-delay="400">
                        <strong data-to="240" data-append="+" class="mb-3">0</strong>
                        <label class="custom-font-tertiary text-color-light custom-text-8 opacity-7 font-weight-normal">{{ __('Satisfied Clients') }}</label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div class="counter counter-light" data-appear-animation="fadeInRightShorter"
                         data-appear-animation-delay="600">
                        <strong data-to="2000" data-append="+" class="mb-3">0</strong>
                        <label class="custom-font-tertiary text-color-light custom-text-8 opacity-7 font-weight-normal">{{ __('Projects Delivery') }}</label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div class="counter counter-light" data-appear-animation="fadeInRightShorter"
                         data-appear-animation-delay="800">
                        <strong data-to="130" data-append="+" class="mb-3">0</strong>
                        <label class="custom-font-tertiary text-color-light custom-text-8 opacity-7 font-weight-normal">{{ __('Team Members') }}</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-approach py-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-xl-4 pb-5 pb-xl-0 ">
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
                <div class="col-xl-8 d-flex flex-column justify-content-center align-items-start ps-5">
                    <p class="custom-font-tertiary custom-text-6 line-height-6 font-weight-medium appear-animation"
                       data-appear-animation="fadeInRightShorter"
                       data-appear-animation-delay="200">{{ __('We are a leading software development company, dedicated to delivering innovative solutions that empower businesses to excel in the digital age.') }}</p>
                    <p class="custom-text-3 mb-5 appear-animation" data-appear-animation="fadeInRightShorter"
                       data-appear-animation-delay="400">{{ __('With a passion for technology and a focus on excellence, we specialize in crafting bespoke software, intuitive web applications, and scalable digital platforms. Our team works closely with clients to transform their ideas into cutting-edge solutions.') }}</p>
                    <a herf="demo-digital-agency-2-contact-us.html"
                       class="btn btn-outline custom-btn-outline btn-primary rounded-0 text-color-dark custom-text-4 bg-color-hover-transparent text-color-hover-light font-weight-semibold custom-btn-with-arrow px-4 py-3 appear-animation"
                       data-appear-animation="fadeInRightShorter"
                       data-appear-animation-delay="600">{{ __('Get in Touch') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section
            class="get-in-touch bg-color-after-secondary overlay overlay-color-primary overlay-show p-relative overflow-hidden"
            style="background-image: url('{{asset('/assets/')}}/img/demos/digital-agency-2/bg/bg-2.jpg'); background-size: cover; background-position: center;">
        <span class="custom-circle custom-circle-1 bg-color-light appear-animation" data-appear-animation="zoomIn"
              data-appear-animation-delay="100"></span>
        <span class="custom-circle custom-circle-2 bg-color-light appear-animation" data-appear-animation="zoomIn"
              data-appear-animation-delay="100"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p class="mb-2 text-color-tertiary custom-text-7 custom-title-with-icon custom-title-with-icon-light appear-animation"
                       data-appear-animation="fadeInRightShorter"
                       data-appear-animation-delay="200">{{ __("Let’s Get in Touch") }}</p>
                    <h4 class="text-color-light font-weight-bold custom-text-10 appear-animation"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        {{ __("We’re interested in talking") }}<br/>
                        {{ __("about your business.") }}
                    </h4>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-start justify-content-lg-end mt-5 mt-lg-0">
                    <a herf="#"
                       class="btn btn-outline custom-btn-outline btn-light border-white rounded-0 px-4 py-3 text-color-light text-color-hover-dark bg-color-hover-light custom-text-6 line-height-6 font-weight-semibold custom-btn-with-arrow appear-animation"
                       data-appear-animation="fadeInLeftShorter"
                       data-appear-animation-delay="600">{{ __("Let’s Talk!") }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection
