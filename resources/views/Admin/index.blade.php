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
                                    <div class="box-title">Payment Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-pictorial" class="echart-charts"></div>
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


            /* pictorial chart */
            var dom = document.getElementById('echart-pictorial');
            var myChart = echarts.init(dom, null, {
                renderer: 'canvas',
                useDirtyRect: false
            });
            var app = {};
            var option;
            const pathSymbols = {
                reindeer: 'path://M-22.788,24.521c2.08-0.986,3.611-3.905,4.984-5.892 c-2.686,2.782-5.047,5.884-9.102,7.312c-0.992,0.005-0.25-2.016,0.34-2.362l1.852-0.41c0.564-0.218,0.785-0.842,0.902-1.347 c2.133-0.727,4.91-4.129,6.031-6.194c1.748-0.7,4.443-0.679,5.734-2.293c1.176-1.468,0.393-3.992,1.215-6.557 c0.24-0.754,0.574-1.581,1.008-2.293c-0.611,0.011-1.348-0.061-1.959-0.608c-1.391-1.245-0.785-2.086-1.297-3.313 c1.684,0.744,2.5,2.584,4.426,2.586C-8.46,3.012-8.255,2.901-8.04,2.824c6.031-1.952,15.182-0.165,19.498-3.937 c1.15-3.933-1.24-9.846-1.229-9.938c0.008-0.062-1.314-0.004-1.803-0.258c-1.119-0.771-6.531-3.75-0.17-3.33 c0.314-0.045,0.943,0.259,1.439,0.435c-0.289-1.694-0.92-0.144-3.311-1.946c0,0-1.1-0.855-1.764-1.98 c-0.836-1.09-2.01-2.825-2.992-4.031c-1.523-2.476,1.367,0.709,1.816,1.108c1.768,1.704,1.844,3.281,3.232,3.983 c0.195,0.203,1.453,0.164,0.926-0.468c-0.525-0.632-1.367-1.278-1.775-2.341c-0.293-0.703-1.311-2.326-1.566-2.711 c-0.256-0.384-0.959-1.718-1.67-2.351c-1.047-1.187-0.268-0.902,0.521-0.07c0.789,0.834,1.537,1.821,1.672,2.023 c0.135,0.203,1.584,2.521,1.725,2.387c0.102-0.259-0.035-0.428-0.158-0.852c-0.125-0.423-0.912-2.032-0.961-2.083 c-0.357-0.852-0.566-1.908-0.598-3.333c0.4-2.375,0.648-2.486,0.549-0.705c0.014,1.143,0.031,2.215,0.602,3.247 c0.807,1.496,1.764,4.064,1.836,4.474c0.561,3.176,2.904,1.749,2.281-0.126c-0.068-0.446-0.109-2.014-0.287-2.862 c-0.18-0.849-0.219-1.688-0.113-3.056c0.066-1.389,0.232-2.055,0.277-2.299c0.285-1.023,0.4-1.088,0.408,0.135 c-0.059,0.399-0.131,1.687-0.125,2.655c0.064,0.642-0.043,1.768,0.172,2.486c0.654,1.928-0.027,3.496,1,3.514 c1.805-0.424,2.428-1.218,2.428-2.346c-0.086-0.704-0.121-0.843-0.031-1.193c0.221-0.568,0.359-0.67,0.312-0.076 c-0.055,0.287,0.031,0.533,0.082,0.794c0.264,1.197,0.912,0.114,1.283-0.782c0.15-0.238,0.539-2.154,0.545-2.522 c-0.023-0.617,0.285-0.645,0.309,0.01c0.064,0.422-0.248,2.646-0.205,2.334c-0.338,1.24-1.105,3.402-3.379,4.712 c-0.389,0.12-1.186,1.286-3.328,2.178c0,0,1.729,0.321,3.156,0.246c1.102-0.19,3.707-0.027,4.654,0.269 c1.752,0.494,1.531-0.053,4.084,0.164c2.26-0.4,2.154,2.391-1.496,3.68c-2.549,1.405-3.107,1.475-2.293,2.984 c3.484,7.906,2.865,13.183,2.193,16.466c2.41,0.271,5.732-0.62,7.301,0.725c0.506,0.333,0.648,1.866-0.457,2.86 c-4.105,2.745-9.283,7.022-13.904,7.662c-0.977-0.194,0.156-2.025,0.803-2.247l1.898-0.03c0.596-0.101,0.936-0.669,1.152-1.139 c3.16-0.404,5.045-3.775,8.246-4.818c-4.035-0.718-9.588,3.981-12.162,1.051c-5.043,1.423-11.449,1.84-15.895,1.111 c-3.105,2.687-7.934,4.021-12.115,5.866c-3.271,3.511-5.188,8.086-9.967,10.414c-0.986,0.119-0.48-1.974,0.066-2.385l1.795-0.618 C-22.995,25.682-22.849,25.035-22.788,24.521z',
                plane: 'path://M1.112,32.559l2.998,1.205l-2.882,2.268l-2.215-0.012L1.112,32.559z M37.803,23.96 c0.158-0.838,0.5-1.509,0.961-1.904c-0.096-0.037-0.205-0.071-0.344-0.071c-0.777-0.005-2.068-0.009-3.047-0.009 c-0.633,0-1.217,0.066-1.754,0.18l2.199,1.804H37.803z M39.738,23.036c-0.111,0-0.377,0.325-0.537,0.924h1.076 C40.115,23.361,39.854,23.036,39.738,23.036z M39.934,39.867c-0.166,0-0.674,0.705-0.674,1.986s0.506,1.986,0.674,1.986 s0.672-0.705,0.672-1.986S40.102,39.867,39.934,39.867z M38.963,38.889c-0.098-0.038-0.209-0.07-0.348-0.073 c-0.082,0-0.174,0-0.268-0.001l-7.127,4.671c0.879,0.821,2.42,1.417,4.348,1.417c0.979,0,2.27-0.006,3.047-0.01 c0.139,0,0.25-0.034,0.348-0.072c-0.646-0.555-1.07-1.643-1.07-2.967C37.891,40.529,38.316,39.441,38.963,38.889z M32.713,23.96 l-12.37-10.116l-4.693-0.004c0,0,4,8.222,4.827,10.121H32.713z M59.311,32.374c-0.248,2.104-5.305,3.172-8.018,3.172H39.629 l-25.325,16.61L9.607,52.16c0,0,6.687-8.479,7.95-10.207c1.17-1.6,3.019-3.699,3.027-6.407h-2.138 c-5.839,0-13.816-3.789-18.472-5.583c-2.818-1.085-2.396-4.04-0.031-4.04h0.039l-3.299-11.371h3.617c0,0,4.352,5.696,5.846,7.5 c2,2.416,4.503,3.678,8.228,3.87h30.727c2.17,0,4.311,0.417,6.252,1.046c3.49,1.175,5.863,2.7,7.199,4.027 C59.145,31.584,59.352,32.025,59.311,32.374z M22.069,30.408c0-0.815-0.661-1.475-1.469-1.475c-0.812,0-1.471,0.66-1.471,1.475 s0.658,1.475,1.471,1.475C21.408,31.883,22.069,31.224,22.069,30.408z M27.06,30.408c0-0.815-0.656-1.478-1.466-1.478 c-0.812,0-1.471,0.662-1.471,1.478s0.658,1.477,1.471,1.477C26.404,31.885,27.06,31.224,27.06,30.408z M32.055,30.408 c0-0.815-0.66-1.475-1.469-1.475c-0.808,0-1.466,0.66-1.466,1.475s0.658,1.475,1.466,1.475 C31.398,31.883,32.055,31.224,32.055,30.408z M37.049,30.408c0-0.815-0.658-1.478-1.467-1.478c-0.812,0-1.469,0.662-1.469,1.478 s0.656,1.477,1.469,1.477C36.389,31.885,37.049,31.224,37.049,30.408z M42.039,30.408c0-0.815-0.656-1.478-1.465-1.478 c-0.811,0-1.469,0.662-1.469,1.478s0.658,1.477,1.469,1.477C41.383,31.885,42.039,31.224,42.039,30.408z M55.479,30.565 c-0.701-0.436-1.568-0.896-2.627-1.347c-0.613,0.289-1.551,0.476-2.73,0.476c-1.527,0-1.639,2.263,0.164,2.316 C52.389,32.074,54.627,31.373,55.479,30.565z',
                train: 'path://M67.335,33.596L67.335,33.596c-0.002-1.39-1.153-3.183-3.328-4.218h-9.096v-2.07h5.371 c-4.939-2.07-11.199-4.141-14.89-4.141H19.72v12.421v5.176h38.373c4.033,0,8.457-1.035,9.142-5.176h-0.027 c0.076-0.367,0.129-0.751,0.129-1.165L67.335,33.596L67.335,33.596z M27.999,30.413h-3.105v-4.141h3.105V30.413z M35.245,30.413 h-3.104v-4.141h3.104V30.413z M42.491,30.413h-3.104v-4.141h3.104V30.413z M49.736,30.413h-3.104v-4.141h3.104V30.413z  M14.544,40.764c1.143,0,2.07-0.927,2.07-2.07V35.59V25.237c0-1.145-0.928-2.07-2.07-2.07H-9.265c-1.143,0-2.068,0.926-2.068,2.07 v10.351v3.105c0,1.144,0.926,2.07,2.068,2.07H14.544L14.544,40.764z M8.333,26.272h3.105v4.141H8.333V26.272z M1.087,26.272h3.105 v4.141H1.087V26.272z M-6.159,26.272h3.105v4.141h-3.105V26.272z M-9.265,41.798h69.352v1.035H-9.265V41.798z',
                ship: 'path://M16.678,17.086h9.854l-2.703,5.912c5.596,2.428,11.155,5.575,16.711,8.607c3.387,1.847,6.967,3.75,10.541,5.375 v-6.16l-4.197-2.763v-5.318L33.064,12.197h-11.48L20.43,15.24h-4.533l-1.266,3.286l0.781,0.345L16.678,17.086z M49.6,31.84 l0.047,1.273L27.438,20.998l0.799-1.734L49.6,31.84z M33.031,15.1l12.889,8.82l0.027,0.769L32.551,16.1L33.031,15.1z M22.377,14.045 h9.846l-1.539,3.365l-2.287-1.498h1.371l0.721-1.352h-2.023l-0.553,1.037l-0.541-0.357h-0.34l0.359-0.684h-2.025l-0.361,0.684 h-3.473L22.377,14.045z M23.695,20.678l-0.004,0.004h0.004V20.678z M24.828,18.199h-2.031l-0.719,1.358h2.029L24.828,18.199z  M40.385,34.227c-12.85-7.009-25.729-14.667-38.971-12.527c1.26,8.809,9.08,16.201,8.213,24.328 c-0.553,4.062-3.111,0.828-3.303,7.137c15.799,0,32.379,0,48.166,0l0.066-4.195l1.477-7.23 C50.842,39.812,45.393,36.961,40.385,34.227z M13.99,35.954c-1.213,0-2.195-1.353-2.195-3.035c0-1.665,0.98-3.017,2.195-3.017 c1.219,0,2.195,1.352,2.195,3.017C16.186,34.604,15.213,35.954,13.99,35.954z M23.691,20.682h-2.02l-0.588,1.351h2.023 L23.691,20.682z M19.697,18.199l-0.721,1.358h2.025l0.727-1.358H19.697z',
                car: 'path://M49.592,40.883c-0.053,0.354-0.139,0.697-0.268,0.963c-0.232,0.475-0.455,0.519-1.334,0.475 c-1.135-0.053-2.764,0-4.484,0.068c0,0.476,0.018,0.697,0.018,0.697c0.111,1.299,0.697,1.342,0.931,1.342h3.7 c0.326,0,0.628,0,0.861-0.154c0.301-0.196,0.43-0.772,0.543-1.78c0.017-0.146,0.025-0.336,0.033-0.56v-0.01 c0-0.068,0.008-0.154,0.008-0.25V41.58l0,0C49.6,41.348,49.6,41.09,49.592,40.883L49.592,40.883z M6.057,40.883 c0.053,0.354,0.137,0.697,0.268,0.963c0.23,0.475,0.455,0.519,1.334,0.475c1.137-0.053,2.762,0,4.484,0.068 c0,0.476-0.018,0.697-0.018,0.697c-0.111,1.299-0.697,1.342-0.93,1.342h-3.7c-0.328,0-0.602,0-0.861-0.154 c-0.309-0.18-0.43-0.772-0.541-1.78c-0.018-0.146-0.027-0.336-0.035-0.56v-0.01c0-0.068-0.008-0.154-0.008-0.25V41.58l0,0 C6.057,41.348,6.057,41.09,6.057,40.883L6.057,40.883z M49.867,32.766c0-2.642-0.344-5.224-0.482-5.507 c-0.104-0.207-0.766-0.749-2.271-1.773c-1.522-1.042-1.487-0.887-1.766-1.566c0.25-0.078,0.492-0.224,0.639-0.241 c0.326-0.034,0.345,0.274,1.023,0.274c0.68,0,2.152-0.18,2.453-0.48c0.301-0.303,0.396-0.405,0.396-0.672 c0-0.268-0.156-0.818-0.447-1.146c-0.293-0.327-1.541-0.49-2.273-0.585c-0.729-0.095-0.834,0-1.022,0.121 c-0.304,0.189-0.32,1.919-0.32,1.919l-0.713,0.018c-0.465-1.146-1.11-3.452-2.117-5.269c-1.103-1.979-2.256-2.599-2.737-2.754 c-0.474-0.146-0.904-0.249-4.131-0.576c-3.298-0.344-5.922-0.388-8.262-0.388c-2.342,0-4.967,0.052-8.264,0.388 c-3.229,0.336-3.66,0.43-4.133,0.576s-1.633,0.775-2.736,2.754c-1.006,1.816-1.652,4.123-2.117,5.269L9.87,23.109 c0,0-0.008-1.729-0.318-1.919c-0.189-0.121-0.293-0.225-1.023-0.121c-0.732,0.104-1.98,0.258-2.273,0.585 c-0.293,0.327-0.447,0.878-0.447,1.146c0,0.267,0.094,0.379,0.396,0.672c0.301,0.301,1.773,0.48,2.453,0.48 c0.68,0,0.697-0.309,1.023-0.274c0.146,0.018,0.396,0.163,0.637,0.241c-0.283,0.68-0.24,0.524-1.764,1.566 c-1.506,1.033-2.178,1.566-2.271,1.773c-0.139,0.283-0.482,2.865-0.482,5.508s0.189,5.02,0.189,5.86c0,0.354,0,0.976,0.076,1.565 c0.053,0.354,0.129,0.697,0.268,0.966c0.232,0.473,0.447,0.516,1.334,0.473c1.137-0.051,2.779,0,4.477,0.07 c1.135,0.043,2.297,0.086,3.33,0.11c2.582,0.051,1.826-0.379,2.928-0.36c1.102,0.016,5.447,0.196,9.424,0.196 c3.976,0,8.332-0.182,9.423-0.196c1.102-0.019,0.346,0.411,2.926,0.36c1.033-0.018,2.195-0.067,3.332-0.11 c1.695-0.062,3.348-0.121,4.477-0.07c0.886,0.043,1.103,0,1.332-0.473c0.132-0.269,0.218-0.611,0.269-0.966 c0.086-0.592,0.078-1.213,0.078-1.565C49.678,37.793,49.867,35.408,49.867,32.766L49.867,32.766z M13.219,19.735 c0.412-0.964,1.652-2.9,2.256-3.244c0.145-0.087,1.426-0.491,4.637-0.706c2.953-0.198,6.217-0.276,7.73-0.276 c1.513,0,4.777,0.078,7.729,0.276c3.201,0.215,4.502,0.611,4.639,0.706c0.775,0.533,1.842,2.28,2.256,3.244 c0.412,0.965,0.965,2.858,0.861,3.116c-0.104,0.258,0.104,0.388-1.291,0.275c-1.387-0.103-10.088-0.216-14.185-0.216 c-4.088,0-12.789,0.113-14.184,0.216c-1.395,0.104-1.188-0.018-1.291-0.275C12.254,22.593,12.805,20.708,13.219,19.735 L13.219,19.735z M16.385,30.511c-0.619,0.155-0.988,0.491-1.764,0.482c-0.775,0-2.867-0.353-3.314-0.371 c-0.447-0.017-0.842,0.302-1.076,0.362c-0.23,0.06-0.688-0.104-1.377-0.318c-0.688-0.216-1.092-0.155-1.316-1.094 c-0.232-0.93,0-2.264,0-2.264c1.488-0.068,2.928,0.069,5.621,0.826c2.693,0.758,4.191,2.213,4.191,2.213 S17.004,30.357,16.385,30.511L16.385,30.511z M36.629,37.293c-1.23,0.164-6.386,0.207-8.794,0.207c-2.412,0-7.566-0.051-8.799-0.207 c-1.256-0.164-2.891-1.67-1.764-2.865c1.523-1.627,1.24-1.576,4.701-2.023C24.967,32.018,27.239,32,27.834,32 c0.584,0,2.865,0.025,5.859,0.404c3.461,0.447,3.178,0.396,4.699,2.022C39.521,35.623,37.887,37.129,36.629,37.293L36.629,37.293z  M48.129,29.582c-0.232,0.93-0.629,0.878-1.318,1.093c-0.688,0.216-1.145,0.371-1.377,0.319c-0.231-0.053-0.627-0.371-1.074-0.361 c-0.448,0.018-2.539,0.37-3.313,0.37c-0.772,0-1.146-0.328-1.764-0.481c-0.621-0.154-0.966-0.154-0.966-0.154 s1.49-1.464,4.191-2.213c2.693-0.758,4.131-0.895,5.621-0.826C48.129,27.309,48.361,28.643,48.129,29.582L48.129,29.582z'
            };
            const labelSetting = {
                show: true,
                position: 'right',
                offset: [10, 0],
                fontSize: 16
            };

            function makeOption(type, symbol) {
                return {
                    legend: {
                        data: ['2015', '2016'],
                        textStyle: {
                            color: '#777'
                        }
                    },
                    tooltip: {
                        trigger: 'axis',
                        axisPointer: {
                            type: 'shadow'
                        }
                    },
                    grid: {
                        left: '15%',
                        right: '0%',
                        bottom: '0%',
                        top: '10%'
                    },
                    yAxis: {
                        data: ['reindeer', 'ship', 'plane', 'train', 'car'],
                        inverse: true,
                        axisLine: {
                            show: false
                        },
                        axisTick: {
                            show: false
                        },
                        axisLabel: {
                            margin: 30,
                            fontSize: 14
                        },
                        axisPointer: {
                            label: {
                                show: true,
                                margin: 30
                            }
                        }
                    },
                    xAxis: {
                        splitLine: {
                            show: false
                        },
                        axisLabel: {
                            show: false
                        },
                        axisTick: {
                            show: false
                        },
                        axisLine: {
                            show: false
                        }
                    },
                    animationDurationUpdate: 500,
                    series: [{
                            name: '2015',
                            id: 'bar1',
                            type: type,
                            label: labelSetting,
                            symbolRepeat: true,
                            symbolSize: ['80%', '60%'],
                            barCategoryGap: '40%',
                            universalTransition: {
                                enabled: true,
                                delay: function(idx, total) {
                                    return (idx / total) * 1000;
                                }
                            },
                            data: [{
                                    value: 157,
                                    symbol: symbol || pathSymbols.reindeer
                                },
                                {
                                    value: 21,
                                    symbol: symbol || pathSymbols.ship
                                },
                                {
                                    value: 66,
                                    symbol: symbol || pathSymbols.plane
                                },
                                {
                                    value: 78,
                                    symbol: symbol || pathSymbols.train
                                },
                                {
                                    value: 123,
                                    symbol: symbol || pathSymbols.car
                                }
                            ]
                        },
                        {
                            name: '2016',
                            id: 'bar2',
                            type: type,
                            barGap: '10%',
                            label: labelSetting,
                            symbolRepeat: true,
                            symbolSize: ['80%', '60%'],
                            universalTransition: {
                                enabled: true,
                                delay: function(idx, total) {
                                    return (idx / total) * 1000;
                                }
                            },
                            data: [{
                                    value: 184,
                                    symbol: symbol || pathSymbols.reindeer
                                },
                                {
                                    value: 29,
                                    symbol: symbol || pathSymbols.ship
                                },
                                {
                                    value: 73,
                                    symbol: symbol || pathSymbols.plane
                                },
                                {
                                    value: 91,
                                    symbol: symbol || pathSymbols.train
                                },
                                {
                                    value: 95,
                                    symbol: symbol || pathSymbols.car
                                }
                            ]
                        }
                    ],
                    color: ["#845adf", "#23b7e5"]
                };
            }
            const options = [
                makeOption('pictorialBar'),
                makeOption('bar'),
                makeOption('pictorialBar', 'diamond')
            ];
            var optionIndex = 0;
            option = options[optionIndex];
            setInterval(function() {
                optionIndex = (optionIndex + 1) % options.length;
                myChart.setOption(options[optionIndex]);
            }, 2500);

            if (option && typeof option === 'object') {
                myChart.setOption(option);
            }
            window.addEventListener('resize', myChart.resize);







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
