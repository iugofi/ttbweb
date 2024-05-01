@extends('User.Layouts.layout')

@section('title', 'ttbantiviruenew')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')


@section('content')

    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">

        <!-- Start::ttbantivirus section one -->
        <div class="commericial-banner" id="commericial">
            <section class="section sect-ban">
                <div class="container main-banner-container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 col-span-12">
                            <div class="lg:py-[3rem] text-vartical"
                                style="position: relative; top: 7rem; padding-right: 2rem;">
                                <h1 class="text-center font-semibold mb-2 text-[2rem]" style="color: #000;">Limited Time Offer Flat 50% off - No<br>
                                    Hidden Chnages Hurry Up!!!</h1>
                                <div class="text-[1rem] mb-[1.3rem] text-black-light opacity-[0.9] text-center dark-text"
                                    style="color: #000;">Holisticly
                                    procrastinate mission-critical convergence with reliable customer service. <br>Assertively
                                    underwhelm idea-sharing for impactful solutions.
                                </div>
                                <div class="bnr-btn text-center">
                                <a href="index.html" class="m-1 ti-btn ti-btn-primary-full" style="padding: 8px 34px;">
                                    Buy Now
                                </a>
                                <a href="index.html" class="m-1 ti-btn bg-white" style="color:#11CDBE;">
                                    Download Now
                                </a>
                            </div>
                            </div>
                        </div>
                        {{-- <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12">

                            <div class="text-end landing-main-image landing-heading-img flex justify-end w-full">
                            </div>

                        </div> --}}
                    </div>
                </div>
            </section>
        </div>
        <!-- End::ttbantivirus section one -->



        <section class="section-troubleshoot tabsection-one">
            <div class="worko-tabs">
                <div class="troubleshoot-heading">
                    <h3 style="text-align: center; margin-top: 20px; font-weight: 600; font-size: 34px; color: #11CDBD;">Easily Setup the
                        Smart Devices</h3>
                    <p style="text-align: center; margin-top: 10px; color: #000; padding-bottom: 20px;font-size:16px;">TTB eSupport Concierge will guide you
                        through
                        setting up your hardware and software smoothly.</p>
                </div>
                <input class="state" type="radio" title="tab-five" name="tabs-state" id="tab-five" checked="">
                <input class="state" type="radio" title="tab-six" name="tabs-state" id="tab-six">
                <input class="state" type="radio" title="tab-seven" name="tabs-state" id="tab-seven">
                <!-- <input class="state" type="radio" title="tab-four" name="tabs-state" id="tab-eight" /> -->
                <div class="tabs flex-tabs">
                    <label for="tab-five" id="tab-five-label" class="tab default-bg-focus">Business Network Setup</label>
                    <label for="tab-six" id="tab-six-label" class="tab">Smart Device Setup</label>
                    <label for="tab-seven" id="tab-seven-label" class="tab">Software Installation</label>
                    <!-- <label for="tab-four" id="tab-four-label" class="tab">System Fixing</label> -->
                    <!-- Tab Html Satart -->
                    <div id="tab-five-panel" class="panel active" style="display: block;">
                        <div class="tab-five-conatiner">
                            <div class="left-side-container">
                                <h4 style="font-size: xx-large; font-weight: 600;">Business Network Setup:</h4>
                                <p style="font-size:16px;"> As a newbie, setting up your home automation devices on your own can be difficult. But
                                    with our TTB eSupport Concierge it will
                                    be easier than ever.</p>
                                <div class="icons-content">
                                    <div class="icon-1">
                                        <img src="assets/images/eSupport/Watch-Over-Your-Family-from-Anywhere.png" alt=""><br>
                                        <p style="color:#333;font-size:16px;font-weight:400; text-align:left;width:100px;">Watch Over <br>Your Family <br>from Anywhere</p>
                                    </div>
                                    <div class="icon-2">
                                        <img src="assets/images/eSupport/Eliminate-Common-&amp;-Complex-Issues.png" alt=""><br>
                                        <p style="color:#333;font-size:16px;font-weight:400; text-align:left; width:100px;">Eliminate Common <br>&amp; Complex Issues</p>
                                    </div>
                                    <div class="icon-3">
                                        <img src="assets/images/eSupport/op-Notch-Experience-Without-Lagging.png" alt=""><br>
                                        <p style="color:#333;font-size:16px;font-weight:400; text-align:left;width:100px;">Top-Notch Experience<br> Without Lagging</p>
                                    </div>
                                </div>
                                <div class="price-section">
                                    <div class="price-1">
                                        $69
                                    </div>
                                    <div class="price-content">
                                        <b>1 Time</b><br>Home Network Setup
                                    </div>
                                </div>
                                <button type="button" class="btn btn-lg">Buy Now</button>
                                <!-- <p>Want unlimited support? <a href="#" class="link-subscribe">Subscribe to Concierge</a></p> -->
                            </div>
                            <div class="right-side-container">
                                <img src="assets/images/eSupport/network-setup-3.jpg" alt="" width="500px" height="400px">
                            </div>
                        </div>
                    </div>
                    <!-- Tab one Complete Html Closed -->
                    <div id="tab-six-panel" class="panel">
                        <div class="container-2">
                            <div class="left-container-2">
                                <h4 style="font-size: xx-large; font-weight: 600;">Smart Device Setup:</h4>
                                <p style="font-size:16px;">From your home networks to workplace security devices, we will help you optimize them for
                                    optimal functioning only.
                                </p>
                                <div class="icons-content">
                                    <div class="icon-1">
                                        <img src="assets/images/eSupport/Enhance-Your-Security-With-Smart-Devices.png" alt=""><br>
                                        <p style="color:#333;font-size:16px;font-weight:400; text-align:left;width:109px;">Enhance Your Security <br>With Us</p>
                                    </div>
                                    <div class="icon-2">
                                        <img src="assets/images/eSupport/Customize-the-Settings-Accordingly.png" alt=""><br>
                                        <p style="color:#333;font-size:16px;font-weight:400; text-align:left;width:100px;">Customize<br>the Settings Accordingly</p>
                                    </div>
                                    <div class="icon-3">
                                        <img src="assets/images/eSupport/Increase-devices-Functionality-yours.png" alt=""><br>
                                        <p style="color:#333;font-size:16px;font-weight:400; text-align:left;width:100px;">Increase device’s<br>Functionality</p>
                                    </div>
                                </div>
                                <div class="price-section-2">
                                    <div class="price-1">
                                        $69
                                    </div>
                                    <div class="price-content">
                                        <b>1 Time</b><br>Home Network Setup
                                    </div>
                                </div>
                                <button type="button" class="btn btn-lg">Buy Now</button>
                                <!-- <p>Want unlimited support? <a href="#" class="link-subscribe">Subscribe to Concierge</a></p> -->
                            </div>
                            <div class="right-container-2">
                                <img src="assets/images/eSupport/smart-device-2.jpg" alt="" width="500px" height="400px">
                            </div>
                        </div>
                    </div>
                    <!-- Tab-2 Html Satart -->
                    <div id="tab-seven-panel" class="panel">
                        <div class="container-2">
                            <div class="left-container-2">
                                <h4 style="font-size: xx-large; font-weight: 600;">Software Installation:</h4>
                                <p style="font-size:16px;">Software installation can be difficult to eliminate without professional advice. So,
                                    contact us to ensure your software
                                    is set up and functioning properly.
                                </p>
                                <div class="icons-content">
                                    <div class="icon-1">
                                        <img src="assets/images/eSupport/Proper-Software-Running.png" alt=""><br>
                                        <p style="color:#333;font-size:16px;font-weight:400; text-align:left;">Proper <br>Software Running</p>
                                    </div>
                                    <div class="icon-2">
                                        <img src="assets/images/eSupport/Eliminates-Any-Glitches-&amp;-Bugs.png" alt=""><br>
                                        <p style="color:#333;font-size:16px;font-weight:400; text-align:left;">Eliminates Any <br>Glitches &amp; Bugs</p>
                                    </div>
                                    <div class="icon-3">
                                        <img src="assets/images/eSupport/Watch-Over-Your-Family-from-Anywhere.png" alt=""><br>
                                        <p style="color:#333;font-size:16px;font-weight:400; text-align:left;">Ensure Correct <br>Software Installed</p>
                                    </div>
                                </div>
                                <div class="price-section-2">
                                    <div class="price-1">
                                        $69
                                    </div>
                                    <div class="price-content">
                                        <b>1 Time</b><br>Home Network Setup
                                    </div>
                                </div>
                                <button type="button" class="btn btn-lg">Buy Now</button>
                                <!-- <p>Want unlimited support? <a href="#" class="link-subscribe">Subscribe to Concierge</a></p> -->
                            </div>
                            <div class="right-container-2">
                                <img src="assets/images/eSupport/software-installation-2.jpg" alt="" width="500px" height="400px">
                            </div>
                        </div>
                        <!-- Tab-2 Html Closed -->
                        <!-- Tab-3 Html Satart -->
                    </div>
                    <!-- <div id="tab-four-panel" class="panel">
                                        <div class="container-2">
                                            <div class="left-container-2">
                                                <h4 style="font-size: xx-large; font-weight: 600;">System Fixing</h4>
                                                <p>We will also help you troubleshoot any issues you are facing with your PC or any system,
                                                    you
                                                    are having trouble with.
                                                </p>
                                                <div class="icons-content">
                                                    <div class="icon-1">
                                                        <img src="image/Simple-Setup.png" alt=""><br />
                                                        <span>Operating System <br>Problems</span>
                                                    </div>
                                                    <div class="icon-2">
                                                        <img src="image/Device-Review.png" alt=""><br />
                                                        <span>Troubleshoot Software <br />Crashes</span>
                                                    </div>
                                                    <div class="icon-3">
                                                        <img src="image/Fixing-Any-Malfunctions.png" alt=""><br />
                                                        <span>Software Lagging & <br>Slowing</span>
                                                    </div>
                                                </div>
                                                <div class="price-section-2">
                                                    <div class="price-1">
                                                        &#36;69
                                                    </div>
                                                    <div class="price-content">
                                                        <b>1 Time</b><br />Home Network Setup
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-lg">Buy Now</button>
                                                 <p>Want unlimited support? <a href="#" class="link-subscribe">Subscribe to Concierge</a></p>
                                </div>
                                <div class="right-container-2">
                                    <img src="image/System-Fixing.jpg" alt="" width="500px" height="400px">
                                </div>
                            </div>
                            </div> -->
                </div>
        </div></section>

















    @endsection
