
<style>
    .sidemenubar
    {
        padding: 80px;
    }
</style>
{{-- id="sidebar" --}}
<aside class="app-sidebar sticky !topacity-0 sticky-pin" >
    <div class="container-xl xl:!p-0">
        <!-- Start::main-sidebar -->
        <div class="main-sidebar mx-0">
            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="landing-logo-container my-auto hidden lg:block">
                    <div class="responsive-logo">
                        <a class="responsive-logo-light" href="{{ route('user.index') }}" aria-label="Brand"><img
                                src="{{ asset('assets/images/brand-logos/favicon.png') }}" alt="logo"
                                class="mx-auto"></a>
                        <a class="responsive-logo-dark" href="{{ route('user.index') }}" aria-label="Brand"><img
                                src="{{ asset('assets/images/brand-logos/favicon.png') }}" alt="logo"
                                class="mx-auto"></a>
                    </div>
                </div>
                <div class="slide-left hidden" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg></div>
                <ul class="main-menu">
                    <!-- Start::slide -->
                    <li class="slide">
                        <a class="sidemenubar" href="{{route('user.index')}}">
                            <span class="side-menu__label">Home</span>
                        </a>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="#about" class="sidemenubar">
                            <span class="side-menu__label">Product</span>
                        </a>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    {{-- <li class="slide has-sub">
                        <a href="javascript:void(0);" class="sidemenubar">
                            <span class="side-menu__label me-2">More</span>
                            <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="#statistics" class="sidemenubar">Statistics</a>
                            </li>
                            <li class="slide">
                                <a href="#our-mission" class="sidemenubar">Our Mission</a>
                            </li>
                            <li class="slide">
                                <a href="#features" class="sidemenubar">Features</a>
                            </li>
                            <li class="slide">
                                <a href="#testimonials" class="sidemenubar">Testimonials</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="sidemenubar">Level-2
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="sidemenubar">Level-2-1</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="sidemenubar">Level-2-2
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child3">
                                            <li class="slide">
                                                <a href="javascript:void(0);" class="sidemenubar">Level-2-2-1</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="sidemenubar">Level-2-2-2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="team" class="sidemenubar">
                            <span class="side-menu__label">Team</span>
                        </a>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="pricing" class="sidemenubar">
                            <span class="side-menu__label">Pricing</span>
                        </a>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="faq" class="sidemenubar">
                            <span class="side-menu__label">Faq's</span>
                        </a>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="contact" class="sidemenubar">
                            <span class="side-menu__label">Contact</span>
                        </a>
                    </li>
                    @if(session()->has('loggedInUser'))
                    <li class="slide">
                        <a href="{{route('user.myprofile')}}" class="sidemenubar">
                            <span class="side-menu__label">My Profile</span>
                        </a>
                    </li>
                    @endif
                    <!-- End::slide -->

                </ul>
                <div class="slide-right hidden" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                        </path>
                    </svg></div>
                @if(!session()->has('loggedInUser'))
                <div class="lg:flex hidden space-x-2 rtl:space-x-reverse">
                    <a href="{{ route('user.signin') }}" class="ti-btn w-[6.375rem] ti-btn-primary-full m-0 p-2">Sign
                        Up</a>
                    <a aria-label="anchor" href="javascript:void(0);"
                        class="ti-btn m-0 p-2 px-3 ti-btn-light !font-medium"
                        data-hs-overlay="#hs-overlay-switcher"><i
                            class="ri-settings-3-line animate-spin-slow"></i></a>
                </div>
                @endif
                @if(session()->has('loggedInUser'))
                <div class="lg:flex hidden space-x-2 rtl:space-x-reverse">
                    <a href="{{ route('user.logout') }}"
                        class="ti-btn w-[6.375rem] ti-btn-primary-full m-0 p-2">Logout
                    </a>
                    <a aria-label="anchor" href="javascript:void(0);"
                        class="ti-btn m-0 p-2 px-3 ti-btn-light !font-medium"
                        data-hs-overlay="#hs-overlay-switcher"><i
                            class="ri-settings-3-line animate-spin-slow"></i></a>
                </div>
                @endif
            </nav>
            <!-- End::nav -->

        </div>
        <!-- End::main-sidebar -->
    </div>
</aside>
