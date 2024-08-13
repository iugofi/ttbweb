@extends('Admin.Layouts.layout')

@section('title', 'Manual Message')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')

<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<!-- Latest compiled and minified CSS -->
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/flatly/bootstrap.min.css"> --}}
<link rel="stylesheet" href="{{asset('assets/css/email.multiple.css')}}">

<style>
    .typing-text .ck-blurred.ck.ck-content.ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline {
    height: 200px;
}

.test-email-ms input.enter-mail-id {
    width: 100%;
    height: 200px;
}


</style>

<div class="content">
    <div class="main-content">


        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                {{-- <h3
                    class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                    Admin Create </h3> --}}
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[0.813rem] ps-[0.5rem]">
                    <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                        href="javascript:void(0);">
                        Manual Message
                        <i
                            class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                    </a>
                </li>
                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                    aria-current="page">
                    Add Manual User
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Add Manual User</div>
                    </div>
                    <form method="post" id="key_add_form" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="box text-center">
                                <div class="" id="show_success_alert"></div>
                            </div>
                            <div class="grid grid-cols-12 gap-4">

                                <div class="xl:col-span-6 col-span-12">
                                    <label for="canonical-url" class="form-label">Email Subject</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                        id="main_key" name="main_key" placeholder="Enter Key" maxlength="29" onkeydown="addHyphen(this)">
                                    <div class="invalid-feedback"></div>
                                </div>


                                <div class="xl:col-span-12 col-span-12">
                                    <label class="form-label">Email Content</label>
                                    <textarea name="blog_description" id="editoronebest" class="typing-text"></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <label class="form-label">Email Id</label>
                                    <select name="field2" id="field2" multiple multiselect-search="true" multiselect-select-all="true"
                                    multiselect-max-items="3" onchange="console.log(this.selectedOptions)">
                                    <option>Abarth</option>
                                    <option>Alfa Romeo</option>
                                    <option>Aston Martin</option>
                                    <option>Audi</option>
                                    <option>Bentley</option>
                                    <option>BMW</option>
                                    <option>Bugatti</option>
                                    <option>Cadillac</option>
                                    <option>Chevrolet</option>
                                    <option>Chrysler</option>
                                    <option>Citroën</option>
                                    <option>Dacia</option>
                                    <option>Daewoo</option>
                                    <option>Daihatsu</option>
                                    <option>Dodge</option>
                                    <option>Donkervoort</option>
                                    <option>DS</option>
                                    <option>Ferrari</option>
                                    <option>Fiat</option>
                                    <option>Fisker</option>
                                    <option>Ford</option>
                                    <option>Honda</option>
                                    <option>Hummer</option>
                                    <option>Hyundai</option>
                                    <option>Infiniti</option>
                                    <option>Iveco</option>
                                    <option>Jaguar</option>
                                    <option>Jeep</option>
                                    <option>Kia</option>
                                    <option>KTM</option>
                                    <option>Lada</option>
                                    <option>Lamborghini</option>
                                    <option>Lancia</option>
                                    <option>Land Rover</option>
                                    <option>Landwind</option>
                                    <option>Lexus</option>
                                    <option>Lotus</option>
                                    <option>Maserati</option>
                                    <option>Maybach</option>
                                    <option>Mazda</option>
                                    <option>McLaren</option>
                                    <option>Mercedes-Benz</option>
                                    <option>MG</option>
                                    <option>Mini</option>
                                    <option>Mitsubishi</option>
                                    <option>Morgan</option>
                                    <option>Nissan</option>
                                    <option>Opel</option>
                                    <option>Peugeot</option>
                                    <option>Porsche</option>
                                    <option>Renault</option>
                                    <option>Rolls-Royce</option>
                                    <option>Rover</option>
                                    <option>Saab</option>
                                    <option>Seat</option>
                                    <option>Skoda</option>
                                    <option>Smart</option>
                                    <option>SsangYong</option>
                                    <option>Subaru</option>
                                    <option>Suzuki</option>
                                    <option>Tesla</option>
                                    <option>Toyota</option>
                                    <option>Volkswagen</option>
                                    <option>Volvo</option>
                                  </select>
                                </div>

                                <div class="xl:col-span-12 col-span-12">
                                    {{-- <label class="form-label">Email Id</label> --}}
                                    {{-- <input > --}}
                                    <input class="ti-form-input test-email-ms" id="essai" type="text">
                                    <div class="invalid-feedback"></div>
                                </div>

                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="text-end">
                                {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                <input type="submit" value="Save Key" id="key_save_btn"
                                    class="ti-btn bg-primary text-white !py-1 !px-2 !text-[0.75rem] !font-medium">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <div class="xxl:col-span-3 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">
                            Recent Plan
                        </div>
                    </div>
                    <div class="box-body" id="recentpost">
                        <ul class="list-group">
                            <!-- Recent posts will be dynamically added here -->
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
        <!--End::row-1 -->


    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
crossorigin="anonymous"></script>
<script src="{{asset('assets/js/multiselect-dropdown.js')}}"></script>

<!-- Latest compiled JavaScript -->

<script src="{{asset('assets/js/jquery.email.multiple.js')}}"></script>
<script>
    $(document).ready(function($){
        let data = [
//             "admin@jqueryscript.net",
//   "admin@cssscript.com"
        ]
        $("#essai").email_multiple({
            data: data
            // reset: true
        });
    });
</script>
</div>
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>




@endsection
