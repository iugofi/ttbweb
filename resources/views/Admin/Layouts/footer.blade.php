<div id="search-modal" class="hs-overlay ti-modal hidden mt-[1.75rem]">
    <div class="ti-modal-box">
        <div
            class="ti-modal-content !border !border-defaultborder dark:!border-defaultborder/10 !rounded-[0.5rem]">
            <div class="ti-modal-body">

                <div class="input-group border-[2px] border-primary rounded-[0.25rem] w-full flex">
                    <a aria-label="anchor" href="javascript:void(0);"
                        class="input-group-text flex items-center bg-light border-e-[#dee2e6] !py-[0.375rem] !px-[0.75rem] !rounded-none !text-[0.875rem]"
                        id="Search-Grid"><i class="fe fe-search header-link-icon text-[0.875rem]"></i>
                    </a>

                    <input type="search"
                        class="form-control border-0 px-2 !text-[0.8rem] w-full focus:ring-transparent"
                        placeholder="Search" aria-label="Username">

                    <a aria-label="anchor" href="javascript:void(0);"
                        class="flex items-center input-group-text bg-light !py-[0.375rem] !px-[0.75rem]"
                        id="voice-search"><i class="fe fe-mic header-link-icon"></i>
                    </a>
                    <div class="hs-dropdown ti-dropdown">
                        <a aria-label="anchor" href="javascript:void(0);"
                            class="flex items-center hs-dropdown-toggle ti-dropdown-toggle btn btn-light btn-icon !bg-light !py-[0.375rem] !rounded-none !px-[0.75rem] text-[0.95rem] h-[2.413rem] w-[2.313rem]">
                            <i class="fe fe-more-vertical"></i>
                        </a>

                        <ul class="absolute hs-dropdown-menu ti-dropdown-menu !-mt-2 !p-0 hidden">
                            <li><a class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                                    href="javascript:void(0);">Action</a></li>
                            <li><a class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                                    href="javascript:void(0);">Another action</a></li>
                            <li><a class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                                    href="javascript:void(0);">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                                    href="javascript:void(0);">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-5">
                    <p
                        class="font-normal  text-[#8c9097] dark:text-white/50 text-[0.813rem] dark:text-gray-200 mb-2">
                        Are You Looking For...</p>

                    <span
                        class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i
                            class="fe fe-user me-2"></i>People<a href="javascript:void(0)"
                            class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i
                                class="fe fe-x"></i></a></span>
                    <span
                        class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i
                            class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)"
                            class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i
                                class="fe fe-x"></i></a></span>
                    <span
                        class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i
                            class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)"
                            class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i
                                class="fe fe-x"></i></a></span>
                    <span
                        class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i
                            class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)"
                            class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i
                                class="fe fe-x"></i></a></span>

                </div>

                <div class="my-[1.5rem]">
                    <p class="font-normal  text-[#8c9097] dark:text-white/50 text-[0.813rem] mb-2">Recent Search
                        :</p>

                    <div id="dismiss-notifications-alert" role="alert"
                        class="!p-2 border dark:border-defaultborder/10 rounded-[0.3125rem] flex items-center text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-2 !text-[0.8125rem] alert">
                        <a href="notifications.html"><span>Notifications</span></a>
                        <a aria-label="anchor" class="ms-auto leading-none" href="javascript:void(0);"
                            data-hs-remove-element="#dismiss-notifications-alert"><i
                                class="fe fe-x !text-[0.8125rem] text-[#8c9097] dark:text-white/50"></i></a>
                    </div>

                    <div id="dismiss-alerts-alert" role="alert"
                        class="!p-2 border dark:border-defaultborder/10 rounded-[0.3125rem] flex items-center text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-2 !text-[0.8125rem] alert">
                        <a href="alerts.html"><span>Alerts</span></a>
                        <a aria-label="anchor" class="ms-auto leading-none" href="javascript:void(0);"
                            data-hs-remove-element="#dismiss-alerts-alert"><i
                                class="fe fe-x !text-[0.8125rem] text-[#8c9097] dark:text-white/50"></i></a>
                    </div>

                    <div id="dismiss-mail-alert" role="alert"
                        class="!p-2 border dark:border-defaultborder/10 rounded-[0.3125rem] flex items-center text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-0 !text-[0.8125rem] alert">
                        <a href="mail.html"><span>Mail</span></a>
                        <a aria-label="anchor" class="ms-auto lh-1" href="javascript:void(0);"
                            data-hs-remove-element="#dismiss-mail-alert"><i
                                class="fe fe-x !text-[0.8125rem] text-[#8c9097] dark:text-white/50"></i></a>
                    </div>
                </div>
            </div>

            <div class="ti-modal-footer !py-[1rem] !px-[1.25rem]">
                <div class="inline-flex rounded-md  shadow-sm">
                    <button type="button"
                        class="ti-btn-group !px-[0.75rem] !py-[0.45rem]  rounded-s-[0.25rem] !rounded-e-none ti-btn-primary !text-[0.75rem] dark:border-white/10">
                        Search
                    </button>
                    <button type="button"
                        class="ti-btn-group  ti-btn-primary-full rounded-e-[0.25rem] dark:border-white/10 !text-[0.75rem] !rounded-s-none !px-[0.75rem] !py-[0.45rem]">
                        Clear Recents
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SEARCH-MODAL -->

<!-- FOOTER -->


<footer
    class="footer mt-auto xl:ps-[15rem] font-normal font-inter bg-white text-defaultsize leading-normal text-[0.813] shadow-[0_0_0.4rem_rgba(0,0,0,0.1)] dark:bg-bodybg py-4 text-center">
    <div class="container">
        <span class="text-gray dark:text-defaulttextcolor/50"> Copyright © <span id="year"></span> <a
                href="javascript:void(0);"
                class="text-defaulttextcolor font-semibold dark:text-defaulttextcolor">Ynex</a>.
            Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                <span class="font-semibold text-primary underline">Spruko</span>
            </a> All
            rights
            reserved
        </span>
    </div>
</footer>
<!-- END FOOTER -->

</div>
<!-- END PAGE-->

<!-- SCRIPTS -->


<!-- SCROLL-TO-TOP -->
<div class="scrollToTop">
<span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
</div>
<div id="responsive-overlay"></div>

<!-- PRELINE JS -->
<script src="assets/libs/preline/preline.js"></script>

<!-- POPPER JS -->
<script src="assets/libs/%40popperjs/core/umd/popper.min.js"></script>

<!-- COLOR PICKER JS -->
<script src="assets/libs/%40simonwep/pickr/pickr.es5.min.js"></script>

<!-- SWITCH JS -->
<script src="assets/js/switch.js"></script>

<!-- SIMPLEBAR JS -->
<script src="assets/libs/simplebar/simplebar.min.js"></script>

<!-- JSVector Maps JS -->
<script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>

<!-- JSVector Maps MapsJS -->
<script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

<!-- Apex Charts JS -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Chartjs Chart JS -->
<script src="assets/libs/chart.js/chart.min.js"></script>

<!-- CRM-Dashboard -->
<script src="assets/js/crm-dashboard.js"></script>


<!-- DEFAULTMENU JS -->
<script src="assets/js/defaultmenu.js"></script>

<!-- STICKY JS -->
<script src="assets/js/sticky.js"></script>

<!-- CUSTOM JS -->
<script src="assets/js/custom.js"></script>

<!-- CUSTOM-SWITCHER JS -->
<script src="assets/js/custom-switcher.js"></script>

<!-- END SCRIPTS -->

</body>

<!-- Mirrored from php.spruko.com/tailwind/ynex/ynex/pages/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 10:01:35 GMT -->

</html>
<!-- This code use for render base file -->