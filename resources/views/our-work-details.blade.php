@extends('layout')
@section('content')
<section class="page-header page-header-modern page-header-background bg-color-dark p-relative z-index-1 lazyload"
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
                    <li><a href="#">Home</a></li>
                    <li class="active">Our Work</li>
                </ul>
                <h1 class="custom-text-10 font-weight-bold">Okler Campaing</h1>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 mb-xl-5 p-relative z-index-2">
    <div class="row">
        <div class="col-xl-4 position-relative">
            <div id="sidebar" class="side-menu-our-work sidebar position-relative pt-5">
                <div data-plugin-sticky
                     data-plugin-options="{'minWidth': 991, 'containerSelector': '.sticky-container', 'padding': {'top': 100}}">
                    <div class="pb-4 my-2 ps-0 pe-0">
                        <h4 class="text-color-dark custom-text-8 font-weight-bold">Filter by Category:</h4>
                        <ul class="list-unstyled sort-source sort-source-light">
                            <li class="nav-item" data-option-value="*">
                                <a href="{{ route('our-work') }}"
                                   class="text-color-quaternary text-color-hover-secondary text-decoration-none mb-2 p-0 d-block font-weight-medium">View
                                    All</a>
                            </li>
                            <li class="nav-item" data-option-value=".ui-design">
                                <a href="{{ route('our-work') }}"
                                   class="text-color-quaternary text-color-hover-secondary text-decoration-none mb-2 p-0 d-block font-weight-medium">UI
                                    Design</a>
                            </li>
                            <li class="nav-item" data-option-value=".web-development">
                                <a href="{{ route('our-work') }}"
                                   class="text-color-quaternary text-color-hover-secondary text-decoration-none mb-2 p-0 d-block font-weight-medium">Web
                                    Development</a>
                            </li>
                            <li class="nav-item" data-option-value=".b2b-software">
                                <a href="{{ route('our-work') }}"
                                   class="text-color-quaternary text-color-hover-secondary text-decoration-none mb-2 p-0 d-block font-weight-medium">B2B
                                    Software</a>
                            </li>
                            <li class="nav-item" data-option-value=".content-marketing">
                                <a href="{{ route('our-work') }}"
                                   class="text-color-quaternary text-color-hover-secondary text-decoration-none mb-2 p-0 d-block font-weight-medium">Content
                                    Marketing</a>
                            </li>
                            <li class="nav-item" data-option-value=".email-marketing">
                                <a href="{{ route('our-work') }}"
                                   class="text-color-quaternary text-color-hover-secondary text-decoration-none mb-2 p-0 d-block font-weight-medium">Email
                                    Marketing</a>
                            </li>
                            <li class="nav-item" data-option-value=".search-engine-optimize">
                                <a href="{{ route('our-work') }}"
                                   class="text-color-quaternary text-color-hover-secondary text-decoration-none mb-2 p-0 d-block font-weight-medium">Search
                                    Engine Optimize</a>
                            </li>
                            <li class="nav-item" data-option-value=".social-media-ads">
                                <a href="{{ route('our-work') }}"
                                   class="text-color-quaternary text-color-hover-secondary text-decoration-none mb-2 p-0 d-block font-weight-medium">Social
                                    Media Ads</a>
                            </li>
                            <li class="nav-item" data-option-value=".brand-and-identity">
                                <a href="{{ route('our-work') }}"
                                   class="text-color-quaternary text-color-hover-secondary text-decoration-none mb-2 p-0 d-block font-weight-medium">Brand
                                    and Identity</a>
                            </li>
                            <li class="nav-item" data-option-value=".content-strategy">
                                <a href="{{ route('our-work') }}"
                                   class="text-color-quaternary text-color-hover-secondary text-decoration-none mb-2 p-0 d-block font-weight-medium">Content
                                    Strategy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <p class="custom-font-tertiary custom-text-7 line-height-6 mb-4 appear-animation"
               data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                {{$content['paragraph1']}}
             </p>
            <p class="custom-text-4 mb-4 appear-animation" data-appear-animation="fadeInRightShorter"
               data-appear-animation-delay="400">
                {{$content['paragraph2']}}
              </p>
            <p class="custom-text-4 mb-5 appear-animation" data-appear-animation="fadeInRightShorter"
               data-appear-animation-delay="600">
                {{$content['paragraph3']}}
            </p>
            <div class="row justify-content-center projects-images-wrapper">
                <div class="col-md-6 col-lg-5 col-xl-6 appear-animation" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="200">
                    <img src="{{$content['images'][0]}}" class="img-1">
                </div>
                <div class="col-md-6 col-lg-5 col-xl-6 pt-4 mt-1 pt-md-0 mt-md-0 appear-animation"
                     data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <img src="{{$content['images'][1]}}" class="img-1">
                </div>
                <div class="col-lg-10 col-xl-12 pt-4 mt-1 appear-animation" data-appear-animation="fadeInRightShorter"
                     data-appear-animation-delay="600">
                    <img src="{{$content['images'][2]}}" class="img-2">
                </div>
            </div>
        </div>
    </div>
</div>

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
                   data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Let’s Get in Touch</p>
                <h4 class="text-color-light font-weight-bold custom-text-10 appear-animation"
                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    We’re interested in talking<br/>
                    about your business.
                </h4>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-start justify-content-lg-end mt-5 mt-lg-0">
                <a herf="#"
                   class="btn btn-outline custom-btn-outline btn-light border-white rounded-0 px-4 py-3 text-color-light text-color-hover-dark bg-color-hover-light custom-text-6 line-height-6 font-weight-semibold custom-btn-with-arrow appear-animation"
                   data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">Let’s Talk!</a>
            </div>
        </div>
    </div>
</section>
@endsection
