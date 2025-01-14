
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
                   data-appear-animation-delay="200">{{ __('Let’s Get in Touch') }}</p>
                <h4 class="text-color-light font-weight-bold custom-text-10 appear-animation"
                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    {{ __('We’re interested in talking')}}<br/>
                    {{ __('about your business.') }}
                </h4>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-start justify-content-lg-end mt-5 mt-lg-0">
                <a href="{{ route('contact-us') }}"
                   class="btn btn-outline custom-btn-outline btn-light border-white rounded-0 px-4 py-3 text-color-light text-color-hover-dark bg-color-hover-light custom-text-6 line-height-6 font-weight-semibold custom-btn-with-arrow appear-animation"
                   data-appear-animation="fadeInLeftShorter"
                   data-appear-animation-delay="600">{{ __('Let’s Talk!') }}</a>
            </div>
        </div>
    </div>
</section>
<footer id="footer" class="mt-0 py-5">
    <div class="container py-5">
        <div class="row justify-content-between">
            <div class="col-sm-12 col-lg-6 col-xl-6">
                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                    <h4 class="custom-font-primary custom-newsletter-title font-weight-bold mb-4 custom-text-7">
                        {{ __('Ready To Get In Business') }}</h4>
                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>{{ __('Success!') }}</strong> {{ __('You\'ve been added to our email list.') }}
                    </div>
                    <div class="alert alert-danger d-none" id="newsletterError"></div>
                    <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST"
                          class="me-0 mb-3 mb-md-0 opacity-10">
                        <div class="input-group custom-newsletter">
                            <input class="form-control form-control-sm custom-newsletter-input rounded-0 bg-transparent border-0 ps-0 custom-text-2 text-color-light box-shadow-none"
                                   placeholder="{{ __('Leave Your Number And We Will Contact You') }}"
                                   name="newsletterEmail"
                                   id="newsletterEmail" type="text">
                            <button class="btn text-color-light custom-text-4 font-weight-semibold custom-btn-with-arrow custom-btn-with-arrow-light"
                                    type="submit">{{ __('Submit') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-xl-4 col-info-footer mt-4 mt-sm-5 mt-lg-0">
                <div class="row">
                    <div class="col-md-6">
                            <span class="d-block text-start text-lg-end text-color-light font-weight-semibold text-5 pb-2 appear-animation"
                                  data-appear-animation="fadeInUpShorter"
                                  data-appear-animation-delay="100">{{ __('Egypt') }}</span>
                        <p class="mb-0 text-start text-lg-end text-4 font-weight-medium appear-animation"
                           data-appear-animation="fadeInUpShorter"
                           data-appear-animation-delay="150">{{ __('egypt_street_address') }}</p>

                        <p class="mb-0 text-start text-lg-end text-4 font-weight-medium appear-animation"
                           data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250"><a
                                    href="tel:+1234567890" class="text-color-default">(+20) 111 513 0009</a></p>
                    </div>
                    <div class="col-md-6 mt-3 mt-md-0">
                            <span class="d-block text-start text-lg-end text-color-light font-weight-semibold text-5 pb-2 appear-animation"
                                  data-appear-animation="fadeInUpShorter"
                                  data-appear-animation-delay="100">{{ __('Saudi Arabia') }}</span>
                        <p class="mb-0 text-start text-lg-end text-4 font-weight-medium appear-animation"
                           data-appear-animation="fadeInUpShorter"
                           data-appear-animation-delay="150">{{ __('sa_street_address') }}</p>

                        <p class="mb-0 text-start text-lg-end text-4 font-weight-medium appear-animation"
                           data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250"><a
                                    href="tel:+1234567890" class="text-color-default">(+955) 50 599 8747</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-sm-12 col-lg-7 col-xl-6 d-none d-sm-flex">
                <div class="nav-footer w-100 pt-5 mt-0 mt-lg-4">
                    <div class="row justify-content-between">
                        <div class="col-auto me-auto">
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                 data-appear-animation-delay="200">
                                <div class="footer-nav footer-nav-links">
                                    <nav>
                                        <ul class="nav" id="footerNav">
                                            <li>
                                                <a class="text-color-hover-primary font-weight-semibold custom-text-2 text-capitalize"
                                                   href="{{route('our-services')}}">{{ __('Our Services') }}</a>
                                            </li>
                                            <li>
                                                <a class="text-color-hover-primary font-weight-semibold custom-text-2 text-capitalize"
                                                   href="{{route('contact-us')}}">{{ __('Contact Us') }}</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-5 col-xl-6">
                <div class="d-flex justify-content-end custom-footer-copywriting pt-5 mt-0 mt-lg-4">
                    <p class="mb-0 text-start text-lg-end d-block w-100 appear-animation"
                       data-appear-animation="fadeIn"
                       data-appear-animation-delay="300">NEXTA. © 2024. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>