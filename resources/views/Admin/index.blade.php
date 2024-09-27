@extends('Admin.Layouts.layout')

@section('title', 'TTB Admin')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')

    <div class="content">
        <div class="main-content">

            @php
                if (session('loggedInAdmin')) {
                    $sessionId = session('loggedInAdmin');
                    $user = \App\Models\Admin::find($sessionId);
                }
            @endphp
            <!-- Start::page-header -->
            <div class="md:flex block items-center justify-between my-[1.5rem] page-header-breadcrumb">
                <div>
                    <p class="font-semibold text-[1.125rem] text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-0 ">
                        Welcome back, {{ isset($user->name) ? $user->name : '' }} !</p>
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
                <div class="xxl:col-span-6 xl:col-span-12  col-span-12">
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-12 xl:col-span-8  col-span-12">
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
                                                    <span class="font-semibold text-warning">100%</span> <span
                                                        class="opacity-[0.9]">of the given
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
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">Updating Donut Chart</div>
                                    </div>
                                    <div class="box-body">
                                        <div id="donut-update"></div>
                                        <div class="text-center mt-4">
                                            <button type="button" class="btn btn-primary btn-sm"
                                                id="randomize">Randomize</button>
                                            <button type="button" class="btn btn-primary btn-sm"
                                                id="add">Add</button>
                                            <button type="button" class="btn btn-primary btn-sm"
                                                id="remove">Remove</button>
                                            <button type="button" class="btn btn-primary btn-sm"
                                                id="reset">Reset</button>
                                        </div>
                                    </div>
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
                        <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Blog And News &amp; Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="mixed-linecolumn"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
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
                        <div class="xxl:col-span-12  xl:col-span-8  col-span-12">
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
                        </div>
                        <div class="xxl:col-span-12 xl:col-span-12 col-span-12">


                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Combo Range Area Chart
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="rangearea-combo"></div>
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
                url: "{{ route('user.trends') }}",
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

            $.ajax({
                url: '{{ route('chart.nb') }}',
                method: 'GET',
                success: function(response) {
                    var options = {
                        series: [{
                            name: 'Website Blog',
                            type: 'column',
                            data: response.blog
                        }, {
                            name: 'Website News',
                            type: 'line',
                            data: response.news
                        }],
                        chart: {
                            height: 320,
                            type: 'line',
                        },
                        stroke: {
                            width: [0, 4]
                        },
                        grid: {
                            borderColor: '#f2f5f7',
                        },
                        title: {
                            text: 'Traffic Sources',
                            align: 'left',
                            style: {
                                fontSize: '13px',
                                fontWeight: 'bold',
                                color: '#8c9097'
                            },
                        },
                        dataLabels: {
                            enabled: true,
                            enabledOnSeries: [1]
                        },
                        colors: ["#845adf", "#23b7e5"],
                        labels: response.labels,
                        xaxis: {
                            type: 'datetime',
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
                        yaxis: [{
                            title: {
                                text: 'Website Blog',
                                style: {
                                    color: "#8c9097",
                                }
                            },
                            labels: {
                                show: true,
                                style: {
                                    colors: "#8c9097",
                                    fontSize: '11px',
                                    fontWeight: 600,
                                    cssClass: 'apexcharts-yaxis-label',
                                },
                            }
                        }, {
                            opposite: true,
                            title: {
                                text: 'Website News',
                                style: {
                                    color: "#8c9097",
                                }
                            }
                        }]
                    };

                    var chart = new ApexCharts(document.querySelector("#mixed-linecolumn"), options);
                    chart.render();
                },
                error: function(xhr) {
                    console.log('Error:', xhr.responseText);
                }
            });


            var options = {
                series: [44, 55, 13, 33],
                chart: {
                    height: 280,
                    type: 'donut',
                },
                dataLabels: {
                    enabled: false
                },
                colors: ["#845adf", "#23b7e5", "#f5b849", "#e6533c", "#49b6f5"],
                legend: {
                    position: 'bottom',
                }
            };
            var chart = new ApexCharts(document.querySelector("#donut-update"), options);
            chart.render();


            /* combo range area chart */
            var options = {
                series: [{
                        type: 'rangeArea',
                        name: 'Team B Range',

                        data: [{
                                x: 'Jan',
                                y: [1100, 1900]
                            },
                            {
                                x: 'Feb',
                                y: [1200, 1800]
                            },
                            {
                                x: 'Mar',
                                y: [900, 2900]
                            },
                            {
                                x: 'Apr',
                                y: [1400, 2700]
                            },
                            {
                                x: 'May',
                                y: [2600, 3900]
                            },
                            {
                                x: 'Jun',
                                y: [500, 1700]
                            },
                            {
                                x: 'Jul',
                                y: [1900, 2300]
                            },
                            {
                                x: 'Aug',
                                y: [1000, 1500]
                            }
                        ]
                    },

                    {
                        type: 'rangeArea',
                        name: 'Team A Range',
                        data: [{
                                x: 'Jan',
                                y: [3100, 3400]
                            },
                            {
                                x: 'Feb',
                                y: [4200, 5200]
                            },
                            {
                                x: 'Mar',
                                y: [3900, 4900]
                            },
                            {
                                x: 'Apr',
                                y: [3400, 3900]
                            },
                            {
                                x: 'May',
                                y: [5100, 5900]
                            },
                            {
                                x: 'Jun',
                                y: [5400, 6700]
                            },
                            {
                                x: 'Jul',
                                y: [4300, 4600]
                            },
                            {
                                x: 'Aug',
                                y: [2100, 2900]
                            }
                        ]
                    },

                    {
                        type: 'line',
                        name: 'Team B Median',
                        data: [{
                                x: 'Jan',
                                y: 1500
                            },
                            {
                                x: 'Feb',
                                y: 1700
                            },
                            {
                                x: 'Mar',
                                y: 1900
                            },
                            {
                                x: 'Apr',
                                y: 2200
                            },
                            {
                                x: 'May',
                                y: 3000
                            },
                            {
                                x: 'Jun',
                                y: 1000
                            },
                            {
                                x: 'Jul',
                                y: 2100
                            },
                            {
                                x: 'Aug',
                                y: 1200
                            },
                            {
                                x: 'Sep',
                                y: 1800
                            },
                            {
                                x: 'Oct',
                                y: 2000
                            }
                        ]
                    },
                    {
                        type: 'line',
                        name: 'Team A Median',
                        data: [{
                                x: 'Jan',
                                y: 3300
                            },
                            {
                                x: 'Feb',
                                y: 4900
                            },
                            {
                                x: 'Mar',
                                y: 4300
                            },
                            {
                                x: 'Apr',
                                y: 3700
                            },
                            {
                                x: 'May',
                                y: 5500
                            },
                            {
                                x: 'Jun',
                                y: 5900
                            },
                            {
                                x: 'Jul',
                                y: 4500
                            },
                            {
                                x: 'Aug',
                                y: 2400
                            },
                            {
                                x: 'Sep',
                                y: 2100
                            },
                            {
                                x: 'Oct',
                                y: 1500
                            }
                        ]
                    }
                ],
                chart: {
                    height: 350,
                    type: 'rangeArea',
                    animations: {
                        speed: 500
                    }
                },
                colors: ['#845adf', '#23b7e5', '#845adf', '#23b7e5'],
                dataLabels: {
                    enabled: false
                },
                fill: {
                    opacity: [0.24, 0.24, 1, 1]
                },
                forecastDataPoints: {
                    count: 2
                },
                stroke: {
                    curve: 'straight',
                    width: [0, 0, 2, 2]
                },
                legend: {
                    show: true,
                    customLegendItems: ['Team B', 'Team A'],
                    inverseOrder: true
                },
                title: {
                    text: 'Range Area with Forecast Line (Combo)'
                },
                markers: {
                    hover: {
                        sizeOffset: 5
                    }
                }
            };
            var chart = new ApexCharts(document.querySelector("#rangearea-combo"), options);
            chart.render();









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
