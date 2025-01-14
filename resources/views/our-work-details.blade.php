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
                        <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                        <li class="active">{{ __('Our Work') }}</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">{{ __('Our Work') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 mb-xl-5 p-relative z-index-2">
        <div class="row">
            <div class="col-xl-4">
                <div class="projects-images-wrapper">
                    <div data-appear-animation="fadeInRightShorter"
                         data-appear-animation-delay="200">
                        <img src="{{$content['images'][0]}}" class="img-1">
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
            </div>
        </div>
        <div class="row justify-content-center projects-images-wrapper">

            <div class="col-6 pt-4 mt-1 pt-md-0 mt-md-0 appear-animation"
                 data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                <img src="{{$content['images'][1]}}" class="img-1">
            </div>
            <div class="col-6 pt-4 mt-1 appear-animation"
                 data-appear-animation="fadeInRightShorter"
                 data-appear-animation-delay="600">
                <img src="{{$content['images'][2]}}" class="img-2">
            </div>
        </div>
    </div>
@endsection
