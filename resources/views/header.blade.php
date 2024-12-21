<header id="header" class="header-transparent header-effect-shrink"
        data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 1, 'stickyHeaderContainerHeight': 100}">


    <div class="header-body border-top-0 bg-color-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column header-column-logo">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <img height="100px"
                                     src="{{asset('/assets/')}}/img/demos/digital-agency-2/logos/NEXTA%20LOGO.png"
                                     alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column header-column-nav-menu justify-content-end w-100">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown-primary">
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3 active"
                                               href="{{ route('home') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown-primary">
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3"
                                               href="{{ route('about-us') }}">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle text-capitalize font-weight-semibold custom-text-3"
                                               href="{{ route('our-services') }}">
                                                Our Services
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 1])}}">
                                                        UX Design
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 1])}}">
                                                        Web Development
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 1])}}">
                                                        B2B Software
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 1])}}">
                                                        Content Marketing
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 1])}}">
                                                        Email Marketing
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 1])}}">
                                                        Search Engine Optimize
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 1])}}">
                                                        Social Media Ads
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 1])}}">
                                                        Brand and Identity
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 1])}}">
                                                        Content Strategy
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-primary">
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3"
                                               href="{{ route('our-work') }}">
                                                Our Work
                                            </a>
                                        </li>

                                        <li class="dropdown-primary">
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3"
                                               href="{{ route('contact-us') }}">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                    data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end d-none d-lg-flex">
                    <div class="header-row">
                        <ul class="header-social-icons social-icons social-icons-clean social-icons-icon-light social-icons-big d-lg-flex m-0 ms-lg-2">
                            <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank"
                                                                  class="text-4" title="Instagram"><i
                                            class="fab fa-instagram"></i></a></li>
                            <li class="social-icons-x"><a href="http://www.twitter.com/" target="_blank"
                                                          class="text-4" title="Twitter"><i
                                            class="fab fa-x-twitter"></i></a></li>
                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                                                 class="text-4" title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
