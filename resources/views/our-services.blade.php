@extends('layout')
@section('content')
    <section class="page-header page-header-modern page-header-background bg-color-dark p-relative z-index-1 lazyload"
             style="background-image:url('{{asset('/assets/')}}/img/demos/digital-agency-2/bg/page-header-bg.jpg') " data-bg-src="{{asset('/assets/')}}/img/demos/digital-agency-2/bg/page-header-bg.jpg">
        <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="500"></span>
        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="600"></span>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <ul class="breadcrumb breadcrumb-light custom-title-with-icon-primary d-block">
                        <li><a href="#">Home</a></li>
                        <li class="active">Our Services</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">Our Services</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-3 mt-xl-0 py-5 p-relative z-index-2">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h4 class="d-block w-100 text-color-dark custom-text-10 font-weight-bold text-center mb-4 pb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">We Collaborate With Brands<span class="text-color-primary">.</span></h4>
                <p class="custom-font-tertiary custom-text-7 line-height-6 mb-4 text-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut tellus ante. Sit amet, consectetur adipiscing elit. Morbi ut tellus ante am suscipit urna risus.
                </p>
                <p class="custom-text-4 mb-4 text-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at massa quam. Maecenas et sem accumsan, dictum arcu eu, consectetur eros. Nulla tortor est, lobortis vestibulum turpis sed, mollis commodo orci.
                </p>
            </div>
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-md-7 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                <div class="approach-img bg-color-dark">
                    <div class="custom-circle custom-circle-1"></div>
                    <div class="custom-circle custom-circle-2 bg-color-dark"></div>
                    <span class="custom-circle custom-circle-our-approach-deco-1 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                    <span class="custom-circle custom-circle-our-approach-deco-2 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                    <span class="custom-circle custom-circle-our-approach-deco-3 bg-color-tertiary p-absolute d-block appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
                </div>
            </div>
        </div>
    </div>

    <section class="our-services p-relative pt-0 pb-5 mb-4">
        <span class="custom-circle custom-circle-2 bg-color-quaternary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
        <div class="container">
            <div class="row justify-content-center">
                <h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">We Can Help You With:</h4>
            </div>
            <div class="row">
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <a href="{{ route('our-work', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                            UX Design
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                    <a href="{{ route('our-work', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
                            Web Development
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <a href="{{ route('our-work', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                            B2B Software
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                    <a href="{{ route('our-work', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
                            Content Marketing
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                    <a href="{{ route('our-work', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                            Email Marketing
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
                    <a href="{{ route('our-work', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
                            Search Engine Optimize
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                    <a href="{{ route('our-work', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                            Social Media Ads
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="900">
                    <a href="{{ route('our-work', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
                            Brand and Identity
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">
                    <a href="{{ route('our-work', ['type' => 1])  }}" class="text-decoration-none">
                        <div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
                            Content Strategy
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <p class="custom-text-4 mt-4 mb-0 text-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at massa quam. Maecenas et sem accumsan, dictum arcu eu, consectetur eros. Nulla tortor est, lobortis vestibulum turpis sed, mollis commodo orci.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="p-relative pt-0 pb-5 mb-xl-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Our Clients</h4>
                </div>
            </div>
            <div class="row flex-row align-items-center justify-content-center mb-lg-5">
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">
                    <img src="{{asset('/assets/')}}/img/demos/digital-agency-2/logos/our-services-client-1.png" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <img src="{{asset('/assets/')}}/img/demos/digital-agency-2/logos/our-services-client-2.png" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                    <img src="{{asset('/assets/')}}/img/demos/digital-agency-2/logos/our-services-client-3.png" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <img src="{{asset('/assets/')}}/img/demos/digital-agency-2/logos/our-services-client-4.png" class="img-fluid">
                </div>
            </div>
            <div class="row flex-row align-items-center justify-content-center">
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                    <img src="{{asset('/assets/')}}/img/demos/digital-agency-2/logos/our-services-client-5.png" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                    <img src="{{asset('/assets/')}}/img/demos/digital-agency-2/logos/our-services-client-6.png" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
                    <img src="{{asset('/assets/')}}/img/demos/digital-agency-2/logos/our-services-client-7.png" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 d-flex justify-content-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                    <img src="{{asset('/assets/')}}/img/demos/digital-agency-2/logos/our-services-client-8.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="get-in-touch bg-color-after-secondary overlay overlay-color-primary overlay-show p-relative overflow-hidden" style="background-image: url('{{asset('/assets/')}}/img/demos/digital-agency-2/bg/bg-2.jpg'); background-size: cover; background-position: center;">
        <span class="custom-circle custom-circle-1 bg-color-light appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
        <span class="custom-circle custom-circle-2 bg-color-light appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p class="mb-2 text-color-tertiary custom-text-7 custom-title-with-icon custom-title-with-icon-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Let’s Get in Touch</p>
                    <h4 class="text-color-light font-weight-bold custom-text-10 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        We’re interested in talking<br/>
                        about your business.
                    </h4>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-start justify-content-lg-end mt-5 mt-lg-0">
                    <a herf="#" class="btn btn-outline custom-btn-outline btn-light border-white rounded-0 px-4 py-3 text-color-light text-color-hover-dark bg-color-hover-light custom-text-6 line-height-6 font-weight-semibold custom-btn-with-arrow appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">Let’s Talk!</a>
                </div>
            </div>
        </div>
    </section>
@endsection
