@extends('User.Layouts.layout')

@section('title', 'Download')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')

<style>
    .ti-toast {
        display: none;
        position: fixed;
        top: 10px;
        right: 10px;
        background-color: #6c757d; /* bg-secondary */
        color: #fff; /* text-white */
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
</style>

@section('content')


    <div class="content">
        <div class="main-content">

            <div class="ti-toast" id="toast" role="alert">
                <div class="flex p-4">
                    Hello, world! This is a toast message.
                    <div class="ms-auto">
                        <button type="button" id="closeButton">
                            <span class="sr-only">Close</span>
                            <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z" fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <section class="vpn-download-one">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-12 xl:col-span12 lg:col-span-12 md:col-span-12 col-span-12 text-center ">
                            <h2>Comprehensive <span>Virus Protection</span> is a click away.</h2>
                            <p class="mt-2">TTB works perfectly with your Microsoft Windows/macOS computers and Google Android devices. </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-6 pt-top">
                        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 text-center  box-down">
                            <img src="{{ asset('assets/img/mac.png') }}" alt="" class="img-fluid" width="25%">
                            <div class="btn-down">
                                <a href="#" id="downloadLink">Download For Mac</a>
                            </div>
                            <span> For MacOS X10.15 or above</span>
                        </div>
                        <div
                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 text-center box-down">
                            <img src="{{ asset('assets/img/window.png') }}" alt="" class="img-fluid" width="25%">
                            <div class="btn-down">
                                <a href="#">Download For Window</a>
                            </div>
                            <span> For Window 10, 8, 7 or above</span>
                        </div>
                        <div
                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 text-center box-down">
                            <img src="{{ asset('assets/img/android.png') }}" alt="" class="img-fluid" width="25%">
                            <div class="btn-down">
                                <a href="#">Download For Android</a>
                            </div>
                            <span> For Android Ver 5.0 or above</span>
                        </div>
                    </div>
                </div>
            </section>


            <section class="vpn-download-two">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 cnt-download">
                            <h3>About </h3>
                            <p class="mt-2">It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout.</p>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 cnt-download">
                            <h3>Feedback </h3>
                            <p class="mt-2">It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout.</p>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 cnt-download">
                            <h3>Source </h3>
                            <p class="mt-2">It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>


    <script>
        document.getElementById('downloadLink').addEventListener('click', function(event) {
            event.preventDefault();
            var toast = document.getElementById('toast');
            toast.style.display = 'block';

            setTimeout(function() {
                toast.style.display = 'none';
            }, 3000); // Hide toast after 3 seconds
        });

        document.getElementById('closeButton').addEventListener('click', function() {
            document.getElementById('toast').style.display = 'none';
        });
    </script>




@endsection
