@extends('Admin.Layouts.layout')

@section('title', 'TTB Admin')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')


    <!-- Gridjs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/gridjs/theme/mermaid.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.tailwindcss.css">

    <div class="content">
        <div class="main-content">


            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        News</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Tables
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        News
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->



            <!-- Start:: row-4 -->
            <div class="grid grid-cols-12 gap-6">
                <div class="xl:col-span-12 col-span-12">
                    <div class="box custom-box">
                      
                            <table id="example" class="w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">Name</th>
                                        <th class="px-4 py-2">Position</th>
                                        <th class="px-4 py-2">Office</th>
                                        <th class="px-4 py-2">Age</th>
                                        <th class="px-4 py-2">Start date</th>
                                        <th class="px-4 py-2">Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border px-4 py-2">Tiger Nixon</td>
                                        <td class="border px-4 py-2">System Architect</td>
                                        <td class="border px-4 py-2">Edinburgh</td>
                                        <td class="border px-4 py-2">61</td>
                                        <td class="border px-4 py-2">2011/04/25</td>
                                        <td class="border px-4 py-2">$320,800</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Garrett Winters</td>
                                        <td class="border px-4 py-2">Accountant</td>
                                        <td class="border px-4 py-2">Tokyo</td>
                                        <td class="border px-4 py-2">63</td>
                                        <td class="border px-4 py-2">2011/07/25</td>
                                        <td class="border px-4 py-2">$170,750</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Ashton Cox</td>
                                        <td class="border px-4 py-2">Junior Technical Author</td>
                                        <td class="border px-4 py-2">San Francisco</td>
                                        <td class="border px-4 py-2">66</td>
                                        <td class="border px-4 py-2">2009/01/12</td>
                                        <td class="border px-4 py-2">$86,000</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Cedric Kelly</td>
                                        <td class="border px-4 py-2">Senior Javascript Developer</td>
                                        <td class="border px-4 py-2">Edinburgh</td>
                                        <td class="border px-4 py-2">22</td>
                                        <td class="border px-4 py-2">2012/03/29</td>
                                        <td class="border px-4 py-2">$433,060</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Airi Satou</td>
                                        <td class="border px-4 py-2">Accountant</td>
                                        <td class="border px-4 py-2">Tokyo</td>
                                        <td class="border px-4 py-2">33</td>
                                        <td class="border px-4 py-2">2008/11/28</td>
                                        <td class="border px-4 py-2">$162,700</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Brielle Williamson</td>
                                        <td class="border px-4 py-2">Integration Specialist</td>
                                        <td class="border px-4 py-2">New York</td>
                                        <td class="border px-4 py-2">61</td>
                                        <td class="border px-4 py-2">2012/12/02</td>
                                        <td class="border px-4 py-2">$372,000</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Herrod Chandler</td>
                                        <td class="border px-4 py-2">Sales Assistant</td>
                                        <td class="border px-4 py-2">San Francisco</td>
                                        <td class="border px-4 py-2">59</td>
                                        <td class="border px-4 py-2">2012/08/06</td>
                                        <td class="border px-4 py-2">$137,500</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Herrod Chandler</td>
                                        <td class="border px-4 py-2">Sales Assistant</td>
                                        <td class="border px-4 py-2">San Francisco</td>
                                        <td class="border px-4 py-2">59</td>
                                        <td class="border px-4 py-2">2012/08/06</td>
                                        <td class="border px-4 py-2">$137,500</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Ashton Cox</td>
                                        <td class="border px-4 py-2">Junior Technical Author</td>
                                        <td class="border px-4 py-2">San Francisco</td>
                                        <td class="border px-4 py-2">66</td>
                                        <td class="border px-4 py-2">2009/01/12</td>
                                        <td class="border px-4 py-2">$86,000</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Cedric Kelly</td>
                                        <td class="border px-4 py-2">Senior Javascript Developer</td>
                                        <td class="border px-4 py-2">Edinburgh</td>
                                        <td class="border px-4 py-2">22</td>
                                        <td class="border px-4 py-2">2012/03/29</td>
                                        <td class="border px-4 py-2">$433,060</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Airi Satou</td>
                                        <td class="border px-4 py-2">Accountant</td>
                                        <td class="border px-4 py-2">Tokyo</td>
                                        <td class="border px-4 py-2">33</td>
                                        <td class="border px-4 py-2">2008/11/28</td>
                                        <td class="border px-4 py-2">$162,700</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Brielle Williamson</td>
                                        <td class="border px-4 py-2">Integration Specialist</td>
                                        <td class="border px-4 py-2">New York</td>
                                        <td class="border px-4 py-2">61</td>
                                        <td class="border px-4 py-2">2012/12/02</td>
                                        <td class="border px-4 py-2">$372,000</td>
                                    </tr>


                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                    
                        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
                        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

                        <script>
                            $(document).ready(function() {
                                $('#example').DataTable({
                                    // Add any customization options here
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>






        </div>
    </div>





    <!-- Grid JS -->
    <script src="{{ asset('assets/libs/gridjs/gridjs.umd.js') }}"></script>

    <!-- Internal Grid JS -->
    <script src="{{ asset('assets/js/grid.js') }}"></script>



@endsection
