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
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3 {{ request()->routeIs('home') ? 'active' : '' }}"
                                               href="{{ route('home') }}">
                                                {{ __('Home') }}
                                            </a>
                                        </li>
                                        <li class="dropdown-primary">
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3 {{ request()->routeIs('about-us') ? 'active' : '' }}"
                                               href="{{ route('about-us') }}">
                                                {{ __('About Us') }}
                                            </a>
                                        </li>

                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle text-capitalize font-weight-semibold custom-text-3 {{ request()->routeIs('our-services*') ? 'active' : '' }}"
                                               href="{{ route('our-services') }}">
                                                {{ __('Our Services') }}
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 'ux'])}}">
                                                        {{ __('UX Design') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 'web-development'])}}">
                                                        {{ __('Web Development') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 'b2b-software'])}}">
                                                        {{ __('B2B Software') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 'content-marketing'])}}">
                                                        {{ __('Content Marketing') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 'email-marketing'])}}">
                                                        {{ __('Email Marketing') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 'seo'])}}">
                                                        {{ __('Search Engine Optimize') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 'social-media-ads'])}}">
                                                        {{ __('Social Media Ads') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 'brand-identity'])}}">
                                                        {{ __('Brand and Identity') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item font-weight-normal"
                                                       href="{{route('our-services-details', ['type' => 'content-strategy'])}}">
                                                        {{ __('Content Strategy') }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-primary">
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3 {{ request()->routeIs('our-work') ? 'active' : '' }}"
                                               href="{{ route('our-work') }}">
                                                {{ __('Our Work') }}
                                            </a>
                                        </li>

                                        <li class="dropdown-primary">
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3 {{ request()->routeIs('contact-us') ? 'active' : '' }}"
                                               href="{{ route('contact-us') }}">
                                                {{ __('Contact Us') }}
                                            </a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-capitalize font-weight-semibold custom-text-3"
                                               href="#"
                                               id="languageDropdown"
                                               role="button"
                                               data-bs-toggle="dropdown"
                                               aria-expanded="false">
                                                @if(app()->getLocale() == 'en')
                                                    <img src="{{asset('assets/img/shared/Flag_of_the_United_States.svg')}}"
                                                         alt="English" width="20" class="me-1"> {{ __('EN') }}
                                                @else
                                                    <img src="{{asset('assets/img/shared/Flag_of_Saudi_Arabia.svg')}}"
                                                         alt="Arabic" width="20" class="me-1"> {{ __('AR') }}
                                                @endif
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                                <li>
                                                    <a class="dropdown-item"
                                                       href="{{ route('change-language', ['locale' => 'en']) }}">
                                                        <img src="{{asset('assets/img/shared/Flag_of_the_United_States.svg')}}"
                                                             alt="English" width="20" class="me-1"> {{ __('EN') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                       href="{{ route('change-language', ['locale' => 'ar']) }}">
                                                        <img src="{{asset('assets/img/shared/Flag_of_Saudi_Arabia.svg')}}"
                                                             alt="Arabic" width="20" class="me-1"> {{ __('AR') }}
                                                    </a>
                                                </li>
                                            </ul>
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
            </div>
        </div>
    </div>
</header>