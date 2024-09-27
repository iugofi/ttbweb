@extends('Admin.Layouts.layout')

@section('title', 'TTB Admin')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')

    <div class="content">
        <div class="main-content">


            <!-- Start::page-header -->
            <div class="md:flex block items-center justify-between my-[1.5rem] page-header-breadcrumb">
                <div>
                    <p class="font-semibold text-[1.125rem] text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-0 ">
                        Welcome back, Json Taylor !</p>
                    <p class="font-normal text-[#8c9097] dark:text-white/50 text-[0.813rem]">Track your sales
                        activity, leads and deals here.</p>
                </div>
                <div class="btn-list md:mt-0 mt-2">
                    <button type="button"
                        class="ti-btn bg-primary text-white btn-wave !font-medium !me-[0.375rem] !ms-0 !text-[0.85rem] !rounded-[0.35rem] !py-[0.51rem] !px-[0.86rem] shadow-none">
                        <i class="ri-filter-3-fill  inline-block"></i>Filters
                    </button>
                    <button type="button"
                        class="ti-btn ti-btn-outline-secondary btn-wave !font-medium  !me-[0.375rem]  !ms-0 !text-[0.85rem] !rounded-[0.35rem] !py-[0.51rem] !px-[0.86rem] shadow-none">
                        <i class="ri-upload-cloud-line  inline-block"></i>Export
                    </button>
                </div>
            </div>
            <!-- End::page-header -->

            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-9 xl:col-span-12  col-span-12">
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-4 xl:col-span-4  col-span-12">
                            <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                                <div class="box crm-highlight-card">
                                    <div class="box-body">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <div class="font-semibold text-[1.125rem] text-white mb-2">Your
                                                    target is incomplete</div>
                                                <span class="block text-[0.75rem] text-white"><span
                                                        class="opacity-[0.7]">You have
                                                        completed</span>
                                                    <span class="font-semibold text-warning">48%</span> <span
                                                        class="opacity-[0.7]">of the given
                                                        target, you can also check your status</span>.</span>
                                                <span class="block font-semibold mt-[0.125rem]"><a
                                                        class="text-white text-[0.813rem]"
                                                        href="javascript:void(0);"><u>Click
                                                            here</u></a></span>
                                            </div>
                                            <div>
                                                <div id="crm-main"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header flex justify-between">
                                        <div class="box-title">
                                            Top Post
                                        </div>
                                        <div class="hs-dropdown ti-dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem]  !text-[0.8rem] !py-1 !px-2 rounded-sm bg-light border-light shadow-none !font-medium"
                                                aria-expanded="false">
                                                <i class="fe fe-more-vertical text-[0.8rem]"></i>
                                            </a>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Week</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Month</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <ul class="list-none crm-top-deals mb-0">

                                            <li class="mb-[0.9rem]">
                                                <div class="flex items-start flex-wrap">
                                                    <div class="me-2">
                                                        <span class=" inline-flex items-center justify-center">
                                                            <img src="{{ asset('assets/images/faces/10.jpg') }}"
                                                                alt=""
                                                                class="w-[1.75rem] h-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-full">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="font-semibold mb-[1.4px]  text-[0.813rem]">Michael
                                                            Jordan
                                                        </p>
                                                        <p class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">
                                                            michael.jordan@example.com</p>
                                                    </div>
                                                    <div class="font-semibold text-[0.9375rem] ">$2,893</div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">Profit Earned</div>
                                        <div class="hs-dropdown ti-dropdown">
                                            <a href="javascript:void(0);"
                                                class="px-2 font-normal text-[0.75rem] text-[#8c9097] dark:text-white/50"
                                                aria-expanded="false">
                                                View All<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </a>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Today</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">This Week</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Last Week</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-body !py-0 !ps-0">
                                        <div id="crm-profits-earned"></div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="xxl:col-span-8  xl:col-span-8  col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-body">
                                            <div class="flex items-top justify-between">
                                                <div>
                                                    <span
                                                        class="!text-[0.8rem]  !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !rounded-full inline-flex items-center justify-center bg-primary">
                                                        <i class="ti ti-users text-[1rem] text-white"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow ms-4">
                                                    <div class="flex items-center justify-between flex-wrap">
                                                        <div>
                                                            <p
                                                                class="text-[#8c9097] dark:text-white/50 text-[0.813rem] mb-0">
                                                                Total News</p>
                                                            <h4 class="font-semibold  text-[1.5rem] !mb-2 ">
                                                                <?php
                                                                $totalNews = DB::select('SELECT COUNT(*) AS total FROM news');
                                                                echo $totalNews[0]->total;
                                                                ?>
                                                            </h4>
                                                        </div>
                                                        <div id="crm-total-customers"></div>
                                                    </div>
                                                    <div class="flex items-center justify-between !mt-1">
                                                        <div>
                                                            <a class="text-primary text-[0.813rem]"
                                                                href="javascript:void(0);">View All<i
                                                                    class="ti ti-arrow-narrow-right ms-2 font-semibold inline-block"></i></a>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 text-success text-[0.813rem] font-semibold">
                                                                +40%</p>
                                                            <p
                                                                class="text-[#8c9097] dark:text-white/50 opacity-[0.7] text-[0.6875rem]">
                                                                this month</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-body">
                                            <div class="flex items-top justify-between">
                                                <div>
                                                    <span
                                                        class="!text-[0.8rem]  !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !rounded-full inline-flex items-center justify-center bg-secondary">
                                                        <i class="ti ti-wallet text-[1rem] text-white"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow ms-4">
                                                    <div class="flex items-center justify-between flex-wrap">
                                                        <div>
                                                            <p
                                                                class="text-[#8c9097] dark:text-white/50 text-[0.813rem] mb-0">
                                                                Total Blog</p>
                                                            <h4 class="font-semibold text-[1.5rem] !mb-2 ">
                                                                <?php
                                                                $totalblog = DB::select('SELECT COUNT(*) AS total FROM blog');
                                                                echo $totalblog[0]->total;
                                                                ?>
                                                            </h4>
                                                        </div>
                                                        <div id="crm-total-revenue"></div>
                                                    </div>
                                                    <div class="flex items-center justify-between mt-1">
                                                        <div>
                                                            <a class="text-secondary text-[0.813rem]"
                                                                href="javascript:void(0);">View All<i
                                                                    class="ti ti-arrow-narrow-right ms-2 font-semibold inline-block"></i></a>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 text-success text-[0.813rem] font-semibold">
                                                                +25%</p>
                                                            <p
                                                                class="text-[#8c9097] dark:text-white/50 opacity-[0.7] text-[0.6875rem]">
                                                                this month</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-body">
                                            <div class="flex items-top justify-between">
                                                <div>
                                                    <span
                                                        class="!text-[0.8rem]  !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !rounded-full inline-flex items-center justify-center bg-success">
                                                        <i class="ti ti-wave-square text-[1rem] text-white"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow ms-4">
                                                    <div class="flex items-center justify-between flex-wrap">
                                                        <div>
                                                            <p
                                                                class="text-[#8c9097] dark:text-white/50 text-[0.813rem] mb-0">
                                                                Total News Likes</p>
                                                            <h4 class="font-semibold text-[1.5rem] !mb-2 ">
                                                                <?php
                                                                $totalnewslike = DB::select('SELECT SUM(likes) AS totallike FROM news');
                                                                echo $totalnewslike[0]->totallike;
                                                                ?>
                                                            </h4>
                                                        </div>
                                                        <div id="crm-conversion-ratio"></div>
                                                    </div>
                                                    <div class="flex items-center justify-between mt-1">
                                                        <div>
                                                            <a class="text-success text-[0.813rem]"
                                                                href="javascript:void(0);">View All<i
                                                                    class="ti ti-arrow-narrow-right ms-2 font-semibold inline-block"></i></a>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 text-danger text-[0.813rem] font-semibold">
                                                                -12%</p>
                                                            <p
                                                                class="text-[#8c9097] dark:text-white/50 opacity-[0.7] text-[0.6875rem]">
                                                                this month</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-body">
                                            <div class="flex items-top justify-between">
                                                <div>
                                                    <span
                                                        class="!text-[0.8rem]  !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !rounded-full inline-flex items-center justify-center bg-warning">
                                                        <i class="ti ti-briefcase text-[1rem] text-white"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow ms-4">
                                                    <div class="flex items-center justify-between flex-wrap">
                                                        <div>
                                                            <p
                                                                class="text-[#8c9097] dark:text-white/50 text-[0.813rem] mb-0">
                                                                Total Blog Likes</p>
                                                            <h4 class="font-semibold text-[1.5rem] !mb-2 ">
                                                                <?php
                                                                $totalbloglike = DB::select('SELECT SUM(likes) AS totallike FROM blog');
                                                                echo $totalbloglike[0]->totallike;
                                                                ?>
                                                            </h4>
                                                        </div>
                                                        <div id="crm-total-deals"></div>
                                                    </div>
                                                    <div class="flex items-center justify-between mt-1">
                                                        <div>
                                                            <a class="text-warning text-[0.813rem]"
                                                                href="javascript:void(0);">View All<i
                                                                    class="ti ti-arrow-narrow-right ms-2 font-semibold inline-block"></i></a>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 text-success text-[0.813rem] font-semibold">
                                                                +19%</p>
                                                            <p
                                                                class="text-[#8c9097] dark:text-white/50  opacity-[0.7] text-[0.6875rem]">
                                                                this month</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-header">
                                            <div class="box-title">Monthly User Register Data</div>
                                        </div>
                                        <div class="box-body">
                                            <div id="line-chart"></div>
                                        </div>
                                    </div>

                                    {{-- <div class="box">
                                    <div class="box-header !gap-0 !m-0 justify-between">
                                        <div class="box-title">
                                            Revenue Analytics
                                        </div>
                                        <div class="hs-dropdown ti-dropdown">
                                            <a href="javascript:void(0);"
                                                class="text-[0.75rem] px-2 font-normal text-[#8c9097] dark:text-white/50"
                                                aria-expanded="false">
                                                View All<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </a>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Today</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">This Week</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                        href="javascript:void(0);">Last Week</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-body !py-5">
                                        <div id="crm-revenue-analytics"></div>
                                    </div>
                                </div> --}}

                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">User City</div>
                                </div>
                                <div class="box-body">
                                    <div id="treemap-multis"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-3 xl:col-span-12 col-span-12">
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-12 xl:col-span-12  col-span-12">


                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Traffic Sources
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover whitespace-nowrap min-w-full">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-start">Page</th>
                                                    <th scope="col" class="text-start">Total Like</th>
                                                    <th scope="col" class="text-start">Traffic</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border border-defaultborder ">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span
                                                                class="avatar !rounded-full avatar-sm p-2 bg-primary me-2">
                                                                <i class="ri-google-fill text-[1.125rem] text-white"></i>
                                                            </span>
                                                            <div class="font-semibold">News</div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span><?php
                                                        $totalnewslike = DB::select('SELECT SUM(likes) AS totallike FROM news');
                                                        echo $totalnewslike[0]->totallike;
                                                        ?></span>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <?php
                                                            $totalnewspars = DB::select("SELECT
                                                                                                                                                                                                                                                ROUND(SUM(likes) * 100.0 / 100, 0) AS percentage
                                                                                                                                                                                                                                            FROM
                                                                                                                                                                                                                                                news");

                                                            ?>
                                                            <div class="progress-bar bg-primary w-[<?php echo $totalnewspars[0]->percentage; ?>%]">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border border-defaultborder ">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span
                                                                class="avatar !rounded-full avatar-sm p-2 bg-primary me-2">
                                                                <i class="ri-google-fill text-[1.125rem] text-white"></i>
                                                            </span>
                                                            <div class="font-semibold">Blog</div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span><?php
                                                        $totalbloglike = DB::select('SELECT SUM(likes) AS totallike FROM blog');
                                                        echo $totalbloglike[0]->totallike;
                                                        ?></span>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <?php
                                                            $totalblogpars = DB::select("SELECT
                                                                                                                                                                                                                                                ROUND(SUM(likes) * 100.0 / 100, 0) AS percentage
                                                                                                                                                                                                                                            FROM
                                                                                                                                                                                                                                                blog");

                                                            ?>
                                                            <div class="progress-bar bg-primary w-[<?php echo $totalblogpars[0]->percentage; ?>%]">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: "{{ route('treemap.data') }}",
                method: 'GET',
                success: function(response) {

                    var options = {
                        series: [{
                            data: response
                        }],
                        legend: {
                            show: false
                        },
                        chart: {
                            height: 350,
                            type: 'treemap'
                        },
                        title: {
                            text: 'User City List',
                            align: 'center',
                            style: {
                                fontSize: '13px',
                                fontWeight: 'bold',
                                color: '#8c9097'
                            }
                        },
                        colors: [
                            '#845adf',
                            '#a65e76',
                            '#f5b849',
                            '#a66a5e',
                            '#a65e9a',
                            '#26bf94',
                            '#e6533c',
                            '#49b6f5',
                            '#5b67c7',
                            '#2dce89',
                            '#EF6537',
                            '#8c9097'
                        ],
                        plotOptions: {
                            treemap: {
                                distributed: true,
                                enableShades: false
                            }
                        }
                    };

                    var chart = new ApexCharts(document.querySelector("#treemap-multis"), options);
                    chart.render();
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                }
            });


            $.ajax({
                url: "{{route('user.trends')}}",
                method: 'GET',
                success: function(response) {
                    var options = {
                        series: [{
                            name: "Users",
                            data: response.users
                        }],
                        chart: {
                            height: 320,
                            type: 'line',
                            zoom: {
                                enabled: false
                            }
                        },
                        colors: ['#845adf'],
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'straight',
                            width: 3,
                        },
                        grid: {
                            borderColor: '#f2f5f7',
                        },
                        title: {
                            text: 'Users Trends by Month ' + response.year,
                            align: 'left',
                            style: {
                                fontSize: '13px',
                                fontWeight: 'bold',
                                color: '#8c9097'
                            },
                        },
                        xaxis: {
                            categories: response
                            .categories, // Dynamic month names from the database
                            labels: {
                                show: true,
                                style: {
                                    colors: "#8c9097",
                                    fontSize: '11px',
                                    fontWeight: 600,
                                    cssClass: 'apexcharts-xaxis-label',
                                },
                            }
                        },
                        yaxis: {
                            labels: {
                                show: true,
                                style: {
                                    colors: "#8c9097",
                                    fontSize: '11px',
                                    fontWeight: 600,
                                    cssClass: 'apexcharts-yaxis-label',
                                },
                            }
                        }
                    };
                    var chart = new ApexCharts(document.querySelector("#line-chart"), options);
                    chart.render();
                }
            });






        });
    </script>

    <script>
        var dom = document.getElementById('echart-pie');
        var myChart = echarts.init(dom, null, {
            renderer: 'canvas',
            useDirtyRect: false
        });
        var app = {};
        var option;
        option = {
            tooltip: {
                trigger: 'item'
            },
            legend: {
                orient: 'vertical',
                left: 'left',
                textStyle: {
                    color: '#777'
                }
            },
            series: [{
                name: 'Access From',
                type: 'pie',
                radius: '50%',
                data: [{
                        value: 1048,
                        name: 'Search Engine'
                    },
                    {
                        value: 735,
                        name: 'Direct'
                    },
                    {
                        value: 580,
                        name: 'Email'
                    },
                    {
                        value: 484,
                        name: 'Union Ads'
                    },
                    {
                        value: 300,
                        name: 'Video Ads'
                    }
                ],
                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }],
            color: ["#845adf", "#23b7e5", "#f7b731", "#e82646", "#49b6f5"]
        };
        if (option && typeof option === 'object') {
            myChart.setOption(option);
        }
        window.addEventListener('resize', myChart.resize);
    </script>

@endsection
