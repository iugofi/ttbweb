@extends('Admin.Layouts.layout')

@section('title', 'TTB Admin')
@section('Description',
    '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')


  <!-- Gridjs CSS -->
  <link rel="stylesheet" href="{{asset('assets/libs/gridjs/theme/mermaid.min.css')}}">

<div class="content">
    <div class="main-content">

         
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">Grid Js Tables</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                      <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                        Tables
                        <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                      </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                      Grid Js Tables
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->



            <!-- Start:: row-4 -->
            <div class="grid grid-cols-12 gap-6">
                <div class="xl:col-span-12 col-span-12">
                    <div class="box custom-box">
                        <div class="box-header">
                            <div class="box-title">
                                Table Sorting
                            </div>
                        </div>
                        <div class="box-body">
                            <div id="grid-sorting"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-4 -->


  




    </div>
</div>


<script>
    new gridjs.Grid({
        pagination: true,
        search: true,
        sort: true,
        columns: [{
            name: "Date",
            width: "150px",
        }, {
            name: "Name",
            width: "150px",
        }, {
            name: "Email",
            width: "200px",
        }, {
            name: "ID",
            width: "150px",
        }, {
            name: "Price",
            width: "100px",
        }, {
            name: "Quantity",
            width: "100px",
        }, {
            name: "Total",
            width: "100px",
        }],
        data: [
            ["24-10-2022 12:47", "john", "john123@gmail.com", "#12012", "$1799", "1", "$1799"],
            ["12-09-2022 04:24", "mark", "markzenner23@gmail.com", "#12013", "$2479", "2", "$4958"],
            ["18-11-2022 18:43", "eoin", "eoin1992@gmail.com", "#12014", "$769", "1", "$769"],
            ["10-09-2022 10:35", "sarahcdd", "sarahcdd129@gmail.com", "#12015", "$1299", "3", "$3997"],
            ["27-10-2022 09:55", "afshin", "afshin@example.com", "#12016", "$1449", "1", "$1449"]
        ],
    }).render(document.getElementById("grid-sorting"));;
</script>


     <!-- Grid JS -->
     <script src="{{asset('assets/libs/gridjs/gridjs.umd.js')}}"></script>
        
     <!-- Internal Grid JS -->
     <script src="{{asset('assets/js/grid.js')}}"></script>


@endsection