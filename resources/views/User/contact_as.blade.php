@extends('User.Layouts.layout')

@section('title', 'Contact As')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')



    <div class="content">
        <div class="main-content">




            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        Contact Us</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Pages
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Contact Us
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6 !mx-auto">
                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12">
                    <div class="box overflow-hidden">
                        <div class="box-body !p-0">
                            <div class="contact-page-banner">
                                <div class="text-center">
                                    <h3 class="text-[1.75rem] font-semibold text-white">Contact US !</h3>
                                    <h6 class="text-[1rem] text-white mb-6">Have any questions ? We would love to hear from
                                        you. </h6>
                                    <a href="tel:(800) 710-9311" alt="Call (800) 710-9311"
                                        class="ti-btn bg-success text-white !font-medium">
                                        Contact <i class="ri-phone-line align-middle"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>








                <div class="xxl:col-span-1 xl:col-span-1 lg:col-span-1 md:col-span-1 sm:col-span-1 col-span-12"></div>
                <div class="xxl:col-span-10 xl:col-span-10 lg:col-span-10 md:col-span-10 sm:col-span-10 col-span-12">
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box contactus-form overflow-hidden">
                                <div class="box-header">
                                    <div class="box-title">
                                        Get In Touch !
                                    </div>
                                </div>
                                <div class="" id="login_save_alert"></div>
                                <form id="contectform" method="post">
                                    @csrf
                                    <div class="box-body">
                                        <div class="sm:grid grid-cols-12 gap-x-6 gap-y-4">
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="contact-address-firstname" class="form-label">First Name
                                                    :</label>
                                                <input type="text"
                                                    class="form-control w-full !rounded-md !bg-light !border-0 "
                                                    name="first_name" id="first_name" placeholder="Enter Name">
                                                <div class="invalid-feedback"></div>

                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="contact-address-lastname" class="form-label">Last Name :</label>
                                                <input type="text"
                                                    class="form-control w-full !rounded-md !bg-light !border-0 "
                                                    name="last_name" id="last_name" placeholder="Enter Last Name">
                                                <div class="invalid-feedback"></div>

                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="contact-address-phone" class="form-label">Phone No :</label>
                                                <input type="text"
                                                    class="form-control w-full !rounded-md !bg-light !border-0 "
                                                    name="phone" id="phone" placeholder="Enter Phone No">
                                                <div class="invalid-feedback"></div>

                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="contact-address-email" class="form-label">Email Id :</label>
                                                <input type="email"
                                                    class="form-control !rounded-md w-full !bg-light !border-0"
                                                    name="email" id="email" placeholder="Enter Email Id">
                                                <div class="invalid-feedback"></div>

                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="contact-address-address" class="form-label">Address :</label>
                                                <textarea class="form-control w-full !rounded-md !bg-light !border-0 " name="address" id="address" rows="2"></textarea>
                                                <div class="invalid-feedback"></div>

                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="contact-mail-message" class="form-label">Message :</label>
                                                <textarea class="form-control w-full !rounded-md !bg-light !border-0 " name="message" id="message" rows="2"></textarea>
                                                <div class="invalid-feedback"></div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-footer">
                                        <div class="text-center">
                                            <input type="submit" id="send_me" class="ti-btn ti-btn-primary !font-medium"
                                                value="Send Message">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box contactus-form overflow-hidden">
                                <div class="box-body">
                                    <iframe title=""
                                        src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1774759.5570273597!2d75.6234658581667!3d29.681290240660715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!3m2!1d28.7040592!2d77.10249019999999!4m5!1s0x390fef68e6eb5105%3A0xb2d621e2c0b32612!2sTechboy%20solutions%2C%20Industrial%20Area%2C%20Sector%2075%2C%20Sahibzada%20Ajit%20Singh%20Nagar%2C%20Punjab!3m2!1d30.6973354!2d76.6902569!5e0!3m2!1sen!2sin!4v1712576818044!5m2!1sen!2sin"
                                        height="370" class="!border-0" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-1 xl:col-span-1 lg:col-span-1 md:col-span-1 sm:col-span-1  col-span-12"></div>
            </div>
            <!--End::row-1 -->

            <style>
                .disflex {
                    display: flex;

                }
                .contact-action .contact-overlay {
    position: absolute;
    inset: 0px;
    z-index: 1;
    height: 100%;
    width: 0px;
    border-radius: 0.5rem;
    background-color: rgb(255 255 255 / 20%);
}
            </style>

            <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]" id="about">
                <div class="container text-center">
                    <p class="text-[0.75rem] font-semibold text-success mb-1"><span
                            class="landing-section-heading">Contact As</span></p>

                    <div class="grid grid-cols-8 justify-center align-center mt-5" style="display: flex;
                    ">
                        

                        <div class="mail-section">
                            <div class="row" style="display: flex;">
                                <div class="col-md-12 " style="display: flex; margin: 0 20px auto;">
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-body contact-action" style="width: 350px;">
                                                <div class="contact-overlay"></div>
                                                <div class="flex items-start ">
                                                    <div class="flex flex-grow flex-wrap gap-2">
                                                        <div class="avatar avatar-xl avatar-rounded me-3">
                                                            <img src="assets/images/logo/message.png" alt="">
                                                        </div>
                                                        <div>
                                                            <h6 class=" mb-1 font-semibold text-[1rem]">
                                                                Support
                                                            </h6>
                                                            <p class="mb-1 text-[#8c9097] dark:text-white/50 contact-mail text-truncate">support@ttbinternetsecurity.com</p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-body contact-action second" style="width: 335px;">
                                                <div class="contact-overlay"></div>
                                                <div class="flex items-start ">
                                                    <div class="flex flex-grow flex-wrap gap-2">
                                                        <div class="avatar avatar-xl avatar-rounded me-3">
                                                            <img src="assets/images/logo/download.png" alt="">
                                                        </div>
                                                        <div>
                                                            <h6 class=" mb-1 font-semibold text-[1rem]">
                                                                Phone
                                                            </h6>
                                                            <p class="mb-1 text-[#8c9097] dark:text-white/50 contact-mail text-truncate">(800) 710-9311</p>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="section  bg-[#f9fafb] section-bg text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]"
                id="team">
                <div class="container text-center">
                    <p class="text-[0.75rem] font-semibold text-success mb-1"><span class="landing-section-heading">OUR
                            OFFICES</span></p>
                    {{-- <h3 class="font-semibold mb-2">Great things in business are done by a team.</h3>
                <div>
                    <div class="xl:col-span-7 col-span-12">
                        <p class="text-[#8c9097] dark:text-white/50 text-[0.9375rem] mb-12 font-normal">Our team
                            consists of highly qulified employees that works hard to raise company standards.</p>
                    </div>
                </div> --}}
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box text-center team-card ">
                                <div class="box-body p-[3rem]">
                                    <span class="avatar avatar-xxl avatar-rounded !mb-4 team-avatar">
                                        <img src="assets/images/logo/usimage.jpg" alt="">

                                    </span>
                                    <p class="font-semibold text-[1.0625rem] mb-0 text-default">USA</p>
                                    <span
                                        class="text-[#8c9097] dark:text-white/50 text-[0.875rem] !text-primary font-semibold">ADDRESS</span>
                                    <p class="text-[#8c9097] dark:text-white/50 mt-2 text-[0.8125rem] mb-4"> Sand Lake Rd,
                                        Orlando, FL, USA.</p>
                                    <div class="mt-2">
                                        {{-- <a href="profile.html" class="ti-btn ti-btn-light !font-medium"
                                        target="_blank">View profile</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box text-center team-card ">
                                <div class="box-body p-[3rem]">
                                    <span class="avatar avatar-xxl avatar-rounded !mb-4 team-avatar">
                                        <img src="assets/images/logo/ukimage.jpg" alt="">

                                    </span>
                                    <p class="font-semibold text-[1.0625rem] mb-0 text-default">UK</p>
                                    <span
                                        class="text-[#8c9097] dark:text-white/50 text-[0.875rem] !text-primary font-semibold">ADDRESS</span>
                                    <p class="text-[#8c9097] dark:text-white/50 mt-2 text-[0.8125rem] mb-4"> Shelton
                                        Street, Covent Garden, London,UK</p>
                                    <div class="mt-2">
                                        {{-- <a href="profile.html" class="ti-btn ti-btn-light !font-medium"
                                target="_blank">View profile</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box text-center team-card ">
                                <div class="box-body p-[3rem]">
                                    <span class="avatar avatar-xxl avatar-rounded !mb-4 team-avatar">
                                        <img src="assets/images/logo/canada.jpg" alt="">

                                    </span>
                                    <p class="font-semibold text-[1.0625rem] mb-0 text-default">CANADA</p>
                                    <span
                                        class="text-[#8c9097] dark:text-white/50 text-[0.875rem] !text-primary font-semibold">ADDRESS</span>
                                    <p class="text-[#8c9097] dark:text-white/50 mt-2 text-[0.8125rem] mb-4"> Sugarpine
                                        Court Brampton, Ontario,CA</p>
                                    <div class="mt-2">
                                        {{-- <a href="profile.html" class="ti-btn ti-btn-light !font-medium"
                                        target="_blank">View profile</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box text-center team-card ">
                                <div class="box-body p-[3rem]">
                                    <span class="avatar avatar-xxl avatar-rounded !mb-4 team-avatar">
                                        <img src="assets/images/logo/indiaimage.png" alt="">

                                    </span>
                                    <p class="font-semibold text-[1.0625rem] mb-0 text-default">INDIA</p>
                                    <span
                                        class="text-[#8c9097] dark:text-white/50 text-[0.875rem] !text-primary font-semibold">ADDRESS</span>
                                    <p class="text-[#8c9097] dark:text-white/50 mt-2 text-[0.8125rem] mb-4"> Bestech
                                        Business Tower, Sector 66, Mohali, IN</p>
                                    <div class="mt-2">
                                        {{-- <a href="profile.html" class="ti-btn ti-btn-light !font-medium"
                                    target="_blank">View profile</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>


        </div>
    </div>

    <script>
        $(document).ready(function() {

            $('#contectform').submit(function(e) {

                e.preventDefault();
                $('#send_me').val('please wait..');
                $.ajax({
                    url: '{{ route('save.contactform') }}',
                    method: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.status === 400) {
                            showError('first_name', response.messages.first_name);
                            showError('last_name', response.messages.last_name);
                            showError('phone', response.messages.phone);
                            showError('email', response.messages.email);
                            showError('address', response.messages.address);
                            showError('message', response.messages.message);

                            $('#send_me').val('Send Message');
                        } else if (response.status === 401) {
                            $("#login_save_alert").html(showMessage('danger', response
                                .messages));
                            $('#send_me').val('Send Message');
                        } else {
                            if (response.status === 200) {
                                $("#login_save_alert").html(showMessage('success', response
                                    .messages));
                                $('#contectform')[0].reset();
                                removeValidationClass("#send_me");
                                $('#send_me').val('Send Message');
                                $('.invalid-feedback').empty();

                            } else {
                                // Handle other response statuses or messages
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX errors here
                    }
                });
            });
        });
    </script>





@endsection
