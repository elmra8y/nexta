@extends('layout')
@section('content')
    <section
            class="page-header page-header-modern page-header-background bg-color-dark p-relative z-index-1 lazyload"
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
                        <li class="active">{{ __('Our Work') }}</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">{{ __('Our Work') }} </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container sticky-container">
            <div class="row justify-content-between">
                <div class="col-xl-3 position-relative">
                    <div id="sidebar" class="side-menu-our-work sidebar position-relative mb-5"8444444444444444444444444444444>
                        <div data-plugin-sticky
                             data-plugin-options="{'minWidth': 991, 'containerSelector': '.sticky-container', 'padding': {'top': 140}}">
                            <h4 class="text-color-dark custom-text-8 font-weight-bold custom-title-with-icon custom-title-with-icon-primary">
                                {{__('Filter by Category')}}:</h4>
                            <ul class="list-unstyled sort-source sort-source-light" data-sort-id="portfolio"
                                data-option-key="filter">
                                <li class="nav-item active" data-option-value="*">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                       class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">
                                        {{__('All')}} </a>
                                </li>
                                <li class="nav-item" data-option-value=".ui-design">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                       class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">
                                        {{__('UI Design')}}  </a>
                                </li>
                                <li class="nav-item" data-option-value=".web-development">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                       class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">
                                        {{__('Web Development')}}   </a>
                                </li>
                                <li class="nav-item" data-option-value=".b2b-software">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                       class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">
                                        {{__('B2B Software')}}   </a>
                                </li>
                                <li class="nav-item" data-option-value=".content-marketing">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                       class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">
                                        {{__('Content Marketing')}}    </a>
                                </li>
                                <li class="nav-item" data-option-value=".email-marketing">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                       class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">
                                        {{__('Email Marketing')}}  </a>
                                </li>
                                <li class="nav-item" data-option-value=".search-engine-optimize">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                       class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">
                                        {{__('Search Engine Optimize')}}  </a>
                                </li>
                                <li class="nav-item" data-option-value=".social-media-ads">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                       class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">
                                        {{__('Social Media Ads')}}   </a>
                                </li>
                                <li class="nav-item" data-option-value=".brand-and-identity">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                       class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">
                                        {{__('Brand and Identity')}} </a>
                                </li>
                                <li class="nav-item" data-option-value=".content-strategy">
                                    <a href="#ourWork" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                                       class="text-color-quaternary text-color-hover-dark text-decoration-none mb-2 p-0 d-block font-weight-medium">
                                        {{__('Content Strategy')}}  </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 our-work" id="ourWork">
                    <div class="sort-destination w-100" data-sort-id="portfolio">
                        <div class="row w-100 mb-4 isotope-item search-engine-optimize social-media-ads">
                            <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                <a href="{{ route('our-work-details', ['type' => 'ozee']) }}" class="d-block h-100">
                                    <img src="{{asset('assets/img/projects/ozee/1.jpg')}}" class="w-100 h-100">
                                    <div class="w-100 custom-our-work-text px-5 py-3 d-flex align-items-end p-absolute bottom-0">
                                        <div class="text-start p-relative z-index-2 mb-3">
                                            <h4 class="text-color-light custom-text-8 font-weight-bold text-decoration-none mb-2">
                                                ozeesalon.com</h4>
                                            <p class="text-uppercase custom-text-3 text-color-quaternary text-decoration-none mb-3">
                                                {{__('projects.ozee.paragraph1')}}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row w-100 mb-4 isotope-item content-marketing email-marketing search-engine-optimize">
                            <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                <a href="{{ route('our-work-details', ['type' => 'wakfy']) }}" class="d-block h-100">
                                    <img src="{{asset('assets/img/projects/wakfy/1.jpg')}}" class="w-100 h-100">
                                    <div class="w-100 custom-our-work-text px-5 py-3 d-flex align-items-end p-absolute bottom-0">
                                        <div class="text-start p-relative z-index-2 mb-3">
                                            <h4 class="text-color-light custom-text-8 font-weight-bold text-decoration-none mb-2">
                                                waqfy.sa</h4>
                                            <p class="text-uppercase custom-text-3 text-color-quaternary text-decoration-none mb-3">
                                                {{__('projects.wakfy.paragraph1')}}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row w-100 mb-4 isotope-item ui-design web-development b2b-software">
                            <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                <a href="{{ route('our-work-details', ['type' => 'qsalary']) }}" class="d-block h-100">
                                    <img src="{{asset('assets/img/projects/qsalary/1.jpg')}}" class="w-100 h-100">
                                    <div class="w-100 custom-our-work-text px-5 py-3 d-flex align-items-end p-absolute bottom-0">
                                        <div class="text-start p-relative z-index-2 mb-3">
                                            <h4 class="text-color-light custom-text-8 font-weight-bold text-decoration-none mb-2">
                                                qsalary.com</h4>
                                            <p class="text-uppercase custom-text-3 text-color-quaternary text-decoration-none mb-3">
                                                {{__('projects.qsalary.paragraph1')}} </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row w-100 mb-4 isotope-item brand-and-identity content-strategy">
                            <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                <a href="{{ route('our-work-details', ['type' => 'jawaher']) }}" class="d-block h-100">
                                    <img src="{{asset('assets/img/projects/jawaher/1.jpg')}}" class="w-100 h-100">
                                    <div class="w-100 custom-our-work-text px-5 py-3 d-flex align-items-end p-absolute bottom-0">
                                        <div class="text-start p-relative z-index-2 mb-3">
                                            <h4 class="text-color-light custom-text-8 font-weight-bold text-decoration-none mb-2">
                                                jawahr.com</h4>
                                            <p class="text-uppercase custom-text-3 text-color-quaternary text-decoration-none mb-3">
                                                {{__('projects.jawaher.paragraph1')}}  </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row w-100 mb-4 isotope-item brand-and-identity content-strategy">
                            <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                <a href="{{ route('our-work-details', ['type' => 'atlas']) }}" class="d-block h-100">
                                    <img src="{{asset('assets/img/projects/atlas/1.jpg')}}" class="w-100 h-100">
                                    <div class="w-100 custom-our-work-text px-5 py-3 d-flex align-items-end p-absolute bottom-0">
                                        <div class="text-start p-relative z-index-2 mb-3">
                                            <h4 class="text-color-light custom-text-8 font-weight-bold text-decoration-none mb-2">
                                                atlaslearn.lk</h4>
                                            <p class="text-uppercase custom-text-3 text-color-quaternary text-decoration-none mb-3">
                                                {{__('projects.atlas.paragraph1')}}  </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row w-100 mb-4 isotope-item brand-and-identity content-strategy">
                            <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                <a href="{{ route('our-work-details', ['type' => 'flyallover']) }}"
                                   class="d-block h-100">
                                    <img src="{{asset('assets/img/projects/flyallover/1.jpg')}}" class="w-100 h-100">
                                    <div class="w-100 custom-our-work-text px-5 py-3 d-flex align-items-end p-absolute bottom-0">
                                        <div class="text-start p-relative z-index-2 mb-3">
                                            <h4 class="text-color-light custom-text-8 font-weight-bold text-decoration-none mb-2">
                                                flyallover.com</h4>
                                            <p class="text-uppercase custom-text-3 text-color-quaternary text-decoration-none mb-3">
                                                {{__('projects.flyallover.paragraph1')}} </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row w-100 mb-4 isotope-item brand-and-identity content-strategy">
                            <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                <a href="{{ route('our-work-details', ['type' => 'nyc']) }}" class="d-block h-100">
                                    <img src="{{asset('assets/img/projects/nyc/1.jpg')}}" class="w-100 h-100">
                                    <div class="w-100 custom-our-work-text px-5 py-3 d-flex align-items-end p-absolute bottom-0">
                                        <div class="text-start p-relative z-index-2 mb-3">
                                            <h4 class="text-color-light custom-text-8 font-weight-bold text-decoration-none mb-2">
                                                egypt-nyc.com</h4>
                                            <p class="text-uppercase custom-text-3 text-color-quaternary text-decoration-none mb-3">
                                                {{__('projects.nyc.paragraph1')}}  </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
