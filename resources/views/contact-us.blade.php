@extends('layout')
@section('content')
    <section class="page-header page-header-modern page-header-background bg-color-dark p-relative z-index-1 lazyload"
             style="background-image:url('img/demos/digital-agency-2/bg/page-header-bg.jpg') "
             data-bg-src="img/demos/digital-agency-2/bg/page-header-bg.jpg">
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
                        <li class="active">{{ __('Contact Us') }}</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">{{ __('Contact Us') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-3 mt-xl-0 py-5 p-relative z-index-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="d-block w-100 text-color-dark custom-text-10 font-weight-bold text-center mb-4 pb-3 appear-animation"
                        data-appear-animation="fadeInRightShorter"
                        data-appear-animation-delay="200">{{ __('We Are Where You Are') }}<span
                                class="text-color-primary">.</span></h4>
                    <div class="d-flex flex-row flex-wrap align-items-center justify-content-center mb-4 pb-3">
                        <span class="d-flex flex-column flex-md-row text-center text-md-start px-5 px-md-0 mb-4 mb-md-0 align-items-center custom-text-5 font-weight-medium appear-animation"
                              data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"><i
                                    class="far fa-envelope text-color-primary text-4 me-2"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"></i> <a
                                    href="mailto:mail@domain.com" class="text-color-default">porto@digitalagency.com</a></span>
                        <span class="d-flex flex-column flex-md-row text-center text-md-start px-5 px-md-0 align-items-center custom-text-5 font-weight-medium appear-animation"
                              data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"><i
                                    class="far fa-clock text-color-primary text-4 ms-md-4 me-md-2"></i>{{ __('Mon - Sat 9:00am - 6:00pm / Sunday - CLOSED') }}</span>
                    </div>
                    <p class="custom-text-4 text-center appear-animation" data-appear-animation="fadeInRightShorter"
                       data-appear-animation-delay="800">{{ __('contact_us_p') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 pt-lg-5 mt-4 p-relative where-you-are-postal-cards appear-animation"
                     data-appear-animation="fadeIn" data-appear-animation-delay="100">
                    <span class="custom-circle custom-circle-2 bg-color-tertiary appear-animation"
                          data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
                    <span class="custom-circle custom-circle-3 bg-color-tertiary appear-animation"
                          data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600"></span>
                    <span class="custom-circle custom-circle-3 bg-color-tertiary appear-animation"
                          data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800"></span>
                    <div class="row px-3">
                        <div class="col-xl-6 me-0 overflow-hidden col-where-you-are-postal">
                            <div class="row justify-content-end p-relative h-100">
                                <img src="{{asset('/assets/')}}/img/demos/digital-agency-2/contact-us/contact-us-1.jpg"
                                     class="img-fluid">
                                <div class="col-lg-6 bg-color-primary d-flex flex-column align-items-center justify-content-center col-where-you-are-postal-text position-relative py-5 py-lg-0">
                                    <h4 class="text-color-light custom-text-9">{{ __('Los Angeles') }}</h4>
                                    <p class="mb-1 text-color-light custom-text-4">{{ __('123 The Main Street') }}</p>
                                    <p class="mb-1 text-color-light custom-text-4">{{ __('Los Angeles, CA 10000') }}</p>
                                    <p class="mb-0 text-color-light custom-text-4"><a href="tel:+1234567890"
                                                                                      class="text-color-light">(123)
                                            456-7890</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 ms-0 overflow-hidden col-where-you-are-postal">
                            <div class="row justify-content-end p-relative h-100">
                                <img src="{{asset('/assets/')}}/img/demos/digital-agency-2/contact-us/contact-us-2.jpg"
                                     class="img-fluid">
                                <div class="col-lg-6 bg-color-primary d-flex flex-column align-items-center justify-content-center col-where-you-are-postal-text position-relative py-5 py-lg-0">
                                    <h4 class="text-color-light custom-text-9">{{ __('New York') }}</h4>
                                    <p class="mb-1 text-color-light custom-text-4">{{ __('123 The Main Street') }}</p>
                                    <p class="mb-1 text-color-light custom-text-4">{{ __('New York, NY 10000') }}</p>
                                    <p class="mb-0 text-color-light custom-text-4"><a href="tel:+1234567890"
                                                                                      class="text-color-light">(123)
                                            456-7890</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pt-5 mt-5 mb-5">{{ __('Send us a Message') }}</h4>
                    <form class="contact-form" action="php/contact-form.php" method="POST">
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>{{ __('Success!') }}</strong> {{ __('Your message has been sent to us.') }}
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>{{ __('Error!') }}</strong> {{ __('There was an error sending your message.') }}
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" value="" data-msg-required="{{ __('Please enter your name.') }}"
                                       maxlength="100"
                                       class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation"
                                       name="name" id="name" placeholder="{{ __('Your Name') }}"
                                       data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"
                                       required>
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" value=""
                                       data-msg-required="{{ __('Please enter your phone number.') }}" maxlength="100"
                                       class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation"
                                       name="phone" id="phone" placeholder="{{ __('Phone Number') }}"
                                       data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"
                                       required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" value="" data-msg-required="{{ __('Please enter the email.') }}"
                                       data-msg-email="{{ __('Please enter a valid email.') }}" maxlength="100"
                                       class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation"
                                       name="email" id="email" placeholder="{{ __('E-mail Address') }}"
                                       data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"
                                       required>
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" value="" data-msg-required="{{ __('Please enter the subject.') }}"
                                       maxlength="100"
                                       class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation"
                                       name="subject" id="subject" placeholder="{{ __('Subject') }}"
                                       data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"
                                       required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <textarea maxlength="5000" data-msg-required="{{ __('Please enter your message.') }}"
                                          rows="8"
                                          class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation"
                                          name="message" id="message" placeholder="{{ __('Your Message') }}"
                                          data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"
                                          required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <button type="submit" herf="demo-digital-agency-2-our-blog.html"
                                        class="btn btn-outline custom-btn-outline btn-primary rounded-0 text-color-dark custom-text-4 bg-color-hover-transparent text-color-hover-light font-weight-semibold custom-button-with-arrow px-4 py-3 appear-animation"
                                        data-loading-text="{{ __('Loading...') }}"
                                        data-appear-animation="fadeInRightShorter"
                                        data-appear-animation-delay="600">{{ __('Submit') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
