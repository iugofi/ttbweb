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
                    <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">News</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                      <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                        Tables
                        <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                      </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                        News
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
                                News List
                            </div>
                        </div>
                        <div class="box-body">
                            <!-- Container for Grid.js -->
                            <div id="loading" style="display: none;">Loading...</div>
                            <div id="grid-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        
        
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    document.getElementById('loading').style.display = 'block';
                    fetch('/newslistshow')
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('loading').style.display = 'none';
                            data.forEach(item => {
                                item.title = truncateWords(item.title, 3);
                                item.description = truncateWords(item.description, 3);
                                item.meta_title = truncateWords(item.meta_title, 3);
                                item.canonical_url = truncateWords(item.canonical_url, 3);
                         


                            });
                            new gridjs.Grid({
                                pagination: true,
                                search: true,
                                sort: true,
                                columns: [
                                    { name: "title", width: "150px" },
                                    { name: "slug", width: "150px" },
                                    { name: "news_category_id", width: "150px" },
                                    { name: "description", width: "150px" },
                                    { name: "meta_title", width: "150px" },
                                    { name: "canonical_url", width: "150px" }
                                ],
                                data: data.map(item => [item.title, item.slug, item.news_category_id, item.description, item.meta_title, item.canonical_url])
                            }).render(document.getElementById("grid-container"));
                        })
                        .catch(error => {
                            console.error('Error fetching news data:', error);
                        });
                });
                function truncateWords(str, numWords) {
                    const words = str.split(' ');
                    if (words.length <= numWords) {
                        return str;
                    }
                    return words.slice(0, numWords).join(' ') + '...';
                }
            </script>
            
         


  




    </div>
</div>





     <!-- Grid JS -->
     <script src="{{asset('assets/libs/gridjs/gridjs.umd.js')}}"></script>
        
     <!-- Internal Grid JS -->
     <script src="{{asset('assets/js/grid.js')}}"></script>


@endsection