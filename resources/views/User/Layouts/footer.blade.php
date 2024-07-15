        {{-- Start New footer html --}}

        <footer class="relative overflow-hidden z-1">
            <div class="footer-top py-12 bg-gradient-to-br from-purple-600 to-blue-800" style="margin-top: 4rem;">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap footer-flex">
                        <div class="w-full lg:w-1/2 mb-8 lg:mb-0 mobile-flex">
                            {{-- <h2 class="text-white text-3xl font-semibold mb-6">
                TTB INTERNET SECURITY APP</h2> --}}
                            <div
                                class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 my-btn-section">
                                <a href="#"
                                    class="ti-btn ti-btn-primary-full !rounded-full ti-btn-wave my-btn-pros">
                                    <span class="fab fa-apple icon-size-sm mx-3 mr-3 h2"></span>
                                    <div class="download-text text-left">
                                        <h5 class="mb-0">Download</h5>
                                    </div>
                                </a>
                                <a href="#" class="ti-btn !rounded-full ti-btn-wave my-btn-pro"
                                    style="border: 1px solid #13D8AA ">
                                    <span class="fab fa-google-play icon-size-sm mx-3 mr-3 h2"
                                        style="color: #13D8AA;"></span>
                                    <div class="download-text text-left">
                                        <h5 class="mb-0">Download</h5>
                                    </div>
                                </a>


                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="inner-column text-right lg:text-right">
                                {{-- <h2 class="text-white text-3xl font-semibold mb-6">FOR MORE INFORMATION SUBSCRIBE TODAY</h2> --}}
                                <div class="subscribe-form">
                                    <form method="post" action="{{ route('user.saveemailsub') }}" id="mail-subscribe">
                                        @csrf
                                        <div class="form-group relative">
                                            <input type="email" name="email_subscribe" id="email_subscribe"
                                                placeholder="Enter mail address..." required
                                                class="w-80 h-12 px-8 py-2 rounded-full bg-transparent text-black border border-white outline-none">
                                            <button type="submit" id="sub-button"
                                                class="absolute right-2 top-2 h-12 bg-yellow-500 text-indigo-800 font-semibold rounded-full px-6 uppercase">
                                                Subscribe
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="widgets-section py-6">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap footer-flex justify-between">
                        <div class="w-full lg:w-1/5 mb-8 lg:mb-0">
                            <div class="footer-widget">
                                <div class="logo mb-8">
                                    <a href="#"><img src="images/logo/logo-light.png" alt=""
                                            class="w-40"></a>
                                </div>
                                <p class="text-white mb-6">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </p>
                                <ul class="footer-info text-white">
                                    <h2 class="text-white text-xl font-semibold mb-6">CONTACT US</h2>
                                    <li class="mb-4 flex items-center"><i
                                            class="fa fa-phone mr-2 px-2 text-yellow-500"></i><a
                                            href="tel:(800) 710-9311">(800) 710-9311</a></li>
                                    <li class="mb-4 flex items-center"><i
                                            class="fa-solid fa-envelope mr-2 px-2 text-yellow-500"></i> <a
                                            href="mailto:care@ttbinternetsecurity.com">care@ttbinternetsecurity.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/5 mb-8 lg:mb-0 px-12">
                            <div class="footer-widget">
                                <h2 class="text-white text-lg font-semibold mb-6 text-color-ttb">QUICK LINKS</h2>
                                <ul class="list-none text-white">
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">Home</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">About</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">Support</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">Sign In</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">Personal</a></li>
                                    <li><a href="#" class="hover:text-yellow-500">Commercial</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/5 mb-8 lg:mb-0">
                            <div class="footer-widget">
                                <h2 class="text-white text-lg font-semibold mb-6 text-color-ttb">PRODUCTS</h2>
                                <ul class="list-none text-white">
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">TTB Antivirus</a>
                                    </li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">TTB Internet
                                            Security</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">TTB Total
                                            Security</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">TTB VPN Shield</a>
                                    </li>
                                </ul>
                                <h2 class="text-white text-lg font-semibold mb-6 text-color-ttb">RESOURCES</h2>
                                <ul class="list-none text-white">
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">News</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">Blogs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/5 mb-8 lg:mb-0">
                            <div class="footer-widget">
                                <h2 class="text-white text-lg font-semibold mb-6 text-color-ttb">SOLUTIONS</h2>
                                <ul class="list-none text-white">
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">EndPoint
                                            Protection</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">Network
                                            Protection</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">Threat
                                            Protection</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">Behavioral
                                            Protection</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">Enhanced
                                            Firewall</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">Malware
                                            Detection</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">Real Time
                                            Anti-phishing</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">Virus Removal
                                            Service</a></li>
                                    <li class="mb-2"><a href="#" class="hover:text-yellow-500">E-Support
                                            Concierge</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/5 mb-8 lg:mb-0">
                            <div class="footer-widget">
                                <h2 class="text-white text-lg font-semibold mb-6 text-color-ttb">ADDRESS</h2>
                                <ul class="list-none text-white">
                                    <h2 class="text-white text-lg font-semibold mb-2 text-color-ttb">USA</h2>
                                    <li class="flex items-center pb-2">Sand Lake Rd, Orlando, FL, USA</li>
                                    <h2 class="text-white text-lg font-semibold mb-2 text-color-ttb">UNITED KINGDOM</h2>
                                    <li class="flex items-center pb-2">Shelton Street, Covent Garden, London, UK</li>
                                    <h2 class="text-white text-lg font-semibold mb-2 text-color-ttb">CANADA</h2>
                                    <li class="flex items-center pb-2">Sugarpine Court Brampton, Ontario, CA</li>
                                    <h2 class="text-white text-lg font-semibold mb-2 text-color-ttb">INDIA</h2>
                                    <li class="flex items-center pb-2">Bestech Business Tower, Sector 66, Mohali, IN</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom py-4 border-t border-white">
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 items-center">

                        <!-- Navigation Links Section -->
                        <div class="mb-4 lg:mb-0">
                            <div class="flex justify-center lg:justify-center below-links">
                                <ul class="flex lg:flex-row lg:space-x-4">
                                    <li><a href="#" class="text-white">Support</a></li>
                                    <li><a href="#" class="text-white">Privacy Policy</a></li>
                                    <li><a href="#" class="text-white">Terms Of Service</a></li>
                                    <li><a href="#" class="text-white">Return &amp; Refund Policy</a></li>
                                    <li><a href="#" class="text-white">Sitemap</a></li>
                                </ul>
                            </div>
                        </div>


                        <!-- Copyright Section -->
                        <div class="mb-4 lg:mb-0">
                            <p class="text-white text-sm">
                                Copyright © 2024
                                <a href="https://nighthawk-routerlogin.com/">
                                    <b style="color:#11CDBE;">TTB Antivirus.</b>
                                </a>
                                All Rights Reserved
                            </p>
                        </div>

                        <!-- Social Media Icons Section -->
                        <div class="mb-4 lg:mb-0 icon-margin">
                            <ul class="flex justify-center lg:justify-end space-x-2">
                                <li>
                                    <a href="https://www.facebook.com/ttbinternetsecurities/">
                                        <button aria-label="Facebook" type="button"
                                            class="ti-btn ti-btn-sm ti-btn-primary">
                                            <i class="ri-facebook-line font-bold"></i></a>
                                    </button>
                                </li>
                                <li>
                                    <a href="https://x.com/i/flow/login?redirect_after_login=%2FTTBisecure">
                                        <button aria-label="Twitter" type="button"
                                            class="ti-btn ti-btn-sm ti-btn-secondary">
                                            <i class="ri-twitter-line font-bold"></i></a>
                                    </button>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/ttbinternetsecurity/">
                                        <button aria-label="Instagram" type="button"
                                            class="ti-btn ti-btn-sm ti-btn-warning">
                                            <i class="ri-instagram-line font-bold"></i></a>
                                    </button>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCda5n02Q-bHeQlyWwm3ieWg">
                                        <button aria-label="YouTube" type="button"
                                            class="ti-btn ti-btn-sm ti-btn-danger">
                                            <i class="ri-youtube-line font-bold"></i></a>
                                    </button>
                                </li>
                                <li>
                                <li>
                                    <a href="https://www.linkedin.com/company/ttbinternetsecurity">
                                        <button aria-label="linkedin" type="button"
                                            class="ti-btn ti-btn-sm ti-btn-success">
                                            <i class="fa-brands fa-linkedin font-bold"></i></a>
                                    </button>
                                </li>
                                <a href="https://in.pinterest.com/ttbinternetsecurity/_created/">
                                    <button aria-label="pinterest" type="button" class="ti-btn ti-btn-sm ti-btn-danger">
                                        <i class="fa-brands fa-square-pinterest font-bold"></i></a>
                                </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

        {{-- End New footer html --}}
<!-- FOOTER -->
</div>
<!-- END MAIN-CONTENT -->

</div>
<!-- END PAGE-->

<!-- SCRIPTS -->


<!-- SCROLL-TO-TOP -->
<div class="scrollToTop">
    <span class="arrow"><i class="ri-arrow-up-s-fill  text-[1.25rem]"></i></span>
</div>
<div id="responsive-overlay"></div>

<!-- POPPER JS -->
<script src="{{ asset('assets/libs/%40popperjs/core/umd/popper.min.js') }}"></script>

<!-- COLOR PICKER JS -->
<script src="{{ asset('assets/libs/%40simonwep/pickr/pickr.es5.min.js') }}"></script>

<!-- SWIPER JS -->
<script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<!-- DEFAULTMENU JS -->
<script src="{{ asset('assets/js/defaultmenu.js') }}"></script>

<!-- SIMPLEBAR JS -->
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

<!-- INTERNAL LANDING JS -->
<script src="{{ asset('assets/js/landing.js') }}"></script>

<!-- PRELINE JS -->
<script src="{{ asset('assets/libs/preline/preline.js') }}"></script>

<script src="{{ asset('assets/js/custom-switcher.js') }}"></script>
<script src="{{ asset('assets/js/swiper.js') }}"></script>
<script src="{{ asset('assets/js/switch.js') }}"></script>




<!-- STICKY JS -->
{{-- <script src="{{asset('assets/js/sticky.js')}}"></script> --}}

<!-- END SCRIPTS -->

<script src="assets/js/show-password.js"></script>

<script src="assets/js/authentication-main.js"></script>

{{-- <a href="javascript:void(0)" class="js-lcc-settings-toggle">@lang('cookie-consent::texts.alert_settings')</a> --}}
</body>


</html>
