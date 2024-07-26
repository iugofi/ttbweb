@extends('User.Layouts.layout')

@section('title', 'Download')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')

<style>
    #toast {
    display: none;
    position: fixed;
    bottom: 20px;
    left: 20px;
    background-color: #333;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    z-index: 9999;
}

</style>

@section('content')


    <div class="content">
        <div class="main-content">

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
                                <div id="toast">Download started...</div>
                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                <script src="script.js"></script>
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
    $(document).ready(function() {
    $('#downloadLink').click(function(event) {
        event.preventDefault(); // Prevent the default action of the link

        // Show the toast message
        $('#toast').fadeIn(400).delay(2000).fadeOut(400);
    });
});

</script>


@endsection
